<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Solution;
use App\Models\SolutionBenefit;
use App\Models\SolutionFaq;
use App\Models\SolutionUse;
use App\Models\TechnicalFeature;

class SolutionPageSeeder extends Seeder
{
    public function run(): void
    {

        /*
        |--------------------------------------------------------------------------
        | OUTDOOR LED BILLBOARDS
        |--------------------------------------------------------------------------
        */

        $outdoor = Solution::create([

            'title' => 'Outdoor LED Billboards',

            'slug' => 'outdoor-billboards',

            'description' =>
                'Outdoor LED billboards are high-brightness digital display systems designed to deliver clear visuals in all weather and lighting conditions. These solutions are commonly installed on commercial buildings, roadside structures, shopping centers, banks, and public spaces for advertising and brand communication.',

            'why_led_media' =>
                'LED Media provides complete billboard solutions including consultation, structural planning, LED supply, installation, integration, and long-term maintenance support. Our experience includes commercial billboard projects for leading banks and businesses across Cambodia.',

            'image' => 'solutions/outdoor-billboards.jpg',

            'status' => true,
        ]);

        $this->insertUses($outdoor->id, [

            'Outdoor LED Billboards',
            'Indoor Commercial LED Displays',
            'Fine Pixel',
            'Meeting Room Displays',
            'Retail & Showroom LED Solutions',
            'Control Systems & Integration',
            'Installation & Structural Works',

        ]);

        $this->insertBenefits($outdoor->id, [

            'High visibility day and night',
            'Weather-resistant performance',
            'Dynamic advertising capability',
            'Long-term operational durability',
            'Strong branding and audience engagement',

        ]);

        $this->insertTechnicalFeatures($outdoor->id, [

            'High-brightness outdoor LED panels',
            'Waterproof and durable systems',
            'Multiple screen size configurations',
            'Energy-efficient technology',
            'Remote content control compatibility',

        ]);

        $this->insertFaqs($outdoor->id, [

            [
                'question' =>
                    'Can outdoor LED screens operate during rain?',

                'answer' =>
                    'Yes, outdoor LED displays are waterproof and designed for all-weather operation.',
            ],

            [
                'question' =>
                    'Do you provide structural installation?',

                'answer' =>
                    'Yes, we provide complete structural fabrication and installation services.',
            ],

            [
                'question' =>
                    'Can content be updated remotely?',

                'answer' =>
                    'Yes, content can be managed remotely through compatible control systems.',
            ],

        ]);



        /*
        |--------------------------------------------------------------------------
        | INDOOR COMMERCIAL LED DISPLAYS
        |--------------------------------------------------------------------------
        */

        $indoor = Solution::create([

            'title' => 'Indoor Commercial LED Displays',

            'slug' => 'indoor-commercial',

            'description' =>
                'Professional indoor LED solutions for commercial environments including retail stores, shopping malls, offices, and meeting spaces.',

            'why_led_media' =>
                'LED Media delivers customized indoor LED solutions tailored to commercial requirements, including installation, calibration, technical support, and maintenance services.',

            'image' => 'solutions/indoor-commercial.jpg',

            'status' => true,
        ]);

        $this->insertUses($indoor->id, [

            'Shopping malls',
            'Retail stores',
            'Corporate offices',
            'Hotels & hospitality',
            'Government institutions',
            'Meeting halls',

        ]);

        $this->insertBenefits($indoor->id, [

            'Sharp and vibrant display quality',
            'Seamless large-format visuals',
            'Enhanced customer engagement',
            'Flexible display configurations',
            'Professional corporate presentation',

        ]);

        $this->insertTechnicalFeatures($indoor->id, [

            'High-resolution LED panels',
            'Flexible display sizes',
            'Slim and modern design',
            'Long operational lifespan',
            'Integrated control systems',

        ]);

        $this->insertFaqs($indoor->id, [

            [
                'question' =>
                    'Are indoor LED displays suitable for retail stores?',

                'answer' =>
                    'Yes, indoor LED displays are ideal for retail and commercial environments.',
            ],

            [
                'question' =>
                    'Can displays be customized to different sizes?',

                'answer' =>
                    'Yes, displays can be customized based on project requirements.',
            ],

            [
                'question' =>
                    'Do you provide maintenance support?',

                'answer' =>
                    'Yes, we provide long-term maintenance and technical support.',
            ],

        ]);



        /*
        |--------------------------------------------------------------------------
        | FINE PIXEL & MEETING ROOM
        |--------------------------------------------------------------------------
        */

        $finePixel = Solution::create([

            'title' => 'Fine Pixel & Meeting Room Displays',

            'slug' => 'fine-pixel',

            'description' =>
                'Premium fine pixel LED displays designed for meeting rooms, command centers, conference halls, and professional presentation environments.',

            'why_led_media' =>
                'We provide premium fine pixel display solutions with professional installation, system integration, and technical optimization tailored for business environments.',

            'image' => 'solutions/fine-pixel.jpg',

            'status' => true,
        ]);

        $this->insertUses($finePixel->id, [

            'Corporate meeting rooms',
            'Government institutions',
            'Conference halls',
            'Command centers',
            'Executive boardrooms',

        ]);

        $this->insertBenefits($finePixel->id, [

            'Ultra-high image clarity',
            'Seamless viewing experience',
            'Professional presentation quality',
            'Modern and space-efficient design',
            'Reliable long-term performance',

        ]);

        $this->insertTechnicalFeatures($finePixel->id, [

            'Fine pixel pitch technology',
            'High refresh rate display',
            'Seamless panel connection',
            'Advanced display controllers',
            'Clear close-range viewing quality',

        ]);

        $this->insertFaqs($finePixel->id, [

            [
                'question' =>
                    'What is fine pixel LED technology?',

                'answer' =>
                    'Fine pixel LED provides ultra-high resolution and close viewing clarity.',
            ],

            [
                'question' =>
                    'Is it suitable for presentations and conferences?',

                'answer' =>
                    'Yes, it is ideal for meeting rooms and conference environments.',
            ],

            [
                'question' =>
                    'Can it integrate with existing AV systems?',

                'answer' =>
                    'Yes, integration with AV systems is supported.',
            ],

        ]);



        /*
        |--------------------------------------------------------------------------
        | RETAIL & SHOWROOM LED SOLUTIONS
        |--------------------------------------------------------------------------
        */

        $retail = Solution::create([

            'title' => 'Retail & Showroom LED Solutions',

            'slug' => 'retail',

            'description' =>
                'Modern retail LED display solutions for stores, malls, automotive showrooms, and commercial brand environments.',

            'why_led_media' =>
                'LED Media delivers customized retail display solutions that combine visual impact, technical quality, and commercial functionality for modern businesses.',

            'image' => 'solutions/retail.jpg',

            'status' => true,
        ]);

        $this->insertUses($retail->id, [

            'Automotive showrooms',
            'Fashion stores',
            'Electronics retailers',
            'Shopping malls',
            'Brand experience centers',

        ]);

        $this->insertBenefits($retail->id, [

            'Improved customer attraction',
            'Stronger brand visibility',
            'Dynamic promotional content',
            'Modern retail atmosphere',
            'Flexible content management',

        ]);

        $this->insertTechnicalFeatures($retail->id, [

            'Seamless LED display systems',
            'High-definition visuals',
            'Flexible screen configurations',
            'Interactive display compatibility',
            'Commercial-grade reliability',

        ]);

        $this->insertFaqs($retail->id, [

            [
                'question' =>
                    'Can retail displays show promotional videos?',

                'answer' =>
                    'Yes, LED displays fully support promotional videos and animations.',
            ],

            [
                'question' =>
                    'Are the displays customizable?',

                'answer' =>
                    'Yes, screen sizes and configurations are customizable.',
            ],

            [
                'question' =>
                    'Do you provide installation services?',

                'answer' =>
                    'Yes, installation and setup services are included.',
            ],

        ]);



        /*
        |--------------------------------------------------------------------------
        | CONTROL SYSTEMS & INTEGRATION
        |--------------------------------------------------------------------------
        */

        $control = Solution::create([

            'title' => 'Control Systems & Integration',

            'slug' => 'control-systems',

            'description' =>
                'Integrated LED management systems for commercial networks, corporate displays, and centralized content operations.',

            'why_led_media' =>
                'Our technical team provides complete system integration and configuration support to ensure reliable and user-friendly LED operations.',

            'image' => 'solutions/control-systems.jpg',

            'status' => true,
        ]);

        $this->insertUses($control->id, [

            'Commercial LED billboards',
            'Corporate display systems',
            'Meeting rooms',
            'Retail environments',
            'Large-scale digital networks',

        ]);

        $this->insertBenefits($control->id, [

            'Centralized content management',
            'Stable display performance',
            'Simplified operational control',
            'Flexible scheduling capability',
            'Improved system efficiency',

        ]);

        $this->insertTechnicalFeatures($control->id, [

            'Display controller integration',
            'Remote management systems',
            'Multimedia compatibility',
            'Network-based control systems',
            'System monitoring support',

        ]);

        $this->insertFaqs($control->id, [

            [
                'question' =>
                    'Can multiple LED screens be controlled together?',

                'answer' =>
                    'Yes, multiple displays can be managed from a centralized system.',
            ],

            [
                'question' =>
                    'Do you provide content management setup?',

                'answer' =>
                    'Yes, our team provides full setup and configuration support.',
            ],

            [
                'question' =>
                    'Is training provided?',

                'answer' =>
                    'Yes, operational training is provided for clients.',
            ],

        ]);



        /*
        |--------------------------------------------------------------------------
        | INSTALLATION & STRUCTURAL WORKS
        |--------------------------------------------------------------------------
        */

        $installation = Solution::create([

            'title' => 'Installation & Structural Works',

            'slug' => 'installation',

            'description' =>
                'Professional LED installation and structural engineering solutions for commercial projects and outdoor advertising systems.',

            'why_led_media' =>
                'LED Media combines technical expertise, experienced installation teams, and project management discipline to deliver safe and professional LED installations.',

            'image' => 'solutions/installation.jpg',

            'status' => true,
        ]);

        $this->insertUses($installation->id, [

            'Outdoor LED billboards',
            'Commercial buildings',
            'Shopping malls',
            'Corporate offices',
            'Event venues',

        ]);

        $this->insertBenefits($installation->id, [

            'Safe and reliable installation',
            'Professional structural support',
            'Stable long-term operation',
            'Reduced technical risks',
            'Efficient project execution',

        ]);

        $this->insertTechnicalFeatures($installation->id, [

            'Steel structure fabrication',
            'Electrical system integration',
            'Waterproof installation methods',
            'Safety-focused setup process',
            'Professional project coordination',

        ]);

        $this->insertFaqs($installation->id, [

            [
                'question' =>
                    'Do you handle structural fabrication?',

                'answer' =>
                    'Yes, we provide complete structural fabrication services.',
            ],

            [
                'question' =>
                    'How long does installation take?',

                'answer' =>
                    'Installation duration depends on project size and complexity.',
            ],

            [
                'question' =>
                    'Do you provide after-installation support?',

                'answer' =>
                    'Yes, we provide maintenance and technical support after installation.',
            ],

        ]);
    }



    /*
    |--------------------------------------------------------------------------
    | INSERT USES
    |--------------------------------------------------------------------------
    */

    private function insertUses($solutionId, $items): void
    {
        foreach ($items as $item) {

            SolutionUse::create([

                'solution_id' => $solutionId,

                'title' => $item,
            ]);
        }
    }



    /*
    |--------------------------------------------------------------------------
    | INSERT BENEFITS
    |--------------------------------------------------------------------------
    */

    private function insertBenefits($solutionId, $items): void
    {
        foreach ($items as $item) {

            SolutionBenefit::create([

                'solution_id' => $solutionId,

                'title' => $item,
            ]);
        }
    }



    /*
    |--------------------------------------------------------------------------
    | INSERT TECHNICAL FEATURES
    |--------------------------------------------------------------------------
    */

    private function insertTechnicalFeatures($solutionId, $items): void
    {
        $number = 1;

        foreach ($items as $item) {

            TechnicalFeature::create([

                'solution_id' => $solutionId,

                'feature_number' => str_pad($number, 2, '0', STR_PAD_LEFT),

                'title' => $item,
            ]);

            $number++;
        }
    }



    /*
    |--------------------------------------------------------------------------
    | INSERT FAQS
    |--------------------------------------------------------------------------
    */

    private function insertFaqs($solutionId, $items): void
    {
        foreach ($items as $item) {

            SolutionFaq::create([

                'solution_id' => $solutionId,

                'question' => $item['question'],

                'answer' => $item['answer'],
            ]);
        }
    }
}