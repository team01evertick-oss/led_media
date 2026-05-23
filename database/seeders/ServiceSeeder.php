<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::insert([

            [
                'title' => 'Outdoor LED Billboards',

                'slug' => Str::slug('Outdoor LED Billboards'),

                'icon' => 'fa-solid fa-tv',

                'thumbnail' => 'services/outdoor-led.jpg',

                'short_description' =>
                    'High-brightness outdoor LED screens designed for advertising, branding, and public visibility.',

                'description' =>
                    'Professional outdoor LED billboard solutions designed for commercial advertising, branding visibility, roadside installations, and large-scale public communication projects across Cambodia.',

                'is_featured' => 1,

                'status' => 1,

                'created_at' => now(),

                'updated_at' => now(),
            ],

            [
                'title' => 'Indoor Commercial LED Displays',

                'slug' => Str::slug('Indoor Commercial LED Displays'),

                'icon' => 'fa-solid fa-display',

                'thumbnail' => 'services/indoor-commercial.jpg',

                'short_description' =>
                    'Professional indoor LED solutions for retail stores, malls, meeting rooms, showrooms, and corporate environments.',

                'description' =>
                    'Modern indoor LED display systems designed for retail environments, shopping malls, showrooms, corporate offices, hospitality businesses, and commercial presentation spaces.',

                'is_featured' => 1,

                'status' => 1,

                'created_at' => now(),

                'updated_at' => now(),
            ],

            [
                'title' => 'Fine Pixel & Meeting Room Displays',

                'slug' => Str::slug('Fine Pixel & Meeting Room Displays'),

                'icon' => 'fa-solid fa-chalkboard',

                'thumbnail' => 'services/fine-pixel.jpg',

                'short_description' =>
                    'Sharp and seamless visual displays for presentations, conferences, and premium corporate spaces.',

                'description' =>
                    'High-definition fine pixel LED display systems engineered for boardrooms, meeting rooms, conferences, corporate communication, and premium presentation environments.',

                'is_featured' => 1,

                'status' => 1,

                'created_at' => now(),

                'updated_at' => now(),
            ],

        ]);
    }
}