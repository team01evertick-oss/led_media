<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SolutionPage;
use App\Models\SolutionFeature;
use App\Models\SolutionFaq;

class SolutionPageSeeder extends Seeder
{
    public function run(): void
    {
        /*
        |--------------------------------------------------------------------------
        | OUTDOOR LED BILLBOARDS
        |--------------------------------------------------------------------------
        */

        $outdoor = SolutionPage::create([

            'page_key' => 'outdoor-billboards',

            'title' => 'Outdoor LED Billboards',

            'description' =>
                'Outdoor LED billboards are high-brightness digital display systems designed to deliver clear visuals in all weather and lighting conditions. These solutions are commonly installed on commercial buildings, roadside structures, shopping centers, banks, and public spaces for advertising and brand communication.',

            'why_led_media' =>
                'LED Media provides complete billboard solutions including consultation, structural planning, LED supply, installation, integration, and long-term maintenance support. Our experience includes commercial billboard projects for leading banks and businesses across Cambodia.',

            'cta_title' =>
                'Ready to install your outdoor LED billboard project?',

            'button_text' => 'Request Quotation',
            'button_link' => '/contact',

            'secondary_button_text' => 'Book Site Survey',
            'secondary_button_link' => '/contact',
        ]);

        $this->insertFeatures($outdoor->id, 'usage', [

            'Outdoor LED Billboards',
            'Indoor Commercial LED Displays',
            'Fine Pixel',
            'Meeting Room Displays',
            'Retail & Showroom LED Solutions',
            'Control Systems & Integration',
            'Installation & Structural Works',

        ]);

        $this->insertFeatures($outdoor->id, 'benefits', [

            'High visibility day and night',
            'Weather-resistant performance',
            'Dynamic advertising capability',
            'Long-term operational durability',
            'Strong branding and audience engagement',

        ]);

        $this->insertFeatures($outdoor->id, 'technical', [

            'High-brightness outdoor LED panels',
            'Waterproof and durable systems',
            'Multiple screen size configurations',
            'Energy-efficient technology',
            'Remote content control compatibility',

        ]);

        $this->insertFaqs($outdoor->id, [

            'Can outdoor LED screens operate during rain?',
            'Do you provide structural installation?',
            'Can content be updated remotely?',

        ]);



        /*
        |--------------------------------------------------------------------------
        | INDOOR COMMERCIAL LED DISPLAYS
        |--------------------------------------------------------------------------
        */

        $indoor = SolutionPage::create([

            'page_key' => 'indoor-commercial',

            'title' => 'Indoor Commercial LED Displays',

            'description' =>
                'Professional indoor LED solutions for commercial environments including retail stores, shopping malls, offices, and meeting spaces.',

            'why_led_media' =>
                'LED Media delivers customized indoor LED solutions tailored to commercial requirements, including installation, calibration, technical support, and maintenance services.',

            'cta_title' =>
                'Upgrade your commercial space with professional LED display solutions.',

            'button_text' => 'Request Consultation',
            'button_link' => '/contact',

            'secondary_button_text' => 'Talk to Our Team',
            'secondary_button_link' => '/contact',
        ]);

        $this->insertFeatures($indoor->id, 'usage', [

            'Shopping malls',
            'Retail stores',
            'Corporate offices',
            'Hotels & hospitality',
            'Government institutions',
            'Meeting halls',

        ]);

        $this->insertFeatures($indoor->id, 'benefits', [

            'Sharp and vibrant display quality',
            'Seamless large-format visuals',
            'Enhanced customer engagement',
            'Flexible display configurations',
            'Professional corporate presentation',

        ]);

        $this->insertFeatures($indoor->id, 'technical', [

            'High-resolution LED panels',
            'Flexible display sizes',
            'Slim and modern design',
            'Long operational lifespan',
            'Integrated control systems',

        ]);

        $this->insertFaqs($indoor->id, [

            'Are indoor LED displays suitable for retail stores?',
            'Can displays be customized to different sizes?',
            'Do you provide maintenance support?',

        ]);



        /*
        |--------------------------------------------------------------------------
        | FINE PIXEL & MEETING ROOM
        |--------------------------------------------------------------------------
        */

        $finePixel = SolutionPage::create([

            'page_key' => 'fine-pixel',

            'title' => 'Fine Pixel & Meeting Room Displays',

            'description' =>
                'Premium fine pixel LED displays designed for meeting rooms, command centers, conference halls, and professional presentation environments.',

            'why_led_media' =>
                'We provide premium fine pixel display solutions with professional installation, system integration, and technical optimization tailored for business environments.',

            'cta_title' =>
                'Create a modern and impactful meeting environment with fine pixel LED technology.',

            'button_text' => 'Request Consultation',
            'button_link' => '/contact',

            'secondary_button_text' => 'Talk to Our Team',
            'secondary_button_link' => '/contact',
        ]);

        $this->insertFeatures($finePixel->id, 'usage', [

            'Corporate meeting rooms',
            'Government institutions',
            'Conference halls',
            'Command centers',
            'Executive boardrooms',

        ]);

        $this->insertFeatures($finePixel->id, 'benefits', [

            'Ultra-high image clarity',
            'Seamless viewing experience',
            'Professional presentation quality',
            'Modern and space-efficient design',
            'Reliable long-term performance',

        ]);

        $this->insertFeatures($finePixel->id, 'technical', [

            'Fine pixel pitch technology',
            'High refresh rate display',
            'Seamless panel connection',
            'Advanced display controllers',
            'Clear close-range viewing quality',

        ]);

        $this->insertFaqs($finePixel->id, [

            'What is fine pixel LED technology?',
            'Is it suitable for presentations and conferences?',
            'Can it integrate with existing AV systems?',

        ]);



        /*
        |--------------------------------------------------------------------------
        | RETAIL & SHOWROOM
        |--------------------------------------------------------------------------
        */

        $retail = SolutionPage::create([

            'page_key' => 'retail',

            'title' => 'Retail & Showroom LED Solutions',

            'description' =>
                'Modern retail LED display solutions for stores, malls, automotive showrooms, and commercial brand environments.',

            'why_led_media' =>
                'LED Media delivers customized retail display solutions that combine visual impact, technical quality, and commercial functionality for modern businesses.',

            'cta_title' =>
                'Transform your retail environment with modern LED display solutions.',

            'button_text' => 'Request Consultation',
            'button_link' => '/contact',

            'secondary_button_text' => 'Talk to Our Team',
            'secondary_button_link' => '/contact',
        ]);

        $this->insertFeatures($retail->id, 'usage', [

            'Automotive showrooms',
            'Fashion stores',
            'Electronics retailers',
            'Shopping malls',
            'Brand experience centers',

        ]);

        $this->insertFeatures($retail->id, 'benefits', [

            'Improved customer attraction',
            'Stronger brand visibility',
            'Dynamic promotional content',
            'Modern retail atmosphere',
            'Flexible content management',

        ]);

        $this->insertFeatures($retail->id, 'technical', [

            'Seamless LED display systems',
            'High-definition visuals',
            'Flexible screen configurations',
            'Interactive display compatibility',
            'Commercial-grade reliability',

        ]);

        $this->insertFaqs($retail->id, [

            'Can retail displays show promotional videos?',
            'Are the displays customizable?',
            'Do you provide installation services?',

        ]);



        /*
        |--------------------------------------------------------------------------
        | CONTROL SYSTEMS
        |--------------------------------------------------------------------------
        */

        $control = SolutionPage::create([

            'page_key' => 'control-systems',

            'title' => 'Control Systems & Integration',

            'description' =>
                'Integrated LED management systems for commercial networks, corporate displays, and centralized content operations.',

            'why_led_media' =>
                'Our technical team provides complete system integration and configuration support to ensure reliable and user-friendly LED operations.',

            'cta_title' =>
                'Simplify your LED operations with professional integration solutions.',

            'button_text' => 'Request Consultation',
            'button_link' => '/contact',

            'secondary_button_text' => 'Talk to Our Team',
            'secondary_button_link' => '/contact',
        ]);

        $this->insertFeatures($control->id, 'usage', [

            'Commercial LED billboards',
            'Corporate display systems',
            'Meeting rooms',
            'Retail environments',
            'Large-scale digital networks',

        ]);

        $this->insertFeatures($control->id, 'benefits', [

            'Centralized content management',
            'Stable display performance',
            'Simplified operational control',
            'Flexible scheduling capability',
            'Improved system efficiency',

        ]);

        $this->insertFeatures($control->id, 'technical', [

            'Display controller integration',
            'Remote management systems',
            'Multimedia compatibility',
            'Network-based control systems',
            'System monitoring support',

        ]);

        $this->insertFaqs($control->id, [

            'Can multiple LED screens be controlled together?',
            'Do you provide content management setup?',
            'Is training provided?',

        ]);



        /*
        |--------------------------------------------------------------------------
        | INSTALLATION & STRUCTURAL WORKS
        |--------------------------------------------------------------------------
        */

        $installation = SolutionPage::create([

            'page_key' => 'installation',

            'title' => 'Installation & Structural Works',

            'description' =>
                'Professional LED installation and structural engineering solutions for commercial projects and outdoor advertising systems.',

            'why_led_media' =>
                'LED Media combines technical expertise, experienced installation teams, and project management discipline to deliver safe and professional LED installations.',

            'cta_title' =>
                'Partner with LED Media for professional installation and reliable project execution.',

            'button_text' => 'Request Consultation',
            'button_link' => '/contact',

            'secondary_button_text' => 'Talk to Our Team',
            'secondary_button_link' => '/contact',
        ]);

        $this->insertFeatures($installation->id, 'usage', [

            'Outdoor LED billboards',
            'Commercial buildings',
            'Shopping malls',
            'Corporate offices',
            'Event venues',

        ]);

        $this->insertFeatures($installation->id, 'benefits', [

            'Safe and reliable installation',
            'Professional structural support',
            'Stable long-term operation',
            'Reduced technical risks',
            'Efficient project execution',

        ]);

        $this->insertFeatures($installation->id, 'technical', [

            'Steel structure fabrication',
            'Electrical system integration',
            'Waterproof installation methods',
            'Safety-focused setup process',
            'Professional project coordination',

        ]);

        $this->insertFaqs($installation->id, [

            'Do you handle structural fabrication?',
            'How long does installation take?',
            'Do you provide after-installation support?',

        ]);
    }

    /*
    |--------------------------------------------------------------------------
    | INSERT FEATURES
    |--------------------------------------------------------------------------
    */

    private function insertFeatures($pageId, $type, $items)
    {
        foreach ($items as $item) {

            SolutionFeature::create([

                'solution_page_id' => $pageId,

                'type' => $type,

                'title' => $item,
            ]);
        }
    }

    /*
    |--------------------------------------------------------------------------
    | INSERT FAQS
    |--------------------------------------------------------------------------
    */

    private function insertFaqs($pageId, $items)
    {
        foreach ($items as $item) {

            SolutionFaq::create([

                'solution_page_id' => $pageId,

                'question' => $item,
            ]);
        }
    }
}