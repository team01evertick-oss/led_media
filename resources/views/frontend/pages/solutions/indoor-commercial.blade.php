
@extends('frontend.layouts.app')

@section('title', 'meeting-room')

@section('content')

    {{-- HERO SECTION --}}
    @include('frontend.layouts.hero')

    {{-- ABOUT --}}
    @include('frontend.pages.home.about')

    {{-- BENEFIT --}}
    @include('frontend.pages.solutions.components.benefit')

    {{-- WHY US --}}
    @include('frontend.pages.solutions.components.why-us', ['whyLed' => $whyLed])

    {{-- TECHNICAL FEATURES --}}
    @include('frontend.pages.solutions.components.technical-features')

    {{-- FEATURED PROJECTS --}}
    <section class="featured-projects">

        <div class="featured-container">

            {{-- HEADING --}}
            <div class="featured-heading">

                <h2>
                    Featured Projects
                </h2>

                <p>
                    Supply and installation of commercial outdoor LED display
                    systems for bank branding and advertising visibility.
                </p>

            </div>

            {{-- PROJECT CARD --}}
            <div class="featured-project-card">

                {{-- IMAGE --}}
                <div class="featured-project-image">

                    <img
                        src="{{ asset('storage/image/Shinhan.png') }}"
                        alt="Retail LED Display Installation"
                    >

                </div>

                {{-- CONTENT --}}
                <div class="featured-project-content">

                    <h3>
                        Retail LED <br>
                        Display Installation
                    </h3>

                    <p>
                        Phnom Penh
                    </p>

                    <a href="#" class="featured-btn">
                        More Detail
                    </a>

                </div>

            </div>

            {{-- VIEW MORE --}}
            <div class="featured-bottom-btn">

                <a href="#">
                    View More Projects
                </a>

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

.meeting-display-section{
    width:100%;
    min-height:900px;
    background:linear-gradient(90deg,#0a3ca7 0%, #02004d 100%);
    font-family:Arial,sans-serif;
    overflow:hidden;
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
    padding:80px 0;
}

/* LEFT CONTENT */

.meeting-display-content h2{
    font-size:38px;
    color:#fff;
    font-weight:300;
    margin-bottom:25px;
}

.meeting-display-content ul{
    padding-left:18px;
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
    padding:70px 40px;
    border-radius:16px;
}

/* IMAGE */

.meeting-benefit-image img{
    width:100%;
    height:260px;
    object-fit:cover;
    border-radius:10px;
}

/* CONTENT */

.meeting-benefit-content h2{
    color:#111;
    font-size:38px;
    font-weight:600;
    margin-bottom:25px;
}

.meeting-benefit-content ul{
    padding-left:18px;
}

.meeting-benefit-content ul li{
    color:#333;
    font-size:16px;
    line-height:2;
}

/* =========================================================
   FEATURED PROJECTS SECTION
========================================================= */

.featured-projects{
    width:100%;
    padding:90px 20px;

    background:
    radial-gradient(
        circle at bottom right,
        rgba(40,90,255,0.25),
        transparent 30%
    ),
    linear-gradient(135deg,#01004b 0%, #000033 100%);

    font-family:Arial,sans-serif;
    overflow:hidden;
}

/* CONTAINER */

.featured-container{
    width:100%;
    max-width:1200px;
    margin:auto;
}

/* =========================================================
   HEADING
========================================================= */

.featured-heading{
    margin-bottom:55px;
}

.featured-heading h2{
    color:#fff;
    font-size:42px;
    font-weight:300;
    margin-bottom:16px;
}

.featured-heading p{
    color:rgba(255,255,255,0.75);
    font-size:16px;
    line-height:1.6;
    max-width:620px;
}

/* =========================================================
   PROJECT CARD
========================================================= */

.featured-project-card{
    display:grid;
    grid-template-columns:1.2fr 1fr;
    align-items:center;

    background:
    radial-gradient(
        circle at center right,
        rgba(0,102,255,0.45),
        transparent 35%
    ),
    #031059;

    border:1px solid rgba(255,255,255,0.25);

    border-radius:16px;

    overflow:hidden;

    margin-bottom:65px;
}

/* IMAGE */

.featured-project-image{
    padding:10px;
}

.featured-project-image img{
    width:100%;
    height:300px;
    object-fit:cover;
    border-radius:12px;
    display:block;
}

/* CONTENT */

.featured-project-content{
    padding:50px 55px;
}

.featured-project-content h3{
    color:#fff;
    font-size:44px;
    font-weight:300;
    margin-bottom:22px;
    line-height:1.2;
}

.featured-project-content p{
    color:rgba(255,255,255,0.8);
    font-size:18px;
    line-height:1.7;
    margin-bottom:35px;
}

/* BUTTON */

.featured-btn{
    display:inline-flex;
    align-items:center;
    justify-content:center;

    min-width:140px;
    height:44px;

    padding:0 24px;

    background:linear-gradient(90deg,#1684ff,#1d2cff);

    color:#fff;
    text-decoration:none;
    font-size:14px;

    border-radius:50px;

    transition:0.3s ease;
}

.featured-btn:hover{
    transform:translateY(-2px);
    color:#fff;
}

/* BOTTOM BUTTON */

.featured-bottom-btn{
    text-align:center;
}

.featured-bottom-btn a{
    display:inline-flex;
    align-items:center;
    justify-content:center;

    min-width:320px;
    height:60px;

    padding:0 30px;

    background:linear-gradient(90deg,#1684ff,#1d2cff);

    color:#fff;
    text-decoration:none;

    font-size:18px;

    border-radius:50px;

    transition:0.3s ease;
}

.featured-bottom-btn a:hover{
    transform:translateY(-2px);
    color:#fff;
}

/* =========================================================
   RESPONSIVE
========================================================= */

@media(max-width:991px){

    .meeting-display-grid,
    .meeting-benefit-grid,
    .featured-project-card{
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

    .featured-project-content{
        padding:40px 30px;
    }

    .featured-project-content h3{
        font-size:34px;
    }

}

@media(max-width:576px){

    .meeting-display-grid{
        padding:60px 0;
        gap:50px;
    }

    .meeting-benefit-grid{
        padding:50px 20px;
        gap:40px;
    }

    .meeting-display-content h2,
    .meeting-benefit-content h2,
    .featured-heading h2{
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

    .meeting-benefit-image img,
    .featured-project-image img{
        height:220px;
    }

    .featured-project-content{
        padding:30px 20px;
    }

    .featured-project-content h3{
        font-size:28px;
    }

    .featured-project-content p{
        font-size:15px;
    }

    .featured-bottom-btn a{
        min-width:230px;
        height:52px;
        font-size:15px;
    }

}

</style>

@endpush