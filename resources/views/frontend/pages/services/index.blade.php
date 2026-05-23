@extends('frontend.layouts.app')

@section('title', 'Solutions')

 {{-- HERO SECTION --}}
    @include('frontend.layouts.hero')
       {{-- HERO SECTION --}}
    @include('frontend.pages.home.about')
@section('content')
@include('frontend.pages.services.components.what-matter')



@include('frontend.pages.solutions.components.why-led')

{{-- FAQ --}}
@include('frontend.pages.solutions.components.faq')

{{-- FAQ --}}
@include('frontend.pages.solutions.components.partner')



@endsection