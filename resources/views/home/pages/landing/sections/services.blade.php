<section class="py-5 position-relative landing-services-section bg-light" id="services">
    <!-- Subtle background pattern -->
    <div class="services-bg-pattern"></div>

    <div class="container position-relative z-1 py-4">
        <!-- Section Header -->
        <div class="text-center mb-5 max-w-700 mx-auto">
            <span class="text-uppercase tracking-wider fw-bold fs-7" style="color: var(--accent-color, #13ce85);">What We Do</span>
            <h2 class="fw-bold mt-2" style="color: var(--navy-blue, #0a192f);">Comprehensive Web & Software Solutions</h2>
            <p class="text-muted">We build robust, scalable digital assets to help your business adapt, automate, and expand within the modern digital landscape.</p>
        </div>

        <!-- 4-Column Service Grid -->
        <div class="row g-4 justify-content-center mb-5">

            <!-- Service 1 -->
            <div class="col-lg-3 col-md-6">
                <div class="card service-highlight-card h-100 p-4 border-0 shadow-sm bg-white rounded-4 position-relative overflow-hidden d-flex flex-column justify-content-between">
                    <div>
                        <div class="service-icon-box mb-4 d-flex align-items-center justify-content-center rounded-3">
                            <i class="fa-solid fa-laptop-code fs-4"></i>
                        </div>
                        <h5 class="fw-bold mb-3" style="color: var(--navy-blue, #0a192f);">Web & App Dev</h5>
                        <p class="text-muted small lh-lg mb-0">Custom, fully responsive websites and native mobile applications tailored directly to your brand’s operational targets.</p>
                    </div>
                    <div class="card-glow-bar"></div>
                </div>
            </div>

            <!-- Service 2 -->
            <div class="col-lg-3 col-md-6">
                <div class="card service-highlight-card h-100 p-4 border-0 shadow-sm bg-white rounded-4 position-relative overflow-hidden d-flex flex-column justify-content-between">
                    <div>
                        <div class="service-icon-box mb-4 d-flex align-items-center justify-content-center rounded-3">
                            <i class="fa-solid fa-gears fs-4"></i>
                        </div>
                        <h5 class="fw-bold mb-3" style="color: var(--navy-blue, #0a192f);">Custom Software</h5>
                        <p class="text-muted small lh-lg mb-0">Bespoke management systems designed to automate administrative processes and scale operational capacity securely.</p>
                    </div>
                    <div class="card-glow-bar"></div>
                </div>
            </div>

            <!-- Service 3 -->
            <div class="col-lg-3 col-md-6">
                <div class="card service-highlight-card h-100 p-4 border-0 shadow-sm bg-white rounded-4 position-relative overflow-hidden d-flex flex-column justify-content-between">
                    <div>
                        <div class="service-icon-box mb-4 d-flex align-items-center justify-content-center rounded-3">
                            <i class="fa-solid fa-circle-nodes fs-4"></i>
                        </div>
                        <h5 class="fw-bold mb-3" style="color: var(--navy-blue, #0a192f);">API Integrations</h5>
                        <p class="text-muted small lh-lg mb-0">Unifying databases and modernizing legacy applications to optimize cross-platform workflow communication.</p>
                    </div>
                    <div class="card-glow-bar"></div>
                </div>
            </div>

            <!-- Service 4 -->
            <div class="col-lg-3 col-md-6">
                <div class="card service-highlight-card h-100 p-4 border-0 shadow-sm bg-white rounded-4 position-relative overflow-hidden d-flex flex-column justify-content-between">
                    <div>
                        <div class="service-icon-box mb-4 d-flex align-items-center justify-content-center rounded-3">
                            <i class="fa-solid fa-shield-halved fs-4"></i>
                        </div>
                        <h5 class="fw-bold mb-3" style="color: var(--navy-blue, #0a192f);">Ongoing Support</h5>
                        <p class="text-muted small lh-lg mb-0">Continuous monitoring, security patch deployments, and performance tuning to keep assets secure and online.</p>
                    </div>
                    <div class="card-glow-bar"></div>
                </div>
            </div>

        </div>

        <!-- Learn More Link -->
        <div class="text-center mt-5">
            <a href="{{route('home.services.index')}}" class="btn btn-learn-more px-4 py-3 rounded-pill fw-bold text-decoration-none">
                Explore Detailed Services <i class="fa-solid fa-arrow-right ms-2 transition-arrow"></i>
            </a>
        </div>
    </div>
</section>

@push('styles')
    <style>
        .max-w-700 {
            max-width: 700px;
        }

        /* Highlight Section Specific Background */
        .landing-services-section {
            overflow: hidden;
        }

        .services-bg-pattern {
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background-image: radial-gradient(rgba(10, 25, 47, 0.03) 2px, transparent 2px);
            background-size: 24px 24px;
            z-index: 0;
            pointer-events: none;
        }

        /* Icon Boxes inside Highlights */
        .service-icon-box {
            width: 50px;
            height: 50px;
            background-color: #f1f3f5;
            color: var(--navy-blue, #0a192f);
            transition: all 0.3s ease;
        }

        /* Dynamic Cards */
        .service-highlight-card {
            border: 1px solid rgba(0, 0, 0, 0.03) !important;
            transition: transform 0.35s cubic-bezier(0.165, 0.84, 0.44, 1), box-shadow 0.35s ease;
        }

        .service-highlight-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 1rem 2.5rem rgba(10, 25, 47, 0.08) !important;
        }

        .service-highlight-card:hover .service-icon-box {
            background-color: var(--navy-blue, #0a192f);
            color: #13ce85;
        }

        /* Hover Interactive Glow-Bar */
        .card-glow-bar {
            position: absolute;
            bottom: 0; left: 0;
            width: 100%;
            height: 3px;
            background-color: #13ce85;
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.3s ease;
        }

        .service-highlight-card:hover .card-glow-bar {
            transform: scaleX(1);
        }

        /* Modern CTA Arrow Button */
        .btn-learn-more {
            background-color: var(--navy-blue, #0a192f);
            color: #ffffff;
            border: 1px solid var(--navy-blue, #0a192f);
            transition: all 0.25s ease;
        }

        .btn-learn-more:hover {
            background-color: transparent;
            color: var(--navy-blue, #0a192f);
            box-shadow: 0 0.5rem 1.5rem rgba(10, 25, 47, 0.15);
        }

        .btn-learn-more:hover .transition-arrow {
            transform: translateX(5px);
        }

        .transition-arrow {
            transition: transform 0.25s ease;
            display: inline-block;
        }
    </style>
@endpush
