<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class SeoScoreService
{
    public function calculate(array $analysis): int
    {
        $score = 0;

        // Basic SEO elements
        $score += $analysis['title'] ? 20 : 0;
        $score += $analysis['meta_description'] ? 20 : 0;
        $score += $analysis['keyword_in_title'] ? 10 : 0;
        $score += ($analysis['keyword_density'] >= 1 && $analysis['keyword_density'] <= 3) ? 20 : 0;
        $score += ($analysis['internal_links'] + $analysis['external_links']) > 0 ? 10 : 0;
        $score += !$analysis['image_alt_missing'] ? 10 : 0;
        $score += $analysis['h1_count'] > 0 ? 10 : 0;

        return min($score, 100);
    }
}