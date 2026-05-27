@extends('frontend.layouts.app')

@section('title', 'Projects')

@section('content')

<section class="projects-page">

    <div class="all_project_container">

        {{-- HEADER --}}
        <div class="projects-header">

            <h1>Featured Projects</h1>

            <p>
                Proven Project Experience Across Cambodia.
                LED Media has successfully completed LED display
                installations and event production projects for
                leading organizations, banks, brands,
                and institutions nationwide.
            </p>

        </div>

        {{-- CATEGORY TABS --}}
        <div class="category-tabs">

            <button class="tab-btn active" data-filter="all">
                All
            </button>

            <button class="tab-btn" data-filter="outdoor-billboard">
                Outdoor Billboard
            </button>

            <button class="tab-btn" data-filter="commercial">
                Commercial
            </button>

            <button class="tab-btn" data-filter="retail">
                Retail
            </button>

            <button class="tab-btn" data-filter="corporate">
                Corporate
            </button>

            <button class="tab-btn" data-filter="fine-pixel">
                Fine Pixel
            </button>

        </div>

        {{-- PROJECT LIST --}}
        <div class="project-list">

            @forelse($projects as $index => $project)

                <div
                    class="project-card {{ $index % 2 !== 0 ? 'reverse' : '' }}"
                    data-category="{{ $project->category }}">

                    {{-- IMAGE --}}
                    <div class="project-image">

                        <img
                            src="{{ $project->thumbnail ? asset('storage/' . $project->thumbnail) : asset('image/project-1.png') }}"
                            alt="{{ $project->title }}">

                    </div>

                    {{-- CONTENT --}}
                    <div class="project-content">

                        <h3>{{ $project->title }}</h3>

                        <p>
                            {{ $project->short_description }}
                        </p>

                        <a
                            href="{{ route('projects.show', $project->slug) }}"
                            class="project-btn">

                            More Detail

                        </a>

                    </div>

                </div>

            @empty

                <p class="no-projects">
                    No projects found.
                </p>

            @endforelse

        </div>

    </div>

</section>

@endsection

<style>

/* =========================================================
   GLOBAL
========================================================= */

html{
    scroll-behavior:smooth;
}

/* =========================================================
   PAGE
========================================================= */

.projects-page{
    width:100%;
    min-height:100vh;
    padding:80px 0;
    background:linear-gradient(
        180deg,
        #03114f 0%,
        #03074d 100%
    );
    overflow:hidden;
    font-family:Arial,sans-serif;
}

/* =========================================================
   CONTAINER
========================================================= */

.all_project_container{
    width:82%;
    max-width:1100px;
    margin:100px auto 0;
}

/* =========================================================
   HEADER
========================================================= */

.projects-header{
    text-align:center;
    margin-bottom:50px;
}

.projects-header h1{
    font-size:42px;
    font-weight:400;
    color:#fff;
    margin-bottom:16px;
}

.projects-header p{
    max-width:700px;
    margin:auto;
    color:rgba(255,255,255,0.78);
    font-size:15px;
    line-height:1.8;
}

/* =========================================================
   CATEGORY TABS
========================================================= */

.category-tabs{
    display:flex;
    flex-wrap:wrap;
    gap:12px;
    margin-bottom:35px;
    justify-content:center;
}

.tab-btn{
    padding:10px 22px;
    border-radius:999px;
    border:1px solid rgba(255,255,255,0.18);
    background:transparent;
    color:rgba(255,255,255,0.7);
    font-size:13px;
    cursor:pointer;
    transition:0.3s ease;
}

.tab-btn:hover,
.tab-btn.active{
    background:linear-gradient(
        90deg,
        #0b63ff,
        #0d2cff
    );
    border-color:transparent;
    color:#fff;
}

/* =========================================================
   PROJECT LIST
========================================================= */

.project-list{
    display:flex;
    flex-direction:column;
    gap:22px;
}

/* =========================================================
   PROJECT CARD
========================================================= */

.project-card{
    display:grid;
    grid-template-columns:260px 1fr;
    align-items:center;
    gap:24px;
    padding:16px;
    border-radius:18px;
    border:1px solid rgba(255,255,255,0.12);
    background:linear-gradient(
        90deg,
        rgba(255,255,255,0.03),
        rgba(0,102,255,0.08)
    );
    transition:0.3s ease;
}

.project-card:hover{
    transform:translateY(-3px);
    border-color:rgba(255,255,255,0.25);
}

/* HIDE CARD */

.project-card.hidden{
    display:none;
}

/* REVERSE LAYOUT */

.project-card.reverse{
    grid-template-columns:1fr 260px;
}

.project-card.reverse .project-image{
    order:2;
}

.project-card.reverse .project-content{
    order:1;
}

/* =========================================================
   IMAGE
========================================================= */

.project-image{
    width:100%;
    overflow:hidden;
    border-radius:12px;
}

.project-image img{
    width:100%;
    height:170px;
    object-fit:cover;
    display:block;
    transition:0.4s ease;
}

.project-card:hover .project-image img{
    transform:scale(1.04);
}

/* =========================================================
   CONTENT
========================================================= */

.project-content h3{
    font-size:24px;
    color:#fff;
    margin-bottom:12px;
    font-weight:500;
}

.project-content p{
    color:rgba(255,255,255,0.78);
    font-size:14px;
    line-height:1.7;
    margin-bottom:18px;
}

/* =========================================================
   BUTTON
========================================================= */

.project-btn{
    display:inline-flex;
    align-items:center;
    justify-content:center;
    padding:10px 20px;
    border-radius:999px;
    background:linear-gradient(
        90deg,
        #0b63ff,
        #0d2cff
    );
    color:#fff;
    text-decoration:none;
    font-size:13px;
    font-weight:500;
    transition:0.3s ease;
}

.project-btn:hover{
    transform:translateY(-2px);
    box-shadow:0 8px 18px rgba(0,102,255,0.35);
}

/* =========================================================
   EMPTY
========================================================= */

.no-projects{
    color:rgba(255,255,255,0.5);
    font-size:14px;
    text-align:center;
    padding:30px 0;
}

/* =========================================================
   TABLET
========================================================= */

@media(max-width:991px){

    .all_project_container{
        width:90%;
    }

    .project-card,
    .project-card.reverse{
        grid-template-columns:1fr;
    }

    .project-card.reverse .project-image,
    .project-card.reverse .project-content{
        order:unset;
    }

    .project-image img{
        height:220px;
    }

    .project-content{
        text-align:center;
    }

}

/* =========================================================
   MOBILE
========================================================= */

@media(max-width:576px){

    .projects-page{
        padding:60px 0;
    }

    .projects-header h1{
        font-size:32px;
    }

    .projects-header p{
        font-size:13px;
    }

    .project-card{
        padding:14px;
        gap:18px;
    }

    .project-image img{
        height:180px;
    }

    .project-content h3{
        font-size:21px;
    }

    .project-content p{
        font-size:13px;
        margin-bottom:15px;
    }

    .project-btn{
        padding:8px 18px;
        font-size:12px;
    }

    .tab-btn{
        padding:8px 16px;
        font-size:12px;
    }

}

</style>

<script>

document.addEventListener('DOMContentLoaded', function () {

    const tabs  = document.querySelectorAll('.tab-btn');
    const cards = document.querySelectorAll('.project-card');

    function filterProjects(category){

        tabs.forEach(tab => {
            tab.classList.remove('active');
        });

        document
            .querySelector(`[data-filter="${category}"]`)
            ?.classList.add('active');

        cards.forEach(card => {

            const cardCategory = card.getAttribute('data-category');

            if(category === 'all' || cardCategory === category){

                card.classList.remove('hidden');

            }else{

                card.classList.add('hidden');

            }

        });

    }

    /* TAB CLICK */

    tabs.forEach(tab => {

        tab.addEventListener('click', function () {

            const category = this.getAttribute('data-filter');

            filterProjects(category);

        });

    });

    /* URL HASH FILTER */

    const hash = window.location.hash.replace('#', '');

    if(hash){

        filterProjects(hash);

    }

});

</script>