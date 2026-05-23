@extends('frontend.layouts.app')

@section('title', 'Why-led')

 {{-- HERO SECTION --}}
    @include('frontend.layouts.hero')
       {{-- HERO SECTION --}}
    @include('frontend.pages.home.about')
@section('content')
 
@include('frontend.pages.services.components.what-matter')

<section class="insight-section">

    <div class="container">

        <!-- TITLE -->

        <div class="insight-title">

            <h2>
                Why Follow Our Insights
            </h2>

        </div>

        <!-- GRID -->

        <div class="insight-grid">

            <!-- CARD -->

            <div class="insight-card">

                <div class="insight-image"></div>

                <h3>
                    Industry-focused
                    knowledge
                </h3>

            </div>

            <!-- CARD -->

            <div class="insight-card">

                <div class="insight-image"></div>

                <h3>
                    Practical commercial
                    guidance
                </h3>

            </div>

            <!-- CARD -->

            <div class="insight-card">

                <div class="insight-image"></div>

                <h3>
                    Technical
                    recommendations
                </h3>

            </div>

            <!-- CARD -->

            <div class="insight-card">

                <div class="insight-image"></div>

                <h3>
                    SEO-friendly
                    educational resources
                </h3>

            </div>

            <!-- CARD -->

            <div class="insight-card">

                <div class="insight-image"></div>

                <h3>
                    Real project experience
                    and expertise
                </h3>

            </div>

        </div>

    </div>

</section>
{{-- FAQ --}}
@include('frontend.pages.solutions.components.faq')

{{-- FAQ --}}
@include('frontend.pages.solutions.components.partner')



@endsection