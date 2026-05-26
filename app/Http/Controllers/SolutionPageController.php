<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Solution;
use App\Models\Project;

class SolutionPageController extends Controller
{
    private function getSolution(string $slug)
    {
        return Solution::with([
                'uses',
                'benefits',
                'technicalFeatures',
                'faqs',
                'partners',
            ])
            ->where('slug', $slug)
            ->where('status', true)
            ->firstOrFail();
    }

    private function getFeaturedProjects()
    {
        return Project::where('status', 1)
            ->where('is_featured', 1)
            ->orderBy('created_at', 'desc')
            ->limit(6)
            ->get();
    }

    public function outdoorBillboards()
    {
        $solution        = $this->getSolution('outdoor-billboards');
        $featuredProjects = $this->getFeaturedProjects();
        return view('frontend.pages.solutions.outdoor-billboards', compact('solution', 'featuredProjects'));
    }

    public function indoorCommercial()
    {
        $solution        = $this->getSolution('indoor-commercial');
        $featuredProjects = $this->getFeaturedProjects();
        return view('frontend.pages.solutions.indoor-commercial', compact('solution', 'featuredProjects'));
    }

    public function finePixel()
    {
        $solution        = $this->getSolution('fine-pixel');
        $featuredProjects = $this->getFeaturedProjects();
        return view('frontend.pages.solutions.fine-pixel', compact('solution', 'featuredProjects'));
    }

    public function meetingRoom()
    {
        $solution        = $this->getSolution('meeting-room');
        $featuredProjects = $this->getFeaturedProjects();
        return view('frontend.pages.solutions.meeting-room', compact('solution', 'featuredProjects'));
    }

    public function retail()
    {
        $solution        = $this->getSolution('retail');
        $featuredProjects = $this->getFeaturedProjects();
        return view('frontend.pages.solutions.retail', compact('solution', 'featuredProjects'));
    }

    public function controlSystems()
    {
        $solution        = $this->getSolution('control-systems');
        $featuredProjects = $this->getFeaturedProjects();
        return view('frontend.pages.solutions.control-systems', compact('solution', 'featuredProjects'));
    }

    public function installation()
    {
        $solution        = $this->getSolution('installation');
        $featuredProjects = $this->getFeaturedProjects();
        return view('frontend.pages.solutions.installation', compact('solution', 'featuredProjects'));
    }

    public function show(string $slug)
    {
        $solution        = $this->getSolution($slug);
        $featuredProjects = $this->getFeaturedProjects();
        return view('frontend.pages.solutions.' . $slug, compact('solution', 'featuredProjects'));
    }
}