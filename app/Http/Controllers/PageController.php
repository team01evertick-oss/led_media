<?php
// app/Http/Controllers/PageController.php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\HomePageSection;
use App\Models\Project;
use App\Models\Service;
use App\Models\WhyLedMedia;

class PageController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | HERO + ABOUT KEY MAPS
    |--------------------------------------------------------------------------
    */

    private array $heroKeys = [
        'contact'                      => 'contact_hero',
        'insights'                     => 'insights_hero',
        'why-led-media'                => 'why_led_hero',
        'services.index'               => 'services_hero',
        'projects.index'               => 'projects_hero',
        'solutions.outdoor-billboards' => 'solutions_outdoor_billboards',
        'solutions.indoor-commercial'  => 'solutions_indoor_commercial',
        'solutions.fine-pixel'         => 'solutions_fine_pixel',
        'solutions.meeting-room'       => 'solutions_meeting_room',
        'solutions.retail'             => 'solutions_retail',
        'solutions.control-systems'    => 'solutions_control_systems',
        'solutions.installation'       => 'solutions_installation',
        'industries.outdoorAd'         => 'industry_outdoor_advertising',
        'industries.retail'            => 'industry_retail_showroom',
        'industries.corporate'         => 'industry_corporate_office',
        'industries.developers'        => 'industry_developers',
        'industries.automotive'        => 'industry_automotive',
        'industries.hospitality'       => 'industry_hospitality',
        'industries.banks'             => 'industry_banks',
        'industries.government'        => 'industry_government',
    ];

    private array $aboutKeys = [
        'why-led-media'                => 'about_why_led_media',
        'insights'                     => 'about_insights',
        'contact'                      => 'about_contact',
        'projects.index'               => 'about_projects',
        'solutions.outdoor-billboards' => 'about_outdoor_billboards',
        'solutions.indoor-commercial'  => 'about_indoor_commercial',
        'solutions.fine-pixel'         => 'about_fine_pixel',
        'solutions.meeting-room'       => 'about_meeting_room',
        'solutions.retail'             => 'about_retail_showroom',
        'solutions.control-systems'    => 'about_control_systems',
        'solutions.installation'       => 'about_installation',
        'industries.outdoorAd'         => 'about_industry_outdoor_advertising',
        'industries.retail'            => 'about_industry_retail',
        'industries.corporate'         => 'about_industry_corporate',
        'industries.developers'        => 'about_industry_developers',
        'industries.automotive'        => 'about_industry_automotive',
        'industries.hospitality'       => 'about_industry_hospitality',
        'industries.banks'             => 'about_industry_banks',
        'industries.government'        => 'about_industry_government',
    ];

    /*
    |--------------------------------------------------------------------------
    | PRIVATE HELPERS
    |--------------------------------------------------------------------------
    */

    private function getSharedData(string $routeName): array
    {
        $heroKey  = $this->heroKeys[$routeName]  ?? null;
        $aboutKey = $this->aboutKeys[$routeName] ?? null;

        $keys = array_filter([$heroKey, $aboutKey]);

        $sections = ! empty($keys)
            ? HomePageSection::whereIn('section_key', $keys)
                ->where('status', 1)
                ->get()
                ->keyBy('section_key')
            : collect();

        return [
            'hero'             => $heroKey  ? $sections->get($heroKey)  : null,
            'about'            => $aboutKey ? $sections->get($aboutKey) : null,
            'featuredProjects' => $this->getFeaturedProjects(),
        ];
    }

    private function getFeaturedProjects()
    {
        return Project::where('status', 1)
            ->where('is_featured', 1)
            ->orderBy('created_at', 'desc')
            ->limit(6)
            ->get();
    }

    private function getWhyLed(string $slug): WhyLedMedia
    {
        return WhyLedMedia::forPage($slug);
    }

    /*
    |--------------------------------------------------------------------------
    | STATIC PAGES
    |--------------------------------------------------------------------------
    */

    public function whyLed()
    {
        return view('frontend.pages.why-led.index',
            $this->getSharedData('why-led-media'));
    }

    public function contact()
    {
        return view('frontend.pages.contact.index',
            $this->getSharedData('contact'));
    }

    public function insights()
    {
        return view('frontend.pages.insights.index',
            $this->getSharedData('insights'));
    }

    public function services()
    {
        $data = $this->getSharedData('services.index');

        $data['services'] = Service::where('status', 1)
            ->where('is_featured', 1)
            ->latest()
            ->get();

        return view('frontend.pages.services.index', $data);
    }

    public function serviceShow(string $slug)
    {
        $service = Service::where('slug', $slug)
            ->where('status', 1)
            ->firstOrFail();

        return view('frontend.pages.services.show', compact('service'));
    }

    /*
    |--------------------------------------------------------------------------
    | INDUSTRIES
    |--------------------------------------------------------------------------
    */

    public function outdoorAd()
    {
        $data           = $this->getSharedData('industries.outdoorAd');
        $data['whyLed'] = $this->getWhyLed('outdoor-advertising-industry');

        return view('frontend.pages.industry.outdoorAd', $data);
    }

    public function retail()
    {
        $data           = $this->getSharedData('industries.retail');
        $data['whyLed'] = $this->getWhyLed('retail-showroom-industry');

        return view('frontend.pages.industry.retail', $data);
    }

    public function corporate()
    {
        $data           = $this->getSharedData('industries.corporate');
        $data['whyLed'] = $this->getWhyLed('corporate-offices-industry');

        return view('frontend.pages.industry.corporate', $data);
    }

    public function developers()
    {
        $data           = $this->getSharedData('industries.developers');
        $data['whyLed'] = $this->getWhyLed('developers-commercial-buildings-industry');

        return view('frontend.pages.industry.developers', $data);
    }

    public function automotive()
    {
        $data           = $this->getSharedData('industries.automotive');
        $data['whyLed'] = $this->getWhyLed('automotive-industry');

        return view('frontend.pages.industry.automotive', $data);
    }

    public function hospitality()
    {
        $data           = $this->getSharedData('industries.hospitality');
        $data['whyLed'] = $this->getWhyLed('hospitality-industry');

        return view('frontend.pages.industry.hospitality', $data);
    }

    public function banks()
    {
        $data           = $this->getSharedData('industries.banks');
        $data['whyLed'] = $this->getWhyLed('banks-financial-institutions-industry');

        return view('frontend.pages.industry.banks', $data);
    }

    public function government()
    {
        $data           = $this->getSharedData('industries.government');
        $data['whyLed'] = $this->getWhyLed('government-public-sector-industry');

        return view('frontend.pages.industry.government', $data);
    }

    /*
    |--------------------------------------------------------------------------
    | PROJECTS
    |--------------------------------------------------------------------------
    */

    public function projects()
    {
        $data = $this->getSharedData('projects.index');

        $data['projects'] = Project::where('status', 1)
            ->latest()
            ->paginate(12);

        return view('frontend.pages.projects.index', $data);
    }

    public function projectsOutdoor()
    {
        return view('frontend.pages.projects.outdoor-billboard', [
            'projects' => Project::where('status', 1)
                ->where('category', 'outdoor-billboard')
                ->latest()->paginate(12),
        ]);
    }

    public function projectsCommercial()
    {
        return view('frontend.pages.projects.commercial', [
            'projects' => Project::where('status', 1)
                ->where('category', 'commercial')
                ->latest()->paginate(12),
        ]);
    }

    public function projectsRetail()
    {
        return view('frontend.pages.projects.index', [
            'projects' => Project::where('status', 1)
                ->where('category', 'retail')
                ->latest()->paginate(12),
        ]);
    }

    public function projectsCorporate()
    {
        return view('frontend.pages.projects.corporate', [
            'projects' => Project::where('status', 1)
                ->where('category', 'corporate')
                ->latest()->paginate(12),
        ]);
    }

    public function projectsFinePixel()
    {
        return view('frontend.pages.projects.fine-pixel', [
            'projects' => Project::where('status', 1)
                ->where('category', 'fine-pixel')
                ->latest()->paginate(12),
        ]);
    }

    public function projectShow(string $slug)
    {
        $project = Project::where('slug', $slug)
            ->where('status', 1)
            ->firstOrFail();

        $related = Project::where('status', 1)
            ->where('category', $project->category)
            ->where('id', '!=', $project->id)
            ->latest()
            ->take(3)
            ->get();

        return view('frontend.pages.projects.show', compact('project', 'related'));
    }
}