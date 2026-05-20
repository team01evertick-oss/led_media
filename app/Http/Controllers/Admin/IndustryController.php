<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Industry;
use App\Services\SeoService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class IndustryController extends Controller
{
    public function __construct(private SeoService $seoService) {}

    public function index()
    {
        $industries = Industry::with('featuredImage')->orderBy('order')->paginate(15);
        return view('backend.cms.industries.index', compact('industries'));
    }

    public function create()
    {
        $model = new Industry(); $seo = null;
        return view('backend.cms.industries.form', compact('model', 'seo'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title'             => 'required|string|max:200',
            'tagline'           => 'nullable|string|max:255',
            'description'       => 'nullable|string',
            'overview'          => 'nullable|string',
            'icon'              => 'nullable|string|max:50',
            'cta_title'         => 'nullable|string|max:200',
            'featured_image_id' => 'nullable|exists:media,id',
            'status'            => 'required|in:published,draft',
            'is_active'         => 'boolean',
            'order'             => 'integer',
        ]);
        $data['slug']              = Str::slug($data['title']);
        $data['solutions_offered'] = array_values(array_filter(array_map('trim', explode("\n", $request->input('solutions_raw', '')))));
        $data['faqs']              = json_decode($request->input('faqs_data', '[]'), true) ?? [];

        $industry = Industry::create($data);
        $this->seoService->saveSeo($industry, ['meta_title' => $request->input('seo_title'), 'meta_description' => $request->input('seo_description'), 'robots' => 'index,follow']);

        return redirect()->route('admin.industries.index')->with('success', 'Industry created.');
    }

    public function edit(Industry $industry)
    {
        $seo = $industry->seo; $model = $industry;
        return view('backend.cms.industries.form', compact('industry', 'model', 'seo'));
    }

    public function update(Request $request, Industry $industry)
    {
        $data = $request->validate([
            'title'             => 'required|string|max:200',
            'tagline'           => 'nullable|string|max:255',
            'description'       => 'nullable|string',
            'overview'          => 'nullable|string',
            'icon'              => 'nullable|string|max:50',
            'cta_title'         => 'nullable|string|max:200',
            'featured_image_id' => 'nullable|exists:media,id',
            'status'            => 'required|in:published,draft',
            'is_active'         => 'boolean',
            'order'             => 'integer',
        ]);
        $data['solutions_offered'] = array_values(array_filter(array_map('trim', explode("\n", $request->input('solutions_raw', '')))));
        $data['faqs']              = json_decode($request->input('faqs_data', '[]'), true) ?? [];

        $industry->update($data);
        $this->seoService->saveSeo($industry, ['meta_title' => $request->input('seo_title'), 'meta_description' => $request->input('seo_description'), 'robots' => 'index,follow']);

        return redirect()->route('admin.industries.index')->with('success', 'Industry updated.');
    }

    public function destroy(Industry $industry)
    {
        $industry->seo()->delete(); $industry->delete();
        return redirect()->route('admin.industries.index')->with('success', 'Industry deleted.');
    }
}