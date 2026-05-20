<aside class="admin-sidebar">

    {{-- Logo --}}
    <div class="sidebar-logo">
        <div class="sidebar-logo-text">LED <span>MEDIA</span></div>
        <div class="sidebar-logo-sub">Content Management</div>
    </div>

    {{-- Navigation --}}
    <nav class="sidebar-nav">

        {{-- MAIN --}}
        <div class="sidebar-section-label">Main</div>

        <a href="{{ route('admin.dashboard') }}"
           class="sidebar-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
            @include('backend.components.icon', ['name' => 'home'])
            Dashboard
        </a>

        {{-- CONTENT --}}
        <div class="sidebar-section-label">Content</div>

        <a href="{{ route('admin.pages.index') }}"
           class="sidebar-item {{ request()->routeIs('admin.pages.*') ? 'active' : '' }}">
            @include('backend.components.icon', ['name' => 'file'])
            Pages
        </a>

        <button class="sidebar-item {{ request()->routeIs('admin.solutions.*') ? 'active' : '' }}"
                data-submenu="submenu-solutions">
            @include('backend.components.icon', ['name' => 'grid'])
            Solutions
            <svg class="sidebar-chevron" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>
        </button>
        <div class="sidebar-submenu {{ request()->routeIs('admin.solutions.*') ? 'open' : '' }}" id="submenu-solutions">
            <a href="{{ route('admin.solutions.index') }}" class="sidebar-item {{ request()->routeIs('admin.solutions.index') ? 'active' : '' }}">All Solutions</a>
            <a href="{{ route('admin.solutions.create') }}" class="sidebar-item">Add New</a>
        </div>

        <button class="sidebar-item {{ request()->routeIs('admin.industries.*') ? 'active' : '' }}"
                data-submenu="submenu-industries">
            @include('backend.components.icon', ['name' => 'briefcase'])
            Industries
            <svg class="sidebar-chevron" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>
        </button>
        <div class="sidebar-submenu {{ request()->routeIs('admin.industries.*') ? 'open' : '' }}" id="submenu-industries">
            <a href="{{ route('admin.industries.index') }}" class="sidebar-item {{ request()->routeIs('admin.industries.index') ? 'active' : '' }}">All Industries</a>
            <a href="{{ route('admin.industries.create') }}" class="sidebar-item">Add New</a>
        </div>

        <button class="sidebar-item {{ request()->routeIs('admin.projects.*') ? 'active' : '' }}"
                data-submenu="submenu-projects">
            @include('backend.components.icon', ['name' => 'image'])
            Projects
            <svg class="sidebar-chevron" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>
        </button>
        <div class="sidebar-submenu {{ request()->routeIs('admin.projects.*') ? 'open' : '' }}" id="submenu-projects">
            <a href="{{ route('admin.projects.index') }}" class="sidebar-item">All Projects</a>
            <a href="{{ route('admin.projects.create') }}" class="sidebar-item">Add New</a>
        </div>

        <button class="sidebar-item {{ request()->routeIs('admin.insights.*') ? 'active' : '' }}"
                data-submenu="submenu-insights">
            @include('backend.components.icon', ['name' => 'book'])
            Insights
            <svg class="sidebar-chevron" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>
        </button>
        <div class="sidebar-submenu {{ request()->routeIs('admin.insights.*') ? 'open' : '' }}" id="submenu-insights">
            <a href="{{ route('admin.insights.index') }}" class="sidebar-item">All Insights</a>
            <a href="{{ route('admin.insights.create') }}" class="sidebar-item">Add New</a>
        </div>

        <a href="{{ route('admin.faqs.index') }}"
           class="sidebar-item {{ request()->routeIs('admin.faqs.*') ? 'active' : '' }}">
            @include('backend.components.icon', ['name' => 'help'])
            FAQs
        </a>

        <a href="{{ route('admin.blocks.index') }}"
           class="sidebar-item {{ request()->routeIs('admin.blocks.*') ? 'active' : '' }}">
            @include('backend.components.icon', ['name' => 'layers'])
            CMS Blocks
        </a>

        {{-- NAVIGATION --}}
        <div class="sidebar-section-label">Navigation</div>

        <a href="{{ route('admin.menu-groups.index') }}"
           class="sidebar-item {{ request()->routeIs('admin.menu-groups.*', 'admin.menus.*') ? 'active' : '' }}">
            @include('backend.components.icon', ['name' => 'menu'])
            Menus
        </a>

        {{-- MEDIA --}}
        <div class="sidebar-section-label">Media</div>

        <a href="{{ route('admin.media.index') }}"
           class="sidebar-item {{ request()->routeIs('admin.media.*') ? 'active' : '' }}">
            @include('backend.components.icon', ['name' => 'photo'])
            Media Library
        </a>

        {{-- CONTACT --}}
        <div class="sidebar-section-label">Contact</div>

        <a href="{{ route('admin.contact-info.index') }}"
           class="sidebar-item {{ request()->routeIs('admin.contact-info.*') ? 'active' : '' }}">
            @include('backend.components.icon', ['name' => 'map-pin'])
            Contact Info
        </a>

        <a href="{{ route('admin.contact-messages.index') }}"
           class="sidebar-item {{ request()->routeIs('admin.contact-messages.*') ? 'active' : '' }}">
            @include('backend.components.icon', ['name' => 'mail'])
            Messages
            @php $unread = \App\Models\ContactMessage::where('status', 'new')->count(); @endphp
            @if($unread > 0)
            <span class="sidebar-badge">{{ $unread }}</span>
            @endif
        </a>

        {{-- SETTINGS --}}
        <div class="sidebar-section-label">Settings</div>

        <a href="{{ route('admin.settings.index') }}"
           class="sidebar-item {{ request()->routeIs('admin.settings.*') ? 'active' : '' }}">
            @include('backend.components.icon', ['name' => 'settings'])
            Settings
        </a>

        <a href="{{ route('admin.users.index') }}"
           class="sidebar-item {{ request()->routeIs('admin.users.*') ? 'active' : '' }}">
            @include('backend.components.icon', ['name' => 'users'])
            Users
        </a>

    </nav>

    {{-- User footer --}}
    <div class="sidebar-footer">
        <div class="sidebar-user">
            <div class="sidebar-avatar">{{ auth()->user()->initials }}</div>
            <div>
                <div class="sidebar-user-name">{{ auth()->user()->name }}</div>
                <div class="sidebar-user-role">{{ ucfirst(str_replace('_', ' ', auth()->user()->role)) }}</div>
            </div>
            <a href="{{ route('admin.logout') }}"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
               style="margin-left:auto;color:rgba(255,255,255,0.3);text-decoration:none;font-size:18px;"
               title="Logout">→</a>
        </div>
        <form id="logout-form" method="POST" action="{{ route('admin.logout') }}" style="display:none;">@csrf</form>
    </div>
</aside>