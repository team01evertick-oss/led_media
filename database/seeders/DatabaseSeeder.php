<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Setting;
use App\Models\Solution;
use App\Models\Industry;
use App\Models\ContactInfo;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Admin user
        User::create([
            'name'     => 'LED Media Admin',
            'email'    => 'admin@ledmedia.com.kh',
            'password' => Hash::make('password'),
            'role'     => 'super_admin',
            'is_active'=> true,
        ]);

        // Default settings
        $settings = [
            ['group'=>'general',  'key'=>'site_name',          'value'=>'LED Media',              'type'=>'text',    'label'=>'Site Name'],
            ['group'=>'general',  'key'=>'site_tagline',        'value'=>'Premium LED Display Solutions for Commercial Projects in Cambodia', 'type'=>'text', 'label'=>'Site Tagline'],
            ['group'=>'contact',  'key'=>'phone_1',             'value'=>'089 911 988',            'type'=>'text',    'label'=>'Phone 1'],
            ['group'=>'contact',  'key'=>'phone_2',             'value'=>'081 688 880',            'type'=>'text',    'label'=>'Phone 2'],
            ['group'=>'contact',  'key'=>'contact_email',       'value'=>'Khemarin.ctn@gmail.com', 'type'=>'email',   'label'=>'Email'],
            ['group'=>'contact',  'key'=>'website_url',         'value'=>'www.ledmedia.com.kh',    'type'=>'url',     'label'=>'Website'],
            ['group'=>'contact',  'key'=>'office_address',      'value'=>'#159A, Street No. 2011, Phum Dei Thmel, Sangkat Kouk Khleang, Khan Sen Sok, Phnom Penh, Cambodia.', 'type'=>'textarea', 'label'=>'Office Address'],
            ['group'=>'contact',  'key'=>'business_hours',      'value'=>'Monday – Saturday, 8:00 AM – 5:30 PM', 'type'=>'text', 'label'=>'Business Hours'],
            ['group'=>'company',  'key'=>'company_founded',     'value'=>'2015',                   'type'=>'text',    'label'=>'Founded'],
            ['group'=>'company',  'key'=>'company_team_size',   'value'=>'30+',                    'type'=>'text',    'label'=>'Team Size'],
            ['group'=>'company',  'key'=>'company_description', 'value'=>'LED Media Co., Ltd. specializes in outdoor LED billboards, indoor commercial displays, fine pixel LED solutions, and integrated display systems with professional installation and maintenance support.', 'type'=>'textarea', 'label'=>'Company Description'],
            ['group'=>'seo',      'key'=>'seo_default_title',   'value'=>'LED Media Cambodia — Premium LED Display Solutions', 'type'=>'text', 'label'=>'Default Meta Title'],
            ['group'=>'seo',      'key'=>'seo_default_keywords','value'=>'LED display Cambodia, LED billboard, outdoor LED, indoor LED, LED Media', 'type'=>'text', 'label'=>'Default Keywords'],
        ];

        foreach ($settings as $setting) {
            Setting::create(array_merge($setting, ['is_public'=>true, 'order'=>0]));
        }

        // Solutions
        $solutions = [
            ['title'=>'Outdoor LED Billboards',           'slug'=>'outdoor-led-billboards',           'hero_eyebrow'=>'Outdoor LED Billboards',           'tagline'=>'High-Visibility Outdoor LED Billboard Solutions in Cambodia', 'order'=>1, 'status'=>'published', 'is_active'=>true],
            ['title'=>'Indoor Commercial LED Displays',   'slug'=>'indoor-commercial-led-displays',   'hero_eyebrow'=>'Indoor Commercial LED Displays',   'tagline'=>'Professional Indoor LED Displays for Commercial Spaces',         'order'=>2, 'status'=>'published', 'is_active'=>true],
            ['title'=>'Fine Pixel & Meeting Room Displays','slug'=>'fine-pixel-meeting-room-displays', 'hero_eyebrow'=>'Fine Pixel / Meeting Room Displays','tagline'=>'Fine Pixel LED Displays for Corporate & Meeting Environments',   'order'=>3, 'status'=>'published', 'is_active'=>true],
            ['title'=>'Retail & Showroom LED Solutions',  'slug'=>'retail-showroom-led-solutions',    'hero_eyebrow'=>'Retail & Showroom LED Solutions',  'tagline'=>'Dynamic LED Display Solutions for Retail & Showrooms',           'order'=>4, 'status'=>'published', 'is_active'=>true],
            ['title'=>'Control Systems & Integration',    'slug'=>'control-systems-integration',      'hero_eyebrow'=>'Control Systems & Integration',    'tagline'=>'Integrated LED Content Control and Management Systems',           'order'=>5, 'status'=>'published', 'is_active'=>true],
            ['title'=>'Installation & Structural Works',  'slug'=>'installation-structural-works',    'hero_eyebrow'=>'Installation & Structural Works',  'tagline'=>'Professional LED Installation and Structural Engineering',        'order'=>6, 'status'=>'published', 'is_active'=>true],
        ];
        foreach ($solutions as $s) Solution::create($s);

        // Industries
        $industries = [
            ['title'=>'Outdoor Advertising Industry',            'slug'=>'outdoor-advertising',       'icon'=>'🏙️', 'order'=>1,'status'=>'published','is_active'=>true],
            ['title'=>'Corporate Offices Industry',              'slug'=>'corporate-offices',          'icon'=>'🏢', 'order'=>2,'status'=>'published','is_active'=>true],
            ['title'=>'Developers & Commercial Buildings',       'slug'=>'commercial-buildings',       'icon'=>'🏗️', 'order'=>3,'status'=>'published','is_active'=>true],
            ['title'=>'Automotive Industry',                     'slug'=>'automotive',                 'icon'=>'🚗', 'order'=>4,'status'=>'published','is_active'=>true],
            ['title'=>'Banks & Financial Institutions Industry', 'slug'=>'banks-financial',            'icon'=>'🏦', 'order'=>5,'status'=>'published','is_active'=>true],
            ['title'=>'Retail Stores & Showrooms Industry',      'slug'=>'retail-showrooms',           'icon'=>'🛍️', 'order'=>6,'status'=>'published','is_active'=>true],
            ['title'=>'Hotels & Hospitality Industry',           'slug'=>'hospitality',                'icon'=>'🏨', 'order'=>7,'status'=>'published','is_active'=>true],
            ['title'=>'Government & Public Sector Industry',     'slug'=>'government-public-sector',   'icon'=>'🏛️', 'order'=>8,'status'=>'published','is_active'=>true],
        ];
        foreach ($industries as $i) Industry::create($i);

        // Contact Info
        $contacts = [
            ['type'=>'address', 'label'=>'Head Office', 'value'=>'#159A, Street No. 2011, Phum Dei Thmel, Sangkat Kouk Khleang, Khan Sen Sok, Phnom Penh, Cambodia.', 'icon'=>'📍', 'order'=>1, 'is_active'=>true],
            ['type'=>'phone',   'label'=>'Phone 1',     'value'=>'089 911 988', 'icon'=>'📞', 'order'=>2, 'is_active'=>true],
            ['type'=>'phone',   'label'=>'Phone 2',     'value'=>'081 688 880', 'icon'=>'📞', 'order'=>3, 'is_active'=>true],
            ['type'=>'email',   'label'=>'Email',       'value'=>'Khemarin.ctn@gmail.com', 'icon'=>'✉️', 'order'=>4, 'is_active'=>true],
            ['type'=>'web',     'label'=>'Website',     'value'=>'www.ledmedia.com.kh', 'icon'=>'🌐', 'order'=>5, 'is_active'=>true],
            ['type'=>'hours',   'label'=>'Business Hours','value'=>'Monday – Saturday, 8:00 AM – 5:30 PM', 'icon'=>'🕐', 'order'=>6, 'is_active'=>true],
        ];
        foreach ($contacts as $c) ContactInfo::create($c);
    }
}