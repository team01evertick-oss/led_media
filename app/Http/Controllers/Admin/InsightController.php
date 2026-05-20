<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Insight;
use App\Services\SeoService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class InsightController extends Controller
{
    public function __construct(private SeoService $seoService) {}

    public function index()
    {
        $insights = Insight::with('featuredImage')->latest()->paginate(15);
        return view('backend.cms.insights.index', compact('insights'));
    }

    public function create()
    {
        $model = new Insight(); $seo = null;
        return view('backend.cms.insights.form', compact('model', 'seo'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title'             => 'required|string|max:200',
            'category'          => 'nullable|string|max:100',
            'excerpt'           => 'nullable|string',
            'content'           => 'nullable|string',
            'featured_image_id' => 'nullable|exists:media,id',
            'is_featured'       => 'boolean',
            'status'            => 'required|in:published,draft',
            'order'             => 'integer',
            'published_at'      => 'nullable|date',
        ]);
        $data['slug']         = Str::slug($data['title']) . '-' . time();
        $data['published_at'] = $data['status'] === 'published' && empty($data['published_at']) ? now() : ($data['published_at'] ?? null);

        $insight = Insight::create($data);
        $this->seoService->saveSeo($insight, ['meta_title' => $request->input('seo_title'), 'meta_description' => $request->input('seo_description'), 'robots' => 'index,follow']);

        return redirect()->route('admin.insights.index')->with('success', 'Insight created.');
    }

    public function edit(Insight $insight)
    {
        $seo = $insight->seo; $model = $insight;
        return view('backend.cms.insights.form', compact('insight', 'model', 'seo'));
    }

    public function update(Request $request, Insight $insight)
    {
        $data = $request->validate([
            'title'             => 'required|string|max:200',
            'category'          => 'nullable|string|max:100',
            'excerpt'           => 'nullable|string',
            'content'           => 'nullable|string',
            'featured_image_id' => 'nullable|exists:media,id',
            'is_featured'       => 'boolean',
            'status'            => 'required|in:published,draft',
            'order'             => 'integer',
            'published_at'      => 'nullable|date',
        ]);
        $insight->update($data);
        $this->seoService->saveSeo($insight, ['meta_title' => $request->input('seo_title'), 'meta_description' => $request->input('seo_description'), 'robots' => 'index,follow']);

        return redirect()->route('admin.insights.index')->with('success', 'Insight updated.');
    }

    public function destroy(Insight $insight)
    {
        $insight->seo()->delete(); $insight->delete();
        return redirect()->route('admin.insights.index')->with('success', 'Insight deleted.');
    }
}