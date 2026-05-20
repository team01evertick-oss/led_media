@extends('backend.layout.app')
@section('title', 'Solutions')
@section('breadcrumb')<span>Solutions</span>@endsection

@section('content')
<div class="page-header">
    <div>
        <h1 class="page-title">Solutions</h1>
        <p class="page-subtitle">Manage LED display solution pages</p>
    </div>
    <a href="{{ route('admin.solutions.create') }}" class="btn btn-primary">
        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
        Add Solution
    </a>
</div>

<div class="admin-card">
    @if($solutions->isEmpty())
    <div class="empty-state">
        <div class="empty-state-icon">📡</div>
        <div class="empty-state-title">No solutions yet</div>
        <div class="empty-state-text">Create your first LED display solution page.</div>
        <a href="{{ route('admin.solutions.create') }}" class="btn btn-primary">Add Solution</a>
    </div>
    @else
    <div class="admin-table-wrap">
        <table class="admin-table">
            <thead>
                <tr>
                    <th>Order</th>
                    <th>Solution</th>
                    <th>Status</th>
                    <th>Active</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($solutions as $solution)
            <tr>
                <td style="color:var(--admin-text-muted);font-size:13px;">{{ $solution->order }}</td>
                <td>
                    <div style="font-weight:600;">{{ $solution->title }}</div>
                    @if($solution->tagline)
                    <div style="font-size:12.5px;color:var(--admin-text-muted);">{{ Str::limit($solution->tagline, 60) }}</div>
                    @endif
                </td>
                <td>
                    <span class="badge {{ $solution->status === 'published' ? 'badge-success' : 'badge-warning' }}">
                        {{ ucfirst($solution->status) }}
                    </span>
                </td>
                <td>
                    <span class="badge {{ $solution->is_active ? 'badge-success' : 'badge-danger' }}">
                        {{ $solution->is_active ? 'Active' : 'Hidden' }}
                    </span>
                </td>
                <td>
                    <div style="display:flex;gap:6px;">
                        <a href="{{ route('admin.solutions.edit', $solution) }}" class="btn btn-secondary btn-sm">Edit</a>
                        <form method="POST" action="{{ route('admin.solutions.destroy', $solution) }}" style="display:inline;">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                data-confirm="Delete '{{ $solution->title }}'?">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    @if($solutions->hasPages())
    <div class="admin-pagination">
        <span>Showing {{ $solutions->firstItem() }}–{{ $solutions->lastItem() }} of {{ $solutions->total() }}</span>
        {{ $solutions->links() }}
    </div>
    @endif
    @endif
</div>
@endsection