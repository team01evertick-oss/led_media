<?php

namespace App\Services;

use App\Models\Media;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class MediaService
{
    public function upload(UploadedFile $file, string $folder = 'general', int $uploadedBy = null): Media
    {
        $name = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $ext  = $file->getClientOriginalExtension();
        $fileName = Str::slug($name) . '-' . uniqid() . '.' . $ext;
        $path = "media/{$folder}/{$fileName}";

        Storage::disk('public')->put($path, file_get_contents($file));

        $width = $height = null;
        if (str_starts_with($file->getMimeType(), 'image/')) {
            [$width, $height] = getimagesize($file->getRealPath());
        }

        return Media::create([
            'name'        => $name,
            'file_name'   => $fileName,
            'mime_type'   => $file->getMimeType(),
            'path'        => $path,
            'disk'        => 'public',
            'size'        => $file->getSize(),
            'width'       => $width,
            'height'      => $height,
            'folder'      => $folder,
            'uploaded_by' => $uploadedBy ?? auth()->id(),
        ]);
    }

    public function delete(Media $media): bool
    {
        Storage::disk($media->disk)->delete($media->path);
        return $media->delete();
    }
}