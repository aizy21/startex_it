@extends('home.layout')

@section('title', 'Our Services - Startex IT')

@push('styles')
    <style>
        /* Services Page Hero */
        .services-hero {
            background-color: var(--navy-blue, #0a192f);
            color: #ffffff;
            padding: 140px 0 90px;
            position: relative;
            overflow: hidden;
        }

        .services-hero-pattern {
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background-image: radial-gradient(rgba(255, 255, 255, 0.05) 2px, transparent 2px);
            background-size: 30px 30px;
            z-index: 0;
            mask-image: linear-gradient(to bottom, rgba(0,0,0,1) 0%, rgba(0,0,0,0) 100%);
            -webkit-mask-image: linear-gradient(to bottom, rgba(0,0,0,1) 0%, rgba(0,0,0,0) 100%);
        }

        /* Equal-Weight Alternating Sections */
        .service-detail-section {
            padding: 100px 0;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        }

        .service-detail-section:last-of-type {
            border-bottom: none;
        }

        /* Custom Techy Visual Panels */
        .tech-visual-panel {
            background-color: #f8fafd;
            border: 1px solid rgba(0, 0, 0, 0.05);
            border-radius: 24px;
            padding: 40px;
            min-height: 320px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        /* Inline tech stack badges */
        .tech-badge {
            background-color: rgba(10, 25, 47, 0.05);
            color: var(--navy-blue, #0a192f);
            font-size: 0.8rem;
            font-weight: 600;
            padding: 6px 14px;
            border-radius: 50px;
            display: inline-block;
        }

        /* CTA Section styles */
        .services-cta-section {
            background-color: var(--navy-blue, #0a192f);
            color: #ffffff;
            padding: 80px 0;
            position: relative;
        }

        /* Diagonal separator on the hero bottom */
        .services-angle-sep {
            position: absolute;
            bottom: -1px;
            left: 0;
            width: 100%;
            height: 60px;
            z-index: 3;
        }
    </style>
@endpush

@section('content')

    <!-- HERO HEADER: Tech-centric, Dark Backdrop -->
    @include("home.pages.services.sections.hero")

    <!-- SERVICE MODULE 1: Web & Mobile App Development -->
    @include("home.pages.services.sections.web_n_mobile")


    <!-- SERVICE MODULE 2: Custom Business Software (Alternated Layout) -->
    @include("home.pages.services.sections.custom_business_software")


    <!-- SERVICE MODULE 3: API Integrations & System Modernization -->
    @include("home.pages.services.sections.api_integration")


    <!-- SERVICE MODULE 4: Ongoing Support & Maintenance (Alternated Layout) -->
    @include("home.pages.services.sections.support_n_maintenance")


    <!-- CORE CTA ACTION STRIP -->
    @include("home.pages.services.sections.action")

@endsection
