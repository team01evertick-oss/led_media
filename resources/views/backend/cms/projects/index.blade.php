@extends('backend.layout.app')
@section('title', 'Projects')
@section('breadcrumb')<span>Projects</span>@endsection

@section('content')
<div class="page-header">
    <div>
        <h1 class="page-title">Projects</h1>
        <p class="page-subtitle">Manage LED display project portfolio</p>
    </div>
    <a href="{{ route('admin.projects.create') }}" class="btn btn-primary">
        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
        Add Project
    </a>
</div>

<div class="admin-card">
    @if($projects->isEmpty())
    <div class="empty-state">
        <div class="empty-state-icon">🏗️</div>
        <div class="empty-state-title">No projects yet</div>
        <div class="empty-state-text">Add your first LED project to the portfolio.</div>
        <a href="{{ route('admin.projects.create') }}" class="btn btn-primary">Add Project</a>
    </div>
    @else
    <div class="admin-table-wrap">
        <table class="admin-table">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Project</th>
                    <th>Client</th>
                    <th>Type</th>
                    <th>Featured</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($projects as $project)
            <tr>
                <td>
                    @if($project->featuredImage)
                    <img src="{{ $project->featuredImage->url }}" style="width:60px;height:40px;object-fit:cover;border-radius:6px;" alt="">
                    @else
                    <div style="width:60px;height:40px;background:#f1f5f9;border-radius:6px;display:flex;align-items:center;justify-content:center;font-size:18px;">📷</div>
                    @endif
                </td>
                <td>
                    <div style="font-weight:600;">{{ $project->title }}</div>
                    @if($project->location)
                    <div style="font-size:12px;color:var(--admin-text-muted);">📍 {{ $project->location }}</div>
                    @endif
                </td>
                <td style="font-size:13px;">{{ $project->client ?? '—' }}</td>
                <td style="font-size:13px;">{{ $project->project_type ?? '—' }}</td>
                <td>
                    <span class="badge {{ $project->is_featured ? 'badge-info' : 'badge-gray' }}">
                        {{ $project->is_featured ? 'Featured' : 'Normal' }}
                    </span>
                </td>
                <td>
                    <span class="badge {{ $project->status === 'published' ? 'badge-success' : 'badge-warning' }}">
                        {{ ucfirst($project->status) }}
                    </span>
                </td>
                <td>
                    <div style="display:flex;gap:6px;">
                        <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-secondary btn-sm">Edit</a>
                        <form method="POST" action="{{ route('admin.projects.destroy', $project) }}" style="display:inline;">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" data-confirm="Delete this project?">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    @if($projects->hasPages())
    <div class="admin-pagination">
        <span>Showing {{ $projects->firstItem() }}–{{ $projects->lastItem() }} of {{ $projects->total() }}</span>
        {{ $projects->links() }}
    </div>
    @endif
    @endif
</div>
@endsection