<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Services\MediaService;
use App\Services\SettingsService;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function __construct(private SettingsService $settingsService) {}

    public function index()
    {
        $groups = Setting::orderBy('group')->orderBy('order')->get()->groupBy('group');
        return view('backend.admin.settings.index', compact('groups'));
    }

    public function update(Request $request)
    {
        $group = $request->input('group', 'general');
        $data  = $request->except(['_token', '_method', 'group']);

        // Handle file uploads for logo/favicon
        if ($request->hasFile('logo_file')) {
            $media = app(MediaService::class)->upload($request->file('logo_file'), 'settings');
            $data['logo'] = $media->path;
        }
        if ($request->hasFile('favicon_file')) {
            $media = app(MediaService::class)->upload($request->file('favicon_file'), 'settings');
            $data['favicon'] = $media->path;
        }

        $this->settingsService->updateGroup($group, $data);

        return redirect()->back()->with('success', 'Settings saved successfully.');
    }
}