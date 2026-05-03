<?php

namespace App\Services;

class SeoAnalyzer
{
     public function analyze(string $html, ?string $keyword = null): array
    {
        $dom = new \DOMDocument();
        @$dom->loadHTML($html);

        $text = strip_tags($html);

        return [
            'title' => $this->hasTitle($dom),
            'meta_description' => $this->hasMeta($dom),
            'keyword_in_title' => $keyword && str_contains(strtolower($dom->textContent), strtolower($keyword)),
            'keyword_density' => $this->keywordDensity($text, $keyword),
            'internal_links' => $this->countLinks($dom, true),
            'external_links' => $this->countLinks($dom, false),
            'image_alt_missing' => $this->missingAlt($dom),
            'h1_count' => $dom->getElementsByTagName('h1')->length,
        ];
    }

    private function keywordDensity($text, $keyword): float
    {
        if (!$keyword) return 0;

        $words = str_word_count(strtolower($text), 1);
        $count = substr_count(strtolower($text), strtolower($keyword));

        return count($words) ? round(($count / count($words)) * 100, 2) : 0;
    }
}