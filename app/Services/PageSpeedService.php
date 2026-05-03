<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class PageSpeedService
{
    public function analyze(string $url): array
    {
        $response = Http::timeout(1500)->get(
            'https://www.googleapis.com/pagespeedonline/v5/runPagespeed',
            [
                 'key'      => env('GOOGLE_PAGESPEED_API_KEY'),
                'url' => $url,
                'category' => ['seo', 'performance'],
            ]
        );

        if (!$response->successful()) {
            return [
                'performance' => 0,
                'seo' => 0,
            ];
        }

        $data = $response->json();

        return [
            'performance' => $this->score($data, 'performance'),
            'seo' => $this->score($data, 'seo'),
        ];
    }

    private function score(array $data, string $key): int
    {
        return isset($data['lighthouseResult']['categories'][$key]['score'])
            ? (int) ($data['lighthouseResult']['categories'][$key]['score'] * 100)
            : 0;
    }
}