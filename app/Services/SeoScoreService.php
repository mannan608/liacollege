<?php

namespace App\Services;

class SeoScoreService
{
    public function calculate(array $a): int
    {
        $score = 0;

        // 🟢 Title
        if ($a['title']) $score += 10;
        if ($a['title_length'] >= 50 && $a['title_length'] <= 60) $score += 10;

        // 🟢 Meta
        if ($a['meta_description']) $score += 10;
        if ($a['meta_length'] >= 120 && $a['meta_length'] <= 160) $score += 10;

        // 🟢 Keyword
        if ($a['keyword_in_title']) $score += 5;
        if ($a['keyword_in_meta']) $score += 5;
        if ($a['keyword_density'] >= 1 && $a['keyword_density'] <= 3) $score += 10;

        // 🟢 Headings
        if ($a['h1_count'] === 1) $score += 10;
        if ($a['h2_count'] >= 1) $score += 5;

        // 🟢 Links
        if ($a['internal_links'] >= 3) $score += 5;
        if ($a['external_links'] >= 1) $score += 5;

        // 🟢 Images
        if ($a['image_count'] > 0) $score += 5;
        if ($a['image_alt_missing'] === 0) $score += 5;

        // 🟢 Technical SEO
        if ($a['has_canonical']) $score += 5;
        if ($a['has_og']) $score += 5;
        if ($a['has_viewport']) $score += 5;

        // 🟢 Content
        if ($a['word_count'] >= 300) $score += 10;

        return min($score, 100);
    }

    public function recommendations(array $a): array
    {
        $tips = [];

        if (!$a['meta_description']) {
            $tips[] = "Add a meta description (120–160 characters)";
        }

        if ($a['image_alt_missing'] > 0) {
            $tips[] = "Add alt text to all images";
        }

        if ($a['word_count'] < 300) {
            $tips[] = "Increase content length (min 300 words)";
        }

        if (!$a['has_canonical']) {
            $tips[] = "Add canonical tag";
        }

        if (!$a['has_og']) {
            $tips[] = "Add Open Graph tags (og:title, og:image)";
        }

        return $tips;
    }
}