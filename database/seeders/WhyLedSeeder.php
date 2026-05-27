<?php
// database/seeders/WhyLedSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\WhyLedMedia;

class whyLedSeeder extends Seeder
{
    public function run(): void
    {
        $pages = [

            // =========================================================
            // SOLUTIONS
            // =========================================================

            [
                'page'                 => 'outdoor-billboards',
                'title'                => 'Why LED for Outdoor Billboards?',
                'description'          => 'LED Media provides complete outdoor billboard solutions including consultation, structural planning, LED supply, installation, integration, and long-term maintenance support. Our experience covers commercial billboard projects for leading banks and businesses across Cambodia.',
                'industry_name'        => null,
                'industry_description' => null,
            ],
            [
                'page'                 => 'indoor-commercial',
                'title'                => 'Why LED for Indoor Commercial Displays?',
                'description'          => 'Indoor commercial LED displays combine stunning image clarity with energy efficiency, creating immersive brand environments inside malls, airports, and corporate lobbies.',
                'industry_name'        => null,
                'industry_description' => null,
            ],
            [
                'page'                 => 'fine-pixel',
                'title'                => 'Why Fine Pixel LED?',
                'description'          => 'Fine pixel pitch LED technology delivers ultra-sharp visuals at close viewing distances — ideal for control rooms, broadcast studios, and premium retail environments requiring the highest display quality.',
                'industry_name'        => null,
                'industry_description' => null,
            ],
            [
                'page'                 => 'meeting-room',
                'title'                => 'Why LED for Meeting Room Displays?',
                'description'          => 'Seamless, glare-free LED meeting room displays enhance collaboration with crisp visuals and zero bezel interruptions, elevating every presentation and video conference.',
                'industry_name'        => null,
                'industry_description' => null,
            ],
            [
                'page'                 => 'retail',
                'title'                => 'Why LED for Retail & Showroom Solutions?',
                'description'          => 'Dynamic LED solutions transform retail and showroom spaces into engaging, high-impact environments that drive customer attention, enhance brand presence, and boost conversion rates.',
                'industry_name'        => null,
                'industry_description' => null,
            ],
            [
                'page'                 => 'control-systems',
                'title'                => 'Why LED Control Systems & Integration?',
                'description'          => 'Our intelligent LED control systems provide centralised, real-time management of your entire display network — simplifying content scheduling, remote monitoring, and system updates.',
                'industry_name'        => null,
                'industry_description' => null,
            ],
            [
                'page'                 => 'installation',
                'title'                => 'Why Professional Installation & Structural Works?',
                'description'          => 'Expert installation and structural engineering ensure your LED systems are mounted safely, built to last, and fully compliant with local regulations and structural load requirements.',
                'industry_name'        => null,
                'industry_description' => null,
            ],

            // =========================================================
            // INDUSTRIES
            // =========================================================

            [
                'page'                 => 'outdoor-advertising-industry',
                'title'                => 'Why LED for Outdoor Advertising?',
                'description'          => 'LED Media provides complete billboard solutions including consultation, structural planning, LED supply, installation, integration, and long-term maintenance support. Our experience includes commercial billboard projects for leading banks and businesses across Cambodia.',
                'industry_name'        => 'Outdoor Advertising Industry',
                'industry_description' => 'We understand the operational requirements behind outdoor advertising projects, including brightness performance, weather resistance, structural reliability, and long-term maintenance support.',
            ],
            [
                'page'                 => 'retail-showroom-industry',
                'title'                => 'Why LED for Retail & Showrooms?',
                'description'          => 'LED Media delivers customized retail display solutions that combine visual impact, technical quality, and commercial functionality for modern businesses.',
                'industry_name'        => 'Retail & Showroom Industry',
                'industry_description' => 'We help retailers and brands create modern visual environments through high-quality LED installations, seamless display systems, and reliable technical support.',
            ],
            [
                'page'                 => 'corporate-offices-industry',
                'title'                => 'Why LED for Corporate Offices?',
                'description'          => 'LED Media delivers customized indoor LED solutions tailored to corporate requirements, including installation, calibration, technical support, and ongoing maintenance services.',
                'industry_name'        => 'Corporate Offices Industry',
                'industry_description' => 'We provide corporate-grade LED solutions focused on clarity, reliability, seamless integration, and professional visual performance across offices and meeting spaces.',
            ],
            [
                'page'                 => 'developers-commercial-buildings-industry',
                'title'                => 'Why LED for Developers & Commercial Buildings?',
                'description'          => 'Our technical team provides complete system integration and configuration support to ensure reliable, scalable, and user-friendly LED operations across commercial properties.',
                'industry_name'        => 'Developers & Commercial Buildings Industry',
                'industry_description' => 'From planning and installation to long-term maintenance support, we deliver reliable LED systems tailored to the demands of commercial property environments.',
            ],
            [
                'page'                 => 'automotive-industry',
                'title'                => 'Why LED for the Automotive Industry?',
                'description'          => 'LED Media combines technical expertise, experienced installation teams, and project management discipline to deliver safe, professional, and visually compelling LED installations for automotive brands.',
                'industry_name'        => 'Automotive Industry',
                'industry_description' => 'Our team delivers visually impactful LED solutions that help automotive brands create modern, engaging, and premium customer experiences in showrooms and service centres.',
            ],
            [
                'page'                 => 'hospitality-industry',
                'title'                => 'Why LED for Hospitality?',
                'description'          => 'We provide premium LED display solutions with professional installation, system integration, and technical optimization tailored for hotels, resorts, and entertainment venues.',
                'industry_name'        => 'Hospitality Industry',
                'industry_description' => 'We provide hospitality-focused LED solutions designed for long-term operation, exceptional visual quality, and professional presentation that enhances the guest experience.',
            ],
            [
                'page'                 => 'banks-financial-institutions-industry',
                'title'                => 'Why LED for Banks & Financial Institutions?',
                'description'          => 'LED Media provides complete LED solutions for banking environments including consultation, structural planning, LED supply, installation, integration, and long-term maintenance support.',
                'industry_name'        => 'Banks & Financial Institutions Industry',
                'industry_description' => 'LED Media has delivered multiple banking LED projects across Cambodia with a strong focus on professional installation, long-term reliability, and brand-consistent visual presentation.',
            ],
            [
                'page'                 => 'government-public-sector-industry',
                'title'                => 'Why LED for Government & Public Sector?',
                'description'          => 'Our technical team provides complete system integration and configuration support to ensure reliable, durable, and user-friendly LED operations for government and public sector environments.',
                'industry_name'        => 'Government & Public Sector Industry',
                'industry_description' => 'We support government and institutional projects with professional execution, structured project workflows, compliance standards, and reliable long-term technical support.',
            ],

        ];

        foreach ($pages as $data) {
            WhyLedMedia::updateOrCreate(
                ['page' => $data['page']],
                $data
            );
        }
    }
}