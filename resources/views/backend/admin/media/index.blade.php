@extends('backend.layout.app')
@section('title', 'Media Library')
@section('breadcrumb')<span>Media Library</span>@endsection

@section('content')
<div class="page-header">
    <div>
        <h1 class="page-title">Media Library</h1>
        <p class="page-subtitle">Upload and manage images and files</p>
    </div>
    <button onclick="document.getElementById('upload-modal').style.display='flex'" class="btn btn-primary">
        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="16 16 12 12 8 16"/><line x1="12" y1="12" x2="12" y2="21"/><path d="M20.39 18.39A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.3"/></svg>
        Upload Files
    </button>
</div>

{{-- Filters --}}
<div style="display:flex;gap:10px;margin-bottom:20px;align-items:center;">
    <form method="GET" style="display:flex;gap:10px;flex:1;">
        <input type="text" name="search" class="form-input" style="max-width:260px;"
            placeholder="Search files..." value="{{ request('search') }}">
        <select name="folder" class="form-select" style="max-width:160px;" onchange="this.form.submit()">
            <option value="all">All Folders</option>
            @foreach($folders as $f)
            <option value="{{ $f }}" {{ $folder === $f ? 'selected' : '' }}>{{ ucfirst($f) }}</option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-secondary">Filter</button>
    </form>
</div>

{{-- Media Grid --}}
@if($media->isEmpty())
<div class="admin-card">
    <div class="empty-state">
        <div class="empty-state-icon">🖼️</div>
        <div class="empty-state-title">No files yet</div>
        <div class="empty-state-text">Upload your first media file.</div>
    </div>
</div>
@else
<div class="media-grid">
    @foreach($media as $file)
    <div class="media-item" id="media-{{ $file->id }}">
        <div class="media-thumb">
            @if($file->isImage())
            <img src="{{ $file->url }}" alt="{{ $file->alt_text ?? $file->name }}" loading="lazy">
            @else
            <div style="width:100%;height:100%;display:flex;align-items:center;justify-content:center;font-size:36px;background:#f8fafc;">
                {{ str_starts_with($file->mime_type,'video/') ? '🎥' : '📄' }}
            </div>
            @endif
        </div>
        <div class="media-name" title="{{ $file->name }}">{{ $file->name }}</div>
        <div style="padding:4px 8px 8px;display:flex;justify-content:space-between;align-items:center;">
            <span style="font-size:11px;color:var(--admin-text-muted);">{{ $file->file_size }}</span>
            <form method="POST" action="{{ route('admin.media.destroy', $file) }}" style="display:inline;">
                @csrf @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm" style="padding:3px 8px;"
                    data-confirm="Delete this file?">×</button>
            </form>
        </div>
    </div>
    @endforeach
</div>
@if($media->hasPages())
<div style="margin-top:24px;">{{ $media->links() }}</div>
@endif
@endif

{{-- Upload Modal --}}
<div id="upload-modal" style="display:none;position:fixed;inset:0;background:rgba(15,23,42,0.5);z-index:100;align-items:center;justify-content:center;padding:20px;">
    <div class="modal">
        <div class="modal-header">
            <span class="modal-title">Upload Files</span>
            <button class="modal-close" onclick="document.getElementById('upload-modal').style.display='none'">×</button>
        </div>
        <div class="modal-body">
            <form method="POST" action="{{ route('admin.media.store') }}" enctype="multipart/form-data" id="upload-form">
                @csrf
                <div class="form-group">
                    <label class="form-label">Folder</label>
                    <select name="folder" class="form-select">
                        <option value="general">General</option>
                        <option value="solutions">Solutions</option>
                        <option value="projects">Projects</option>
                        <option value="industries">Industries</option>
                        <option value="insights">Insights</option>
                        <option value="settings">Settings</option>
                    </select>
                </div>

                <div class="media-upload-zone" id="upload-zone">
                    <div style="font-size:36px;margin-bottom:12px;">☁️</div>
                    <div style="font-size:15px;font-weight:600;color:var(--admin-text);margin-bottom:6px;">Drag & drop files here</div>
                    <div style="font-size:13px;color:var(--admin-text-muted);">or click to browse · Max 10MB per file</div>
                    <input type="file" id="file-input" name="files[]" multiple accept="image/*,video/*,.pdf" style="display:none;"
                        onchange="showFileList(this)">
                </div>

                <div id="file-list" style="margin-top:12px;"></div>

                <div class="modal-footer" style="padding:16px 0 0;border:none;">
                    <button type="button" onclick="document.getElementById('upload-modal').style.display='none'" class="btn btn-secondary">Cancel</button>
                    <button type="submit" class="btn btn-primary">Upload</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
function showFileList(input) {
    const list = document.getElementById('file-list');
    list.innerHTML = Array.from(input.files).map(f =>
        `<div style="font-size:13px;padding:6px 0;border-bottom:1px solid #f1f5f9;color:var(--admin-text);">
            📎 ${f.name} <span style="color:var(--admin-text-muted);">(${(f.size/1024).toFixed(1)} KB)</span>
        </div>`
    ).join('');
}
</script>
@endpush