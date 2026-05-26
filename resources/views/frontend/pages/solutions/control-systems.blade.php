@extends('frontend.layouts.app')

@section('title', 'Indoor')

@section('content')

    {{-- HERO SECTION --}}
    @include('frontend.layouts.hero')

    {{-- ABOUT SECTION --}}
    @include('frontend.pages.home.about')

    {{-- BENEFIT --}}
    @include('frontend.pages.solutions.components.benefit')

    {{-- WHY US --}}
    @include('frontend.pages.solutions.components.why-us')

    {{-- TECHNICAL FEATURES --}}
    @include('frontend.pages.solutions.components.technical-features')

    {{-- FEATURED PROJECTS --}}
    @include('frontend.pages.solutions.components.featured')

    {{-- FAQ --}}
    @include('frontend.pages.solutions.components.faq')

    {{-- PARTNER --}}
    @include('frontend.pages.solutions.components.partner')

@endsection