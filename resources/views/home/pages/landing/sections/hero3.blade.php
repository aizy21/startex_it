<!-- HERO SECTION -->
<header id="home" class="hero-tech-bg">

    <!-- Animated Tech Background Elements -->
    <div class="tech-grid"></div>
    <div class="glow-orb orb-1"></div>
    <div class="glow-orb orb-2"></div>

    <div class="container position-relative z-2">
        <div class="row align-items-center">

            <!-- Left Content: Company Focus -->
            <div class="col-lg-6 reveal mb-5 mb-lg-0">
                <div class="hero-badge"><i class="fa-solid fa-building-shield"></i> Enterprise Software Engineering</div>
                <h1 class="display-3 fw-bolder mb-4 lh-sm">
                    Engineering the <br>
                    <span class="text-accent">Digital Future</span> <br>
                    of Your Business.
                </h1>
                <p class="lead mb-5 opacity-75 pe-lg-5">
                    Startex IT builds robust, scalable, and secure software ecosystems tailored for multi-unit brands. We bridge the gap between complex operational challenges and intuitive digital platforms.
                </p>
                <div class="d-flex flex-wrap gap-3">
                    <a class="btn btn-theme btn-lg" href="#about">Who We Are</a>
                    <a class="btn btn-outline-light btn-lg rounded-pill fw-bold px-4" href="#solutions">Our Solutions</a>
                </div>
            </div>

            <!-- Right Content: Enterprise Infrastructure Abstract Graphic -->
            <div class="col-lg-6 reveal" style="transition-delay: 0.2s;">
                <div class="enterprise-visual-wrapper">
                    <!-- Background Glow -->
                    <div class="system-glow"></div>

                    <!-- Main Abstract Platform / Infrastructure -->
                    <div class="abstract-platform">
                        <div class="platform-header">
                            <i class="fa-solid fa-server text-muted ms-2"></i>
                            <span class="ms-2 text-muted small fw-bold tracking-wide">CORE INFRASTRUCTURE</span>
                        </div>
                        <div class="platform-body">
                            <!-- Abstract UI / Data Representation -->
                            <div class="d-flex justify-content-between mb-4">
                                <div class="skeleton-line w-50"></div>
                                <div class="skeleton-circle"></div>
                            </div>
                            <div class="d-flex gap-3 mb-3">
                                <div class="skeleton-box active-pulse"></div>
                                <div class="skeleton-box"></div>
                                <div class="skeleton-box"></div>
                                <div class="skeleton-box"></div>
                            </div>
                            <div class="skeleton-line w-75 mb-2"></div>
                            <div class="skeleton-line w-100"></div>
                        </div>
                    </div>

                    <!-- Floating Enterprise Badges -->
                    <div class="float-badge badge-security shadow-lg">
                        <div class="icon-ring border-green">
                            <i class="fa-solid fa-chart-line text-accent"></i>
                        </div>
                        <div>
                            <h6 class="mb-0 fw-bold">Operational Excellence</h6>
                            <small class="text-white-50">Smart Inventory & Analytics</small>
                        </div>
                    </div>

                    <div class="float-badge badge-scale shadow-lg">
                        <div class="icon-ring border-red">
                            <i class="fa-solid fa-network-wired text-danger-accent"></i>
                        </div>
                        <div>
                            <h6 class="mb-0 fw-bold">Infinite Scalability</h6>
                            <small class="text-white-50">Multi-Location Sync</small>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <!-- Decorative SVG wave bottom -->
    <svg style="position:absolute; bottom:0; left: 0; width:100%; height:auto; z-index: 3; display: block;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100">
        <path fill="#ffffff" fill-opacity="1" d="M0,64L80,58.7C160,53,320,43,480,48C640,53,800,75,960,80C1120,85,1280,75,1360,69.3L1440,64L1440,100L1360,100C1280,100,1120,100,960,100C800,100,640,100,480,100C320,100,160,100,80,100L0,100Z"></path>
    </svg>
</header>

@push('styles')
    <style>
        /* =========================================
           HERO ANIMATED TECH BACKGROUND
        ========================================= */
        .hero-tech-bg {
            background-color: var(--navy-blue);
            color: var(--white);
            padding: 160px 0 100px;
            position: relative;
            overflow: hidden;
        }

        /* Ambient Glowing Orbs */
        .glow-orb {
            position: absolute;
            border-radius: 50%;
            filter: blur(90px);
            z-index: 0;
            opacity: 0.35;
            pointer-events: none;
        }

        .orb-1 {
            top: -15%;
            left: -10%;
            width: 600px;
            height: 600px;
            background: var(--green);
            animation: floatOrb 12s ease-in-out infinite alternate;
        }

        .orb-2 {
            bottom: -20%;
            right: -10%;
            width: 700px;
            height: 700px;
            background: #00509e; /* Lighter tech blue to blend with Navy */
            animation: floatOrb 18s ease-in-out infinite alternate-reverse;
        }

        /* Moving Data Grid Overlay */
        .tech-grid {
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background-image:
                linear-gradient(rgba(255, 255, 255, 0.03) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255, 255, 255, 0.03) 1px, transparent 1px);
            background-size: 40px 40px;
            z-index: 1;
            transform: perspective(500px) rotateX(60deg) translateY(0);
            animation: gridMove 20s linear infinite;
            pointer-events: none;
            /* Fades the grid out towards the edges so it isn't harsh */
            mask-image: radial-gradient(ellipse at center, rgba(0,0,0,1) 0%, rgba(0,0,0,0) 60%);
            -webkit-mask-image: radial-gradient(ellipse at center, rgba(0,0,0,1) 0%, rgba(0,0,0,0) 60%);
        }

        @keyframes floatOrb {
            0% { transform: translate(0, 0) scale(1); }
            100% { transform: translate(60px, 80px) scale(1.1); }
        }

        @keyframes gridMove {
            0% { transform: perspective(500px) rotateX(60deg) translateY(0); }
            100% { transform: perspective(500px) rotateX(60deg) translateY(40px); }
        }


        /* =========================================
           ENTERPRISE ABSTRACT GRAPHIC
        ========================================= */
        .hero-badge {
            background: rgba(19, 206, 133, 0.1);
            color: var(--green);
            border: 1px solid rgba(19, 206, 133, 0.3);
            padding: 8px 15px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.85rem;
            display: inline-block;
            margin-bottom: 20px;
            backdrop-filter: blur(5px);
        }

        .tracking-wide {
            letter-spacing: 2px;
        }

        .enterprise-visual-wrapper {
            position: relative;
            width: 100%;
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .system-glow {
            position: absolute;
            width: 350px;
            height: 350px;
            background: radial-gradient(circle, rgba(19, 206, 133, 0.12) 0%, rgba(0, 27, 61, 0) 70%);
            border-radius: 50%;
            z-index: 0;
            animation: pulseSystem 6s infinite alternate;
        }

        .abstract-platform {
            background: rgba(255, 255, 255, 0.04);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 16px;
            width: 100%;
            max-width: 450px;
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            z-index: 1;
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.4);
            transform: perspective(1000px) rotateY(-8deg);
            transition: transform 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
        }

        .abstract-platform:hover {
            transform: perspective(1000px) rotateY(0deg);
        }

        .platform-header {
            padding: 15px 20px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
            background: rgba(0, 0, 0, 0.3);
            border-top-left-radius: 16px;
            border-top-right-radius: 16px;
        }

        .platform-body {
            padding: 30px;
        }

        .skeleton-line {
            height: 8px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
        }

        .skeleton-circle {
            width: 40px; height: 40px;
            background: rgba(19, 206, 133, 0.2);
            border-radius: 50%;
            border: 2px solid rgba(19, 206, 133, 0.5);
        }

        .skeleton-box {
            height: 60px;
            flex: 1;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 8px;
            border: 1px solid rgba(255, 255, 255, 0.05);
        }

        .active-pulse {
            background: rgba(19, 206, 133, 0.15);
            border-color: rgba(19, 206, 133, 0.4);
            position: relative;
            overflow: hidden;
        }

        .active-pulse::after {
            content: '';
            position: absolute;
            top: 0; left: -100%;
            width: 50%; height: 100%;
            background: linear-gradient(90deg, transparent, rgba(19, 206, 133, 0.4), transparent);
            animation: scanline 3s infinite;
        }

        .float-badge {
            position: absolute;
            background: rgba(15, 23, 42, 0.85);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            padding: 15px 20px;
            display: flex;
            align-items: center;
            gap: 15px;
            z-index: 2;
            color: var(--white);
            animation: slowFloat 8s ease-in-out infinite;
        }

        .badge-security { top: 5%; right: 0%; animation-delay: 0s; }
        .badge-scale { bottom: 10%; left: -5%; animation-delay: -4s; }

        .icon-ring {
            width: 45px; height: 45px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.05);
            display: flex; align-items: center; justify-content: center;
            font-size: 1.2rem; border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .border-green { border-color: rgba(19, 206, 133, 0.4); }
        .border-red { border-color: rgba(222, 124, 111, 0.4); }

        @keyframes slowFloat {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
            100% { transform: translateY(0px); }
        }

        @keyframes scanline {
            0% { left: -100%; }
            100% { left: 200%; }
        }

        @keyframes pulseSystem {
            0% { transform: scale(1); opacity: 0.6; }
            100% { transform: scale(1.15); opacity: 1; }
        }

        @media (max-width: 768px) {
            .float-badge { padding: 10px 15px; }
            .badge-scale { left: 5%; bottom: 0; }
            .badge-security { right: 5%; top: 0; }
            .enterprise-visual-wrapper { height: 350px; }
        }
    </style>
@endpush
