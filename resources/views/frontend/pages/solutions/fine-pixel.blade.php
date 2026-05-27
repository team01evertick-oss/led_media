@extends('frontend.layouts.app')

@section('title', 'Solutions')

@section('content')

    {{-- HERO SECTION --}}
    @include('frontend.layouts.hero')

    {{-- ABOUT --}}
    @include('frontend.pages.home.about')

    {{-- BENEFIT --}}
    @include('frontend.pages.solutions.components.benefit')

    {{-- WHY LED --}}
    @include('frontend.pages.solutions.components.why-led')

    @include('frontend.pages.solutions.components.why-us', ['whyLed' => $whyLed])


    {{-- TECHNICAL FEATURES --}}
    @include('frontend.pages.solutions.components.technical-features')


    {{-- FEATURED PROJECTS --}}
    <section class="featured-projects">

        <div class="featured-projects__container">

            {{-- Header --}}
            <div class="featured-projects__header">

                <h2 class="featured-projects__title">
                    Featured Projects
                </h2>

                <p class="featured-projects__description">
                    Professional indoor LED setup designed for government
                    meeting and presentation environments.
                </p>

            </div>


            {{-- Cards --}}
            <div class="featured-projects__cards">

                {{-- CARD 1 --}}
                <div class="project-card">

                    <div class="project-card__image-wrap">

                        <img
                            src="{{ asset('storage/image/Shinhan.png') }}"
                            alt="Shinhan Bank"
                            class="project-card__image">

                    </div>

                    <div class="project-card__body">

                        <h3 class="project-card__title">
                            Retail LED Display Installation

                        </h3>

                        <p class="project-card__location">
                            Phnom Penh
                        </p>

                        <a href="{{ url('/projects') }}" 
                            class="project-card__btn">
                            More Detail
                        </a>

                    </div>

                </div>


            </div>


            {{-- View More --}}
            <div class="featured-projects__footer">

                <a href="#"
                    class="featured-projects__view-more-btn">
                    View More Projects
                </a>

            </div>

        </div>

    </section>


    {{-- FAQ --}}
    @include('frontend.pages.solutions.components.faq')

    {{-- PARTNER --}}
    @include('frontend.pages.solutions.components.partner')

@endsection



@push('styles')

<style>

/* =========================================================
   FEATURED PROJECTS
========================================================= */

:root {
    --fp-bg: #04093d;
    --fp-accent: #1a6fff;
    --fp-card-bg: rgba(255,255,255,.06);
    --fp-card-border: rgba(255,255,255,.12);
    --fp-text-primary: #ffffff;
    --fp-text-secondary: #a0b4d6;
    --fp-radius-card: 16px;
    --fp-radius-btn: 50px;
}

/* Section */
.featured-projects {
    padding: 80px 20px;
    background:
        radial-gradient(
            ellipse 120% 60% at 50% 0%,
            #0c1f80 0%,
            #04093d 70%
        );

    overflow: hidden;
}

/* Container */
.featured-projects__container {
    max-width: 1200px;
    margin: auto;
}

/* Header */
.featured-projects__header {
    margin-bottom: 40px;
}

.featured-projects__title {
    color: #fff;
    font-size: 42px;
    font-weight: 700;
    margin-bottom: 15px;
}

.featured-projects__description {
    color: var(--fp-text-secondary);
    max-width: 600px;
    line-height: 1.7;
}

/* Cards */
.featured-projects__cards {
    display: flex;
    flex-wrap: wrap;
    gap: 25px;
}

/* Card */
.project-card {
    flex: 1 1 500px;

    display: flex;
    align-items: center;
    gap: 25px;

    padding: 20px;

    border-radius: var(--fp-radius-card);

    background: var(--fp-card-bg);

    border: 1px solid var(--fp-card-border);

    backdrop-filter: blur(10px);

    transition: 0.3s ease;
}

.project-card:hover {
    transform: translateY(-5px);

    box-shadow:
        0 0 30px rgba(26,111,255,.25);
}

/* Image */
.project-card__image-wrap {
    width: 240px;
    height: 170px;

    border-radius: 12px;

    overflow: hidden;

    flex-shrink: 0;
}

.project-card__image {
    width: 100%;
    height: 100%;

    object-fit: cover;

    transition: 0.4s ease;
}

.project-card:hover .project-card__image {
    transform: scale(1.05);
}

/* Body */
.project-card__body {
    display: flex;
    flex-direction: column;
    gap: 12px;
}

.project-card__title {
    color: #fff;
    font-size: 28px;
    font-weight: 700;
    margin: 0;
}

.project-card__location {
    color: var(--fp-text-secondary);
    margin: 0;
}

/* Buttons */
.project-card__btn,
.featured-projects__view-more-btn {

    display: inline-flex;
    align-items: center;
    justify-content: center;

    text-decoration: none;

    color: #fff;

    border-radius: var(--fp-radius-btn);

    background:
        linear-gradient(
            135deg,
            #1a6fff 0%,
            #0a42c8 100%
        );

    transition: 0.3s ease;
}

/* Card Button */
.project-card__btn {
    width: fit-content;
    padding: 10px 25px;
    margin-top: 10px;
}

/* View More */
.featured-projects__footer {
    text-align: center;
    margin-top: 50px;
}

.featured-projects__view-more-btn {
    padding: 16px 55px;
}

/* Hover */
.project-card__btn:hover,
.featured-projects__view-more-btn:hover {

    transform: translateY(-2px);

    box-shadow:
        0 8px 24px rgba(26,111,255,.45);
}

/* Responsive */
@media (max-width: 768px) {

    .project-card {
        flex-direction: column;
    }

    .project-card__image-wrap {
        width: 100%;
        height: 220px;
    }

    .featured-projects__title {
        font-size: 32px;
    }
}

</style>

@endpush