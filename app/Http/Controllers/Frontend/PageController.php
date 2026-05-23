<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\HomePageSection;
use App\Models\Project;
use App\Models\Service;

class PageController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | HERO + ABOUT KEY MAPS
    |--------------------------------------------------------------------------
    */

    private array $heroKeys = [
        // Main pages
        'contact'                      => 'contact_hero',
        'insights'                     => 'insights_hero',
        'why-led-media'                => 'why_led_hero',
        'services.index'               => 'services_hero',
        'projects.index'               => 'projects_hero',

        // Solutions
        'solutions.outdoor-billboards' => 'solutions_outdoor_billboards',
        'solutions.indoor-commercial'  => 'solutions_indoor_commercial',
        'solutions.fine-pixel'         => 'solutions_fine_pixel',
        'solutions.meeting-room'       => 'solutions_meeting_room',
        'solutions.retail'             => 'solutions_retail',
        'solutions.control-systems'    => 'solutions_control_systems',
        'solutions.installation'       => 'solutions_installation',

        // Industries
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
        // Main pages
        'why-led-media'                => 'about_why_led_media',
        'insights'                     => 'about_insights',
        'contact'                      => 'about_contact',
        'projects.index'               => 'about_projects',

        // Solutions
        'solutions.outdoor-billboards' => 'about_outdoor_billboards',
        'solutions.indoor-commercial'  => 'about_indoor_commercial',
        'solutions.fine-pixel'         => 'about_fine_pixel',
        'solutions.meeting-room'       => 'about_meeting_room',
        'solutions.retail'             => 'about_retail_showroom',
        'solutions.control-systems'    => 'about_control_systems',
        'solutions.installation'       => 'about_installation',

        // Industries
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
    | SHARED DATA LOADER — 2 queries max per page
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

        $featuredProjects = Project::where('status', 1)
            ->where('is_featured', 1)
            ->latest()
            ->take(6)
            ->get();

        return [
            'hero'             => $heroKey  ? $sections->get($heroKey)  : null,
            'about'            => $aboutKey ? $sections->get($aboutKey) : null,
            'featuredProjects' => $featuredProjects,
        ];
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

    /*
    |--------------------------------------------------------------------------
    | SOLUTIONS
    |--------------------------------------------------------------------------
    */

    public function outdoorBillboards()
    {
        return view('frontend.pages.solutions.outdoor-billboards',
            $this->getSharedData('solutions.outdoor-billboards'));
    }

    public function indoorCommercial()
    {
        return view('frontend.pages.solutions.indoor-commercial',
            $this->getSharedData('solutions.indoor-commercial'));
    }

    public function finePixel()
    {
        return view('frontend.pages.solutions.fine-pixel',
            $this->getSharedData('solutions.fine-pixel'));
    }

    public function meetingRoom()
    {
        return view('frontend.pages.solutions.meeting-room',
            $this->getSharedData('solutions.meeting-room'));
    }

    public function retail()
    {
        return view('frontend.pages.solutions.retail',
            $this->getSharedData('solutions.retail'));
    }

    public function controlSystems()
    {
        return view('frontend.pages.solutions.control-systems',
            $this->getSharedData('solutions.control-systems'));
    }

    public function installation()
    {
        return view('frontend.pages.solutions.installation',
            $this->getSharedData('solutions.installation'));
    }

    /*
    |--------------------------------------------------------------------------
    | INDUSTRIES
    |--------------------------------------------------------------------------
    */

    public function industryOutdoor()
    {
        return view('frontend.pages.industry.outdoorAd',
            $this->getSharedData('industries.outdoorAd'));
    }

    public function industryRetail()
    {
        return view('frontend.pages.industry.retail',
            $this->getSharedData('industries.retail'));
    }

    public function industryCorporate()
    {
        return view('frontend.pages.industry.corporate',
            $this->getSharedData('industries.corporate'));
    }

    public function industryDevelopers()
    {
        return view('frontend.pages.industry.developers',
            $this->getSharedData('industries.developers'));
    }

    public function industryAutomotive()
    {
        return view('frontend.pages.industry.automotive',
            $this->getSharedData('industries.automotive'));
    }

    public function industryHospitality()
    {
        return view('frontend.pages.industry.hospitality',
            $this->getSharedData('industries.hospitality'));
    }

    public function industryBanks()
    {
        return view('frontend.pages.industry.banks',
            $this->getSharedData('industries.banks'));
    }

    public function industryGovernment()
    {
        return view('frontend.pages.industry.government',
            $this->getSharedData('industries.government'));
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
            ->where('category', 'retail')  // ← was 'type', now 'category'
            ->latest()
            ->paginate(12),
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