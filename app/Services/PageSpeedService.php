<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class PageSpeedService
{
    public function pageAnalyze(string $url): array
    {
        try {
            $response = Http::timeout(25)->get(
                'https://www.googleapis.com/pagespeedonline/v5/runPagespeed',
                [
                    'key' => env('GOOGLE_PAGESPEED_API_KEY'),
                    'url' => $url,
                    'category' => ['seo', 'performance'],
                ]
            );
        } catch (\Throwable $e) {
            return [
                'performance' => 0,
                'seo' => 0,
                'error' => 'Unable to load Google score right now.',
            ];
        }

        if (!$response->successful()) {
            return [
                'performance' => 0,
                'seo' => 0,
                'error' => 'Google score request failed.',
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
