<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HomePageSection;

class HeroSeeder extends Seeder
{
    public function run(): void
    {
        $sections = [

            /*
            |--------------------------------------------------------------------------
            | HERO SECTION
            |--------------------------------------------------------------------------
            */
            [
                'section_key' => 'hero',

                'title' =>
                    'Premium LED Display Solutions for Commercial Projects in Cambodia',

                'subtitle' =>
                    'LED MEDIA',

                'content' =>
                    'LED Media specializes in outdoor LED billboards, indoor commercial displays, fine pixel LED solutions, and integrated display systems with professional installation and maintenance support.',

                'image' => 'hero/home_page_bg1.png',
                'background_image' => 'hero/home_page_bg2.png',

                'button_text' => 'Request Quotation',
                'button_link' => '/contact',

                'secondary_button_text' => 'Book Site Survey',
                'secondary_button_link' => '/contact',

                'status' => 1,
                'sort_order' => 1,
            ],

            /*
            |--------------------------------------------------------------------------
            | SOLUTIONS - OUTDOOR BILLBOARDS
            |--------------------------------------------------------------------------
            */
            [
                'section_key' => 'solution_outdoor_billboards',

                'title' =>
                    'High-Visibility Outdoor LED Billboard Solutions in Cambodia',

                'subtitle' =>
                    'Outdoor LED Billboards',

                'content' =>
                    'Professional outdoor LED billboard systems designed for advertising, branding, commercial buildings, and large-scale public visibility.',

                'image' => 'solutions/outdoor-billboards.png',

                'button_text' => 'View Solution',
                'button_link' => '/solutions/outdoor-billboards',

                'status' => 1,
                'sort_order' => 2,
            ],

            /*
            |--------------------------------------------------------------------------
            | SOLUTIONS - INDOOR COMMERCIAL
            |--------------------------------------------------------------------------
            */
            [
                'section_key' => 'solution_indoor_commercial',

                'title' =>
                    'Professional Indoor LED Displays for Commercial Spaces',

                'subtitle' =>
                    'Indoor Commercial LED Displays',

                'content' =>
                    'Modern indoor LED display solutions designed for retail, corporate, hospitality, and commercial environments.',

                'image' => 'solutions/indoor-commercial.png',

                'button_text' => 'View Solution',
                'button_link' => '/solutions/indoor-commercial',

                'status' => 1,
                'sort_order' => 3,
            ],

            /*
            |--------------------------------------------------------------------------
            | SOLUTIONS - FINE PIXEL
            |--------------------------------------------------------------------------
            */
            [
                'section_key' => 'solution_fine_pixel',

                'title' =>
                    'Fine Pixel LED Displays for Corporate & Meeting Environments',

                'subtitle' =>
                    'Fine Pixel / Meeting Room Displays',

                'content' =>
                    'High-definition LED display systems designed for boardrooms, presentations, conferences, and premium corporate communication.',

                'image' => 'solutions/fine-pixel.png',

                'button_text' => 'View Solution',
                'button_link' => '/solutions/fine-pixel',

                'status' => 1,
                'sort_order' => 4,
            ],

            /*
            |--------------------------------------------------------------------------
            | SOLUTIONS - RETAIL
            |--------------------------------------------------------------------------
            */
            [
                'section_key' => 'solution_retail',

                'title' =>
                    'Dynamic LED Display Solutions for Retail & Showrooms',

                'subtitle' =>
                    'Retail & Showroom LED Solutions',

                'content' =>
                    'Enhance customer engagement and modernize commercial spaces with professional LED display systems.',

                'image' => 'solutions/retail.png',

                'button_text' => 'View Solution',
                'button_link' => '/solutions/retail',

                'status' => 1,
                'sort_order' => 5,
            ],

            /*
            |--------------------------------------------------------------------------
            | SOLUTIONS - CONTROL SYSTEMS
            |--------------------------------------------------------------------------
            */
            [
                'section_key' => 'solution_control_systems',

                'title' =>
                    'Professional LED Control Systems & Integration Services',

                'subtitle' =>
                    'Control Systems & Integration',

                'content' =>
                    'Reliable LED display control systems designed for seamless operation, content management, and system performance.',

                'image' => 'solutions/control-systems.png',

                'button_text' => 'View Solution',
                'button_link' => '/solutions/control-systems',

                'status' => 1,
                'sort_order' => 6,
            ],

            /*
            |--------------------------------------------------------------------------
            | SOLUTIONS - INSTALLATION
            |--------------------------------------------------------------------------
            */
            [
                'section_key' => 'solution_installation',

                'title' =>
                    'Professional LED Installation & Structural Engineering Services',

                'subtitle' =>
                    'Installation & Structural Works',

                'content' =>
                    'Complete installation, structural support, wiring, and technical execution for commercial LED projects.',

                'image' => 'solutions/installation.png',

                'button_text' => 'View Solution',
                'button_link' => '/solutions/installation',

                'status' => 1,
                'sort_order' => 7,
            ],

            /*
            |--------------------------------------------------------------------------
            | INDUSTRY - OUTDOOR ADVERTISING
            |--------------------------------------------------------------------------
            */
            [
                'section_key' => 'industry_outdoor_advertising',

                'title' =>
                    'LED Billboard Solutions for Outdoor Advertising in Cambodia',

                'subtitle' =>
                    'Outdoor Advertising Industry',

                'content' =>
                    'High-visibility outdoor LED display systems designed for billboard operators, advertisers, and commercial branding projects.',

                'image' => 'industries/outdoor-advertising.png',

                'button_text' => 'Explore Industry',
                'button_link' => '/industries',

                'status' => 1,
                'sort_order' => 8,
            ],

            /*
            |--------------------------------------------------------------------------
            | INDUSTRY - RETAIL
            |--------------------------------------------------------------------------
            */
            [
                'section_key' => 'industry_retail',

                'title' =>
                    'Modern LED Display Solutions for Retail & Showrooms',

                'subtitle' =>
                    'Retail & Showroom Industry',

                'content' =>
                    'Professional LED display systems designed to improve customer engagement, branding, and in-store experiences.',

                'image' => 'industries/retail.png',

                'button_text' => 'Explore Industry',
                'button_link' => '/industries/retail',

                'status' => 1,
                'sort_order' => 9,
            ],

            /*
            |--------------------------------------------------------------------------
            | INDUSTRY - CORPORATE
            |--------------------------------------------------------------------------
            */
            [
                'section_key' => 'industry_corporate',

                'title' =>
                    'Professional LED Displays for Corporate Offices & Business Environments',

                'subtitle' =>
                    'Corporate Offices Industry',

                'content' =>
                    'Premium display solutions designed for presentations, communication, meetings, and professional corporate branding.',

                'image' => 'industries/corporate.png',

                'button_text' => 'Explore Industry',
                'button_link' => '/industries/corporate',

                'status' => 1,
                'sort_order' => 10,
            ],

            /*
            |--------------------------------------------------------------------------
            | INDUSTRY - DEVELOPERS
            |--------------------------------------------------------------------------
            */
            [
                'section_key' => 'industry_developers',

                'title' =>
                    'LED Display Solutions for Commercial Buildings & Property Developments',

                'subtitle' =>
                    'Developers & Commercial Buildings Industry',

                'content' =>
                    'Integrated LED systems designed for modern buildings, mixed-use developments, and commercial properties.',

                'image' => 'industries/developers.png',

                'button_text' => 'Explore Industry',
                'button_link' => '/industries/developers',

                'status' => 1,
                'sort_order' => 11,
            ],

            /*
            |--------------------------------------------------------------------------
            | INDUSTRY - AUTOMOTIVE
            |--------------------------------------------------------------------------
            */
            [
                'section_key' => 'industry_automotive',

                'title' =>
                    'LED Display Solutions for Automotive Brands & Dealerships',

                'subtitle' =>
                    'Automotive Industry',

                'content' =>
                    'Dynamic LED systems designed to strengthen showroom presentation and customer engagement.',

                'image' => 'industries/automotive.png',

                'button_text' => 'Explore Industry',
                'button_link' => '/industries/automotive',

                'status' => 1,
                'sort_order' => 12,
            ],

            /*
            |--------------------------------------------------------------------------
            | INDUSTRY - HOSPITALITY
            |--------------------------------------------------------------------------
            */
            [
                'section_key' => 'industry_hospitality',

                'title' =>
                    'LED Display Solutions for Hotels, Casinos & Hospitality Businesses',

                'subtitle' =>
                    'Hospitality Industry',

                'content' =>
                    'Premium LED systems designed to enhance guest experiences, branding, and digital communication.',

                'image' => 'industries/hospitality.png',

                'button_text' => 'Explore Industry',
                'button_link' => '/industries/hospitality',

                'status' => 1,
                'sort_order' => 13,
            ],

            /*
            |--------------------------------------------------------------------------
            | INDUSTRY - BANKS
            |--------------------------------------------------------------------------
            */
            [
                'section_key' => 'industry_banks',

                'title' =>
                    'Trusted LED Display Solutions for Banks & Financial Institutions',

                'subtitle' =>
                    'Banks & Financial Institutions Industry',

                'content' =>
                    'Reliable LED systems designed for banking visibility, customer communication, and corporate branding.',

                'image' => 'industries/banks.png',

                'button_text' => 'Explore Industry',
                'button_link' => '/industries/banks',

                'status' => 1,
                'sort_order' => 14,
            ],

            /*
            |--------------------------------------------------------------------------
            | INDUSTRY - GOVERNMENT
            |--------------------------------------------------------------------------
            */
            [
                'section_key' => 'industry_government',

                'title' =>
                    'LED Display Solutions for Government & Public Institutions',

                'subtitle' =>
                    'Government & Public Sector Industry',

                'content' =>
                    'Professional LED systems designed for public communication, conferences, command centers, and institutional operations.',

                'image' => 'industries/government.png',

                'button_text' => 'Explore Industry',
                'button_link' => '/industries/government',

                'status' => 1,
                'sort_order' => 15,
            ],

            /*
            |--------------------------------------------------------------------------
            | SERVICES
            |--------------------------------------------------------------------------
            */
            [
                'section_key' => 'services',

                'title' =>
                    'Reliable LED Service & Maintenance Support in Cambodia',

                'subtitle' =>
                    'Service & Maintenance',

                'content' =>
                    'Professional maintenance, troubleshooting, repair, and technical support services designed to keep your LED display systems operating efficiently and reliably.',

                'image' => 'services/service-maintenance.png',

                'button_text' => 'View Services',
                'button_link' => '/services',

                'status' => 1,
                'sort_order' => 16,
            ],

            /*
            |--------------------------------------------------------------------------
            | WHY LED MEDIA
            |--------------------------------------------------------------------------
            */
            [
                'section_key' => 'why_led_media',

                'title' =>
                    'Trusted LED Display Solutions Partner in Cambodia',

                'subtitle' =>
                    'Why LED Media',

                'content' =>
                    'Professional LED display sales, installation, system integration, and long-term technical support for commercial projects.',

                'image' => 'pages/why-led-media.png',

                'button_text' => 'Learn More',
                'button_link' => '/why-led-media',

                'status' => 1,
                'sort_order' => 17,
            ],

            /*
            |--------------------------------------------------------------------------
            | INSIGHTS
            |--------------------------------------------------------------------------
            */
            [
                'section_key' => 'insights',

                'title' =>
                    'LED Knowledge, Buying Guides & Commercial Display Insights',

                'subtitle' =>
                    'Insights',

                'content' =>
                    'Stay informed with practical LED industry knowledge, technical insights, buying guides, and maintenance tips for commercial LED display projects.',

                'image' => 'pages/insights.png',

                'button_text' => 'Read Insights',
                'button_link' => '/insights',

                'status' => 1,
                'sort_order' => 18,
            ],

            /*
            |--------------------------------------------------------------------------
            | CONTACT
            |--------------------------------------------------------------------------
            */
            [
                'section_key' => 'contact',

                'title' =>
                    'Let’s discuss your LED display project, commercial installation, or technical support requirements.',

                'subtitle' =>
                    'Contact LED Media',

                'content' =>
                    'Our team is ready to support businesses, developers, institutions, and commercial clients with professional LED display solutions, installation services, and long-term technical support.',

                'image' => 'pages/contact.png',

                'button_text' => 'Contact Us',
                'button_link' => '/contact',

                'status' => 1,
                'sort_order' => 19,
            ],

        ];

        foreach ($sections as $section) {

            HomePageSection::updateOrCreate(
                [
                    'section_key' => $section['section_key']
                ],
                $section
            );
        }
    }
}