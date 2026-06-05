<!-- ABOUT SECTION -->
<section id="about" class="about-section py-5 position-relative">
    <!-- Decorative background elements -->
    <div class="about-bg-shape"></div>

    <div class="container position-relative z-2">
        <div class="row align-items-center mb-5">

            <!-- Left Content: Interactive Visual Composition -->
            <div class="col-lg-6 mb-5 mb-lg-0 reveal">
                <div class="about-visual-composition position-relative">
                    <!-- Main Image -->
                    <img class="img-fluid rounded-4 shadow-lg main-img" src="https://startexmarketing.com/public/images/slider1%201%20(2).png" alt="Startex IT Team">

                    <!-- Decorative Outline Frame -->
                    <div class="img-outline-frame"></div>

                    <!-- Floating Interactive Stat Card -->
                    <div class="floating-stat-card glass-panel shadow-lg d-flex align-items-center gap-3">
                        <div class="stat-icon-wrapper bg-accent-soft text-accent">
                            <i class="fa-solid fa-code-commit"></i>
                        </div>
                        <div>
                            <h3 class="fw-bolder mb-0 tracking-tight text-dark">100%</h3>
                            <p class="small text-muted mb-0 fw-bold">In-House Engineering</p>
                        </div>
                    </div>

                    <!-- Floating Tech Badge -->
                    <div class="floating-tech-badge glass-panel shadow">
                        <i class="fa-solid fa-microchip text-danger-accent"></i> Scalable Tech
                    </div>
                </div>
            </div>

            <!-- Right Content: Elaborative Text & Interactive List -->
            <div class="col-lg-6 ps-lg-5 reveal" style="transition-delay: 0.2s;">
                <div class="d-inline-flex align-items-center gap-2 px-3 py-2 rounded-pill bg-danger-soft text-danger-accent fw-bold small mb-3">
                    <span class="pulse-dot-red"></span> WHO WE ARE
                </div>

                <h2 class="display-5 fw-bold mb-4" style="color: var(--navy-blue);">
                    Building Software for the <br><span class="text-accent">Modern Enterprise.</span>
                </h2>

                <p class="text-muted fs-5 mb-5 lh-lg">
                    At Startex IT, we understand that relying on manual spreadsheets and disconnected chat apps leads to data silos and zero accountability. We architect specialized, cloud-native tools tailored for operational readiness and asset management.
                </p>

                <!-- Interactive List -->
                <div class="about-interactive-list d-flex flex-column gap-3">

                    <!-- List Item 1 -->
                    <div class="about-list-item d-flex align-items-start gap-3 p-3 rounded-4 transition-all">
                        <div class="list-icon-box shadow-sm flex-shrink-0">
                            <i class="fa-solid fa-layer-group"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-1" style="color: var(--navy-blue);">Custom-Tailored Architecture</h5>
                            <p class="text-muted small mb-0">We don't use cookie-cutter templates. Every platform is engineered to scale seamlessly with your multi-unit growth.</p>
                        </div>
                    </div>

                    <!-- List Item 2 -->
                    <div class="about-list-item d-flex align-items-start gap-3 p-3 rounded-4 transition-all">
                        <div class="list-icon-box shadow-sm flex-shrink-0">
                            <i class="fa-solid fa-chart-pie"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-1" style="color: var(--navy-blue);">Real-Time Centralization</h5>
                            <p class="text-muted small mb-0">Gain instant visibility across all your branches. Turn raw operational data into actionable executive dashboards.</p>
                        </div>
                    </div>

                    <!-- List Item 3 -->
                    <div class="about-list-item d-flex align-items-start gap-3 p-3 rounded-4 transition-all">
                        <div class="list-icon-box shadow-sm flex-shrink-0">
                            <i class="fa-solid fa-bolt"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-1" style="color: var(--navy-blue);">Eliminating Bottlenecks</h5>
                            <p class="text-muted small mb-0">Automate preventive maintenance and workflows to stop reactive breakdowns before they cost you money.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Bottom Row: Company Pillars / Elaborative Stats -->
        <div class="row g-4 mt-4 border-top pt-5 reveal" style="transition-delay: 0.4s;">
            <div class="col-md-4">
                <div class="pillar-card text-center p-4 rounded-4">
                    <i class="fa-solid fa-laptop-code fs-1 text-accent mb-3"></i>
                    <h5 class="fw-bold" style="color: var(--navy-blue);">Modern Tech Stack</h5>
                    <p class="text-muted small mb-0">Built using the latest frameworks ensuring maximum speed, security, and cloud reliability.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="pillar-card text-center p-4 rounded-4">
                    <i class="fa-solid fa-mobile-screen fs-1 text-danger-accent mb-3"></i>
                    <h5 class="fw-bold" style="color: var(--navy-blue);">Cross-Platform</h5>
                    <p class="text-muted small mb-0">Flawless experiences across desktop dashboards, tablets, and native mobile applications.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="pillar-card text-center p-4 rounded-4">
                    <i class="fa-solid fa-headset fs-1 text-info mb-3"></i>
                    <h5 class="fw-bold" style="color: var(--navy-blue);">Continuous Support</h5>
                    <p class="text-muted small mb-0">Software isn't a one-time deployment. We provide ongoing monitoring and feature rollouts.</p>
                </div>
            </div>
        </div>

    </div>
</section>

@push('styles')
    <style>
        /* =========================================
           ABOUT SECTION INTERACTIVE STYLES
        ========================================= */
        .about-section {
            background-color: #fafbfc; /* Very slight off-white for contrast */
            overflow: hidden;
        }

        /* Decorative background shape */
        .about-bg-shape {
            position: absolute;
            top: -10%; right: -5%;
            width: 500px; height: 500px;
            background: radial-gradient(circle, rgba(19, 206, 133, 0.05) 0%, transparent 70%);
            border-radius: 50%;
            z-index: 0;
        }

        /* --- VISUAL COMPOSITION (LEFT SIDE) --- */
        .about-visual-composition {
            padding: 20px 20px 40px 20px; /* Space for floating elements */
        }

        .main-img {
            position: relative;
            z-index: 2;
            transition: transform 0.5s ease;
        }
        .about-visual-composition:hover .main-img {
            transform: translateY(-10px);
        }

        .img-outline-frame {
            position: absolute;
            top: 0; left: 0;
            width: calc(100% - 150px); height: calc(100% - 60px);
            border: 3px solid rgba(19, 206, 133, 0.3); /* Green Outline */
            border-radius: 1rem;
            z-index: 1;
            transform: translate(30px, 30px);
            transition: transform 0.5s ease;
        }
        .about-visual-composition:hover .img-outline-frame {
            transform: translate(15px, 15px);
            border-color: var(--green);
        }

        /* Glass Panels */
        .glass-panel {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.5);
            z-index: 3;
        }

        .floating-stat-card {
            position: absolute;
            bottom: 0; right: -20px;
            padding: 20px 25px;
            border-radius: 16px;
            animation: floatSlow 6s ease-in-out infinite;
        }

        .floating-tech-badge {
            position: absolute;
            top: 20px; left: -20px;
            padding: 10px 20px;
            border-radius: 50px;
            font-weight: 700;
            font-size: 0.9rem;
            color: var(--navy-blue);
            animation: floatSlow 5s ease-in-out infinite reverse;
        }

        .stat-icon-wrapper {
            width: 50px; height: 50px;
            border-radius: 12px;
            display: flex; align-items: center; justify-content: center;
            font-size: 1.5rem;
        }

        @keyframes floatSlow {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
            100% { transform: translateY(0px); }
        }

        /* --- INTERACTIVE LIST (RIGHT SIDE) --- */
        .bg-danger-soft { background-color: rgba(222, 124, 111, 0.15); }
        .text-danger-accent { color: var(--red-range); }

        .pulse-dot-red {
            width: 8px; height: 8px;
            background-color: var(--red-range);
            border-radius: 50%;
            box-shadow: 0 0 8px var(--red-range);
            animation: ping 1.5s infinite;
        }

        .about-list-item {
            border: 1px solid transparent;
            cursor: default;
        }

        .list-icon-box {
            width: 45px; height: 45px;
            background-color: #ffffff;
            color: var(--navy-blue);
            border: 1px solid rgba(0,27,61,0.1);
            border-radius: 12px;
            display: flex; align-items: center; justify-content: center;
            font-size: 1.2rem;
            transition: all 0.4s ease;
        }

        /* Hover interactions for the list */
        .about-list-item:hover {
            background-color: #ffffff;
            border-color: rgba(0,0,0,0.05);
            box-shadow: 0 10px 30px rgba(0,0,0,0.03);
            transform: translateX(10px);
        }

        .about-list-item:hover .list-icon-box {
            background-color: var(--green);
            color: var(--white);
            border-color: var(--green);
            transform: scale(1.1) rotate(5deg);
        }

        /* --- PILLAR CARDS (BOTTOM ROW) --- */
        .pillar-card {
            background: #ffffff;
            border: 1px solid rgba(0,0,0,0.04);
            transition: all 0.4s ease;
            height: 100%;
        }
        .pillar-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 27, 61, 0.06);
            border-bottom: 3px solid var(--green);
        }

        /* Mobile Adjustments */
        @media (max-width: 991px) {
            .floating-stat-card { right: 10px; bottom: 10px; }
            .floating-tech-badge { left: 10px; }
            .about-list-item:hover { transform: translateX(5px); }
        }
    </style>
@endpush
