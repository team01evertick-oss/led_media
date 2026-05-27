<?php

namespace App\Http\Controllers;

use App\Models\Solution;
use App\Models\Project;
use App\Models\WhyLedMedia;

class SolutionPageController extends Controller
{
    // =========================================================
    // HELPERS
    // =========================================================

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
            ->latest()
            ->limit(6)
            ->get();
    }

    private function getWhyLed(string $slug)
    {
        return WhyLedMedia::forPage($slug);
    }

    // =========================================================
    // STATIC PAGES (SAFE & DIRECT)
    // =========================================================

    public function outdoorBillboards()
    {
        $solution = $this->getSolution('outdoor-billboards');

        return view('frontend.pages.solutions.outdoor-billboards', [
            'solution' => $solution,
            'featuredProjects' => $this->getFeaturedProjects(),
            'whyLed' => $this->getWhyLed('outdoor-billboards'),
        ]);
    }

    public function indoorCommercial()
    {
        $solution = $this->getSolution('indoor-commercial');

        return view('frontend.pages.solutions.indoor-commercial', [
            'solution' => $solution,
            'featuredProjects' => $this->getFeaturedProjects(),
            'whyLed' => $this->getWhyLed('indoor-commercial'),
        ]);
    }

    public function finePixel()
    {
        $solution = $this->getSolution('fine-pixel');

        return view('frontend.pages.solutions.fine-pixel', [
            'solution' => $solution,
            'featuredProjects' => $this->getFeaturedProjects(),
            'whyLed' => $this->getWhyLed('fine-pixel'),
        ]);
    }

    public function meetingRoom()
    {
        $solution = $this->getSolution('meeting-room');

        return view('frontend.pages.solutions.meeting-room', [
            'solution' => $solution,
            'featuredProjects' => $this->getFeaturedProjects(),
            'whyLed' => $this->getWhyLed('meeting-room'),
        ]);
    }

    public function retail()
    {
        $solution = $this->getSolution('retail');

        return view('frontend.pages.solutions.retail', [
            'solution' => $solution,
            'featuredProjects' => $this->getFeaturedProjects(),
            'whyLed' => $this->getWhyLed('retail'),
        ]);
    }

    public function controlSystems()
    {
        $solution = $this->getSolution('control-systems');

        return view('frontend.pages.solutions.control-systems', [
            'solution' => $solution,
            'featuredProjects' => $this->getFeaturedProjects(),
            'whyLed' => $this->getWhyLed('control-systems'),
        ]);
    }

    public function installation()
    {
        $solution = $this->getSolution('installation');

        return view('frontend.pages.solutions.installation', [
            'solution' => $solution,
            'featuredProjects' => $this->getFeaturedProjects(),
            'whyLed' => $this->getWhyLed('installation'),
        ]);
    }

    // =========================================================
    // DYNAMIC FALLBACK (IMPORTANT)
    // =========================================================

    public function show(string $slug)
    {
        $solution = $this->getSolution($slug);

        return view('frontend.pages.solutions.' . $slug, [
            'solution' => $solution,
            'featuredProjects' => $this->getFeaturedProjects(),
            'whyLed' => $this->getWhyLed($slug),
        ]);
    }
}