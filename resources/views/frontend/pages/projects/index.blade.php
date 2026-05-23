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

        {{-- PROJECT LIST --}}
        <div class="project-list">

            @forelse($projects as $index => $project)

                <div class="project-card {{ $index % 2 !== 0 ? 'reverse' : '' }}">

                    {{-- IMAGE --}}
                    <div class="project-image">
                        <img src="{{ $project->thumbnail ? asset('storage/' . $project->thumbnail) : asset('image/project-1.png') }}"
                             alt="{{ $project->title }}">
                    </div>

                    {{-- CONTENT --}}
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

                <p class="no-projects">No projects found.</p>

            @endforelse

        </div>

        {{-- PAGINATION --}}
        @if($projects->hasPages())
            <div class="pagination-wrapper">
                {{ $projects->links() }}
            </div>
        @endif

    </div>

</section>

@endsection
<style>
    .projects-page{
    width:100%;
    min-height:100vh;
    padding:70px 0;
    background:linear-gradient(180deg,#03114f 0%, #03074d 100%);
    overflow:hidden;
    font-family:Arial,sans-serif;
}

/* CONTAINER */

.all_project_container{
    width:82%;
    max-width:880px;
    margin-top:50px;
}

/* HEADER */

.projects-header{
    text-align:center;
    margin-bottom:45px;
}

.projects-header h1{
    font-size:34px;
    font-weight:400;
    color:#fff;
    margin-bottom:12px;
}

.projects-header p{
    max-width:620px;
    margin:auto;
    color:rgba(255,255,255,0.78);
    font-size:14px;
    line-height:1.7;
}

/* PROJECT LIST */

.project-list{
    display:flex;
    flex-direction:column;
    gap:18px;
}

/* PROJECT CARD */

.project-card{
    display:grid;
    grid-template-columns:240px 1fr;
    align-items:center;
    gap:22px;
    padding:12px 16px;
    border:1px solid rgba(255,255,255,0.15);
    border-radius:14px;
    background:linear-gradient(
        90deg,
        rgba(255,255,255,0.03),
        rgba(0,102,255,0.08)
    );
    overflow:hidden;
    transition:0.3s ease;
}

.project-card:hover{
    transform:translateY(-2px);
    border-color:rgba(255,255,255,0.25);
}

/* REVERSE CARD */

.project-card.reverse{
    grid-template-columns:1fr 240px;
}

.project-card.reverse .project-image{
    order:2;
}

.project-card.reverse .project-content{
    order:1;
}

/* IMAGE */

.project-image{
    width:100%;
    overflow:hidden;
    border-radius:10px;
}

.project-image img{
    width:100%;
    height:145px;
    object-fit:cover;
    display:block;
    transition:0.4s ease;
}

.project-card:hover .project-image img{
    transform:scale(1.03);
}

/* CONTENT */

.project-content h3{
    font-size:22px;
    color:#fff;
    margin-bottom:10px;
    font-weight:500;
}

.project-content p{
    color:rgba(255,255,255,0.78);
    font-size:14px;
    line-height:1.6;
    margin-bottom:16px;
}

/* BUTTON */

.project-btn{
    display:inline-flex;
    align-items:center;
    justify-content:center;
    padding:8px 18px;
    border-radius:30px;
    background:linear-gradient(90deg,#0b63ff,#0d2cff);
    color:#fff;
    text-decoration:none;
    font-size:12px;
    font-weight:500;
    transition:0.3s ease;
}

.project-btn:hover{
    transform:translateY(-2px);
    box-shadow:0 8px 18px rgba(0,102,255,0.35);
}

/* RESPONSIVE */

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
        height:200px;
    }

    .project-content{
        text-align:center;
    }

}

@media(max-width:576px){

    .projects-page{
        padding:50px 0;
    }

    .projects-header{
        margin-bottom:35px;
    }

    .projects-header h1{
        font-size:28px;
    }

    .projects-header p{
        font-size:13px;
        line-height:1.6;
    }

    .project-card{
        padding:12px;
        gap:16px;
    }

    .project-image img{
        height:160px;
    }

    .project-content h3{
        font-size:20px;
    }

    .project-content p{
        font-size:13px;
        margin-bottom:14px;
    }

    .project-btn{
        padding:8px 16px;
        font-size:11px;
    }

}
</style>