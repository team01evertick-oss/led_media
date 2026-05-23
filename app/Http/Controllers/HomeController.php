<?php

namespace App\Http\Controllers;

use App\Models\HomePageSection;
use App\Models\Project;
use App\Models\Service;

class HomeController extends Controller
{
    public function index()
    {
        $sections = HomePageSection::where('status', 1)
            ->orderBy('sort_order')
            ->get()
            ->keyBy('section_key');

        $featuredProjects = Project::where('status', 1)
            ->where('is_featured', 1)
            ->latest()
            ->take(6)
            ->get();

        $services = Service::where('status', 1)
            ->where('is_featured', 1)
            ->latest()
            ->take(6)
            ->get();

        return view('frontend.pages.home.index', compact(
            'sections',
            'featuredProjects',
            'services',
        ));
    }
}