@extends('frontend.layouts.app')

@section('title', 'Why-led')

 {{-- HERO SECTION --}}
    @include('frontend.layouts.hero')
       {{-- HERO SECTION --}}
    @include('frontend.pages.home.about')
@section('content')
 
@include('frontend.pages.services.components.what-matter')

@include('frontend.pages.solutions.components.technical-features')

{{-- FAQ --}}
@include('frontend.pages.solutions.components.faq')

{{-- FAQ --}}
@include('frontend.pages.solutions.components.partner')



@endsection