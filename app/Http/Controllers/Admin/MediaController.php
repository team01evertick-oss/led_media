<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Media;
use App\Services\MediaService;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function __construct(private MediaService $mediaService) {}

    public function index(Request $request)
    {
        $query  = Media::latest();
        $folder = $request->input('folder', 'all');
        if ($folder !== 'all') $query->where('folder', $folder);
        if ($search = $request->input('search')) {
            $query->where('name', 'like', "%{$search}%");
        }
        $media   = $query->paginate(30);
        $folders = Media::distinct('folder')->pluck('folder');
        return view('backend.admin.media.index', compact('media', 'folders', 'folder'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'files'  => 'required|array',
            'files.*'=> 'file|max:10240|mimes:jpeg,jpg,png,gif,webp,svg,pdf,mp4',
            'folder' => 'nullable|string|max:50',
        ]);

        $uploaded = [];
        foreach ($request->file('files') as $file) {
            $uploaded[] = $this->mediaService->upload($file, $request->input('folder', 'general'));
        }

        if ($request->expectsJson()) {
            return response()->json(['success' => true, 'media' => $uploaded]);
        }

        return redirect()->route('admin.media.index')->with('success', count($uploaded) . ' file(s) uploaded.');
    }

    public function destroy(Media $media)
    {
        $this->mediaService->delete($media);

        if (request()->expectsJson()) {
            return response()->json(['success' => true]);
        }

        return redirect()->route('admin.media.index')->with('success', 'File deleted.');
    }

    public function picker(Request $request)
    {
        $media = Media::where('mime_type', 'like', 'image/%')->latest()->paginate(30);
        return view('backend.admin.media.picker', compact('media'));
    }
}