<!-- =========================================
     WHY CLIENTS TRUST SECTION
========================================= -->
<!-- =========================================
     LED SOLUTIONS SECTION
========================================= -->
<!-- GRID -->
<section class="solution-section">

    <div class="container">

        <!-- TITLE -->
        <div class="solution-header">
            <h2>
                Our
                <span>LED</span>
                Display
                <br>
                Solutions
            </h2>
        </div>

        <!-- SLIDER -->
        <div class="solution-slider">

            <!-- LEFT -->
            <button class="slider-arrow left-arrow">
                <img src="{{ asset('icon/Polygon1.png') }}" alt="Previous">
            </button>

            <!-- GRID -->
            <div class="solution-grid">

                @foreach($services as $key => $service)

                    <div class="solution-card {{ $key == 0 ? 'active-card' : '' }}">

                        <div class="solution-image">
                            <img src="{{ asset('storage/' . $service->thumbnail) }}"
                                 alt="{{ $service->title }}">
                        </div>

                        <div class="solution-content">

                            <h3>
                                {{ $service->title }}
                            </h3>

                            <p>
                                {{ $service->short_description }}
                            </p>

                        </div>

                    </div>

                @endforeach

            </div>

            <!-- RIGHT -->
            <button class="slider-arrow right-arrow">
                <img src="{{ asset('icon/Polygon2.png') }}" alt="Next">
            </button>

        </div>

    </div>

</section>
<section class="banner">
      <!-- MARQUEE -->
    <div class="solution-marquee">

        <div class="marquee-track">

            <span>
                Premium LED Display Solutions
                for Commercial Projects in Cambodia
            </span>

            <span>
                Premium LED Display Solutions
                for Commercial Projects in Cambodia
            </span>

            <span>
                Premium LED Display Solutions
                for Commercial Projects in Cambodia
            </span>

        </div>

    </div>

</section>

<style>
    /* =========================================================
   SOLUTION SECTION
========================================================= */

.solution-section{

    position: relative;

    padding: 120px 0 90px;

    background: #ffffff !important;

    overflow: hidden;
}


/* SOFT BLUE GLOW */

.solution-section::before{

    content: "";

    position: absolute;

    top: -250px;
    left: -250px;

    width: 700px;
    height: 700px;

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
   CONTAINER
========================================================= */

.solution-section .container{

    position: relative;

    z-index: 2;
}


/* =========================================================
   HEADER
========================================================= */

.solution-header{

    margin-bottom: 70px;
}


.solution-header h2{

    color: #111827;

    font-size: 56px;
    font-weight: 100;

    line-height: 1.1;

    letter-spacing: -1px;

    margin: 0;
}


.solution-header h2 span{

    color: #0057ff;
}


/* =========================================================
   SLIDER
========================================================= */

.solution-slider{

    display: flex;

    align-items: center;
    justify-content: center;

    gap: 28px;
}


/* =========================================================
   ARROWS
========================================================= */

.slider-arrow{

    width: 56px;
    height: 56px;

    min-width: 56px;

    border: none;

    border-radius: 50%;

    background: #ffffff;

    border:
        1px solid rgba(0,0,0,.08);

    box-shadow:
        0 10px 25px rgba(0,0,0,.06);

    display: flex;

    align-items: center;
    justify-content: center;

    transition: .35s ease;

    cursor: pointer;
}


.slider-arrow:hover{

    transform: translateY(-3px);

    background:
        linear-gradient(
            135deg,
            #0057ff,
            #2563eb
        );

    box-shadow:
        0 10px 25px rgba(0,102,255,.25);
}


.arrow-icon{

    width: 16px;
}


/* =========================================================
   GRID
========================================================= */

.solution-grid{

    display: grid;

    grid-template-columns:
        repeat(3, 1fr);

    gap: 28px;

    width: 100%;
}


/* =========================================================
   CARD
========================================================= */

.solution-card{

    position: relative;

    border-radius: 26px;

    overflow: hidden;

    background: #ffffff;

    border:
        1px solid rgba(0,0,0,.08);

    transition: .4s ease;

    min-height: 500px;

    box-shadow:
        0 12px 35px rgba(0,0,0,.05);
}


/* ACTIVE CARD */

.active-card{

    border:
        1px solid rgba(0,102,255,.35);

    box-shadow:
        0 20px 45px rgba(0,102,255,.12);
}


/* HOVER */

.solution-card:hover{

    transform: translateY(-8px);

    border:
        1px solid rgba(0,102,255,.25);

    box-shadow:
        0 25px 50px rgba(0,102,255,.12);
}


/* =========================================================
   IMAGE
========================================================= */

.solution-image{

    height: 320px;

    overflow: hidden;
}


.solution-image img{

    width: 100%;
    height: 100%;

    object-fit: cover;

    transition: .6s ease;
}


.solution-card:hover img{

    transform: scale(1.06);
}


/* =========================================================
   CONTENT
========================================================= */

.solution-content{

    padding: 30px;
}


.solution-content h3{

    color: #111827;

    font-size: 24px;
    font-weight: 700;

    line-height: 1.3;

    margin-bottom: 18px;
}


.solution-content p{

    color: #6b7280;

    font-size: 15px;

    line-height: 1.9;

    margin: 0;
}


/* =========================================================
   MARQUEE
========================================================= */

.banner{

    background: #0057ff;

    overflow: hidden;

    padding: 18px 0;
}


.solution-marquee{

    width: 100%;

    overflow: hidden;

    white-space: nowrap;
}


.marquee-track{

    display: flex;

    width: max-content;

    animation:
        marqueeMove 24s linear infinite;
}


.marquee-track span{

    color: #ffffff;

    font-size: 14px;
    font-weight: 600;

    letter-spacing: .5px;

    margin-right: 90px;

    text-transform: uppercase;
}


/* =========================================================
   ANIMATION
========================================================= */

@keyframes marqueeMove{

    from{

        transform: translateX(0);
    }

    to{

        transform: translateX(-50%);
    }
}


/* =========================================================
   RESPONSIVE
========================================================= */

@media(max-width:991px){

    .solution-section{

        padding: 90px 0 70px;
    }

    .solution-header{

        margin-bottom: 50px;
    }

    .solution-header h2{

        font-size: 42px;
    }

    .solution-grid{

        grid-template-columns: 1fr;

        gap: 24px;
    }

    .solution-slider{

        gap: 16px;
    }

    .solution-card{

        min-height: auto;
    }

    .solution-image{

        height: 280px;
    }
}


@media(max-width:576px){

    .solution-section{

        padding: 70px 0 60px;
    }

    .solution-header h2{

        font-size: 32px;

        line-height: 1.2;
    }

    .solution-content{

        padding: 24px;
    }

    .solution-content h3{

        font-size: 20px;
    }

    .solution-content p{

        font-size: 14px;
    }

    .slider-arrow{

        width: 46px;
        height: 46px;

        min-width: 46px;
    }

    .solution-image{

        height: 220px;
    }

    .marquee-track span{

        font-size: 12px;

        margin-right: 60px;
    }
}
</style>
