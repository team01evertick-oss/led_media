<section class="technical-features">

    <div class="container">

        <!-- TITLE -->
        <div class="section-title">

            <h2>
                Key Technical Features
            </h2>

        </div>

        <!-- GRID -->
     @if(isset($solution) && $solution->technicalFeatures->isNotEmpty())

<section class="technical-features-section">

    <div class="container">

        <!-- TITLE -->
        <div class="features-title">
            <h2>Technical Features</h2>
        </div>

        <!-- GRID -->
        <div class="features-grid">

    @foreach($solution->technicalFeatures as $feature)

        <a href="{{ route('card.detail') }}" class="feature-link">

            <div class="feature-card">

                <div class="feature-image">
                    <img
                        src="{{ asset('storage/image/feature-' . $loop->iteration . '.jpg') }}"
                        alt="{{ $feature->title }}">
                </div>

                <div class="feature-content">

                    <span class="feature-number">
                        {{ $feature->feature_number }}
                    </span>

                    <p>{{ $feature->title }}</p>

                    <div class="view-more">
                        View Detail →
                    </div>

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

.technical-features{

    padding: 110px 0;

    background:
        linear-gradient(
            180deg,
            #ffffff 0%,
            #f7fbff 100%
        );

    position: relative;

    overflow: hidden;
}

.technical-features::before{

    content: "";

    position: absolute;

    top: -220px;
    right: -220px;

    width: 520px;
    height: 520px;

    border-radius: 50%;

    background:
        radial-gradient(
            circle,
            rgba(0,102,255,.10),
            transparent 70%
        );

    z-index: 1;
}

.technical-features .container{

    position: relative;

    z-index: 2;
}


/* =========================================================
   TITLE
========================================================= */

.section-title{

    text-align: center;

    margin-bottom: 60px;
}

.section-title h2{

    font-size: 52px;

    font-weight: 100;

    color: #111827;

    line-height: 1.2;
}


/* =========================================================
   FEATURES GRID
========================================================= */

.features-grid{

    display: grid;

    grid-template-columns:
        repeat(3, 1fr);

    gap: 28px;

    max-width: 1050px;

    margin: auto;
}


/* =========================================================
   FEATURE CARD
========================================================= */

.feature-card{

    background: #ffffff;

    border-radius: 24px;

    overflow: hidden;

    border:
        1px solid rgba(0,0,0,.08);

    transition: .35s ease;

    box-shadow:
        0 10px 30px rgba(0,0,0,.05);
}

.feature-card:hover{

    transform: translateY(-8px);

    border:
        1px solid rgba(0,102,255,.18);

    box-shadow:
        0 20px 40px rgba(0,102,255,.12);
}


/* =========================================================
   IMAGE
========================================================= */

.feature-image{

    height: 220px;

    overflow: hidden;
}

.feature-image img{

    width: 100%;
    height: 100%;

    object-fit: cover;

    transition: .5s ease;
}

.feature-card:hover img{

    transform: scale(1.06);
}


/* =========================================================
   CONTENT
========================================================= */

.feature-content{

    padding: 26px;
}

.feature-content p{

    font-size: 17px;

    line-height: 1.7;

    color: #374151;

    font-weight: 400;

    margin: 0;
}


/* =========================================================
   FAQ SECTION
========================================================= */

.faq-section{

    padding: 110px 0;

    background: #ffffff;
}


/* =========================================================
   FAQ TITLE
========================================================= */

.faq-title{

    text-align: center;

    margin-bottom: 50px;
}

.faq-title h2{

    font-size: 52px;

    font-weight: 100;

    color: #111827;
}


/* =========================================================
   FAQ LIST
========================================================= */

.faq-list{

    max-width: 900px;

    margin: auto;

    display: flex;

    flex-direction: column;

    gap: 22px;
}


/* =========================================================
   FAQ ITEM
========================================================= */

.faq-item{

    background: #ffffff;

    border-radius: 18px;

    border:
        1px solid rgba(0,0,0,.08);

    overflow: hidden;

    transition: .35s ease;

    box-shadow:
        0 8px 24px rgba(0,0,0,.04);
}

.faq-item:hover{

    transform: translateY(-4px);

    border:
        1px solid rgba(0,102,255,.20);

    box-shadow:
        0 16px 35px rgba(0,102,255,.10);
}


/* =========================================================
   QUESTION
========================================================= */

.faq-question{

    width: 100%;

    border: none;

    background: transparent;

    padding: 26px 30px;

    display: flex;

    align-items: center;
    justify-content: space-between;

    cursor: pointer;
}

.faq-question span{

    color: #111827;

    font-size: 18px;

    font-weight: 400;
}

.faq-question i{

    color: #0057ff;

    font-size: 16px;
}


/* =========================================================
   PARTNER SECTION
========================================================= */

.partner-section{

    position: relative;

    padding: 140px 0;

    overflow: hidden;
}


/* =========================================================
   BACKGROUND
========================================================= */

.partner-bg{

    position: absolute;

    inset: 0;

    z-index: 1;
}

.partner-bg img{

    width: 100%;
    height: 100%;

    object-fit: cover;
}


/* =========================================================
   OVERLAY
========================================================= */

.partner-overlay{

    position: absolute;

    inset: 0;

    background:
        linear-gradient(
            135deg,
            rgba(0,0,0,.65),
            rgba(0,51,153,.55)
        );

    z-index: 2;
}


/* =========================================================
   CONTENT
========================================================= */

.partner-section .container{

    position: relative;

    z-index: 3;
}

.partner-content{

    max-width: 900px;

    margin: auto;

    text-align: center;
}

.partner-content h2{

    color: #ffffff;

    font-size: 54px;

    font-weight: 100;

    line-height: 1.3;

    margin-bottom: 45px;
}


/* =========================================================
   BUTTONS
========================================================= */

.partner-buttons{

    display: flex;

    align-items: center;
    justify-content: center;

    gap: 22px;

    flex-wrap: wrap;
}

.partner-btn{

    min-width: 240px;

    height: 58px;

    padding: 0 36px;

    border-radius: 60px;

    display: inline-flex;

    align-items: center;
    justify-content: center;

    text-decoration: none;

    font-size: 15px;

    font-weight: 500;

    transition: .35s ease;
}


/* PRIMARY */

.primary-btn{

    background:
        linear-gradient(
            135deg,
            #0057ff,
            #2563eb
        );

    color: #ffffff;

    box-shadow:
        0 12px 30px rgba(0,102,255,.28);
}

.primary-btn:hover{

    transform: translateY(-4px);

    color: #ffffff;

    box-shadow:
        0 18px 40px rgba(0,102,255,.35);
}


/* SECONDARY */

.secondary-btn{

    border:
        1px solid rgba(255,255,255,.35);

    background:
        rgba(255,255,255,.10);

    backdrop-filter: blur(12px);

    color: #ffffff;
}

.secondary-btn:hover{

    transform: translateY(-4px);

    background: #ffffff;

    color: #111827;
}


/* =========================================================
   RESPONSIVE
========================================================= */

@media(max-width:991px){

    .technical-features,
    .faq-section{

        padding: 90px 0;
    }

    .features-grid{

        grid-template-columns:
            repeat(2,1fr);
    }

    .section-title h2,
    .faq-title h2,
    .partner-content h2{

        font-size: 42px;
    }

    .partner-section{

        padding: 110px 0;
    }
}


@media(max-width:576px){

    .technical-features,
    .faq-section{

        padding: 70px 0;
    }

    .features-grid{

        grid-template-columns: 1fr;
    }

    .section-title h2,
    .faq-title h2,
    .partner-content h2{

        font-size: 32px;

        line-height: 1.3;
    }

    .feature-image{

        height: 200px;
    }

    .faq-question{

        padding: 22px;
    }

    .faq-question span{

        font-size: 15px;
    }

    .partner-section{

        padding: 90px 0;
    }

    .partner-btn{

        width: 100%;
    }
}
</style>