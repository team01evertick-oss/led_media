<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\WhyLedMedia;

class WhyLedSeeder extends Seeder
{
    public function run(): void
    {
        $industries = [
            [
                'page' => 'outdoor-advertising-industry',
                'title' => 'Outdoor LED Billboards',
                'description' => 'LED Media provides complete billboard solutions including consultation, structural planning, LED supply, installation, integration, and long-term maintenance support. Our experience includes commercial billboard projects for leading banks and businesses across Cambodia.',
                'industry_name' => 'Outdoor Advertising Industry',
                'industry_description' => 'We understand the operational requirements behind outdoor advertising projects, including brightness performance, weather resistance, structural reliability, and long-term maintenance support.',
            ],
            [
                'page' => 'retail-showroom-industry',
                'title' => 'Retail & Showroom LED Solutions',
                'description' => 'LED Media delivers customized retail display solutions that combine visual impact, technical quality, and commercial functionality for modern businesses.',
                'industry_name' => 'Retail & Showroom Industry',
                'industry_description' => 'We help retailers and brands create modern visual environments through high-quality LED installations, seamless display systems, and reliable technical support.',
            ],
            [
                'page' => 'corporate-offices-industry',
                'title' => 'Meeting Room Displays',
                'description' => 'LED Media delivers customized indoor LED solutions tailored to commercial requirements, including installation, calibration, technical support, and maintenance services.',
                'industry_name' => 'Corporate Offices Industry',
                'industry_description' => 'We provide corporate-grade LED solutions focused on clarity, reliability, seamless integration, and professional visual performance.',
            ],
            [
                'page' => 'developers-commercial-buildings-industry',
                'title' => 'Control Systems & Integration',
                'description' => 'Our technical team provides complete system integration and configuration support to ensure reliable and user-friendly LED operations.',
                'industry_name' => 'Developers & Commercial Buildings Industry',
                'industry_description' => 'From planning and installation to maintenance support, we deliver reliable LED systems tailored to commercial property environments.',
            ],
            [
                'page' => 'automotive-industry',
                'title' => 'Installation & Structural Works',
                'description' => 'LED Media combines technical expertise, experienced installation teams, and project management discipline to deliver safe and professional LED installations.',
                'industry_name' => 'Automotive Industry',
                'industry_description' => 'Our team delivers visually impactful LED solutions that help automotive brands create modern and engaging customer experiences.',
            ],
            [
                'page' => 'hospitality-industry',
                'title' => 'Fine Pixel',
                'description' => 'We provide premium fine pixel display solutions with professional installation, system integration, and technical optimization tailored for business environments.',
                'industry_name' => 'Hospitality Industry',
                'industry_description' => 'We provide hospitality-focused LED solutions designed for long-term operation, visual quality, and professional presentation.',
            ],
            [
                'page' => 'banks-financial-institutions-industry',
                'title' => 'Outdoor LED Billboards',
                'description' => 'LED Media provides complete billboard solutions including consultation, structural planning, LED supply, installation, integration, and long-term maintenance support.',
                'industry_name' => 'Banks & Financial Institutions Industry',
                'industry_description' => 'LED Media has delivered multiple banking LED projects across Cambodia with a focus on professional installation, reliability, and long-term support.',
            ],
            [
                'page' => 'government-public-sector-industry',
                'title' => 'Control Systems & Integration',
                'description' => 'Our technical team provides complete system integration and configuration support to ensure reliable and user-friendly LED operations.',
                'industry_name' => 'Government & Public Sector Industry',
                'industry_description' => 'We support government and institutional projects with professional execution, structured workflows, and reliable technical support.',
            ],
        ];

        foreach ($industries as $industry) {
            WhyLedMedia::updateOrCreate(
                ['page' => $industry['page']],
                $industry
            );
        }
    }
}