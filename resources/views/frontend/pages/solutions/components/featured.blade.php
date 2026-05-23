<section class="featured-projects">

    <div class="container">

        <!-- HEADING -->
        <div class="projects-heading">

            <h2>
                Featured Projects
            </h2>

            <p>
                Supply and installation of commercial outdoor LED display
                systems for bank branding and advertising visibility.
            </p>

        </div>

     @php

    $services = \App\Models\Service::where('status', 1)
                    ->where('is_featured', 1)
                    ->latest()
                    ->get();

@endphp

<section class="featured-projects">

    <div class="featured-container">

        <!-- SECTION HEADING -->
        <div class="section-heading">

            <h2 style="color:#fff; font-size:36px; font-weight:400; margin-bottom:10px;">
                Featured Projects
            </h2>

            <p style="color:rgba(255,255,255,0.8); font-size:16px; line-height:1.6;">
                Proven Project Experience Across Cambodia
                <br>
                LED Media has successfully completed LED display installations and event
                production projects for leading organizations, banks, brands, and institutions nationwide.
            </p>

        </div>

        <!-- PROJECT LIST -->

        @forelse($featuredProjects as $project)

            <div class="project-card">

                <!-- IMAGE -->
                <div class="project-image">

                    <img src="{{ asset($project->thumbnail) }}"
                         alt="{{ $project->title }}">

                </div>

                <!-- CONTENT -->
                <div class="project-content">

                    <h3>
                        {{ $project->title }}
                    </h3>

                    <p>
                        {{ $project->short_description }}
                    </p>

                    <a href="{{ route('projects.show', $project->slug) }}"
                       class="project-btn">

                        More Detail

                    </a>

                </div>

            </div>

        @empty

            <p style="color:white;">
                No featured projects found.
            </p>

        @endforelse

        <!-- VIEW MORE -->
        <div class="project-more">

            <a href="{{ route('projects.index') }}"
               class="project-more-btn">

                View More Projects

            </a>

        </div>

    </div>

</section>

        <!-- BUTTON -->
        <div class="projects-action">

            <a href="{{ route('projects.index') }}"
               class="view-projects-btn">

                View More Projects

            </a>

        </div>

    </div>

</section>
<style>
    /* =========================================================
   FEATURED PROJECTS
========================================================= */

.featured-projects{

    position: relative;

    padding: 100px 0;

    overflow: hidden;

    background:
        linear-gradient(
            180deg,
            #ffffff 0%,
            #f8fbff 100%
        );
}


/* =========================================================
   BLUE GLOW
========================================================= */

.featured-projects::before{

    content: "";

    position: absolute;

    top: -200px;
    right: -200px;

    width: 600px;
    height: 600px;

    border-radius: 50%;

    background:
        radial-gradient(
            circle,
            rgba(0,102,255,.10),
            transparent 70%
        );

    z-index: 0;
}


.featured-projects .container{

    position: relative;

    z-index: 2;
}


/* =========================================================
   HEADING
========================================================= */

.projects-heading{

    margin-bottom: 50px;
}


.projects-heading h2{

    font-size: 48px;

    font-weight: 100;

    color: #111827;

    margin-bottom: 16px;
}


.projects-heading p{

    color: #6b7280;

    font-size: 16px;

    line-height: 1.9;

    max-width: 650px;
}


/* =========================================================
   PROJECT CARD
========================================================= */

.project-card{

    display: grid;

    grid-template-columns:
        1.1fr 1fr;

    gap: 50px;

    align-items: center;

    padding: 28px;

    border-radius: 30px;

    background: #ffffff;

    border:
        1px solid rgba(0,0,0,.08);

    box-shadow:
        0 15px 40px rgba(0,0,0,.05);

    transition: .4s ease;
}


.project-card:hover{

    transform: translateY(-6px);

    box-shadow:
        0 20px 45px rgba(0,102,255,.12);
}


/* =========================================================
   IMAGE
========================================================= */

.project-image{

    overflow: hidden;

    border-radius: 22px;

    height: 360px;
}


.project-image img{

    width: 100%;
    height: 100%;

    object-fit: cover;

    transition: .6s ease;
}


.project-card:hover img{

    transform: scale(1.05);
}


/* =========================================================
   CONTENT
========================================================= */

.project-content h3{

    font-size: 42px;

    font-weight: 100;

    color: #111827;

    margin-bottom: 18px;
}


.project-content span{

    display: block;

    color: #0057ff;

    font-size: 18px;

    margin-bottom: 10px;
}


.project-content p{

    color: #6b7280;

    font-size: 16px;

    margin-bottom: 35px;
}


/* =========================================================
   BUTTONS
========================================================= */

.project-btn,
.view-projects-btn{

    display: inline-flex;

    align-items: center;
    justify-content: center;

    height: 56px;

    padding: 0 34px;

    border-radius: 60px;

    text-decoration: none;

    font-size: 15px;

    font-weight: 100;

    transition: .35s ease;
}


.project-btn{

    background:
        linear-gradient(
            135deg,
            #0057ff,
            #2563eb
        );

    color: #ffffff;

    box-shadow:
        0 12px 30px rgba(0,102,255,.18);
}


.project-btn:hover{

    transform: translateY(-4px);

    color: #ffffff;
}


.projects-action{

    text-align: center;

    margin-top: 50px;
}


.view-projects-btn{

    background: #ffffff;

    border:
        1px solid rgba(0,102,255,.15);

    color: #0057ff;
}


.view-projects-btn:hover{

    background: #0057ff;

    color: #ffffff;
}


/* =========================================================
   FAQ SECTION
========================================================= */

.faq-section{

    padding: 100px 0;

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

    font-size: 48px;

    font-weight: 100;

    color: #111827;
}


/* =========================================================
   FAQ LIST
========================================================= */

.faq-list{

    max-width: 850px;

    margin: auto;
}


.faq-item{

    margin-bottom: 20px;

    border-radius: 18px;

    overflow: hidden;

    border:
        1px solid rgba(0,0,0,.08);

    background: #ffffff;

    box-shadow:
        0 10px 30px rgba(0,0,0,.04);

    transition: .35s ease;
}


.faq-item:hover{

    transform: translateY(-4px);

    box-shadow:
        0 15px 35px rgba(0,102,255,.08);
}


.faq-question{

    width: 100%;

    border: none;

    background: transparent;

    padding: 24px 30px;

    display: flex;

    align-items: center;
    justify-content: space-between;

    cursor: pointer;
}


.faq-question span{

    font-size: 17px;

    font-weight: 100;

    color: #111827;
}


.faq-question i{

    color: #0057ff;

    font-size: 18px;
}


/* =========================================================
   RESPONSIVE
========================================================= */

@media(max-width:991px){

    .project-card{

        grid-template-columns: 1fr;

        gap: 35px;
    }

    .projects-heading h2,
    .faq-title h2{

        font-size: 40px;
    }

    .project-content h3{

        font-size: 34px;
    }
}


@media(max-width:576px){

    .featured-projects,
    .faq-section{

        padding: 70px 0;
    }

    .projects-heading h2,
    .faq-title h2{

        font-size: 30px;
    }

    .project-image{

        height: 240px;
    }

    .project-content h3{

        font-size: 28px;
    }

    .faq-question{

        padding: 20px;
    }

    .faq-question span{

        font-size: 15px;
    }

    .project-btn,
    .view-projects-btn{

        width: 100%;
    }
}
</style>