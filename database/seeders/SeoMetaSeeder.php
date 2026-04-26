<?php

namespace Database\Seeders;

use App\Models\SeoMeta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeoMetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seoData = [
            [
                'path' => '/',
                'meta_title' => 'Home - LIA Leadership Institute Australia',
                'meta_description' => 'Welcome to Leadership Institute Australia. Discover our leadership programs and courses designed to develop future leaders.',
                'meta_keywords' => 'leadership, institute, australia, courses, training, development',
                'canonical_url' => url('/'),
            ],
            [
                'path' => 'about',
                'meta_title' => 'About Us - LIA Leadership Institute Australia',
                'meta_description' => 'Learn about Leadership Institute Australia\'s mission, vision, and commitment to developing exceptional leaders.',
                'meta_keywords' => 'about, leadership institute, australia, mission, vision, team',
                'canonical_url' => url('/about'),
            ],
            [
                'path' => 'contact',
                'meta_title' => 'Contact Us - LIA Leadership Institute Australia',
                'meta_description' => 'Get in touch with Leadership Institute Australia. Find our contact information and reach out for inquiries.',
                'meta_keywords' => 'contact, leadership institute, australia, phone, email, address',
                'canonical_url' => url('/contact'),
            ],
            [
                'path' => 'services',
                'meta_title' => 'Our Services - LIA Leadership Institute Australia',
                'meta_description' => 'Explore our comprehensive leadership development services and programs at Leadership Institute Australia.',
                'meta_keywords' => 'services, leadership, development, programs, training, australia',
                'canonical_url' => url('/services'),
            ],
        ];

        foreach ($seoData as $data) {
            SeoMeta::updateOrCreate(
                ['path' => $data['path']],
                $data
            );
        }
    }
}
