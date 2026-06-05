@extends('home.layout')


@section('content')





    <!-- PRODUCT HERO -->
    <header class="product-hero text-center">
        <div class="container">
            <div class="row justify-content-center reveal">
                <div class="col-lg-8">
                    <div class="badge bg-light text-dark mb-3 rounded-pill px-3 py-2 fw-bold" style="color: var(--navy-blue) !important;">ASSET MANAGEMENT</div>
                    <h1 class="display-3 mb-4">Customer feedback Platform</h1>
                    <p class="lead mb-5 opacity-75">Your complete solution for smart asset tagging, preventive maintenance scheduling, and total multi-location visibility.</p>
                    <a href="index.html#contact" class="btn btn-theme btn-lg px-5">Start Free Trial</a>
                </div>
            </div>
            <div class="row justify-content-center mt-5 reveal" style="transition-delay: 0.2s;">
                <div class="col-lg-10">
                    <img src="https://placehold.co/1200x600/13ce85/001b3d?text=Trakset+Dashboard+Interface" alt="Product UI" class="img-fluid mockup-img">
                </div>
            </div>
        </div>
    </header>

    <!-- PRODUCT FEATURES -->
    <section class="py-5 my-5">
        <div class="container">
            <div class="text-center mb-5 reveal">
                <h2 class="fw-bold" style="color: var(--navy-blue);">Core Capabilities</h2>
            </div>
            <div class="row g-4">
                <div class="col-md-4 reveal">
                    <div class="feature-box">
                        <i class="fa-solid fa-qrcode feature-icon"></i>
                        <h4 class="fw-bold">Smart Asset Tagging</h4>
                        <p class="text-muted">Generate unique QR codes for every asset. Scan to view manuals, history, and status instantly.</p>
                    </div>
                </div>
                <div class="col-md-4 reveal" style="transition-delay: 0.1s;">
                    <div class="feature-box">
                        <i class="fa-solid fa-calendar-check feature-icon"></i>
                        <h4 class="fw-bold">Preventive Maintenance</h4>
                        <p class="text-muted">Set up automated schedules and reminders to stop reactive breakdowns before they happen.</p>
                    </div>
                </div>
                <div class="col-md-4 reveal" style="transition-delay: 0.2s;">
                    <div class="feature-box">
                        <i class="fa-solid fa-store feature-icon"></i>
                        <h4 class="fw-bold">Centralized Dashboard</h4>
                        <p class="text-muted">Manage all locations, branches, and tickets from one unified platform without relying on WhatsApp.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    @push('styles')


    <style>
        .product-hero {
            background: linear-gradient(135deg, var(--navy-blue) 0%, #003366 100%);
            color: var(--white);
            padding: 180px 0 100px;
        }

        .mockup-img { border-radius: 20px; box-shadow: 0 20px 50px rgba(0,0,0,0.5); }

        .feature-box {
            padding: 30px; border-radius: 15px; border: 1px solid #eee;
            transition: 0.3s; height: 100%;
        }
        .feature-box:hover { border-color: var(--green); transform: translateY(-5px); box-shadow: 0 10px 30px rgba(0,0,0,0.05); }
        .feature-icon { font-size: 2.5rem; color: var(--green); margin-bottom: 20px; }

    </style>
    @endpush

@endsection
