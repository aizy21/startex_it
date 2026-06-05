@extends('home.layout')


@section('content')




    <!-- HERO SECTION -->
    @include("home.pages.landing.sections.hero")

    <!-- ABOUT SECTION -->
    @include("home.pages.landing.sections.about")

    <!-- SOLUTIONS SECTION -->
    @include("home.pages.landing.sections.solutions")


    <!-- CLIENTS SECTION -->
    @include("home.pages.landing.sections.services")
    @include("home.pages.landing.sections.clients")
    @include("home.pages.landing.sections.testimonials")

    <!-- CONTACT SECTION -->
    @include("home.pages.landing.sections.contact")


@endsection
