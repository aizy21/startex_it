<!-- HERO SECTION: OPTION 2 (BENTO GRID INTERACTIVE) -->
<header id="home" class="hero-bento-wrapper">
    <!-- Interactive Dot Matrix Background -->
    <div class="dot-matrix-bg"></div>

    <div class="container position-relative z-2">
        <div class="row align-items-center justify-content-between">

            <!-- Left Content: Punchy & Direct Typography -->
            <div class="col-lg-5 reveal mb-5 mb-lg-0">
                <div class="hero-badge badge-glow mb-3">
                    <span class="pulse-dot"></span> Next-Gen Software Solutions
                </div>
                <h1 class="display-3 fw-bolder mb-4 lh-sm">
                    Architecting <br>
                    <span class="text-accent">Smarter</span> <br>
                    Enterprises.
                </h1>
                <p class="lead mb-5 opacity-75">
                    We replace operational chaos with intelligent software. Startex IT delivers unified platforms for asset tracking, team syncing, and AI-driven insights.
                </p>
                <div class="d-flex flex-wrap gap-3">
                    <a class="btn btn-theme btn-lg px-4" href="#solutions">Explore Our Tech</a>
                    <a class="btn btn-outline-light btn-lg rounded-pill fw-bold px-4 hover-slide" href="#about">
                        <i class="fa-solid fa-play me-2"></i> How We Work
                    </a>
                </div>
            </div>

            <!-- Right Content: Interactive Bento Box Grid -->
            <div class="col-lg-6 reveal" style="transition-delay: 0.2s;">
                <div class="bento-grid">

                    <!-- Bento Box 1: Real-time Operations -->
                    <div class="bento-card bento-span-2 hover-glow-green">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div class="icon-square bg-accent-soft text-accent">
                                <i class="fa-solid fa-bolt"></i>
                            </div>
                            <span class="badge bg-dark border border-secondary text-white-50 small">Live Sync</span>
                        </div>
                        <h5 class="fw-bold mb-1">Real-Time Operations</h5>
                        <p class="small text-white-50 mb-3">Instant multi-location updates and task tracking.</p>
                        <!-- Pure CSS Animated Progress Bar -->
                        <div class="progress" style="height: 6px; background-color: rgba(255,255,255,0.1);">
                            <div class="progress-bar progress-bar-animated progress-bar-striped bg-success" role="progressbar" style="width: 100%;"></div>
                        </div>
                    </div>

                    <!-- Bento Box 2: Security -->
                    <div class="bento-card hover-glow-red">
                        <div class="icon-square bg-danger-soft text-danger-accent mb-3">
                            <i class="fa-solid fa-shield-halved lock-spin"></i>
                        </div>
                        <h6 class="fw-bold mb-1">Ironclad Data</h6>
                        <p class="small text-white-50 mb-0">Enterprise-grade security protocols.</p>
                    </div>

                    <!-- Bento Box 3: Analytics (AI Inventory / Feedback) -->
                    <div class="bento-card hover-glow-blue">
                        <div class="icon-square bg-info-soft text-info mb-3">
                            <i class="fa-solid fa-chart-simple"></i>
                        </div>
                        <h6 class="fw-bold mb-1">AI Insights</h6>
                        <!-- Pure CSS Animated Chart Bars -->
                        <div class="css-chart mt-2">
                            <div class="bar bar-1"></div>
                            <div class="bar bar-2"></div>
                            <div class="bar bar-3"></div>
                            <div class="bar bar-4"></div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <!-- Sleek Angled SVG Separator -->
    <svg style="position:absolute; bottom:-1px; left:0; width:100%; height:80px; z-index:3;" preserveAspectRatio="none" viewBox="0 0 1440 80" fill="none" xmlns="http://www.w3.org/2000/svg">
        <polygon points="0,80 1440,80 1440,0" fill="#ffffff"/>
    </svg>
</header>

@push('styles')
    <style>
        /* =========================================
           HERO OPTION 2: BENTO BOX LAYOUT
        ========================================= */
        .hero-bento-wrapper {
            background-color: var(--navy-blue);
            color: var(--white);
            padding: 170px 0 120px;
            position: relative;
            overflow: hidden;
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
            color: var(--white);
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
            background-color: var(--green);
            border-radius: 50%;
            box-shadow: 0 0 10px var(--green);
            animation: ping 1.5s cubic-bezier(0, 0, 0.2, 1) infinite;
        }

        /* Bento Grid Layout */
        .bento-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            perspective: 1000px;
        }

        .bento-card {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 20px;
            padding: 25px;
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        .bento-span-2 {
            grid-column: span 2;
        }

        /* Bento Hover Interactions */
        .bento-card:hover {
            transform: translateY(-8px) scale(1.02);
            background: rgba(255, 255, 255, 0.06);
            z-index: 2;
        }

        .hover-glow-green:hover {
            border-color: rgba(19, 206, 133, 0.4);
            box-shadow: 0 20px 40px rgba(19, 206, 133, 0.15);
        }
        .hover-glow-red:hover {
            border-color: rgba(222, 124, 111, 0.4);
            box-shadow: 0 20px 40px rgba(222, 124, 111, 0.15);
        }
        .hover-glow-blue:hover {
            border-color: rgba(13, 202, 240, 0.4);
            box-shadow: 0 20px 40px rgba(13, 202, 240, 0.15);
        }

        /* Icon Squares */
        .icon-square {
            width: 45px; height: 45px;
            border-radius: 12px;
            display: flex; align-items: center; justify-content: center;
            font-size: 1.2rem;
        }
        .bg-accent-soft { background: rgba(19, 206, 133, 0.15); }
        .bg-danger-soft { background: rgba(222, 124, 111, 0.15); }
        .bg-info-soft { background: rgba(13, 202, 240, 0.15); }

        /* Micro-Animations inside cards */
        .bento-card:hover .lock-spin {
            animation: unlock 0.5s ease forwards;
        }

        /* Pure CSS Animated Bar Chart */
        .css-chart {
            display: flex;
            align-items: flex-end;
            gap: 6px;
            height: 40px;
        }
        .bar {
            width: 15%;
            background: var(--info);
            border-radius: 3px 3px 0 0;
            animation: bounceBars 2s infinite ease-in-out alternate;
        }
        .bar-1 { height: 40%; animation-delay: 0.1s; }
        .bar-2 { height: 70%; animation-delay: 0.3s; }
        .bar-3 { height: 50%; animation-delay: 0.5s; }
        .bar-4 { height: 90%; animation-delay: 0.7s; }

        .bento-card:hover .bar {
            background: #fff; /* Highlights on hover */
        }

        /* Keyframes */
        @keyframes ping {
            0% { transform: scale(1); opacity: 1; }
            75%, 100% { transform: scale(2.5); opacity: 0; }
        }
        @keyframes unlock {
            0% { transform: rotate(0deg); }
            50% { transform: rotate(-20deg); }
            100% { transform: rotate(0deg); }
        }
        @keyframes bounceBars {
            0% { transform: scaleY(0.8); transform-origin: bottom; }
            100% { transform: scaleY(1.1); transform-origin: bottom; }
        }

        /* Button Hover Effect */
        .hover-slide:hover i {
            transform: translateX(5px);
            transition: transform 0.3s ease;
        }

        /* Mobile Adjustments */
        @media (max-width: 768px) {
            .bento-grid { grid-template-columns: 1fr; }
            .bento-span-2 { grid-column: span 1; }
            .hero-bento-wrapper { padding: 130px 0 80px; }
        }
    </style>
@endpush
