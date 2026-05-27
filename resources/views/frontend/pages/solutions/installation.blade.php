@extends('frontend.layouts.app')

@section('title', 'Indoor')

@section('content')

    {{-- HERO SECTION --}}
    @include('frontend.layouts.hero')

    {{-- ABOUT SECTION --}}
    @include('frontend.pages.home.about')

    {{-- BENEFIT --}}
    @include('frontend.pages.solutions.components.benefit')
    
    @include('frontend.pages.solutions.components.why-us', ['whyLed' => $whyLed])



    {{-- TECHNICAL FEATURES --}}
    @include('frontend.pages.solutions.components.technical-features')

    <!-- =========================================================
         WHERE IT IS USED SECTION
    ========================================================= -->
    <section class="meeting-display-section">

        <div class="meeting-display-container">

            <!-- TOP SECTION -->
            <div class="meeting-display-grid">

                <!-- LEFT CONTENT -->
                <div class="meeting-display-content">

                    <h2>Where It Is Used</h2>

                    <ul>

                        @forelse($solution->uses as $use)

                            <li>{{ $use->title }}</li>

                        @empty

                            <li>No uses listed.</li>

                        @endforelse

                    </ul>

                </div>

                <!-- RIGHT BOXES -->
                <div class="meeting-display-box-wrapper">

                    <!-- TOP ROW -->
                    <div class="meeting-display-row">

                        <div class="meeting-display-box"></div>

                        <div class="meeting-display-box"></div>

                    </div>

                    <!-- BOTTOM ROW -->
                    <div class="meeting-display-row">

                        <div class="meeting-display-box"></div>

                        <div class="meeting-display-box"></div>

                        <div class="meeting-display-box"></div>

                    </div>

                </div>

            </div>

            <!-- BENEFITS SECTION -->
            <div class="meeting-benefit-grid">

                <!-- IMAGE -->
                <div class="meeting-benefit-image">

                    <img
                        src="{{ asset('storage/image/Shinhan.png') }}"
                        alt="Benefits">

                </div>

                <!-- CONTENT -->
                <div class="meeting-benefit-content">

                    <h2>Benefits</h2>

                    <ul>

                        @forelse($solution->benefits as $benefit)

                            <li>{{ $benefit->title }}</li>

                        @empty

                            <li>No benefits listed.</li>

                        @endforelse

                    </ul>

                </div>

            </div>

        </div>

    </section>

    {{-- FAQ --}}
    @include('frontend.pages.solutions.components.faq')

    {{-- PARTNER --}}
    @include('frontend.pages.solutions.components.partner')

@endsection


@push('styles')

<style>

/* =========================================================
   MAIN SECTION
========================================================= */

.meeting-display-section {
    width: 100%;
    background: linear-gradient(90deg, #0a3ca7 0%, #02004d 100%);
    font-family: Arial, sans-serif;
    overflow: hidden;
    padding: 80px 0;
}
/* CONTAINER */

.meeting-display-container{
    width:90%;
    max-width:1200px;
    margin:auto;
}

/* =========================================================
   TOP SECTION
========================================================= */

.meeting-display-grid{
    display:grid;
    grid-template-columns:1fr 1fr;
    align-items:center;
    gap:80px;
    margin-bottom:80px;
}

/* LEFT CONTENT */

.meeting-display-content h2{
    font-size:38px;
    color:#fff;
    font-weight:100;
    margin-bottom:25px;
}

.meeting-display-content ul{
    padding-left:20px;
}

.meeting-display-content ul li{
    color:#fff;
    font-size:16px;
    line-height:2;
}

/* =========================================================
   RIGHT BOXES
========================================================= */

.meeting-display-box-wrapper{
    display:flex;
    flex-direction:column;
    gap:20px;
    align-items:center;
}

.meeting-display-row{
    display:flex;
    gap:20px;
    justify-content:center;
}

.meeting-display-box{
    width:110px;
    height:110px;
    background:#88A7D4;
    border-radius:10px;
}

/* =========================================================
   BENEFITS SECTION
========================================================= */

.meeting-benefit-grid{
    display:grid;
    grid-template-columns:1.1fr 1fr;
    gap:70px;
    align-items:center;
    background:#fff;
    padding:70px 40px;
    border-radius:16px;
    
}

/* IMAGE */

.meeting-benefit-image img{
    width:100%;
    height:30px;
    object-fit:cover;
    border-radius:12px;
    display:block;
}

/* CONTENT */

.meeting-benefit-content h2{
    color:#111;
    font-size:38px;
    font-weight:600;
    margin-bottom:25px;
}

.meeting-benefit-content ul{
    padding-left:20px;
}

.meeting-benefit-content ul li{
    color:#333;
    font-size:16px;
    line-height:2;
}

/* =========================================================
   RESPONSIVE
========================================================= */

@media(max-width:991px){

    .meeting-display-grid,
    .meeting-benefit-grid{
        grid-template-columns:1fr;
        text-align:center;
    }

    .meeting-display-content ul,
    .meeting-benefit-content ul{
        display:inline-block;
        text-align:left;
    }

    .meeting-display-box-wrapper{
        align-items:center;
    }

}

@media(max-width:576px){

    .meeting-display-section{
        padding:60px 0;
    }

    .meeting-display-grid{
        gap:50px;
        margin-bottom:50px;
    }

    .meeting-benefit-grid{
        padding:40px 20px;
        gap:40px;
    }

    .meeting-display-content h2,
    .meeting-benefit-content h2{
        font-size:28px;
    }

    .meeting-display-content ul li,
    .meeting-benefit-content ul li{
        font-size:14px;
    }

    .meeting-display-row{
        gap:10px;
    }

    .meeting-display-box{
        width:80px;
        height:80px;
    }

    .meeting-benefit-image img{
        height:220px;
    }

}

</style>

@endpush