@extends('frontend.layouts.app')

@section('title', 'Why-led')

{{-- HERO SECTION --}}
@include('frontend.layouts.hero')

{{-- ABOUT SECTION --}}
@include('frontend.pages.home.about')

@section('content')

<!-- =========================================
     OUR STRENGTHS SECTION
========================================= -->

@include('frontend.pages.services.components.what-matter')

<section class="strength-section">

    <div class="strength-container">

        <!-- TITLE -->

        <div class="strength-title">

            <h2>
                Our Strengths
            </h2>

        </div>

        <!-- STRENGTH GRID -->

        <div class="strength-grid">

            <!-- CARD -->

            <div class="strength-card">

                <h3>
                    Professional
                    <br>
                    installation capability
                </h3>

            </div>

            <!-- CARD -->

            <div class="strength-card">

                <h3>
                    Indoor & outdoor
                    <br>
                    LED expertise
                </h3>

            </div>

            <!-- CARD -->

            <div class="strength-card">

                <h3>
                    Fine pixel display
                    <br>
                    solutions
                </h3>

            </div>

            <!-- CARD -->

            <div class="strength-card">

                <h3>
                    Strong project
                    <br>
                    coordination
                </h3>

            </div>

            <!-- CARD -->

            <div class="strength-card">

                <h3>
                    Flexible and
                    <br>
                    responsive support
                </h3>

            </div>

            <!-- CARD -->

            <div class="strength-card">

                <h3>
                    Commercial-grade
                    <br>
                    LED systems
                </h3>

            </div>

        </div>

        <!-- =========================================
             VISION & MISSION
        ========================================= -->

        <div class="vision-mission-wrapper">

            <!-- VISION -->

            <div class="vision-mission-card vision-card">

                <div class="vision-mission-icon">

                    <img
                        src="{{ asset('icon/goal.png') }}"
                        alt="Goal Icon"
                    >

                </div>

                <div class="vision-mission-content">

                    <h3>
                        Our Vision
                    </h3>

                    <p>
                        To become one of the leading LED display
                        solution providers in Cambodia with the
                        capability to support projects across
                        the ASEAN region.
                    </p>

                </div>

            </div>

            <!-- MISSION -->

            <div class="vision-mission-card mission-card">

                <div class="vision-mission-icon">

                    <img
                        src="{{ asset('icon/idea.png') }}"
                        alt="Idea Icon"
                    >

                </div>

                <div class="vision-mission-content">

                    <h3>
                        Our Mission
                    </h3>

                    <p>
                        To invest in advanced technologies,
                        professional systems, and skilled human
                        resources in order to deliver high-quality
                        LED display solutions that meet client
                        expectations across all project stages.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

{{-- FAQ --}}
@include('frontend.pages.solutions.components.faq')

{{-- PARTNER --}}
@include('frontend.pages.solutions.components.partner')

@endsection


<style>

/* =========================================
   SECTION
========================================= */

.strength-section{
    width:100%;
    padding:80px 0;

    /* CLEAN MODERN BACKGROUND */
    background:
        linear-gradient(
            180deg,
            #ffffff 0%,
            #f7faff 45%,
            #eef4ff 100%
        );

    overflow:hidden;
    font-family:Arial,sans-serif;
}

/* OPTIONAL CARD IMPROVEMENT */

.strength-card{
    min-height:110px;
    border-radius:14px;
    padding:20px 16px;

    display:flex;
    align-items:center;
    justify-content:center;

    text-align:center;

    background:#ffffff;

    border:1px solid rgba(0,102,255,0.08);

    box-shadow:
        0 4px 18px rgba(0,0,0,0.04);

    transition:0.3s ease;
}

.strength-card:hover{
    transform:translateY(-4px);

    box-shadow:
        0 10px 28px rgba(0,102,255,0.12);

    border-color:rgba(0,132,255,0.18);
}
/* =========================================
   CONTAINER
========================================= */

.strength-container{
    width:85%;
    max-width:950px;
    margin:auto;
}

/* =========================================
   TITLE
========================================= */

.strength-title{
    text-align:center;
    margin-bottom:45px;
}

.strength-title h2{
    font-size:34px;
    font-weight:100;
    color:#111;
}

/* =========================================
   GRID
========================================= */

.strength-grid{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:18px;
    margin-bottom:70px;
}

/* =========================================
   CARD
========================================= */



.strength-card:hover{
    transform:translateY(-4px);
    border-color:rgba(0,132,255,0.25);
}

.strength-card h3{
    color:#008cff;
    font-size:15px;
    line-height:1.6;
    font-weight:100;
}

/* =========================================
   VISION / MISSION WRAPPER
========================================= */

.vision-mission-wrapper{
    display:flex;
    flex-direction:column;
    gap:24px;
}

/* =========================================
   VM CARD
========================================= */

.vision-mission-card{
    display:flex;
    align-items:center;
    gap:24px;

    padding:28px;

    border-radius:16px;

    border:1px solid rgba(0,0,0,0.08);

    overflow:hidden;
}

/* VISION */

.vision-card{
    background:
        linear-gradient(
            90deg,
            #ffffff 0%,
            #dcecff 100%
        );
}

/* MISSION */

.mission-card{
    background:
        linear-gradient(
            90deg,
            #ffffff 0%,
            #f3f3f3 100%
        );
}

/* =========================================
   ICON
========================================= */

.vision-mission-icon{
    width:65px;
    min-width:65px;
}

.vision-mission-icon img{
    width:100%;
    display:block;
}

/* =========================================
   CONTENT
========================================= */

.vision-mission-content h3{
    color:#111;
    font-size:26px;
    font-weight:100;
    margin-bottom:10px;
}

.vision-mission-content p{
    color:#555;
    font-size:14px;
    line-height:1.8;
    font-weight:100;
    max-width:650px;
}

/* =========================================
   TABLET
========================================= */

@media(max-width:991px){

    .strength-grid{
        grid-template-columns:repeat(2,1fr);
    }

    .vision-mission-card{
        flex-direction:column;
        text-align:center;
    }

}

/* =========================================
   MOBILE
========================================= */

@media(max-width:576px){

    .strength-section{
        padding:60px 0;
    }

    .strength-container{
        width:90%;
    }

    .strength-title{
        margin-bottom:35px;
    }

    .strength-title h2{
        font-size:28px;
    }

    .strength-grid{
        grid-template-columns:1fr;
        gap:14px;
        margin-bottom:50px;
    }

    .strength-card{
        min-height:90px;
        padding:18px 14px;
    }

    .strength-card h3{
        font-size:14px;
    }

    .vision-mission-card{
        padding:22px 18px;
        gap:18px;
        border-radius:14px;
    }

    .vision-mission-icon{
        width:55px;
        min-width:55px;
    }

    .vision-mission-content h3{
        font-size:22px;
    }

    .vision-mission-content p{
        font-size:13px;
        line-height:1.7;
    }

}

</style>