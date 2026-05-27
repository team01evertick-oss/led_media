<!DOCTYPE html>
<html lang="en">

<head>

    {{-- META --}}
    @include('frontend.layouts.meta')

    {{-- TITLE --}}
    <title>
        @yield('title', 'LED MEDIA')
    </title>

    {{-- PAGE STYLES --}}
    @stack('styles')

</head>

<body class="bg-white text-gray-900 overflow-x-hidden">

    {{-- NAVBAR --}}
    @include('frontend.layouts.navbar')

    {{-- MAIN CONTENT --}}
    <main>

        @yield('content')

    </main>

    {{-- FOOTER --}}
    @include('frontend.layouts.footer')

    {{-- GLOBAL SCRIPTS --}}
    @include('frontend.layouts.scripts')

    {{-- PAGE SCRIPTS --}}
    @stack('scripts')

</body>

</html>