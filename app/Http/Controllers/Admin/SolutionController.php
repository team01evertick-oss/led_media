<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Solution;
use App\Models\Media;
use App\Services\SeoService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SolutionController extends Controller
{
    public function __construct(private SeoService $seoService) {}

    public function index()
    {
        $solutions = Solution::with('featuredImage')->orderBy('order')->paginate(15);
        return view('backend.cms.solutions.index', compact('solutions'));
    }

    public function create()
    {
        $model = new Solution();
        $seo   = null;
        return view('backend.cms.solutions.form', compact('model', 'seo'));
    }

    public function store(Request $request)
    {
        $data = $this->validateSolution($request);
        $data['slug'] = Str::slug($data['title']);
        $data['where_used'] = $this->parseLines($request->input('where_used_raw', ''));
        $data['benefits']   = $this->parseLines($request->input('benefits_raw', ''));
        $data['features']   = $this->parseFeatures($request->input('features_raw', ''));
        $data['faqs']       = $this->parseFaqs($request->input('faqs_data', ''));

        $solution = Solution::create($data);
        $this->seoService->saveSeo($solution, $this->seoData($request));

        return redirect()->route('admin.solutions.index')->with('success', 'Solution created successfully.');
    }

    public function edit(Solution $solution)
    {
        $seo = $solution->seo;
        $model = $solution;
        return view('backend.cms.solutions.form', compact('solution', 'model', 'seo'));
    }

    public function update(Request $request, Solution $solution)
    {
        $data = $this->validateSolution($request);
        $data['where_used'] = $this->parseLines($request->input('where_used_raw', ''));
        $data['benefits']   = $this->parseLines($request->input('benefits_raw', ''));
        $data['features']   = $this->parseFeatures($request->input('features_raw', ''));
        $data['faqs']       = $this->parseFaqs($request->input('faqs_data', ''));

        $solution->update($data);
        $this->seoService->saveSeo($solution, $this->seoData($request));

        return redirect()->route('admin.solutions.index')->with('success', 'Solution updated successfully.');
    }

    public function destroy(Solution $solution)
    {
        $solution->seo()->delete();
        $solution->delete();
        return redirect()->route('admin.solutions.index')->with('success', 'Solution deleted.');
    }

    private function validateSolution(Request $request): array
    {
        return $request->validate([
            'title'             => 'required|string|max:200',
            'tagline'           => 'nullable|string|max:255',
            'hero_eyebrow'      => 'nullable|string|max:100',
            'description'       => 'nullable|string',
            'what_it_is'        => 'nullable|string',
            'cta_title'         => 'nullable|string|max:200',
            'featured_image_id' => 'nullable|exists:media,id',
            'status'            => 'required|in:published,draft',
            'is_active'         => 'boolean',
            'order'             => 'integer',
        ]);
    }

    private function seoData(Request $request): array
    {
        return [
            'meta_title'       => $request->input('seo_title'),
            'meta_description' => $request->input('seo_description'),
            'meta_keywords'    => $request->input('seo_keywords'),
            'og_title'         => $request->input('og_title'),
            'og_description'   => $request->input('og_description'),
            'robots'           => $request->input('seo_robots', 'index,follow'),
            'canonical_url'    => $request->input('canonical_url'),
        ];
    }

    private function parseLines(string $raw): array
    {
        return array_values(array_filter(array_map('trim', explode("\n", $raw))));
    }

    private function parseFeatures(string $raw): array
    {
        $items = [];
        foreach (explode("\n", $raw) as $line) {
            $parts = explode('|', $line, 2);
            if (!empty(trim($parts[0]))) {
                $items[] = ['title' => trim($parts[0]), 'description' => trim($parts[1] ?? '')];
            }
        }
        return $items;
    }

    private function parseFaqs(string $raw): array
    {
        return json_decode($raw, true) ?? [];
    }
}