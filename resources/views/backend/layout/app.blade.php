<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>@yield('title', 'Dashboard') — LED Media CMS</title>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
@vite(['resources/css/admin.css', 'resources/js/admin.js'])
@stack('styles')
</head>
<body class="admin-body">

{{-- SIDEBAR --}}
@include('backend.layout.sidebar')

{{-- MAIN --}}
<div class="admin-main">

    {{-- HEADER --}}
    @include('backend.layout.header')

    {{-- CONTENT --}}
    <main class="admin-content">

        {{-- Flash messages --}}
        @if (session('success'))
        <div class="alert alert-success alert-auto-dismiss">
            <span>✓</span> {{ session('success') }}
        </div>
        @endif
        @if (session('error'))
        <div class="alert alert-danger alert-auto-dismiss">
            <span>✕</span> {{ session('error') }}
        </div>
        @endif

        @yield('content')
    </main>
</div>

@stack('scripts')
</body>
</html>