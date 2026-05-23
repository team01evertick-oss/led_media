@extends('frontend.layouts.app')

@section('title', 'outdoor')

 {{-- HERO SECTION --}}
    @include('frontend.layouts.hero')
       {{-- HERO SECTION --}}
    @include('frontend.pages.home.about')
@section('content')
   <!-- TOP -->
    <div class="led-usage-row">

        <div class="led-container led-usage-grid">

            <!-- LEFT -->
            <div class="led-usage-content">

                <h2>
                    Where It Is Used
                </h2>

                <ul>

                    <li>Outdoor LED Billboards</li>

                    <li>Indoor Commercial LED Displays</li>

                    <li>Fine Pixel</li>

                    <li>Meeting Room Displays</li>

                    <li>Retail & Showroom LED Solutions</li>

                    <li>Control Systems & Integration</li>

                    <li>Installation & Structural Works</li>

                </ul>

            </div>

            <!-- RIGHT -->
            <div class="led-usage-image-card">

                <img src="images/usage.jpg"
                     alt="Usage">

            </div>

        </div>

    </div>
{{-- WHY LED --}}
@include('frontend.pages.solutions.components.why-led')

{{-- TECHNICAL FEATURES --}}
@include('frontend.pages.solutions.components.technical-features')


{{-- FEATURED PROJECTS --}}
@include('frontend.pages.solutions.components.featured')

{{-- FAQ --}}
@include('frontend.pages.solutions.components.faq')

{{-- FAQ --}}
@include('frontend.pages.solutions.components.partner')



@endsection