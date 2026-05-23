@php
    // Home page: $sections collection exists
    // Other pages: $about is passed directly

    $about = $about
        ?? (isset($sections) ? $sections->get('hero') : null);
@endphp

@if($about)

<section class="about-section">

    <div class="container">

        <div class="about-content">

            {{-- TITLE --}}
            @if(!empty($about->title))
                <h2 class="about-title">
                    {!! $about->title !!}
                </h2>
            @endif

            {{-- CONTENT --}}
            @if(!empty($about->content))
                <p class="about-text">
                    {!! $about->content !!}
                </p>
            @endif

            {{-- SECOND CONTENT --}}
            @if(!empty($about->extra_data['content_2']))
                <p class="about-text">
                    {!! $about->extra_data['content_2'] !!}
                </p>
            @endif

        </div>

    </div>

</section>

@endif
<style>
    /* =========================================================
   ABOUT SECTION
========================================================= */

.about-section{

    position: relative;

    padding: 120px 0;

    background: #ffffff;

    overflow: hidden;
}


/* OPTIONAL SOFT BLUE GLOW */

.about-section::before{

    content: "";

    position: absolute;

    top: -200px;
    right: -200px;

    width: 500px;
    height: 500px;

    border-radius: 50%;

    background:
        radial-gradient(
            circle,
            rgba(0,102,255,.08),
            transparent 70%
        );

    z-index: 1;
}


/* =========================================================
   CONTENT
========================================================= */

.about-content{

    position: relative;

    z-index: 2;


    margin: auto;

    text-align: center;
}


/* =========================================================
   TITLE
========================================================= */

.about-title{

    color: #111827;

    font-size: 54px;
    font-weight: 10;

    line-height: 1.15;

    letter-spacing: -1px;

    margin-bottom: 40px;
}


/* BLUE TEXT */

.about-title span{

    color: #0057ff;
}


/* =========================================================
   TEXT
========================================================= */

.about-text{

    color: #4b5563;

    font-size: 18px;

    line-height: 1.9;

    max-width: 900px;

    margin:
        0 auto 30px;
}


/* =========================================================
   RESPONSIVE
========================================================= */

@media(max-width:991px){

    .about-section{

        padding: 90px 0;
    }

    .about-title{

        font-size: 42px;
    }

    .about-text{

        font-size: 16px;
    }
}


@media(max-width:576px){

    .about-section{

        padding: 70px 0;
    }

    .about-title{

        font-size: 32px;

        line-height: 1.25;
    }

    .about-text{

        font-size: 15px;

        line-height: 1.8;
    }
}
</style>


