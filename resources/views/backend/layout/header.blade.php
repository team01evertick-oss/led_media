<header class="admin-header">
    <div class="admin-header-left">
        <button id="sidebar-toggle" style="display:none;background:none;border:none;cursor:pointer;padding:4px;">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
        </button>
        <nav class="admin-breadcrumb">
            <a href="{{ route('admin.dashboard') }}">Home</a>
            <span>›</span>
            @yield('breadcrumb')
        </nav>
    </div>
    <div class="admin-header-right">
        <a href="{{ url('/') }}" target="_blank" class="btn btn-secondary btn-sm">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
            View Site
        </a>
        <div style="font-size:13px;color:var(--admin-text-muted);">{{ auth()->user()->name }}</div>
    </div>
</header>