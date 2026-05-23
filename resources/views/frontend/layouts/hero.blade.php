@php

use Illuminate\Support\Facades\Route;

$routeName = Route::currentRouteName();

/*
|--------------------------------------------------------------------------
| MAP ROUTE => HERO SECTION KEY
|--------------------------------------------------------------------------
*/
$sectionKey = match ($routeName) {

    // HOME
    'home' => 'hero',

    // MAIN PAGES
    'contact' => 'contact',
    'insights' => 'insights',
    'why-led-media' => 'why_led_media',
    'services.index' => 'services',

    // SOLUTIONS
    'solutions.outdoor-billboards' => 'solution_outdoor_billboards',
    'solutions.indoor-commercial' => 'solution_indoor_commercial',
    'solutions.fine-pixel' => 'solution_fine_pixel',
    'solutions.meeting-room' => 'solution_fine_pixel',
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

/*
|--------------------------------------------------------------------------
| LOAD HERO DATA
|--------------------------------------------------------------------------
*/

$hero = \App\Models\HomePageSection::where('section_key', $sectionKey)
            ->where('status', 1)
            ->first();

/*
|--------------------------------------------------------------------------
| BACKGROUND IMAGES
|--------------------------------------------------------------------------
*/

$bgImage = !empty($hero?->image)
    ? asset('storage/' . $hero->image)
    : asset('image/home_page_bg1.png');

$overlayImage = !empty($hero?->background_image)
    ? asset('storage/' . $hero->background_image)
    : asset('image/home_page_bg2.png');

@endphp


<section class="hero-section">

    {{-- MAIN BACKGROUND --}}
    <div class="hero-bg-image"
         style="
            background-image:
            linear-gradient(rgba(2,6,23,.72), rgba(2,6,23,.90)),
            url('{{ $bgImage }}');
         ">
    </div>

    {{-- OVERLAY IMAGE --}}
    <div class="hero-overlay"
         style="
            background-image:
            url('{{ $overlayImage }}');
         ">
    </div>

    {{-- BLUE GLOW --}}
    <div class="hero-glow"></div>

    {{-- HERO CONTENT --}}
    <div class="hero-content">

        {{-- SUBTITLE --}}
        @if(!empty($hero?->subtitle))
            <h4 class="hero-subtitle">
                {{ $hero->subtitle }}
            </h4>
        @endif

        {{-- TITLE --}}
        @if(!empty($hero?->title))
            <h1 class="hero-title">
                {{ $hero->title }}
            </h1>
        @endif

        {{-- DESCRIPTION --}}
        @if(!empty($hero?->content))
            <p class="hero-text">
                {{ $hero->content }}
            </p>
        @endif

        {{-- BUTTONS --}}
        @if(!empty($hero?->button_text) || !empty($hero?->secondary_button_text))

            <div class="hero-buttons">

                {{-- PRIMARY BUTTON --}}
                @if(!empty($hero?->button_text))
                    <a href="{{ $hero->button_link ?? '#' }}"
                       class="btn-primary-custom">

                        {{ $hero->button_text }}

                    </a>
                @endif

                {{-- SECONDARY BUTTON --}}
                @if(!empty($hero?->secondary_button_text))
                    <a href="{{ $hero->secondary_button_link ?? '#' }}"
                       class="btn-dark-custom">

                        {{ $hero->secondary_button_text }}

                    </a>
                @endif

            </div>

        @endif

    </div>

</section>


<style>

/* =========================================================
   HERO SECTION
========================================================= */

.hero-section{

    position: relative;

    min-height: 92vh;

    display: flex;
    align-items: center;
    justify-content: center;

    text-align: center;

    overflow: hidden;

    padding: 150px 20px 90px;

    background: #020617;

    border-bottom:
        1px solid rgba(255,255,255,.04);
}


/* CINEMATIC FADE */

.hero-section::after{

    content: "";

    position: absolute;

    left: 0;
    bottom: 0;

    width: 100%;
    height: 180px;

    background:
        linear-gradient(
            to bottom,
            transparent,
            #000000
        );

    z-index: 4;
}


/* =========================================================
   MAIN BACKGROUND IMAGE
========================================================= */

.hero-bg-image{

    position: absolute;
    inset: 0;

    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;

    z-index: 1;
}


/* =========================================================
   SECOND OVERLAY IMAGE
========================================================= */

.hero-overlay{

    position: absolute;
    inset: 0;

    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;

    mix-blend-mode: screen;

    opacity: .50;

    z-index: 2;
}


/* =========================================================
   BLUE GLOW
========================================================= */

.hero-glow{

    position: absolute;

    width: 760px;
    height: 760px;

    border-radius: 50%;

    background:
        radial-gradient(
            circle,
            rgba(0,102,255,.42) 0%,
            rgba(0,102,255,.14) 42%,
            transparent 72%
        );

    top: 42%;
    left: 50%;

    transform: translate(-50%, -50%);

    filter: blur(80px);

    opacity: .9;

    z-index: 3;
}


/* =========================================================
   CONTENT
========================================================= */

.hero-content{

    position: relative;

    z-index: 10;

    max-width: 820px;
}


/* BACKDROP FOR TEXT */

.hero-content::before{

    content: "";

    position: absolute;

    inset: -40px;

    background:
        radial-gradient(
            circle,
            rgba(0,0,0,.38),
            transparent 75%
        );

    z-index: -1;
}


/* =========================================================
   SUBTITLE
========================================================= */

.hero-subtitle{

    color: #ffffff;

    font-size: 16px;
    font-weight: 700;

    letter-spacing: 6px;

    text-transform: uppercase;

    margin-bottom: 26px;

    opacity: .95;
}


/* =========================================================
   TITLE
========================================================= */

.hero-title{

    color: #ffffff;

    font-size: 64px;
    font-weight: 700;

    line-height: 1.08;

    letter-spacing: -1px;

    margin-bottom: 28px;

    text-wrap: balance;
}


/* =========================================================
   TEXT
========================================================= */

.hero-text{

    color: rgba(255,255,255,.82);

    font-size: 16px;

    line-height: 1.9;

    max-width: 620px;

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


/* BUTTON BASE */

.btn-primary-custom,
.btn-dark-custom{

    min-width: 220px;

    height: 56px;

    border-radius: 60px;

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


/* PRIMARY BUTTON */

.btn-primary-custom{

    background:
        linear-gradient(
            135deg,
            #0057ff,
            #3b82f6
        );

    box-shadow:
        0 10px 25px rgba(0,102,255,.28);
}


/* DARK BUTTON */

.btn-dark-custom{

    background:
        rgba(20,20,30,.55);

    border:
        1px solid rgba(255,255,255,.10);

    backdrop-filter: blur(14px);
}


/* HOVER */

.btn-primary-custom:hover,
.btn-dark-custom:hover{

    transform: translateY(-3px);

    color: #ffffff;

    box-shadow:
        0 15px 35px rgba(0,0,0,.25);
}


/* =========================================================
   RESPONSIVE
========================================================= */

@media(max-width:991px){

    .hero-section{

        min-height: auto;

        padding: 180px 20px 110px;
    }

    .hero-content{

        max-width: 100%;
    }

    .hero-title{

        font-size: 46px;
    }

    .hero-text{

        max-width: 100%;
    }

    .hero-glow{

        width: 620px;
        height: 620px;
    }
}


@media(max-width:576px){

    .hero-section{

        padding: 170px 18px 90px;
    }

    .hero-subtitle{

        font-size: 13px;

        letter-spacing: 4px;
    }

    .hero-title{

        font-size: 34px;

        line-height: 1.18;
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

        width: 460px;
        height: 460px;

        filter: blur(100px);
    }
}

</style>