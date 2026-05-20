<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use App\Models\Project;
use App\Models\Solution;
use App\Models\Industry;
use App\Models\Insight;
use App\Models\Media;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'solutions'   => Solution::count(),
            'industries'  => Industry::count(),
            'projects'    => Project::count(),
            'insights'    => Insight::count(),
            'media'       => Media::count(),
            'messages'    => ContactMessage::where('status', 'new')->count(),
        ];

        $recentMessages = ContactMessage::latest()->take(5)->get();
        $recentProjects = Project::latest()->take(5)->get();

        return view('backend.admin.dashboard', compact('stats', 'recentMessages', 'recentProjects'));
    }
}