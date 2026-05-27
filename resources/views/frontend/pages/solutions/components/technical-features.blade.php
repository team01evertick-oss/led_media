{{-- =========================================================
    TECHNICAL FEATURES SECTION
========================================================= --}}

@if(isset($solution) && $solution->technicalFeatures->isNotEmpty())

<section class="technical-features-section">

    <div class="container">

        <!-- TITLE -->
        <div class="features-title">
            <h2>Key Technical Features</h2>
        </div>

        <!-- FEATURES GRID -->
        <div class="features-grid">

            @foreach($solution->technicalFeatures as $feature)

               

                    <div class="feature-card">

                        <!-- IMAGE -->
                        <div class="feature-image">

                            <img
                                src="{{ asset('storage/image/feature-' . $loop->iteration . '.jpg') }}"
                                alt="{{ $feature->title }}">

                        </div>

                        <!-- CONTENT -->
                        <div class="feature-content">

                            <p>
                                {{ $feature->title }}
                            </p>

                        </div>

                    </div>

                </a>

            @endforeach

        </div>

    </div>

</section>

@endif



<style>

/* =========================================================
   TECHNICAL FEATURES SECTION
========================================================= */

.technical-features-section{

    background: #ffffff;

    padding: 120px 0;

    overflow: hidden;

    position: relative;
}


/* =========================================================
   CONTAINER
========================================================= */

.technical-features-section .container{

    max-width: 1200px;

    margin: auto;

    padding: 0 20px;
}


/* =========================================================
   TITLE
========================================================= */

.features-title{

    text-align: center;

    margin-bottom: 70px;
}

.features-title h2{

    color: #111827;

    font-size: 48px;

    font-weight: 300;

    letter-spacing: 1px;

    line-height: 1.3;
}


/* =========================================================
   FEATURES GRID
========================================================= */

.features-grid{

    display: flex;

    flex-wrap: wrap;

    justify-content: center;

    gap: 35px;

    max-width: 950px;

    margin: auto;
}


/* =========================================================
   LINK
========================================================= */

.feature-link{

    text-decoration: none;
}


/* =========================================================
   FEATURE CARD
========================================================= */

.feature-card{

    width: 250px;

    background: #ffffff;

    border-radius: 16px;

    overflow: hidden;

    position: relative;

    border: 1px solid rgba(0,102,255,.18);

    transition: .35s ease;

    box-shadow:
        0 10px 30px rgba(0,0,0,.05);
}


/* BLUE GLOW */

.feature-card::after{

    content: "";

    position: absolute;

    left: 50%;
    bottom: -70px;

    transform: translateX(-50%);

    width: 220px;
    height: 130px;

    background:
        radial-gradient(
            circle,
            rgba(0,102,255,.22),
            transparent 70%
        );

    pointer-events: none;
}


/* HOVER EFFECT */

.feature-card:hover{

    transform: translateY(-10px);

    border-color: rgba(0,102,255,.35);

    box-shadow:
        0 20px 45px rgba(0,102,255,.12);
}

.feature-card:hover img{

    transform: scale(1.05);
}


/* =========================================================
   IMAGE
========================================================= */

.feature-image{

    height: 180px;

    padding: 12px;

    position: relative;

    z-index: 2;
}

.feature-image img{

    width: 100%;
    height: 100%;

    object-fit: cover;

    border-radius: 10px;

    background: #d9d9d9;

    transition: .4s ease;
}


/* =========================================================
   CONTENT
========================================================= */

.feature-content{

    padding:
        5px
        20px
        24px;

    position: relative;

    z-index: 2;
}

.feature-content p{

    color: #1f2937;

    font-size: 17px;

    line-height: 1.5;

    font-weight: 400;

    margin: 0;
}


/* =========================================================
   RESPONSIVE
========================================================= */

@media(max-width:991px){

    .technical-features-section{

        padding: 90px 0;
    }

    .features-title h2{

        font-size: 40px;
    }
}


@media(max-width:768px){

    .features-grid{

        gap: 25px;
    }

    .feature-card{

        width: calc(50% - 20px);
    }
}


@media(max-width:576px){

    .technical-features-section{

        padding: 70px 0;
    }

    .features-title{

        margin-bottom: 50px;
    }

    .features-title h2{

        font-size: 30px;
    }

    .feature-card{

        width: 100%;
        max-width: 320px;
    }

    .feature-image{

        height: 200px;
    }

    .feature-content p{

        font-size: 16px;
    }
}

</style>