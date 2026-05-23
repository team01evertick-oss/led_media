<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Project;
use App\Models\SolutionPage;

class SolutionPageController extends Controller
{
    public function solution($slug)
    {
        $solution = SolutionPage::where('page_key', $slug)
            ->where('status', 1)
            ->with([
                'features',
                'faqs'
            ])
            ->firstOrFail();

        $featuredProjects = Project::where('status', 1)
            ->where('is_featured', 1)
            ->latest()
            ->take(6)
            ->get();

        return view(
            'frontend.pages.solutions.show',
            compact(
                'solution',
                'featuredProjects'
            )
        );
    }
}