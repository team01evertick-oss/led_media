@extends('frontend.layouts.app')

@section('title', 'Solutions')

 {{-- HERO SECTION --}}
    @include('frontend.layouts.hero')
       {{-- HERO SECTION --}}
    @include('frontend.pages.home.about')
@section('content')
 
{{-- WHY LED --}}
@include('frontend.pages.industry.why-led')

{{-- FEATURED PROJECTS --}}
@include('frontend.pages.solutions.components.featured')

{{-- FAQ --}}
@include('frontend.pages.solutions.components.faq')

{{-- FAQ --}}
@include('frontend.pages.solutions.components.partner')



@endsection