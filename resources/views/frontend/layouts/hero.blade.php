@php

use Illuminate\Support\Facades\Route;

$routeName = Route::currentRouteName();

$sectionKey = match ($routeName) {

    'home' => 'hero',

    'contact' => 'contact',
    'insights' => 'insights',
    'why-led-media' => 'why_led_media',
    'services.index' => 'services',

    // SOLUTIONS
    'solutions.outdoor-billboards' => 'solution_outdoor_billboards',
    'solutions.indoor-commercial' => 'solution_indoor_commercial',
    'solutions.fine-pixel' => 'solution_fine_pixel',

    // FIXED
    'solutions.meeting-room' => 'solution_meeting_room',

    'solutions.retail' => 'solution_retail',
    'solutions.control-systems' => 'solution_control_systems',
    'solutions.installation' => 'solution_installation',

    // INDUSTRIES
    'industries.outdoorAd' => 'industry_outdoor_advertising',
    'industries.retail' => 'industry_retail',
    'industries.corporate' => 'industry_corporate',
    'industries.developers' => 'industry_developers',
    'industries.automotive' => 'industry_automotive',
    'industries.hospitality' => 'industry_hospitality',
    'industries.banks' => 'industry_banks',
    'industries.government' => 'industry_government',

    default => 'hero'
};

$hero = \App\Models\HomePageSection::where('section_key', $sectionKey)
            ->where('status', 1)
            ->first();

$bgImage = $hero?->background_image
    ? asset('storage/' . $hero->background_image)
    : asset('storage/image/home_page_bg1.png');

$overlayImage = asset('storage/image/home_page_bg2.png');

@endphp
<section class="hero-section">

    {{-- BACKGROUND --}}
    <div class="hero-bg-image"
         style="
            background-image:
            linear-gradient(
                rgba(2,6,23,.78),
                rgba(2,6,23,.92)
            ),
            url('{{ $bgImage }}');
         ">
    </div>

    {{-- PARTICLES --}}
    <div class="hero-particles"></div>

    {{-- OVERLAY --}}
    <div class="hero-overlay"
         style="
            background-image:
            url('{{ $overlayImage }}');
         ">
    </div>

    {{-- BLUE LIGHT --}}
    <div class="hero-glow"></div>

    {{-- DIAGONAL LIGHT --}}
    <div class="hero-diagonal"></div>

    {{-- CONTENT --}}
    <div class="hero-content">

        @if(!empty($hero?->subtitle))
            <h4 class="hero-subtitle">
                {{ $hero->subtitle }}
            </h4>
        @endif

        @if(!empty($hero?->title))
            <h1 class="hero-title">
                {{ $hero->title }}
            </h1>
        @endif

        @if(!empty($hero?->content))
            <p class="hero-text">
                {{ $hero->content }}
            </p>
        @endif

        {{-- BUTTONS --}}
        <div class="hero-buttons">

            @if($hero?->button_text)
                <a href="{{ $hero->button_link ?? '#' }}"
                   class="btn-primary-custom">

                    {{ $hero->button_text }}

                </a>
            @endif

            @if($hero?->secondary_button_text)
                <a href="{{ $hero->secondary_button_link ?? '#' }}"
                   class="btn-dark-custom">

                    {{ $hero->secondary_button_text }}

                </a>
            @endif

        </div>

    </div>

</section>



<style>

/* =========================================================
   HERO SECTION
========================================================= */

.hero-section{

    position: relative;

    min-height: 100vh;

    display: flex;
    align-items: center;
    justify-content: center;

    text-align: center;

    overflow: hidden;

    padding: 160px 20px 100px;

    background: #020617;
}


/* =========================================================
   BOTTOM FADE
========================================================= */

.hero-section::after{

    content: "";

    position: absolute;

    left: 0;
    bottom: 0;

    width: 100%;
    height: 240px;

    background:
        linear-gradient(
            to bottom,
            transparent,
            rgba(0,0,0,.95)
        );

    z-index: 10;
}


/* =========================================================
   BACKGROUND IMAGE
========================================================= */

.hero-bg-image{

    position: absolute;
    inset: 0;

    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;

    transform: scale(1.03);

    filter:
        saturate(1.05)
        brightness(.85);

    z-index: 1;
}


/* =========================================================
   PARTICLES
========================================================= */

.hero-particles{

    position: absolute;
    inset: 0;

    background-image:
        radial-gradient(
            rgba(255,255,255,.12) 1px,
            transparent 1px
        );

    background-size: 40px 40px;

    opacity: .15;

    z-index: 2;
}


/* =========================================================
   OVERLAY IMAGE
========================================================= */

.hero-overlay{

    position: absolute;
    inset: 0;

    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;

    mix-blend-mode: screen;

    opacity: .45;

    z-index: 3;
}


/* =========================================================
   BLUE GLOW
========================================================= */

.hero-glow{

    position: absolute;

    width: 1000px;
    height: 1000px;

    border-radius: 50%;

    background:
        radial-gradient(
            circle,
            rgba(37,99,235,.55) 0%,
            rgba(59,130,246,.18) 35%,
            transparent 72%
        );

    top: 50%;
    left: 38%;

    transform: translate(-50%, -50%);

    filter: blur(90px);

    opacity: .95;

    z-index: 4;
}


/* =========================================================
   DIAGONAL LIGHT
========================================================= */

.hero-diagonal{

    position: absolute;
    inset: 0;

    background:
        linear-gradient(
            120deg,
            rgba(0,87,255,.40) 0%,
            rgba(0,87,255,.12) 35%,
            transparent 65%
        );

    z-index: 5;
}


/* =========================================================
   CONTENT
========================================================= */

.hero-content{

    position: relative;

    z-index: 20;

    max-width: 900px;
}


/* =========================================================
   CONTENT BACKDROP
========================================================= */

.hero-content::before{

    content: "";

    position: absolute;

    inset: -60px;

    background:
        radial-gradient(
            circle,
            rgba(0,0,0,.45),
            transparent 72%
        );

    z-index: -1;
}


/* =========================================================
   SUBTITLE
========================================================= */

.hero-subtitle{

    color: #dbeafe;

    font-size: 15px;
    font-weight: 700;

    letter-spacing: 7px;

    text-transform: uppercase;

    margin-bottom: 24px;

    opacity: .95;
}


/* =========================================================
   TITLE
========================================================= */

.hero-title{

    color: #ffffff;

    font-size: 42px;
    font-weight: 100;

    line-height: 1.05;

    letter-spacing: -2px;

    margin-bottom: 30px;

    text-shadow:
        0 10px 40px rgba(0,0,0,.45);

    text-wrap: balance;
}


/* =========================================================
   TEXT
========================================================= */

.hero-text{

    color: rgba(255,255,255,.78);

    font-size: 17px;

    line-height: 1.9;

    max-width: 720px;

    margin:
        auto auto 45px;
}


/* =========================================================
   BUTTONS
========================================================= */

.hero-buttons{

    display: flex;

    justify-content: center;

    gap: 18px;

    flex-wrap: wrap;
}


/* =========================================================
   BUTTON BASE
========================================================= */

.btn-primary-custom,
.btn-dark-custom{

    min-width: 220px;

    height: 58px;

    border-radius: 999px;

    display: flex;

    align-items: center;
    justify-content: center;

    text-decoration: none;

    color: #ffffff;

    font-size: 14px;
    font-weight: 600;

    letter-spacing: .3px;

    transition: .35s ease;
}


/* =========================================================
   PRIMARY BUTTON
========================================================= */

.btn-primary-custom{

    background:
        linear-gradient(
            135deg,
            #2563eb,
            #3b82f6
        );

    box-shadow:
        0 10px 30px rgba(37,99,235,.45);
}


/* =========================================================
   DARK BUTTON
========================================================= */

.btn-dark-custom{

    background:
        rgba(15,23,42,.45);

    border:
        1px solid rgba(255,255,255,.10);

    backdrop-filter: blur(18px);
}


/* =========================================================
   HOVER
========================================================= */

.btn-primary-custom:hover,
.btn-dark-custom:hover{

    transform: translateY(-4px);

    color: #ffffff;

    box-shadow:
        0 18px 40px rgba(0,0,0,.30);
}


/* =========================================================
   RESPONSIVE
========================================================= */

@media(max-width:991px){

    .hero-section{

        padding: 180px 20px 110px;
    }

    .hero-title{

        font-size: 50px;
    }

    .hero-text{

        max-width: 100%;
    }

    .hero-glow{

        width: 700px;
        height: 700px;
    }
}


@media(max-width:576px){

    .hero-section{

        padding: 160px 18px 90px;
    }

    .hero-subtitle{

        font-size: 12px;

        letter-spacing: 4px;
    }

    .hero-title{

        font-size: 36px;

        line-height: 1.15;
    }

    .hero-text{

        font-size: 14px;

        line-height: 1.8;
    }

    .hero-buttons{

        flex-direction: column;

        align-items: center;
    }

    .btn-primary-custom,
    .btn-dark-custom{

        width: 100%;
    }

    .hero-glow{

        width: 500px;
        height: 500px;

        filter: blur(100px);
    }
}

</style>