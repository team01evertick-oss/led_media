{{-- =========================================================
WHY LED MEDIA HERO SECTION
========================================================= --}}

<section class="why-led-hero">

    {{-- BACKGROUND OVERLAY --}}
    <div class="hero-overlay"></div>

    {{-- CONTENT --}}
    <div class="container">

        <div class="hero-content">

            <h1>
                {{ $whyLed->title }}
            </h1>

            <p>
                {{ $whyLed->description }}
            </p>

        </div>

    </div>

</section>

{{-- =========================================================
CSS
========================================================= --}}

<style>

/* =========================================================
WHY LED HERO
========================================================= */

.why-led-hero{
    position: relative;

    width: 100%;
    min-height: 280px;

    display: flex;
    align-items: center;
    justify-content: center;

    overflow: hidden;

    padding: 100px 20px;

    background:
        linear-gradient(
            90deg,
            #0018ff 0%,
            #1427ff 20%,
            #273bff 40%,
            #4d5eff 50%,
            #273bff 60%,
            #1427ff 80%,
            #0018ff 100%
        );

    isolation: isolate;
}

/* =========================================================
VERTICAL LIGHT EFFECT
========================================================= */

.why-led-hero::before{
    content: '';

    position: absolute;
    inset: 0;

    background:
        repeating-linear-gradient(
            90deg,
            rgba(255,255,255,0.12) 0px,
            rgba(255,255,255,0.12) 2px,
            transparent 2px,
            transparent 8px
        );

    opacity: 0.35;

    z-index: 1;
}

/* =========================================================
DARK OVERLAY
========================================================= */

.hero-overlay{
    position: absolute;
    inset: 0;

    background:
        radial-gradient(
            circle at center,
            rgba(255,255,255,0.08),
            rgba(0,0,0,0.25)
        );

    z-index: 2;
}

/* =========================================================
CONTENT
========================================================= */

.hero-content{
    position: relative;
    z-index: 3;

    max-width: 900px;

    margin: auto;

    text-align: center;
}

/* TITLE */

.hero-content h1{
    color: #ffffff;

    font-size: 46px;
    font-weight: 500;

    margin-bottom: 28px;

    letter-spacing: 0.5px;
}

/* DESCRIPTION */

.hero-content p{
    color: rgba(255,255,255,0.92);

    font-size: 18px;
    line-height: 1.8;

    margin: 0;

    font-weight: 300;
}

/* =========================================================
RESPONSIVE
========================================================= */

@media(max-width: 992px){

    .why-led-hero{
        min-height: 240px;
        padding: 80px 20px;
    }

    .hero-content h1{
        font-size: 36px;
    }

    .hero-content p{
        font-size: 16px;
        line-height: 1.7;
    }

}

@media(max-width: 576px){

    .why-led-hero{
        min-height: 220px;
        padding: 70px 15px;
    }

    .hero-content h1{
        font-size: 30px;
        margin-bottom: 20px;
    }

    .hero-content p{
        font-size: 15px;
        line-height: 1.6;
    }

}

</style>