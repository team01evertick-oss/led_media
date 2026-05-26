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
            <button class="tab-btn active" data-category="all">All</button>
            <button class="tab-btn" data-category="outdoor-billboard">Outdoor Billboard</button>
            <button class="tab-btn" data-category="commercial">Commercial</button>
            <button class="tab-btn" data-category="retail">Retail</button>
            <button class="tab-btn" data-category="corporate">Corporate</button>
            <button class="tab-btn" data-category="fine-pixel">Fine Pixel</button>
        </div>

        {{-- PROJECT LIST --}}
        <div class="project-list" id="project-list">

            @forelse($projects as $index => $project)
                <div class="project-card {{ $index % 2 !== 0 ? 'reverse' : '' }}"
                     data-category="{{ $project->category }}">

                    <div class="project-image">
                        <img src="{{ $project->thumbnail ? asset('storage/' . $project->thumbnail) : asset('image/project-1.png') }}"
                             alt="{{ $project->title }}">
                    </div>

                    <div class="project-content">
                        <h3>{{ $project->title }}</h3>
                        <p>{{ $project->short_description }}</p>
                        <a href="{{ route('projects.show', $project->slug) }}" class="project-btn">More Detail</a>
                    </div>

                </div>
            @empty
                <p class="no-projects">No projects found.</p>
            @endforelse

        </div>

    </div>

</section>

@endsection

<style>
html { scroll-behavior: smooth; }

.projects-page {
    width: 100%;
    min-height: 100vh;
    padding: 70px 0;
    background: linear-gradient(180deg, #03114f 0%, #03074d 100%);
    overflow: hidden;
    font-family: Arial, sans-serif;
}

.all_project_container {
    width: 82%;
    max-width: 880px;
    margin: 50px auto 0;
}

.projects-header {
    text-align: center;
    margin-bottom: 45px;
}

.projects-header h1 {
    font-size: 34px;
    font-weight: 400;
    color: #fff;
    margin-bottom: 12px;
}

.projects-header p {
    max-width: 620px;
    margin: auto;
    color: rgba(255,255,255,0.78);
    font-size: 14px;
    line-height: 1.7;
}

/* TABS */
.category-tabs {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    margin-bottom: 30px;
    justify-content: center;
}

.tab-btn {
    padding: 8px 20px;
    border-radius: 30px;
    border: 1px solid rgba(255,255,255,0.25);
    background: transparent;
    color: rgba(255,255,255,0.7);
    font-size: 13px;
    cursor: pointer;
    transition: 0.3s ease;
}

.tab-btn:hover,
.tab-btn.active {
    background: linear-gradient(90deg, #0b63ff, #0d2cff);
    border-color: transparent;
    color: #fff;
}

/* PROJECT LIST */
.project-list {
    display: flex;
    flex-direction: column;
    gap: 18px;
}

.project-card {
    display: grid;
    grid-template-columns: 240px 1fr;
    align-items: center;
    gap: 22px;
    padding: 12px 16px;
    border: 1px solid rgba(255,255,255,0.15);
    border-radius: 14px;
    background: linear-gradient(90deg, rgba(255,255,255,0.03), rgba(0,102,255,0.08));
    overflow: hidden;
    transition: 0.3s ease;
}

.project-card:hover {
    transform: translateY(-2px);
    border-color: rgba(255,255,255,0.25);
}

.project-card.hidden { display: none; }

.project-card.reverse { grid-template-columns: 1fr 240px; }
.project-card.reverse .project-image { order: 2; }
.project-card.reverse .project-content { order: 1; }

.project-image {
    width: 100%;
    overflow: hidden;
    border-radius: 10px;
}

.project-image img {
    width: 100%;
    height: 145px;
    object-fit: cover;
    display: block;
    transition: 0.4s ease;
}

.project-card:hover .project-image img { transform: scale(1.03); }

.project-content h3 {
    font-size: 22px;
    color: #fff;
    margin-bottom: 10px;
    font-weight: 500;
}

.project-content p {
    color: rgba(255,255,255,0.78);
    font-size: 14px;
    line-height: 1.6;
    margin-bottom: 16px;
}

.project-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 8px 18px;
    border-radius: 30px;
    background: linear-gradient(90deg, #0b63ff, #0d2cff);
    color: #fff;
    text-decoration: none;
    font-size: 12px;
    font-weight: 500;
    transition: 0.3s ease;
}

.project-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 18px rgba(0,102,255,0.35);
}

.no-projects {
    color: rgba(255,255,255,0.5);
    font-size: 14px;
    text-align: center;
    padding: 30px 0;
}

@media(max-width:991px) {
    .all_project_container { width: 90%; }
    .project-card, .project-card.reverse { grid-template-columns: 1fr; }
    .project-card.reverse .project-image,
    .project-card.reverse .project-content { order: unset; }
    .project-image img { height: 200px; }
    .project-content { text-align: center; }
}

@media(max-width:576px) {
    .projects-page { padding: 50px 0; }
    .projects-header { margin-bottom: 35px; }
    .projects-header h1 { font-size: 28px; }
    .projects-header p { font-size: 13px; }
    .project-card { padding: 12px; gap: 16px; }
    .project-image img { height: 160px; }
    .project-content h3 { font-size: 20px; }
    .project-content p { font-size: 13px; margin-bottom: 14px; }
    .project-btn { padding: 8px 16px; font-size: 11px; }
    .category-tabs { gap: 8px; }
    .tab-btn { padding: 6px 14px; font-size: 12px; }
}
</style>

<script>
document.addEventListener("DOMContentLoaded", function () {

    const tabs    = document.querySelectorAll('.tab-btn');
    const cards   = document.querySelectorAll('.project-card');

    function filterCategory(category) {
        tabs.forEach(t => t.classList.remove('active'));
        document.querySelector(`[data-category="${category}"]`)?.classList.add('active');

        cards.forEach(card => {
            if (category === 'all' || card.dataset.category === category) {
                card.classList.remove('hidden');
            } else {
                card.classList.add('hidden');
            }
        });
    }

    // Tab click
    tabs.forEach(tab => {
        tab.addEventListener('click', function () {
            filterCategory(this.dataset.category);
        });
    });

    // Auto-filter from URL hash e.g. /projects#commercial
    const hash = window.location.hash.replace('#', '');
    if (hash) {
        filterCategory(hash);
    }

});
</script>