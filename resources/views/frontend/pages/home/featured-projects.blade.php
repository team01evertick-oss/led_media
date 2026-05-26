<!-- =========================================================
     FEATURED PROJECTS SECTION
========================================================= -->

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

        <!-- PROJECT LIST -->
        @forelse($featuredProjects ?? collect() as $project)

            @php

                $thumbnail = $project->thumbnail
                    ? asset('storage/' . ltrim(str_replace('storage/', '', $project->thumbnail), '/'))
                    : asset('storage/image/project-1.png');

            @endphp

            <div class="project-card">

                <!-- IMAGE -->
                <div class="project-image">

                    <img
                        src="{{ $thumbnail }}"
                        alt="{{ $project->title }}"
                        loading="lazy"
                    >

                </div>

                <!-- CONTENT -->
                <div class="project-content">

                    <h3>
                        {{ $project->title }}
                    </h3>

                    <p>
                        {{ $project->short_description }}
                    </p>

                    <a
                        href="{{ route('projects.show', $project->slug) }}"
                        class="project-btn"
                    >
                        More Detail
                    </a>

                </div>

            </div>

        @empty

            <p class="empty-text">
                No featured projects found.
            </p>

        @endforelse

        <!-- VIEW MORE -->
        <div class="project-more">

            <a
                href="{{ route('projects.index') }}"
                class="project-more-btn"
            >
                View More Projects
            </a>

        </div>

    </div>

</section>


<!-- =========================================================
     WHY CLIENTS TRUST LED MEDIA
========================================================= -->

<section class="trust-section">

    <div class="container">

        <!-- TITLE -->
        <div class="trust-header">

            <h2>
                Why Clients
                <br>
                Trust <span>LED</span> Media
            </h2>

        </div>

        <!-- TOP BAR -->
        <div class="trust-top-bar">

            <div class="trust-bar-track">

                @foreach($services as $service)

                    <span>
                        {{ $service->title }}
                    </span>

                @endforeach

            </div>

        </div>

        <!-- TRUST GRID -->
        <div class="trust-grid">

            @foreach($services as $service)

                <div class="trust-card {{ $loop->first ? 'active' : '' }}">

                    <h3>
                        {{ $service->title }}
                    </h3>

                    <p>
                        {{ Str::limit(strip_tags($service->description), 140) }}
                    </p>

                    <a
                        href="{{ route('services.show', $service->slug) }}"
                        class="trust-btn"
                    >
                        View Detail
                    </a>

                </div>

            @endforeach

        </div>

    </div>

</section>


<!-- =========================================================
     HOW WE WORK
========================================================= -->

<section class="workflow-section">

    <div class="container">

        <!-- TITLE -->
        <div class="workflow-title">

            <h2>
                How We Work
            </h2>

        </div>

        <!-- GRID -->
        <div class="workflow-grid">

            <!-- CARD -->
            <div class="workflow-card">

                <img
                    src="{{ asset('storage/image/partner.png') }}"
                    alt="Consultation"
                    loading="lazy"
                >

                <div class="workflow-overlay"></div>

                <div class="workflow-content">

                    <div>

                        <h3>
                            Consultation &
                            <br>
                            Site Survey
                        </h3>

                        <p>
                            Understanding project objectives,
                            location conditions,
                            and technical requirements.
                        </p>

                    </div>

                    <span>01</span>

                </div>

            </div>


            <!-- CARD -->
            <div class="workflow-card">

                <img
                    src="{{ asset('storage/image/home_page_bg1.png') }}"
                    alt="Planning"
                    loading="lazy"
                >

                <div class="workflow-overlay"></div>

                <div class="workflow-content">

                    <div>

                        <h3>
                            Solution
                            <br>
                            Planning
                        </h3>

                        <p>
                            Developing suitable LED display
                            recommendations and layout planning.
                        </p>

                    </div>

                    <span>02</span>

                </div>

            </div>


            <!-- CARD -->
            <div class="workflow-card">

                <img
                    src="{{ asset('storage/image/home_page_bg1.png') }}"
                    alt="Quotation"
                    loading="lazy"
                >

                <div class="workflow-overlay"></div>

                <div class="workflow-content">

                    <div>

                        <h3>
                            Proposal &
                            <br>
                            Quotation
                        </h3>

                        <p>
                            Clear budgeting, planning,
                            and project preparation.
                        </p>

                    </div>

                    <span>03</span>

                </div>

            </div>


            <!-- CARD -->
            <div class="workflow-card">

                <img
                    src="{{ asset('storage/image/home_page_bg1.png') }}"
                    alt="Installation"
                    loading="lazy"
                >

                <div class="workflow-overlay"></div>

                <div class="workflow-content">

                    <div>

                        <h3>
                            Installation &
                            <br>
                            Integration
                        </h3>

                        <p>
                            Professional setup,
                            integration, and testing.
                        </p>

                    </div>

                    <span>04</span>

                </div>

            </div>


            <!-- CARD -->
            <div class="workflow-card">

                <img
                    src="{{ asset('storage/image/home_page_bg1.png') }}"
                    alt="Handover"
                    loading="lazy"
                >

                <div class="workflow-overlay"></div>

                <div class="workflow-content">

                    <div>

                        <h3>
                            Quality Check &
                            <br>
                            Handover
                        </h3>

                        <p>
                            Stable operation,
                            performance validation,
                            and project completion.
                        </p>

                    </div>

                    <span>05</span>

                </div>

            </div>


            <!-- CARD -->
            <div class="workflow-card">

                <img
                    src="{{ asset('storage/image/home_page_bg1.png') }}"
                    alt="Support"
                    loading="lazy"
                >

                <div class="workflow-overlay"></div>

                <div class="workflow-content">

                    <div>

                        <h3>
                            Maintenance &
                            <br>
                            Technical Support
                        </h3>

                        <p>
                            Long-term maintenance
                            and technical assistance.
                        </p>

                    </div>

                    <span>06</span>

                </div>

            </div>

        </div>

    </div>

</section>


<style>

/* =========================================================
   FEATURED PROJECTS
========================================================= */

.featured-projects{

    padding: 110px 0;

    background: #ffffff;

    overflow: hidden;
}

.featured-container{

    max-width: 1280px;

    margin: auto;

    padding: 0 20px;
}


/* =========================================================
   SECTION HEADING
========================================================= */

.section-heading{

    margin-bottom: 55px;
}

.section-heading h2{

    font-size: 48px;

    font-weight: 700;

    color: #111827;

    margin-bottom: 18px;
}

.section-heading p{

    font-size: 15px;

    line-height: 1.9;

    color: #6b7280;

    max-width: 760px;
}


/* =========================================================
   PROJECT CARD
========================================================= */

.project-card{

    display: flex;

    align-items: center;

    gap: 32px;

    padding: 24px;

    border-radius: 24px;

    background: #ffffff;

    border: 1px solid rgba(0,0,0,.06);

    margin-bottom: 28px;

    transition: .35s ease;

    box-shadow:
        0 10px 35px rgba(0,0,0,.05);
}

.project-card:hover{

    transform: translateY(-6px);

    box-shadow:
        0 18px 45px rgba(0,102,255,.10);
}


/* =========================================================
   IMAGE
========================================================= */

.project-image{

    flex: 1;

    min-width: 320px;

    overflow: hidden;

    border-radius: 18px;
}

.project-image img{

    width: 100%;

    height: 280px;

    object-fit: cover;

    transition: .5s ease;
}

.project-card:hover img{

    transform: scale(1.05);
}


/* =========================================================
   CONTENT
========================================================= */

.project-content{

    flex: 1;
}

.project-content h3{

    font-size: 30px;

    font-weight: 700;

    color: #111827;

    margin-bottom: 16px;
}

.project-content p{

    font-size: 15px;

    line-height: 1.9;

    color: #6b7280;

    margin-bottom: 28px;
}


/* =========================================================
   BUTTONS
========================================================= */

.project-btn,
.project-more-btn,
.trust-btn{

    display: inline-flex;

    align-items: center;

    justify-content: center;

    height: 52px;

    padding: 0 28px;

    border-radius: 999px;

    text-decoration: none;

    color: #ffffff;

    font-size: 14px;

    font-weight: 600;

    background:
        linear-gradient(
            135deg,
            #0057ff,
            #2563eb
        );

    transition: .35s ease;
}

.project-btn:hover,
.project-more-btn:hover,
.trust-btn:hover{

    transform: translateY(-3px);

    color: #ffffff;
}


/* =========================================================
   VIEW MORE
========================================================= */

.project-more{

    text-align: center;

    margin-top: 55px;
}


/* =========================================================
   TRUST SECTION
========================================================= */

.trust-section{

    padding: 110px 0;

    background: #ffffff;
}


/* =========================================================
   TRUST HEADER
========================================================= */

.trust-header{

    margin-bottom: 40px;
}

.trust-header h2{

    font-size: 46px;

    font-weight: 700;

    line-height: 1.2;

    color: #111827;
}

.trust-header span{

    color: #0057ff;
}


/* =========================================================
   TOP BAR
========================================================= */

.trust-top-bar{

    background:
        linear-gradient(
            90deg,
            #0057ff,
            #2563eb
        );

    border-radius: 14px;

    padding: 18px 0;

    overflow: hidden;

    margin-bottom: 50px;
}

.trust-bar-track{

    display: flex;

    width: max-content;

    animation:
        marqueeMove 18s linear infinite;
}

.trust-bar-track span{

    color: #ffffff;

    font-size: 14px;

    font-weight: 600;

    margin-right: 80px;

    text-transform: uppercase;
}


/* =========================================================
   TRUST GRID
========================================================= */

.trust-grid{

    display: grid;

    grid-template-columns:
        repeat(2,1fr);

    gap: 24px;
}


/* =========================================================
   TRUST CARD
========================================================= */

.trust-card{

    padding: 34px;

    border-radius: 22px;

    background: #ffffff;

    border: 1px solid rgba(0,0,0,.06);

    transition: .35s ease;

    box-shadow:
        0 10px 30px rgba(0,0,0,.05);
}

.trust-card:hover{

    transform: translateY(-5px);
}

.trust-card.active{

    background:
        linear-gradient(
            135deg,
            #0057ff,
            #2563eb
        );

    border: none;
}

.trust-card.active h3,
.trust-card.active p{

    color: #ffffff;
}

.trust-card h3{

    font-size: 22px;

    font-weight: 700;

    margin-bottom: 16px;

    color: #111827;
}

.trust-card p{

    font-size: 14px;

    line-height: 1.8;

    color: #6b7280;

    margin-bottom: 26px;
}


/* =========================================================
   WORKFLOW SECTION
========================================================= */

.workflow-section{

    padding: 110px 0;

    background: #f3f3f5;
}


/* =========================================================
   TITLE
========================================================= */

.workflow-title{

    margin-bottom: 35px;
}

.workflow-title h2{

    font-size: 40px;

    font-weight: 100;

    color: #050000;
}


/* =========================================================
   WORKFLOW GRID
========================================================= */

.workflow-grid{

    display: grid;

    grid-template-columns:
        repeat(2, 1fr);

    gap: 18px;
}


/* =========================================================
   WORKFLOW CARD
========================================================= */

.workflow-card{

    position: relative;

    height: 210px;

    border-radius: 18px;

    overflow: hidden;

    background: #0f172a;

    transition: .35s ease;
}

.workflow-card:hover{

    transform: translateY(-4px);
}


/* =========================================================
   IMAGE
========================================================= */

.workflow-card img{

    width: 100%;

    height: 100%;

    object-fit: cover;

    transition: .6s ease;
}

.workflow-card:hover img{

    transform: scale(1.06);
}


/* =========================================================
   OVERLAY
========================================================= */

.workflow-overlay{

    position: absolute;

    inset: 0;

    background:
        linear-gradient(
            180deg,
            rgba(0,0,0,.08),
            rgba(0,0,0,.82)
        );
}


/* =========================================================
   CONTENT
========================================================= */

.workflow-content{

    position: absolute;

    inset: 0;

    z-index: 2;

    padding: 22px;

    display: flex;

    justify-content: space-between;

    align-items: flex-start;
}

.workflow-content h3{

    font-size: 16px;

    font-weight: 700;

    line-height: 1.3;

    color: #ffffff;

    margin-bottom: 10px;
}

.workflow-content p{

    font-size: 11px;

    line-height: 1.6;

    color: rgba(255,255,255,.82);

    max-width: 220px;

    margin: 0;
}

.workflow-content span{

    font-size: 28px;

    font-weight: 700;

    color: #60a5fa;
}


/* =========================================================
   EMPTY TEXT
========================================================= */

.empty-text{

    color: #6b7280;

    font-size: 16px;
}


/* =========================================================
   RESPONSIVE
========================================================= */

@media(max-width:991px){

    .project-card{

        flex-direction: column;
    }

    .project-image{

        min-width: 100%;
    }

    .trust-grid,
    .workflow-grid{

        grid-template-columns: 1fr;
    }

    .section-heading h2,
    .trust-header h2,
    .workflow-title h2{

        font-size: 34px;
    }
}


@media(max-width:576px){

    .featured-projects,
    .trust-section,
    .workflow-section{

        padding: 75px 0;
    }

    .section-heading h2,
    .trust-header h2,
    .workflow-title h2{

        font-size: 28px;
    }

    .project-content h3{

        font-size: 24px;
    }

    .workflow-card{

        height: 190px;
    }

    .workflow-content{

        padding: 18px;
    }

    .workflow-content h3{

        font-size: 14px;
    }

    .workflow-content p{

        font-size: 10px;
    }

    .workflow-content span{

        font-size: 22px;
    }

    .project-btn,
    .project-more-btn,
    .trust-btn{

        width: 100%;
    }
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

</style>