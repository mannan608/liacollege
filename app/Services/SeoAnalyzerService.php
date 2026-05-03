<?php

namespace App\Services;

use DOMDocument;
use DOMXPath;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class SeoAnalyzerService
{
    private string $url;
    private string $html;
    private DOMDocument $dom;
    private DOMXPath $xpath;
    private string $host;

    public function analyze(string $url, string $keyword = ''): array
    {
        $this->url  = $url;
        $this->host = parse_url($url, PHP_URL_HOST);

        $this->fetchHtml();
        $this->buildDom();

        $analysis = [
            'title'              => $this->getTitle(),
            'meta_description'   => $this->getMetaDescription(),
            'h1_count'           => $this->countH1(),
            'h2_count'           => $this->countTag('h2'),
            'internal_links'     => $this->countInternalLinks(),
            'external_links'     => $this->countExternalLinks(),
            'image_alt_missing'  => $this->countMissingAlts(),
            'has_canonical'      => $this->hasCanonical(),
            'has_robots_meta'    => $this->hasRobotsMeta(),
            'has_og_tags'        => $this->hasOgTags(),
            'word_count'         => $this->wordCount(),
        ];

        // Keyword-specific
        if ($keyword) {
            $analysis['keyword_in_title']       = $this->keywordInTitle($keyword);
            $analysis['keyword_in_description'] = $this->keywordInDescription($keyword);
            $analysis['keyword_density']        = $this->keywordDensity($keyword);
        }

        return [
            'url'      => $url,
            'score'    => $this->score($analysis, $keyword),
            'analysis' => $analysis,
        ];
    }

    // ── Fetch ───────────────────────────────────────────────────────────────

    private function fetchHtml(): void
    {
        $response = Http::timeout(8)
            ->withHeaders([
                'User-Agent'      => 'Mozilla/5.0 (compatible; SEOBot/1.0)',
                'Accept-Language' => 'en-US,en;q=0.9',
            ])
            ->get($this->url);

        $this->html = $response->successful() ? $response->body() : '';
    }

    // ── DOM ─────────────────────────────────────────────────────────────────

    private function buildDom(): void
    {
        $this->dom = new DOMDocument();
        libxml_use_internal_errors(true);
        $this->dom->loadHTML(mb_convert_encoding($this->html, 'HTML-ENTITIES', 'UTF-8'));
        libxml_clear_errors();
        $this->xpath = new DOMXPath($this->dom);
    }

    // ── Checks ──────────────────────────────────────────────────────────────

    private function getTitle(): string
    {
        $nodes = $this->xpath->query('//title');
        return $nodes->length ? trim($nodes->item(0)->textContent) : '';
    }

    private function getMetaDescription(): string
    {
        $nodes = $this->xpath->query('//meta[@name="description"]/@content');
        return $nodes->length ? trim($nodes->item(0)->textContent) : '';
    }

    private function countH1(): int
    {
        return $this->xpath->query('//h1')->length;
    }

    private function countTag(string $tag): int
    {
        return $this->xpath->query("//{$tag}")->length;
    }

    private function countInternalLinks(): int
    {
        $links = $this->xpath->query('//a[@href]');
        $count = 0;
        foreach ($links as $link) {
            $href = $link->getAttribute('href');
            if (
                Str::startsWith($href, '/') ||
                Str::contains($href, $this->host)
            ) {
                $count++;
            }
        }
        return $count;
    }

    private function countExternalLinks(): int
    {
        $links = $this->xpath->query('//a[@href]');
        $count = 0;
        foreach ($links as $link) {
            $href = $link->getAttribute('href');
            if (
                Str::startsWith($href, 'http') &&
                !Str::contains($href, $this->host)
            ) {
                $count++;
            }
        }
        return $count;
    }

    private function countMissingAlts(): int
    {
        // Images with no alt OR empty alt
        return $this->xpath->query('//img[not(@alt) or @alt=""]')->length;
    }

    private function hasCanonical(): bool
    {
        return (bool) $this->xpath->query('//link[@rel="canonical"]')->length;
    }

    private function hasRobotsMeta(): bool
    {
        return (bool) $this->xpath->query('//meta[@name="robots"]')->length;
    }

    private function hasOgTags(): bool
    {
        return (bool) $this->xpath->query('//meta[starts-with(@property,"og:")]')->length;
    }

    private function wordCount(): int
    {
        $body  = $this->xpath->query('//body');
        $text  = $body->length ? $body->item(0)->textContent : '';
        $clean = preg_replace('/\s+/', ' ', strip_tags($text));
        return str_word_count(trim($clean));
    }

    // ── Keyword ─────────────────────────────────────────────────────────────

    private function keywordInTitle(string $kw): bool
    {
        return Str::contains(Str::lower($this->getTitle()), Str::lower($kw));
    }

    private function keywordInDescription(string $kw): bool
    {
        return Str::contains(Str::lower($this->getMetaDescription()), Str::lower($kw));
    }

    private function keywordDensity(string $kw): float
    {
        $body      = $this->xpath->query('//body');
        $text      = $body->length ? Str::lower($body->item(0)->textContent) : '';
        $words     = str_word_count($text);
        $kwWords   = str_word_count(Str::lower($kw));
        $occurrences = substr_count($text, Str::lower($kw));

        if ($words === 0) return 0.0;

        return round(($occurrences * $kwWords / $words) * 100, 2);
    }

    // ── Scoring ─────────────────────────────────────────────────────────────

    private function score(array $a, string $keyword): int
    {
        $score = 0;

        if ($a['title'])                                $score += 15;
        if (Str::length($a['title']) >= 30 &&
            Str::length($a['title']) <= 60)             $score += 5;
        if ($a['meta_description'])                     $score += 15;
        if (Str::length($a['meta_description']) >= 120 &&
            Str::length($a['meta_description']) <= 160) $score += 5;
        if ($a['h1_count'] === 1)                       $score += 10;
        if ($a['internal_links'] >= 3)                  $score += 5;
        if ($a['image_alt_missing'] === 0)              $score += 10;
        if ($a['has_canonical'])                        $score += 5;
        if ($a['has_og_tags'])                          $score += 5;
        if ($a['word_count'] >= 300)                    $score += 5;

        // Keyword checks
        if ($keyword) {
            if ($a['keyword_in_title'] ?? false)        $score += 10;
            if ($a['keyword_in_description'] ?? false)  $score += 5;
            $kd = $a['keyword_density'] ?? 0;
            if ($kd >= 0.5 && $kd <= 2.5)              $score += 5;
        } else {
            // redistribute if no keyword given
            $score += 20;
        }

        return min($score, 100);
    }
}