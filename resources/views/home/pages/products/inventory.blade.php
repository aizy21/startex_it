@extends('home.layout')

@section('content')
    <!-- PRODUCT HERO -->
    <header class="product-hero text-center position-relative overflow-hidden">
        <!-- Subtle Background Dot Grid -->
        <div class="product-hero-pattern"></div>

        <div class="container position-relative z-2">
            <div class="row justify-content-center reveal">
                <div class="col-lg-8">
                    <div class="badge mb-3 rounded-pill px-3 py-2 fw-bold" style="background-color: rgba(19, 206, 133, 0.1); color: #13ce85 !important;">INVENTORY SYSTEM</div>
                    <h1 class="display-4 fw-bolder mb-4 text-white">
                        AI-Powered <br>
                        <span class="text-accent" style="color: #13ce85;">Inventory Management</span>
                    </h1>
                    <p class="lead mb-5 opacity-75 text-white-50 fs-6">Track stock levels automatically, eliminate manual reconciliation errors, and forecast demand seamlessly with our intelligent, multi-location database system.</p>
                    <a href="/#contact" class="btn btn-theme-light btn-lg px-5 py-3 rounded-pill fw-bold text-dark border-0" style="background-color: #13ce85; color: #0a192f !important;">Request a Demo</a>
                </div>
            </div>
            <!-- Mockup Dashboard Display -->
            <div class="row justify-content-center mt-5 reveal" style="transition-delay: 0.2s;">
                <div class="col-lg-10">
                    <div class="mockup-wrapper bg-white p-2 rounded-4 shadow-lg">
                        <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&w=1200&q=80" alt="AI Powered Inventory Analytics Dashboard" class="img-fluid mockup-img w-100 rounded-3">
                    </div>
                </div>
            </div>
        </div>

        <!-- Angle Separator to transition into the white features area -->
        <svg style="position:absolute; bottom:-1px; left:0; width:100%; height:60px; z-index:3;" preserveAspectRatio="none" viewBox="0 0 1440 60" fill="none" xmlns="http://www.w3.org/2000/svg">
            <polygon points="0,60 1440,60 1440,0" fill="#ffffff"/>
        </svg>
    </header>

    <!-- CORE CAPABILITIES / FEATURES -->
    <section class="py-5 my-5 bg-white position-relative" style="z-index: 4;">
        <div class="container">
            <div class="text-center mb-5 reveal">
                <span class="text-uppercase tracking-wider fw-bold fs-7" style="color: #13ce85;">Platform Features</span>
                <h2 class="fw-bold mt-2" style="color: var(--navy-blue, #0a192f);">Core System Capabilities</h2>
                <p class="text-muted max-w-600 mx-auto">Advanced, scalable inventory tools built to keep stock levels balanced, automate supplier orders, and reduce operational waste.</p>
            </div>

            <div class="row g-4">

                <!-- Feature 1: Real-time stock tracking -->
                <div class="col-md-4 reveal">
                    <div class="card feature-box h-100 p-4 border rounded-4 bg-white shadow-sm">
                        <div class="icon-indicator mb-4 d-flex align-items-center justify-content-center rounded-3 bg-light" style="width: 50px; height: 50px;">
                            <i class="fa-solid fa-boxes-stacked fs-3" style="color: #13ce85;"></i>
                        </div>
                        <h4 class="fw-bold mb-3" style="color: var(--navy-blue, #0a192f);">Automated Stock Tracking</h4>
                        <p class="text-muted small lh-lg mb-0">Monitor inventory levels across multiple warehouses in real-time. Automatically reconcile physical inventory changes using integrated barcode scanning.</p>
                    </div>
                </div>

                <!-- Feature 2: Predictive Demand Forecasting -->
                <div class="col-md-4 reveal" style="transition-delay: 0.1s;">
                    <div class="card feature-box h-100 p-4 border rounded-4 bg-white shadow-sm">
                        <div class="icon-indicator mb-4 d-flex align-items-center justify-content-center rounded-3 bg-light" style="width: 50px; height: 50px;">
                            <i class="fa-solid fa-brain fs-3" style="color: #13ce85;"></i>
                        </div>
                        <h4 class="fw-bold mb-3" style="color: var(--navy-blue, #0a192f);">Predictive Forecasting</h4>
                        <p class="text-muted small lh-lg mb-0">Our embedded algorithms analyze historical sales velocities and seasonal trend lines to suggest optimal reorder points before shortages occur.</p>
                    </div>
                </div>

                <!-- Feature 3: Supplier Integration -->
                <div class="col-md-4 reveal" style="transition-delay: 0.2s;">
                    <div class="card feature-box h-100 p-4 border rounded-4 bg-white shadow-sm">
                        <div class="icon-indicator mb-4 d-flex align-items-center justify-content-center rounded-3 bg-light" style="width: 50px; height: 50px;">
                            <i class="fa-solid fa-truck-ramp-box fs-3" style="color: #13ce85;"></i>
                        </div>
                        <h4 class="fw-bold mb-3" style="color: var(--navy-blue, #0a192f);">Supplier Integration</h4>
                        <p class="text-muted small lh-lg mb-0">Automate purchase order generation. Instantly notify vendor networks when stock drops below threshold levels, simplifying procurement queues.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    @push('styles')
    <style>
        .max-w-600 {
            max-width: 600px;
        }

        .fs-7 {
            font-size: 0.85rem;
        }

        .tracking-wider {
            letter-spacing: 0.08em;
        }

        /* Responsive Product Hero */
        .product-hero {
            background-color: var(--navy-blue, #0a192f);
            color: #ffffff;
            padding: 160px 0 120px;
        }

        /* Dot Grid Pattern Overlay */
        .product-hero-pattern {
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background-image: radial-gradient(rgba(255, 255, 255, 0.05) 2px, transparent 2px);
            background-size: 30px 30px;
            z-index: 0;
            mask-image: linear-gradient(to bottom, rgba(0,0,0,1) 0%, rgba(0,0,0,0) 100%);
            -webkit-mask-image: linear-gradient(to bottom, rgba(0,0,0,1) 0%, rgba(0,0,0,0) 100%);
        }

        /* Shadow Container for Mockup Image */
        .mockup-wrapper {
            border: 1px solid rgba(255, 255, 255, 0.08);
        }

        .mockup-img {
            border-radius: 12px;
            box-shadow: 0 1.5rem 4rem rgba(0, 0, 0, 0.25);
            display: block;
        }

        /* Core Capabilities Feature Grid */
        .feature-box {
            border: 1px solid rgba(0, 0, 0, 0.08) !important;
            transition: transform 0.3s cubic-bezier(0.165, 0.84, 0.44, 1),
                        border-color 0.3s ease,
                        box-shadow 0.3s ease;
        }

        .feature-box:hover {
            border-color: #13ce85 !important;
            box-shadow: 0 1rem 3rem rgba(19, 206, 133, 0.12) !important;
            transform: translateY(-5px);
        }

        /* Media Queries for Mobile Responsiveness */
        @media (max-width: 991px) {
            .product-hero {
                padding: 120px 0 80px;
            }
        }
    </style>
    @endpush

@endsection
