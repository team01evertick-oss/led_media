@extends('frontend.layouts.app')

@section('title', 'retail')

 {{-- HERO SECTION --}}
    @include('frontend.layouts.hero')
       {{-- HERO SECTION --}}
    @include('frontend.pages.home.about')
@section('content')
 
{{-- WHY LED --}}
@include('frontend.pages.industry.why-led')

    @include('frontend.pages.solutions.components.why-us')


{{{-- FEATURED PROJECTS --}}
<section class="featured-projects">

    <div class="featured-container">

        <!-- SECTION HEADING -->
        <div class="section-heading">

            <h2>
                Featured Projects
            </h2>

            <p>
                Proven Project Experience Across Cambodia.
                LED Media has successfully completed LED display
                installations and event production projects for
                leading organizations, banks, brands,
                and institutions nationwide.
            </p>

        </div>

        <!-- PROJECT CARD -->
        <div class="project-card">

            <!-- IMAGE -->
            <div class="project-image">

                <img
                    src="{{ asset('storage/image/Shinhan.png') }}"
                    alt="Lyn Store Chip Mong Mega Mall"
                    class="project-card__image"
                >

            </div>

            <!-- CONTENT -->
            <div class="project-content">

                <h3>
                    Lyn Store <br>
                    Chip Mong Mega Mall
                </h3>

                <p>
                    Phnom Penh
                </p>

                <a href="#" class="project-btn">
                    More Detail
                </a>

            </div>

        </div>

        <!-- PROJECT CARD -->
        <div class="project-card reverse">

            <!-- IMAGE -->
            <div class="project-image">

                <img
                    src="{{ asset('storage/image/Shinhan.png') }}"
                    alt="Nico Meet & Greet by Gatsby - K Mall"
                    class="project-card__image"
                >

            </div>

            <!-- CONTENT -->
            <div class="project-content">

                <h3>
                    Nico Meet & Greet <br>
                    by Gatsby – K Mall
                </h3>

                <p>
                    Phnom Penh
                </p>

                <a href="#" class="project-btn">
                    More Detail
                </a>

            </div>

        </div>

        <!-- VIEW MORE -->
        <div class="project-more">

            <a href="#" class="project-more-btn">
                View More Projects
            </a>

        </div>

    </div>

</section>
{{-- FAQ --}}
@include('frontend.pages.solutions.components.faq')

{{-- FAQ --}}
@include('frontend.pages.solutions.components.partner')



@endsection
<style>
   /* =========================================
   FEATURED PROJECTS
========================================= */
.featured-projects{
    position: relative;
    width: 100%;
    padding: 100px 20px;
    background:
        radial-gradient(circle at top left, rgba(0,102,255,0.25), transparent 40%),
        radial-gradient(circle at bottom right, rgba(0,60,255,0.25), transparent 40%),
        linear-gradient(135deg,#01012f 0%, #02045a 40%, #000428 100%);
    overflow: hidden;
    font-family: 'Montserrat', sans-serif;
}

.featured-container{
    max-width: 1250px;
    margin: auto;
}

/* =========================================
   HEADING
========================================= */
.section-heading{
    margin-bottom: 50px;
}

.section-heading h2{
    color: #ffffff;
    font-size: 48px;
    font-weight: 600;
    margin-bottom: 15px;
    letter-spacing: 0.5px;
}

.section-heading p{
    max-width: 700px;
    color: rgba(255,255,255,0.78);
    font-size: 17px;
    line-height: 1.8;
}

/* =========================================
   PROJECT CARD
========================================= */
.project-card{
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 40px;

    padding: 25px;
    margin-bottom: 30px;

    border-radius: 22px;

    border: 1px solid rgba(255,255,255,0.15);

    background:
        linear-gradient(
            135deg,
            rgba(255,255,255,0.05),
            rgba(0,110,255,0.08)
        );

    backdrop-filter: blur(12px);

    box-shadow:
        0 0 25px rgba(0,100,255,0.15),
        inset 0 0 20px rgba(255,255,255,0.02);

    transition: 0.4s ease;
}

.project-card:hover{
    transform: translateY(-6px);
    border-color: rgba(0,153,255,0.45);

    box-shadow:
        0 0 40px rgba(0,140,255,0.35),
        inset 0 0 20px rgba(255,255,255,0.04);
}

/* Reverse layout every second card */
.project-card:nth-child(even){
    flex-direction: row-reverse;
}

/* =========================================
   IMAGE
========================================= */
.project-image{
    width: 52%;
    position: relative;
    overflow: hidden;
    border-radius: 18px;
}

.project-image img{
    width: 100%;
    height: 320px;
    object-fit: cover;
    border-radius: 18px;
    display: block;
    transition: transform 0.5s ease;
}

.project-card:hover .project-image img{
    transform: scale(1.05);
}

/* Glow effect */
.project-image::after{
    content: '';
    position: absolute;
    inset: 0;
    background:
        linear-gradient(
            to right,
            rgba(255,255,255,0.45),
            transparent 25%,
            transparent 75%,
            rgba(255,255,255,0.35)
        );
    pointer-events: none;
}

/* =========================================
   CONTENT
========================================= */
.project-content{
    width: 48%;
    color: white;
}

.project-content h3{
    font-size: 42px;
    font-weight: 600;
    line-height: 1.2;
    margin-bottom: 20px;
    color: #ffffff;
}

.project-content p{
    font-size: 18px;
    line-height: 1.8;
    color: rgba(255,255,255,0.78);
    margin-bottom: 30px;
}

/* =========================================
   BUTTON
========================================= */
.project-btn{
    display: inline-flex;
    align-items: center;
    justify-content: center;

    min-width: 180px;
    height: 56px;

    padding: 0 30px;

    border-radius: 50px;

    background:
        linear-gradient(
            90deg,
            #0084ff,
            #1b4dff,
            #381dff
        );

    color: #ffffff;
    font-size: 15px;
    font-weight: 500;
    text-decoration: none;

    border: 1px solid rgba(255,255,255,0.15);

    box-shadow:
        0 0 18px rgba(0,132,255,0.35);

    transition: 0.35s ease;
}

.project-btn:hover{
    transform: translateY(-3px);

    box-shadow:
        0 0 28px rgba(0,132,255,0.6);

    color: white;
}

/* =========================================
   VIEW MORE BUTTON
========================================= */
.project-more{
    display: flex;
    justify-content: center;
    margin-top: 60px;
}

.project-more-btn{
    min-width: 340px;
    height: 70px;

    display: inline-flex;
    align-items: center;
    justify-content: center;

    border-radius: 60px;

    text-decoration: none;
    color: #ffffff;

    font-size: 18px;
    font-weight: 500;

    background:
        linear-gradient(
            90deg,
            #0084ff,
            #1d4dff,
            #3517ff
        );

    border: 1px solid rgba(255,255,255,0.12);

    box-shadow:
        0 0 30px rgba(0,132,255,0.35);

    transition: 0.4s ease;
}

.project-more-btn:hover{
    transform: translateY(-4px);

    box-shadow:
        0 0 40px rgba(0,132,255,0.6);

    color: white;
}

/* =========================================
   EMPTY TEXT
========================================= */
.empty-text{
    text-align: center;
    color: rgba(255,255,255,0.75);
    font-size: 18px;
}

/* =========================================
   RESPONSIVE
========================================= */
@media(max-width: 992px){

    .project-card,
    .project-card:nth-child(even){
        flex-direction: column;
    }

    .project-image,
    .project-content{
        width: 100%;
    }

    .project-content h3{
        font-size: 34px;
    }

    .project-image img{
        height: 260px;
    }

}

@media(max-width: 768px){

    .featured-projects{
        padding: 80px 16px;
    }

    .section-heading h2{
        font-size: 36px;
    }

    .section-heading p{
        font-size: 15px;
    }

    .project-content h3{
        font-size: 28px;
    }

    .project-content p{
        font-size: 15px;
    }

    .project-more-btn{
        width: 100%;
        min-width: unset;
    }

}

@media(max-width: 576px){

    .project-card{
        padding: 18px;
    }

    .project-image img{
        height: 220px;
    }

    .project-btn{
        width: 100%;
    }

}
</style>