<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HomePageSection;

class HomePageSectionSeeder extends Seeder
{
    public function run(): void
    {
        $sections = [

            /*
            |--------------------------------------------------------------------------
            | HOME
            |--------------------------------------------------------------------------
            */

            [
                'section_key' => 'hero',
                'title' => 'Professional LED Display Solutions',
                'subtitle' => 'LED MEDIA CAMBODIA',
                'content' => 'Professional LED display solutions for advertising, retail, corporate environments, and public communication.',
                'button_text' => 'Request Quotation',
                'button_link' => '/contact',
                'secondary_button_text' => 'Book Site Survey',
                'secondary_button_link' => '/contact',
                'status' => 1,
                'sort_order' => 1,
            ],

            [
                'section_key' => 'about_home',
                'title' => 'What This Solution Is',
                'content' => 'Outdoor LED billboards are high-brightness digital display systems designed to deliver clear visuals in all weather and lighting conditions.',
                'status' => 1,
                'sort_order' => 2,
            ],

            /*
            |--------------------------------------------------------------------------
            | SOLUTIONS
            |--------------------------------------------------------------------------
            */

            [
                'section_key' => 'solution_outdoor_billboards',
                'title' => 'Outdoor LED Billboards',
                'content' => 'Outdoor LED billboards are high-brightness digital display systems designed to deliver clear visuals in all weather and lighting conditions.',
                'status' => 1,
                'sort_order' => 3,
            ],

            [
                'section_key' => 'solution_indoor_commercial',
                'title' => 'Indoor Commercial LED Displays',
                'content' => 'Indoor commercial LED displays provide high-quality digital visuals for indoor communication and branding.',
                'status' => 1,
                'sort_order' => 4,
            ],

            [
                'section_key' => 'solution_fine_pixel',
                'title' => 'Fine Pixel Displays',
                'content' => 'Fine pixel LED displays provide ultra-clear visuals with seamless display quality.',
                'status' => 1,
                'sort_order' => 5,
            ],

            [
                'section_key' => 'solution_meeting_room',
                'title' => 'Meeting Room Displays',
                'content' => 'Professional meeting room LED displays designed for collaboration and presentations.',
                'status' => 1,
                'sort_order' => 6,
            ],

            [
                'section_key' => 'solution_retail',
                'title' => 'Retail & Showroom LED Solutions',
                'content' => 'Retail and showroom LED solutions designed to improve branding visibility.',
                'status' => 1,
                'sort_order' => 7,
            ],

            [
                'section_key' => 'solution_control_systems',
                'title' => 'Control Systems & Integration',
                'content' => 'Control systems and integration solutions for reliable performance.',
                'status' => 1,
                'sort_order' => 8,
            ],

            [
                'section_key' => 'solution_installation',
                'title' => 'Installation & Structural Works',
                'content' => 'Steel structure fabrication, mounting systems, and complete LED installation.',
                'status' => 1,
                'sort_order' => 9,
            ],

            /*
            |--------------------------------------------------------------------------
            | INDUSTRIES
            |--------------------------------------------------------------------------
            */

            [
                'section_key' => 'industry_outdoor_advertising',
                'title' => 'Outdoor Advertising Industry',
                'content' => 'Commercial-grade billboard solutions for outdoor advertising.',
                'status' => 1,
                'sort_order' => 10,
            ],

            [
                'section_key' => 'industry_retail',
                'title' => 'Retail & Showroom Industry',
                'content' => 'Customized display solutions for retail businesses.',
                'status' => 1,
                'sort_order' => 11,
            ],

            [
                'section_key' => 'industry_corporate',
                'title' => 'Corporate Offices Industry',
                'content' => 'Professional display systems tailored for business operations.',
                'status' => 1,
                'sort_order' => 12,
            ],

            [
                'section_key' => 'industry_developers',
                'title' => 'Developers & Commercial Buildings',
                'content' => 'LED integration solutions for commercial properties.',
                'status' => 1,
                'sort_order' => 13,
            ],

            [
                'section_key' => 'industry_automotive',
                'title' => 'Automotive Industry',
                'content' => 'Modern display systems for automotive showrooms.',
                'status' => 1,
                'sort_order' => 14,
            ],

            [
                'section_key' => 'industry_hospitality',
                'title' => 'Hospitality Industry',
                'content' => 'Premium LED systems for hotels and hospitality environments.',
                'status' => 1,
                'sort_order' => 15,
            ],

            [
                'section_key' => 'industry_banks',
                'title' => 'Banks & Financial Institutions',
                'content' => 'Professional display systems for financial institutions.',
                'status' => 1,
                'sort_order' => 16,
            ],

            [
                'section_key' => 'industry_government',
                'title' => 'Government & Public Sector',
                'content' => 'Reliable LED solutions for public sector environments.',
                'status' => 1,
                'sort_order' => 17,
            ],

            /*
            |--------------------------------------------------------------------------
            | OTHER PAGES
            |--------------------------------------------------------------------------
            */

            [
                'section_key' => 'services',
                'title' => 'Service & Maintenance',
                'content' => 'Long-term LED maintenance and technical support services.',
                'status' => 1,
                'sort_order' => 18,
            ],

            [
                'section_key' => 'why_led_media',
                'title' => 'Why LED Media',
                'content' => 'Trusted provider of commercial LED display solutions in Cambodia.',
                'status' => 1,
                'sort_order' => 19,
            ],

            [
                'section_key' => 'insights',
                'title' => 'Insights',
                'content' => 'Understand LED display technology and installation strategies.',
                'status' => 1,
                'sort_order' => 20,
            ],

            [
                'section_key' => 'contact',
                'title' => 'Contact LED Media',
                'content' => 'Contact our team for LED display consultation and support.',
                'status' => 1,
                'sort_order' => 21,
            ],

        ];

        foreach ($sections as $section) {

            HomePageSection::updateOrCreate(
                ['section_key' => $section['section_key']],
                $section
            );
        }
    }
}