@extends('frontend.layouts.app')

@section('title', 'meeting-room')

 {{-- HERO SECTION --}}
    @include('frontend.layouts.hero')
       {{-- HERO SECTION --}}
    @include('frontend.pages.home.about')
@section('content')

{{-- benefit --}}
@include('frontend.pages.solutions.components.benefit')


{{-- TECHNICAL FEATURES --}}
@include('frontend.pages.solutions.components.technical-features')


{{-- FEATURED PROJECTS --}}
@include('frontend.pages.solutions.components.featured')

{{-- FAQ --}}
@include('frontend.pages.solutions.components.faq')

{{-- FAQ --}}
@include('frontend.pages.solutions.components.partner')



@endsection