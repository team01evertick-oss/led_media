@extends('frontend.layouts.app')

@section('title', 'Home')

@section('content')


  {{-- HERO SECTION --}}
    @include('frontend.layouts.hero')
       {{-- HERO SECTION --}}
    @include('frontend.pages.home.about')
   
     {{-- STATISTICS --}}
    @include('frontend.pages.home.company-section')

    {{-- SERVICES --}}
    @include('frontend.pages.home.services')

    {{-- FEATURED PROJECTS --}}
    @include('frontend.pages.home.featured-projects')

    {{-- INDUSTRIES --}}
    @include('frontend.pages.home.industries')
     @include('frontend.pages.home.Service&Maintenance')
          @include('frontend.pages.home.Insights')
 @include('frontend.pages.home.BuildProject')

     

@endsection
