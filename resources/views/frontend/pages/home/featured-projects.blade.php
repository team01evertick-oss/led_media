<!-- =========================================================
     FEATURED PROJECTS SECTION
========================================================= -->
<section class="featured-projects">

    <div class="featured-container">

        {{-- SECTION HEADING --}}
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

        {{-- PROJECT LIST --}}
        @forelse($featuredProjects ?? collect() as $project)

            <div class="project-card">

                <div class="project-image">
                    <img src="{{ $project->thumbnail ? asset('storage/' . $project->thumbnail) : asset('image/project-1.png') }}"
                         alt="{{ $project->title }}">
                </div>

                <div class="project-content">

                    <h3>{{ $project->title }}</h3>

                    <p>{{ $project->short_description }}</p>

                    <a href="{{ route('projects.show', $project->slug) }}"
                       class="project-btn">
                        More Detail
                    </a>

                </div>

            </div>

        @empty

            <p style="color:white;">No featured projects found.</p>

        @endforelse

        {{-- VIEW MORE --}}
        <div class="project-more">

            <a href="{{ route('projects.index') }}" class="project-more-btn">
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
                        {{ $service->description }}
                    </p>

                    <a href="{{ route('services.show', $service->slug) }}"
                       class="trust-btn">

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

        <!-- WORKFLOW GRID -->
        <div class="workflow-grid">

            <!-- CARD -->
            <div class="workflow-card">

                <img src="{{ asset('image/partner.png') }}" alt="">

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
                            location conditions, and technical requirements.
                        </p>

                    </div>

                    <span>
                        01
                    </span>

                </div>

            </div>

            <!-- CARD -->
            <div class="workflow-card">

                <img src="{{ asset('image/home_page_bg1.png') }}" alt="">

                <div class="workflow-overlay"></div>

                <div class="workflow-content">

                    <div>

                        <h3>
                            Solution
                            <br>
                            Planning
                        </h3>

                        <p>
                            Developing suitable LED display recommendations,
                            technical specifications, and layout planning.
                        </p>

                    </div>

                    <span>
                        02
                    </span>

                </div>

            </div>

            <!-- CARD -->
            <div class="workflow-card">

                <img src="{{ asset('image/home_page_bg1.png') }}" alt="">

                <div class="workflow-overlay"></div>

                <div class="workflow-content">

                    <div>

                        <h3>
                            Proposal &
                            <br>
                            Quotation
                        </h3>

                        <p>
                            Understanding project objectives,
                            location conditions, and technical requirements.
                        </p>

                    </div>

                    <span>
                        03
                    </span>

                </div>

            </div>

            <!-- CARD -->
            <div class="workflow-card">

                <img src="{{ asset('image/home_page_bg1.png') }}" alt="">

                <div class="workflow-overlay"></div>

                <div class="workflow-content">

                    <div>

                        <h3>
                            Installation &
                            <br>
                            Integration
                        </h3>

                        <p>
                            Professional setup, structural works,
                            system integration, and technical testing.
                        </p>

                    </div>

                    <span>
                        04
                    </span>

                </div>

            </div>

            <!-- CARD -->
            <div class="workflow-card">

                <img src="{{ asset('image/home_page_bg1.png') }}" alt="">

                <div class="workflow-overlay"></div>

                <div class="workflow-content">

                    <div>

                        <h3>
                            Quality Check &
                            <br>
                            Handover
                        </h3>

                        <p>
                            Ensuring stable operation, visual performance,
                            and project completion standards.
                        </p>

                    </div>

                    <span>
                        05
                    </span>

                </div>

            </div>

            <!-- CARD -->
            <div class="workflow-card">

                <img src="{{ asset('image/home_page_bg1.png') }}" alt="">

                <div class="workflow-overlay"></div>

                <div class="workflow-content">

                    <div>

                        <h3>
                            Maintenance &
                            <br>
                            Technical Support
                        </h3>

                        <p>
                            Providing long-term maintenance,
                            repair services, and technical assistance.
                        </p>

                    </div>

                    <span>
                        06
                    </span>

                </div>

            </div>

        </div>

    </div>

</section>
<style>
    /* =========================================================
   FEATURED PROJECTS SECTION
========================================================= */

.featured-projects{
    position: relative;
    padding: 120px 0;
    background: #ffffff;
    overflow: hidden;
}

/* BLUE GLOW */
.featured-projects::before{
    content: "";
    position: absolute;
    width: 850px;
    height: 850px;
    left: -300px;
    bottom: -300px;
    border-radius: 50%;
    background: radial-gradient(
        circle,
        rgba(0,102,255,.12),
        transparent 70%
    );
    z-index: 0;
}

.featured-container{
    position: relative;
    z-index: 2;
    max-width: 1280px;
    margin: auto;
    padding: 0 20px;
}

/* =========================================================
   SECTION HEADER
========================================================= */

.section-heading{
    margin-bottom: 60px;
}

.section-heading h2{
    font-size: 52px;
    font-weight: 700;
    color: #111827;
    margin-bottom: 18px;
    line-height: 1.1;
}

.section-heading p{
    font-size: 16px;
    line-height: 1.9;
    color: #6b7280;
    max-width: 760px;
}

/* =========================================================
   PROJECT CARD
========================================================= */

.project-card{
    position: relative;
    display: flex;
    align-items: center;
    gap: 40px;
    margin-bottom: 32px;
    padding: 26px;
    border-radius: 30px;
    background: #ffffff;
    border: 1px solid rgba(0,0,0,.06);
    box-shadow: 0 12px 35px rgba(0,0,0,.05);
    overflow: hidden;
    transition: .35s ease;
}

.project-card::before{
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(
        135deg,
        rgba(0,102,255,.05),
        transparent 60%
    );
    opacity: 0;
    transition: .35s ease;
}

.project-card:hover{
    transform: translateY(-8px);
    border-color: rgba(0,102,255,.15);
    box-shadow: 0 22px 55px rgba(0,102,255,.12);
}

.project-card:hover::before{
    opacity: 1;
}

.project-card.reverse{
    flex-direction: row-reverse;
}

/* =========================================================
   PROJECT IMAGE
========================================================= */

.project-image{
    flex: 1;
    min-width: 340px;
    border-radius: 22px;
    overflow: hidden;
    position: relative;
}

.project-image img{
    width: 100%;
    height: 300px;
    object-fit: cover;
    transition: .5s ease;
}

.project-card:hover .project-image img{
    transform: scale(1.06);
}

/* =========================================================
   PROJECT CONTENT
========================================================= */

.project-content{
    flex: 1;
    position: relative;
    z-index: 2;
}

.project-content h3{
    font-size: 34px;
    font-weight: 700;
    color: #111827;
    margin-bottom: 16px;
    line-height: 1.2;
}

.project-content p{
    font-size: 16px;
    line-height: 1.9;
    color: #6b7280;
    margin-bottom: 30px;
}

/* =========================================================
   BUTTON
========================================================= */

.project-btn{
    display: inline-flex;
    align-items: center;
    justify-content: center;
    height: 54px;
    padding: 0 34px;
    border-radius: 60px;
    text-decoration: none;
    color: #ffffff;
    font-size: 14px;
    font-weight: 600;
    background: linear-gradient(
        135deg,
        #0057ff,
        #2563eb
    );
    box-shadow: 0 12px 30px rgba(0,102,255,.20);
    transition: .35s ease;
}

.project-btn:hover{
    transform: translateY(-4px);
    color: #ffffff;
    box-shadow: 0 18px 40px rgba(0,102,255,.28);
}

/* =========================================================
   VIEW MORE
========================================================= */

.project-more{
    text-align: center;
    margin-top: 60px;
}

.project-more-btn{
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 260px;
    height: 58px;
    padding: 0 40px;
    border-radius: 60px;
    text-decoration: none;
    color: #ffffff;
    font-size: 15px;
    font-weight: 600;
    background: linear-gradient(
        135deg,
        #0057ff,
        #2563eb
    );
    box-shadow: 0 14px 35px rgba(0,102,255,.22);
    transition: .35s ease;
}

.project-more-btn:hover{
    transform: translateY(-5px);
    color: #ffffff;
    box-shadow: 0 22px 45px rgba(0,102,255,.32);
}

/* =========================================================
   TRUST SECTION
========================================================= */

.trust-section{
    position: relative;
    padding: 120px 0;
    background: #ffffff;
    overflow: hidden;
}

.trust-section::before{
    content: "";
    position: absolute;
    width: 800px;
    height: 800px;
    top: -250px;
    right: -250px;
    border-radius: 50%;
    background: radial-gradient(
        circle,
        rgba(0,102,255,.08),
        transparent 70%
    );
    z-index: 0;
}

.trust-section .container{
    position: relative;
    z-index: 2;
}

/* =========================================================
   TRUST HEADER
========================================================= */

.trust-header{
    margin-bottom: 45px;
}

.trust-header h2{
    font-size: 50px;
    font-weight: 700;
    color: #111827;
    line-height: 1.2;
}

.trust-header span{
    color: #0057ff;
}

/* =========================================================
   TOP BAR
========================================================= */

.trust-top-bar{
    background: linear-gradient(
        90deg,
        #0057ff,
        #2563eb
    );
    border-radius: 14px;
    padding: 18px 0;
    overflow: hidden;
    margin-bottom: 55px;
}

.trust-bar-track{
    display: flex;
    width: max-content;
    animation: marqueeMove 18s linear infinite;
}

.trust-bar-track span{
    color: #ffffff;
    font-size: 14px;
    font-weight: 600;
    text-transform: uppercase;
    margin-right: 80px;
    letter-spacing: .5px;
}

/* =========================================================
   TRUST GRID
========================================================= */

.trust-grid{
    display: grid;
    grid-template-columns: repeat(2,1fr);
    gap: 28px;
}

/* =========================================================
   TRUST CARD
========================================================= */

.trust-card{
    background: #ffffff;
    border: 1px solid rgba(0,0,0,.06);
    border-radius: 24px;
    padding: 38px;
    transition: .35s ease;
    box-shadow: 0 10px 35px rgba(0,0,0,.05);
}

.trust-card:hover{
    transform: translateY(-6px);
    border-color: rgba(0,102,255,.15);
    box-shadow: 0 20px 45px rgba(0,102,255,.10);
}

.trust-card.active{
    background: linear-gradient(
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
    font-size: 24px;
    font-weight: 700;
    color: #111827;
    margin-bottom: 18px;
}

.trust-card p{
    font-size: 15px;
    line-height: 1.9;
    color: #6b7280;
}

/* =========================================================
   WORKFLOW SECTION
========================================================= */

.workflow-section{
    padding: 120px 0;
    background: #ffffff;
}

/* =========================================================
   WORKFLOW TITLE
========================================================= */

.workflow-title{
    margin-bottom: 55px;
}

.workflow-title h2{
    font-size: 50px;
    font-weight: 700;
    color: #111827;
}

/* =========================================================
   WORKFLOW GRID
========================================================= */

.workflow-grid{
    display: grid;
    grid-template-columns: repeat(2,1fr);
    gap: 28px;
}

/* =========================================================
   WORKFLOW CARD
========================================================= */

.workflow-card{
    position: relative;
    min-height: 340px;
    border-radius: 28px;
    overflow: hidden;
    box-shadow: 0 12px 40px rgba(0,0,0,.08);
}

.workflow-card img{
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: .6s ease;
}

.workflow-card:hover img{
    transform: scale(1.08);
}

/* OVERLAY */

.workflow-overlay{
    position: absolute;
    inset: 0;
    background: linear-gradient(
        180deg,
        rgba(0,0,0,.05),
        rgba(0,0,0,.75)
    );
}

/* CONTENT */

.workflow-content{
    position: absolute;
    inset: 0;
    z-index: 2;
    padding: 35px;
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
}

.workflow-content h3{
    font-size: 30px;
    font-weight: 700;
    line-height: 1.2;
    color: #ffffff;
    margin-bottom: 18px;
}

.workflow-content p{
    font-size: 15px;
    line-height: 1.9;
    color: rgba(255,255,255,.88);
    max-width: 360px;
}

.workflow-content span{
    font-size: 52px;
    font-weight: 700;
    color: #ffffff;
    opacity: .9;
}

/* =========================================================
   RESPONSIVE
========================================================= */

@media(max-width:991px){

    .project-card,
    .project-card.reverse{
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
        font-size: 38px;
    }
}

@media(max-width:576px){

    .featured-projects,
    .trust-section,
    .workflow-section{
        padding: 80px 0;
    }

    .section-heading h2,
    .trust-header h2,
    .workflow-title h2{
        font-size: 30px;
    }

    .project-content h3{
        font-size: 26px;
    }

    .workflow-content{
        padding: 24px;
    }

    .workflow-content h3{
        font-size: 24px;
    }

    .workflow-content span{
        font-size: 42px;
    }

    .project-btn,
    .project-more-btn{
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