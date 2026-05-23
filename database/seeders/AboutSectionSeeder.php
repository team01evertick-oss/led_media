<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HomePageSection;

class AboutSectionSeeder extends Seeder
{
    public function run(): void
    {
        $sections = [

            // HOME ABOUT
            [
                'section_key' => 'about_home',
                'title' => 'What This Solution Is',
                'content' => 'Outdoor LED billboards are high-brightness digital display systems designed to deliver clear visuals in all weather and lighting conditions. These solutions are commonly installed on commercial buildings, roadside structures, shopping centers, banks, and public spaces for advertising and brand communication.',
                'status' => 1,
                'sort_order' => 1,
            ],

            // SOLUTIONS
            [
                'section_key' => 'about_outdoor_billboards',
                'title' => 'Outdoor LED Billboards',
                'content' => 'Outdoor LED billboards are high-brightness digital display systems designed to deliver clear visuals in all weather and lighting conditions. These solutions are commonly installed on commercial buildings, roadside structures, shopping centers, banks, and public spaces for advertising and brand communication.',
                'status' => 1,
                'sort_order' => 2,
            ],

            [
                'section_key' => 'about_indoor_commercial',
                'title' => 'Indoor Commercial LED Displays',
                'content' => 'Indoor commercial LED displays provide high-quality digital visuals for indoor communication, promotions, branding, presentations, and customer engagement. These systems are commonly used in retail stores, shopping malls, corporate offices, hotels, restaurants, and commercial environments.',
                'status' => 1,
                'sort_order' => 3,
            ],

            [
                'section_key' => 'about_fine_pixel',
                'title' => 'Fine Pixel Displays',
                'content' => 'Fine pixel LED displays provide ultra-clear visuals with seamless display quality for close-viewing environments such as meeting rooms, control centers, boardrooms, conference halls, and premium corporate communication spaces.',
                'status' => 1,
                'sort_order' => 4,
            ],

            [
                'section_key' => 'about_meeting_room',
                'title' => 'Meeting Room Displays',
                'content' => 'Professional meeting room LED displays are designed to improve presentations, collaboration, communication, and conference experiences with high-definition visuals and seamless integration systems.',
                'status' => 1,
                'sort_order' => 5,
            ],

            [
                'section_key' => 'about_retail_showroom',
                'title' => 'Retail & Showroom LED Solutions',
                'content' => 'Retail and showroom LED solutions are designed to improve product presentation, branding visibility, and customer experiences through modern digital display systems tailored for commercial retail environments.',
                'status' => 1,
                'sort_order' => 6,
            ],

            [
                'section_key' => 'about_control_systems',
                'title' => 'Control Systems & Integration',
                'content' => 'Control systems and integration solutions ensure smooth communication between LED displays, media systems, content management platforms, and operational controls for reliable performance and centralized management.',
                'status' => 1,
                'sort_order' => 7,
            ],

            [
                'section_key' => 'about_installation',
                'title' => 'Installation & Structural Works',
                'content' => 'Installation and structural works include steel structure fabrication, mounting systems, electrical integration, cabling, technical setup, and complete execution required for professional LED display projects.',
                'status' => 1,
                'sort_order' => 8,
            ],

            // INDUSTRIES
            [
                'section_key' => 'about_industry_outdoor_advertising',
                'title' => 'Outdoor Advertising Industry',
                'content' => 'Outdoor advertising requires reliable and high-brightness LED displays capable of operating continuously in Cambodia’s environmental conditions. LED Media provides commercial-grade billboard solutions that maximize visibility, audience reach, and advertising performance.',
                'status' => 1,
                'sort_order' => 9,
            ],

            [
                'section_key' => 'about_industry_retail',
                'title' => 'Retail & Showroom Industry',
                'content' => 'Retail businesses and showrooms require visually engaging digital displays that attract attention and improve customer interaction. LED Media provides customized display solutions that combine technology, branding, and modern retail presentation.',
                'status' => 1,
                'sort_order' => 10,
            ],

            [
                'section_key' => 'about_industry_corporate',
                'title' => 'Corporate Offices Industry',
                'content' => 'Corporate environments require reliable and high-quality display systems for presentations, executive meetings, communication, and digital branding. LED Media delivers professional display solutions tailored for modern business operations.',
                'status' => 1,
                'sort_order' => 11,
            ],

            [
                'section_key' => 'about_industry_developers',
                'title' => 'Developers & Commercial Buildings Industry',
                'content' => 'Developers and commercial property owners require digital display systems that improve building visibility, branding, tenant communication, and customer engagement. LED Media supports commercial projects with complete LED integration solutions.',
                'status' => 1,
                'sort_order' => 12,
            ],

            [
                'section_key' => 'about_industry_automotive',
                'title' => 'Automotive Industry',
                'content' => 'Automotive businesses require modern visual communication systems to showcase vehicles, promotions, and branding. LED Media provides professional display solutions that elevate showroom experiences and strengthen customer engagement.',
                'status' => 1,
                'sort_order' => 13,
            ],

            [
                'section_key' => 'about_industry_hospitality',
                'title' => 'Hospitality Industry',
                'content' => 'Hotels, resorts, casinos, and hospitality venues require visually engaging display systems for branding, entertainment, communication, and guest engagement. LED Media provides premium LED systems tailored for hospitality environments.',
                'status' => 1,
                'sort_order' => 14,
            ],

            [
                'section_key' => 'about_industry_banks',
                'title' => 'Banks & Financial Institutions Industry',
                'content' => 'Banks and financial institutions require professional display systems that support branding, branch communication, customer engagement, and advertising while maintaining long-term operational reliability.',
                'status' => 1,
                'sort_order' => 15,
            ],

            [
                'section_key' => 'about_industry_government',
                'title' => 'Government & Public Sector Industry',
                'content' => 'Government institutions require reliable display technology for public communication, operational environments, conferences, command centers, and institutional information systems. LED Media provides stable and professional LED solutions for public sector requirements.',
                'status' => 1,
                'sort_order' => 16,
            ],

            // SERVICE & MAINTENANCE
            [
                'section_key' => 'about_service_maintenance',
                'title' => 'Service & Maintenance',
                'content' => 'At LED Media, our commitment continues beyond installation. We provide long-term LED maintenance and technical support services for outdoor billboards, indoor commercial displays, fine pixel systems, and integrated LED solutions. Our technical team focuses on minimizing downtime, maintaining display performance, and extending equipment lifespan through structured maintenance and responsive support.',
                'status' => 1,
                'sort_order' => 17,
            ],

            // WHY LED MEDIA
            [
                'section_key' => 'about_why_led_media',
                'title' => 'Why LED Media',
                'content' => 'Established in 2015, LED Media Co., Ltd. has grown from an LED display supplier into a trusted provider of commercial LED display solutions in Cambodia. The company specializes in outdoor LED billboards, indoor commercial displays, fine pixel solutions, installation works, and technical support services.',
                'status' => 1,
                'sort_order' => 18,
            ],

            // INSIGHTS
            [
                'section_key' => 'about_insights',
                'title' => 'Insights',
                'content' => 'The Insights section is designed to help businesses, developers, advertisers, and organizations better understand LED display technology, installation considerations, maintenance planning, and commercial display strategies.',
                'status' => 1,
                'sort_order' => 19,
            ],

            // CONTACT
            [
                'section_key' => 'about_contact',
                'title' => 'Contact LED Media',
                'content' => 'Contact our team to discuss LED display projects, installation requirements, technical consultation, maintenance services, or commercial display solutions for your business or organization.',
                'status' => 1,
                'sort_order' => 20,
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