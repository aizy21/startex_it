<!-- HERO SECTION: SYNCED SLIDER & ANGLE DIVISION -->
<header id="home" class="hero-slider-wrapper">
    <!-- Interactive Dot Matrix Background -->
    <div class="dot-matrix-bg"></div>

    <div class="container position-relative z-2">
        <div class="row align-items-center justify-content-between">

            <!-- Left Column: Synchronized Text Slides (Fades in-place) -->
            <div class="col-lg-6 mb-3 mb-lg-0">

                <!-- Dynamic Text Slider Wrapper -->
                <div class="hero-text-slider-container text-lg-start text-center reveal">

                    <!-- Slide 1 Text -->
                    <div class="hero-text-slide active" data-slide="0">
                        {{-- <div class="hero-badge badge-glow mb-3">
                            <span class="pulse-dot"></span> Next-Gen Software Solutions
                        </div> --}}
                        <h1 class="display-4 fw-bolder mb-3 lh-sm text-white">
                            Architecting <br>
                            <span class="text-accent" style="color: var(--accent-color, #13ce85);">Smarter</span> <br>
                            Enterprises.
                        </h1>
                        <p class="lead opacity-75 text-white-50 fs-6">
                            We replace operational chaos with intelligent software. Startex IT delivers unified platforms for asset tracking, team syncing, and AI-driven insights.
                        </p>
                    </div>

                    <!-- Slide 2 Text -->
                    <div class="hero-text-slide" data-slide="1">
                        {{-- <div class="hero-badge badge-glow mb-3">
                            <span class="pulse-dot"></span> Smart Tagging & Tracking
                        </div> --}}
                        <h1 class="display-4 fw-bolder mb-3 lh-sm text-white">
                            Total Asset <br>
                            <span class="text-accent" style="color: var(--accent-color, #13ce85);">Visibility</span> <br>
                            Unleashed.
                        </h1>
                        <p class="lead opacity-75 text-white-50 fs-6">
                            Connect physical hardware with intelligent digital monitoring profiles. Track depreciation lifecycle metrics and locate essential gear instantly.
                        </p>
                    </div>

                    <!-- Slide 3 Text -->
                    <div class="hero-text-slide" data-slide="2">
                        {{-- <div class="hero-badge badge-glow mb-3">
                            <span class="pulse-dot"></span> Integrated Workflows
                        </div> --}}
                        <h1 class="display-4 fw-bolder mb-3 lh-sm text-white">
                            Unified Team <br>
                            <span class="text-accent" style="color: var(--accent-color, #13ce85);">Synchronization</span>.
                        </h1>
                        <p class="lead opacity-75 text-white-50 fs-6">
                            Automate task dispatches and schedule preventive maintenance routes seamlessly to optimize structural workflow capacity across multiple plants.
                        </p>
                    </div>

                </div>

                <!-- Static Action Buttons (Remain perfectly stationary) -->
                <div class="d-flex flex-wrap gap-3 mt-2">
                    <a class="btn btn-theme px-4 mx-auto me-lg-1 reveal" href="#solutions" style="background-color: var(--accent-color, #13ce85); border: none; font-weight: 600; color: #0a192f;">
                        Explore Our Tech
                        <i class="fa-solid fa-arrow-down ms-2 transition-arrow"></i>
                    </a>
                    {{-- <a class="btn btn-outline-light btn-lg rounded-pill fw-bold px-4 hover-slide" href="#about">
                        <i class="fa-solid fa-play me-2"></i> How We Work
                    </a> --}}
                </div>
            </div>

            <!-- Right Column: Image Slider with Navigation Arrows -->
            <div class="col-lg-6">
                <div class="hero-image-slider-wrapper position-relative  reveal">

                    <div class="hero-image-slides">
                        <!-- Image Slide 1 -->
                        <div class="hero-image-slide active" data-slide="0">
                            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=1000&q=80" alt="Smarter Dashboard Platforms">
                        </div>
                        <!-- Image Slide 2 -->
                        <div class="hero-image-slide" data-slide="1">
                            <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&w=1000&q=80" alt="Asset Lifecycle Tracking">
                        </div>
                        <!-- Image Slide 3 -->
                        <div class="hero-image-slide" data-slide="2">
                            <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=1000&q=80" alt="Team Communication Workflows">
                        </div>
                    </div>

                    <!-- Overlaid Slide Controls -->
                    <div class="hero-slider-arrows d-flex gap-2">
                        <button class="btn btn-nav-hero d-flex align-items-center justify-content-center rounded-circle" id="hero-prev-btn" aria-label="Previous Slide">
                            <i class="fa-solid fa-chevron-left text-white"></i>
                        </button>
                        <button class="btn btn-nav-hero d-flex align-items-center justify-content-center rounded-circle" id="hero-next-btn" aria-label="Next Slide">
                            <i class="fa-solid fa-chevron-right text-white"></i>
                        </button>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <!-- Sleek Diagonal Angle Separator (Renders angled split into white background) -->
    <svg style="position:absolute; bottom:-1px; left:0; width:100%; height:80px; z-index:3;" preserveAspectRatio="none" viewBox="0 0 1440 80" fill="none" xmlns="http://www.w3.org/2000/svg">
        <polygon points="0,80 1440,80 1440,0" fill="#ffffff"/>
    </svg>
</header>

<!-- BOTTOM WHITE SPACE CONTENT: WHAT WE DO (Three Neon-Border Cards) -->
<section class="py-3 bg-white position-relative" style="z-index: 4;">
    <div class="container">
        <div class="row g-4 justify-content-center">

            <!-- What We Do Card 1 -->
            <div class="col-md-4 reveal">
                <div class="card h-100 p-4 rounded-4 action-card border bg-white shadow-sm">
                    {{-- <div class="icon-indicator mb-3 d-flex align-items-center justify-content-center rounded-3 bg-light" style="width: 50px; height: 50px;">
                        <i class="fa-solid fa-tags text-accent fs-4" style="color: #13ce85;"></i>
                    </div> --}}
                    <h5 class="fw-bold text-dark mb-2">Smart Asset Tagging</h5>
                    <p class="text-muted small mb-0">We integrate physical hardware structures with QR codes, barcodes, and automated RFIDs for centralized inventory control workflows.</p>
                </div>
            </div>

            <!-- What We Do Card 2 -->
            <div class="col-md-4 reveal"  style="transition-delay: 0.2s;">
                <div class="card h-100 p-4 rounded-4 action-card border bg-white shadow-sm">
                    {{-- <div class="icon-indicator mb-3 d-flex align-items-center justify-content-center rounded-3 bg-light" style="width: 50px; height: 50px;">
                        <i class="fa-solid fa-screwdriver-wrench text-accent fs-4" style="color: #13ce85;"></i>
                    </div> --}}
                    <h5 class="fw-bold text-dark mb-2">Preventive Maintenance</h5>
                    <p class="text-muted small mb-0">Our platform tracks operational runtimes and schedules diagnostic checklists automatically to prevent costly facility downtime events.</p>
                </div>
            </div>

            <!-- What We Do Card 3 -->
            <div class="col-md-4 reveal" style="transition-delay: 0.3s;">
                <div class="card h-100 p-4 rounded-4 action-card border bg-white shadow-sm ">
                    {{-- <div class="icon-indicator mb-3 d-flex align-items-center justify-content-center rounded-3 bg-light" style="width: 50px; height: 50px;">
                        <i class="fa-solid fa-network-wired text-accent fs-4" style="color: #13ce85;"></i>
                    </div> --}}
                    <h5 class="fw-bold text-dark mb-2">Unified Work Orders</h5>
                    <p class="text-muted small mb-0">We replace manual scheduling with algorithmic dispatches, assigning tasks directly to field crews based on real-time priorities.</p>
                </div>
            </div>

        </div>
    </div>
</section>
@push('styles')
    <style>
        /* =======================================================
           HERO SECTION: REDUCED HEIGHT SLIDER LAYOUT (Approx 75% screen height)
        ======================================================= */
        .hero-slider-wrapper {
            background-color: var(--navy-blue, #0a192f);
            color: #ffffff;
            padding: 100px 0 80px; /* Reduced vertical padding */
            position: relative;
            overflow: hidden;
            min-height: 75vh; /* Targets roughly 75% screen load on desktop */
            display: flex;
            align-items: center;
        }

        /* Dot Matrix Background */
        .dot-matrix-bg {
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background-image: radial-gradient(rgba(255, 255, 255, 0.08) 2px, transparent 2px);
            background-size: 30px 30px;
            z-index: 0;
            mask-image: linear-gradient(to bottom, rgba(0,0,0,1) 0%, rgba(0,0,0,0) 90%);
            -webkit-mask-image: linear-gradient(to bottom, rgba(0,0,0,1) 0%, rgba(0,0,0,0) 90%);
        }

        /* Badge with Pulsing Dot */
        .hero-badge {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: #ffffff;
            padding: 8px 18px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.85rem;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            backdrop-filter: blur(5px);
        }

        .pulse-dot {
            width: 8px; height: 8px;
            background-color: #13ce85;
            border-radius: 50%;
            box-shadow: 0 0 10px #13ce85;
            animation: ping 1.5s cubic-bezier(0, 0, 0.2, 1) infinite;
        }

        /* Synced Text Slider Layout (Saves absolute space to avoid layout shifts) */
        .hero-text-slider-container {
            position: relative;
            min-height: 300px; /* Fixed height container bounds so layout doesn't jump */
        }

        .hero-text-slide {
            position: absolute;
            top: 0; left: 0;
            width: 100%;
            opacity: 0;
            visibility: hidden;
            transform: translateY(15px);
            transition: opacity 0.6s ease, transform 0.6s ease, visibility 0.6s;
        }

        .hero-text-slide.active {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        /* Image Card Slider (Right Side) */
        .hero-image-slider-wrapper {
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 1.5rem 4rem rgba(0, 0, 0, 0.3);
            aspect-ratio: 16/10;
            background-color: rgba(255, 255, 255, 0.02);
            border: 1px solid rgba(255, 255, 255, 0.08);
        }

        .hero-image-slides {
            position: relative;
            width: 100%;
            height: 100%;
        }

        .hero-image-slide {
            position: absolute;
            top: 0; left: 0;
            width: 100%; height: 100%;
            opacity: 0;
            visibility: hidden;
            transform: scale(1.05);
            transition: opacity 0.8s ease, transform 0.8s ease, visibility 0.8s;
        }

        .hero-image-slide.active {
            opacity: 1;
            visibility: visible;
            transform: scale(1);
        }

        .hero-image-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Overlaid Slide Navigation Buttons */
        .hero-slider-arrows {
            position: absolute;
            bottom: 20px;
            right: 20px;
            z-index: 10;
        }

        .btn-nav-hero {
            width: 44px; height: 44px;
            background: rgba(10, 25, 47, 0.8);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.25s ease;
        }

        .btn-nav-hero:hover {
            background-color: #13ce85;
            border-color: #13ce85;
        }

        .btn-nav-hero:hover i {
            color: #0a192f !important;
        }

        /* Animated Pulsing Dot Keyframe */
        @keyframes ping {
            0% { transform: scale(1); opacity: 1; }
            75%, 100% { transform: scale(2.5); opacity: 0; }
        }

        /* =======================================================
           WHAT WE DO CARDS: SLANTED WHITE BG FOOTPRINT
        ======================================================= */
        .action-card {
            border: 1px solid rgba(0, 0, 0, 0.08) !important;
            transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
        }

        /* Neon Green Focus Hover State */
        .action-card:hover {
            border-color: #13ce85 !important;
            box-shadow: 0 1rem 3rem rgba(19, 206, 133, 0.15) !important;
            transform: translateY(-5px);
        }

        /* Media Queries for Layout Continuity */
        @media (max-width: 991px) {
            .hero-slider-wrapper {
                padding: 120px 0 80px;
                min-height: auto;
            }
            .hero-text-slider-container {
                min-height: auto;
                position: relative;
                display: block;
                height: 280px; /* Restrict height for clean layering in mobile layouts */
            }
        }
    </style>
@endpush
@push('scripts')
<!-- jQuery Import fallback -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function () {
        const $textSlides = $('.hero-text-slide');
        const $imageSlides = $('.hero-image-slide');
        const totalSlides = $textSlides.length;

        let activeIndex = 0;
        let slideTimer;
        const autoPlayInterval = 5000; // Time per slide (5 seconds)
        let inTransition = false;

        // Editable Slide Swapping Function
        function performTransition(targetIndex) {
            if (inTransition || targetIndex === activeIndex) return;
            inTransition = true;

            // Handle looping constraints
            if (targetIndex < 0) {
                targetIndex = totalSlides - 1;
            } else if (targetIndex >= totalSlides) {
                targetIndex = 0;
            }

            // Sync Text Layer
            $textSlides.removeClass('active');
            $textSlides.eq(targetIndex).addClass('active');

            // Sync Image Layer
            $imageSlides.removeClass('active');
            $imageSlides.eq(targetIndex).addClass('active');

            activeIndex = targetIndex;

            // Simple timeout locking mechanism to allow transit animations to complete
            setTimeout(function () {
                inTransition = false;
            }, 600);
        }

        // Auto Scroll Handlers
        function initiateAutoPlay() {
            stopAutoPlay();
            slideTimer = setInterval(function () {
                performTransition(activeIndex + 1);
            }, autoPlayInterval);
        }

        function stopAutoPlay() {
            if (slideTimer) clearInterval(slideTimer);
        }

        // Navigation button bindings
        $('#hero-next-btn').on('click', function () {
            performTransition(activeIndex + 1);
            initiateAutoPlay(); // Resets timer
        });

        $('#hero-prev-btn').on('click', function () {
            performTransition(activeIndex - 1);
            initiateAutoPlay(); // Resets timer
        });

        // Initialize Slider
        initiateAutoPlay();
    });
</script>
@endpush
