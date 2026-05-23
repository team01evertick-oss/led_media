<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        Project::insert([

            // OUTDOOR BILLBOARD
            [
                'title'             => 'Shinhan Bank',
                'slug'              => Str::slug('Shinhan Bank'),
                'category'          => 'outdoor-billboard',
                'thumbnail'         => 'image/Shinhan.png',
                'short_description' => 'Supply and installation of commercial outdoor LED display system in Siem Reap.',
                'description'       => 'Supply and installation of commercial outdoor LED display system in Siem Reap.',
                'is_featured'       => 1,
                'status'            => 1,
                'created_at'        => now(),
                'updated_at'        => now(),
            ],

            // CORPORATE
            [
                'title'             => 'Phillip Bank',
                'slug'              => Str::slug('Phillip Bank'),
                'category'          => 'corporate',
                'thumbnail'         => 'image/Shinhan.png',
                'short_description' => 'LED display installation across Phnom Penh & Sihanoukville.',
                'description'       => 'LED display installation across Phnom Penh & Sihanoukville.',
                'is_featured'       => 1,
                'status'            => 1,
                'created_at'        => now(),
                'updated_at'        => now(),
            ],

            // CORPORATE
            [
                'title'             => 'Woori Bank',
                'slug'              => Str::slug('Woori Bank'),
                'category'          => 'corporate',
                'thumbnail'         => 'image/Shinhan.png',
                'short_description' => 'Corporate LED display project in Phnom Penh.',
                'description'       => 'Corporate LED display project in Phnom Penh.',
                'is_featured'       => 1,
                'status'            => 1,
                'created_at'        => now(),
                'updated_at'        => now(),
            ],

            // COMMERCIAL
            [
                'title'             => 'Aeon Mall',
                'slug'              => Str::slug('Aeon Mall'),
                'category'          => 'commercial',
                'thumbnail'         => 'image/Shinhan.png',
                'short_description' => 'Large-scale indoor commercial LED display installation.',
                'description'       => 'Large-scale indoor commercial LED display installation at Aeon Mall.',
                'is_featured'       => 1,
                'status'            => 1,
                'created_at'        => now(),
                'updated_at'        => now(),
            ],

            // RETAIL
            [
                'title'             => 'Toyota Showroom',
                'slug'              => Str::slug('Toyota Showroom'),
                'category'          => 'retail',
                'thumbnail'         => 'image/Shinhan.png',
                'short_description' => 'Retail LED display solution for automotive showroom.',
                'description'       => 'Retail LED display solution for Toyota showroom in Phnom Penh.',
                'is_featured'       => 1,
                'status'            => 1,
                'created_at'        => now(),
                'updated_at'        => now(),
            ],

            // FINE PIXEL
            [
                'title'             => 'NagaWorld Casino',
                'slug'              => Str::slug('NagaWorld Casino'),
                'category'          => 'fine-pixel',
                'thumbnail'         => 'image/Shinhan.png',
                'short_description' => 'Fine pixel indoor LED display for premium interior.',
                'description'       => 'Fine pixel indoor LED display installation at NagaWorld Casino.',
                'is_featured'       => 1,
                'status'            => 1,
                'created_at'        => now(),
                'updated_at'        => now(),
            ],

        ]);
    }
}