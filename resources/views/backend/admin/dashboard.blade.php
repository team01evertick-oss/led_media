@extends('backend.layout.app')
@section('title', 'Dashboard')
@section('breadcrumb')
    <span>Dashboard</span>
@endsection

@section('content')
<div class="page-header">
    <div>
        <h1 class="page-title">Dashboard</h1>
        <p class="page-subtitle">Welcome back, {{ auth()->user()->name }}. Here's your CMS overview.</p>
    </div>
    <div style="display:flex;gap:10px;">
        <a href="{{ route('admin.projects.create') }}" class="btn btn-primary">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
            New Project
        </a>
    </div>
</div>

{{-- Stats Grid --}}
<div style="display:grid;grid-template-columns:repeat(3,1fr);gap:16px;margin-bottom:28px;">
    @foreach([
        ['label'=>'Solutions',    'value'=>$stats['solutions'],  'color'=>'#1a56ff', 'icon'=>'Solutions available'],
        ['label'=>'Industries',   'value'=>$stats['industries'], 'color'=>'#7c3aed', 'icon'=>'Industries covered'],
        ['label'=>'Projects',     'value'=>$stats['projects'],   'color'=>'#0891b2', 'icon'=>'Completed projects'],
        ['label'=>'Insights',     'value'=>$stats['insights'],   'color'=>'#16a34a', 'icon'=>'Published articles'],
        ['label'=>'Media Files',  'value'=>$stats['media'],      'color'=>'#d97706', 'icon'=>'Uploaded files'],
        ['label'=>'New Messages', 'value'=>$stats['messages'],   'color'=>$stats['messages'] > 0 ? '#dc2626' : '#64748b', 'icon'=>'Awaiting reply'],
    ] as $stat)
    <div class="admin-card" style="padding:24px;">
        <div style="font-size:11px;font-weight:700;letter-spacing:1px;text-transform:uppercase;color:var(--admin-text-muted);margin-bottom:10px;">{{ $stat['label'] }}</div>
        <div style="font-size:36px;font-weight:800;color:{{ $stat['color'] }};line-height:1;">{{ $stat['value'] }}</div>
        <div style="font-size:12px;color:var(--admin-text-muted);margin-top:6px;">{{ $stat['icon'] }}</div>
    </div>
    @endforeach
</div>

<div style="display:grid;grid-template-columns:1fr 1fr;gap:20px;">

    {{-- Recent Messages --}}
    <div class="admin-card">
        <div class="admin-card-header">
            <span class="admin-card-title">New Messages</span>
            <a href="{{ route('admin.contact-messages.index') }}" class="btn btn-secondary btn-sm">View All</a>
        </div>
        @if($recentMessages->isEmpty())
        <div class="empty-state" style="padding:40px 24px;">
            <div class="empty-state-icon">📭</div>
            <div class="empty-state-text">No messages yet</div>
        </div>
        @else
        <div class="admin-table-wrap">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($recentMessages as $msg)
                <tr>
                    <td>
                        <a href="{{ route('admin.contact-messages.show', $msg) }}" style="font-weight:600;color:var(--admin-text);text-decoration:none;">
                            {{ $msg->name }}
                        </a>
                        <div style="font-size:12px;color:var(--admin-text-muted);">{{ $msg->email }}</div>
                    </td>
                    <td style="font-size:12.5px;">{{ $msg->project_type ?? '—' }}</td>
                    <td>
                        <span class="badge {{ $msg->status === 'new' ? 'badge-danger' : 'badge-gray' }}">
                            {{ ucfirst($msg->status) }}
                        </span>
                    </td>
                    <td style="font-size:12px;color:var(--admin-text-muted);">{{ $msg->created_at->diffForHumans() }}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        @endif
    </div>

    {{-- Recent Projects --}}
    <div class="admin-card">
        <div class="admin-card-header">
            <span class="admin-card-title">Recent Projects</span>
            <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary btn-sm">View All</a>
        </div>
        @if($recentProjects->isEmpty())
        <div class="empty-state" style="padding:40px 24px;">
            <div class="empty-state-icon">📁</div>
            <div class="empty-state-text">No projects yet</div>
        </div>
        @else
        <div class="admin-table-wrap">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>Project</th>
                        <th>Client</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($recentProjects as $project)
                <tr>
                    <td>
                        <a href="{{ route('admin.projects.edit', $project) }}" style="font-weight:600;color:var(--admin-text);text-decoration:none;">
                            {{ $project->title }}
                        </a>
                        <div style="font-size:12px;color:var(--admin-text-muted);">{{ $project->location }}</div>
                    </td>
                    <td style="font-size:13px;">{{ $project->client ?? '—' }}</td>
                    <td>
                        <span class="badge {{ $project->status === 'published' ? 'badge-success' : 'badge-warning' }}">
                            {{ ucfirst($project->status) }}
                        </span>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        @endif
    </div>
</div>
@endsection