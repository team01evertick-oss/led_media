<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Services\SeoService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    public function __construct(private SeoService $seoService) {}

    public function index()
    {
        $projects = Project::with('featuredImage')->orderBy('order')->paginate(15);
        return view('backend.cms.projects.index', compact('projects'));
    }

    public function create()
    {
        $model = new Project();
        $seo   = null;
        return view('backend.cms.projects.form', compact('model', 'seo'));
    }

    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'title'             => 'required|string|max:200',
            'client'            => 'nullable|string|max:200',
            'location'          => 'nullable|string|max:200',
            'project_type'      => 'nullable|string|max:200',
            'description'       => 'nullable|string',
            'content'           => 'nullable|string',
            'featured_image_id' => 'nullable|exists:media,id',
            'is_featured'       => 'boolean',
            'status'            => 'required|in:published,draft',
            'order'             => 'integer',
            'completed_at'      => 'nullable|date',
        ]);
        $data['slug'] = Str::slug($data['title']) . '-' . time();

        $project = Project::create($data);
        $this->seoService->saveSeo($project, [
            'meta_title'       => $request->input('seo_title'),
            'meta_description' => $request->input('seo_description'),
            'robots'           => $request->input('seo_robots', 'index,follow'),
        ]);

        return redirect()->route('admin.projects.index')->with('success', 'Project created.');
    }

    public function edit(Project $project)
    {
        $seo   = $project->seo;
        $model = $project;
        return view('backend.cms.projects.form', compact('project', 'model', 'seo'));
    }

    public function update(Request $request, Project $project)
    {
        $data = $this->validate($request, [
            'title'             => 'required|string|max:200',
            'client'            => 'nullable|string|max:200',
            'location'          => 'nullable|string|max:200',
            'project_type'      => 'nullable|string|max:200',
            'description'       => 'nullable|string',
            'content'           => 'nullable|string',
            'featured_image_id' => 'nullable|exists:media,id',
            'is_featured'       => 'boolean',
            'status'            => 'required|in:published,draft',
            'order'             => 'integer',
            'completed_at'      => 'nullable|date',
        ]);

        $project->update($data);
        $this->seoService->saveSeo($project, [
            'meta_title'       => $request->input('seo_title'),
            'meta_description' => $request->input('seo_description'),
            'robots'           => $request->input('seo_robots', 'index,follow'),
        ]);

        return redirect()->route('admin.projects.index')->with('success', 'Project updated.');
    }

    public function destroy(Project $project)
    {
        $project->seo()->delete();
        $project->delete();
        return redirect()->route('admin.projects.index')->with('success', 'Project deleted.');
    }
}