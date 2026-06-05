@extends('home.layout')

@section('title', 'Privacy Policy - Startex IT')

@push('styles')
    <style>
        /* Policy Page Hero */
        .policy-hero {
            background-color: var(--navy-blue, #0a192f);
            color: #ffffff;
            padding: 120px 0 70px;
            position: relative;
            overflow: hidden;
        }

        .policy-hero-pattern {
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background-image: radial-gradient(rgba(255, 255, 255, 0.05) 2px, transparent 2px);
            background-size: 30px 30px;
            z-index: 0;
            mask-image: linear-gradient(to bottom, rgba(0,0,0,1) 0%, rgba(0,0,0,0) 100%);
            -webkit-mask-image: linear-gradient(to bottom, rgba(0,0,0,1) 0%, rgba(0,0,0,0) 100%);
        }

        /* Slanted bottom division */
        .policy-angle-sep {
            position: absolute;
            bottom: -1px;
            left: 0;
            width: 100%;
            height: 50px;
            z-index: 3;
        }

        /* Sticky Sidebar Navigation */
        .policy-sidebar {
            position: sticky;
            top: 100px;
            z-index: 10;
        }

        .policy-nav-link {
            color: rgba(10, 25, 47, 0.65);
            font-size: 0.9rem;
            transition: all 0.2s ease;
            border-left: 2px solid transparent;
            padding-left: 15px;
        }

        .policy-nav-link:hover,
        .policy-nav-link.active {
            color: var(--navy-blue, #0a192f);
            border-left-color: #13ce85;
            font-weight: 600;
        }

        /* Content Styling */
        .policy-content h4 {
            color: var(--navy-blue, #0a192f);
            font-weight: 700;
            margin-top: 35px;
            margin-bottom: 15px;
            scroll-margin-top: 110px; /* Offset for smooth scrolling */
        }

        .policy-content p,
        .policy-content li {
            color: rgba(33, 37, 41, 0.75);
            font-size: 0.95rem;
            line-height: 1.7;
        }

        .policy-content ul {
            padding-left: 20px;
        }

        .legal-note-box {
            background-color: #f8fafd;
            border-left: 3px solid #13ce85;
            border-radius: 4px;
        }
    </style>
@endpush

@section('content')

    <!-- HERO HEADER: Sleek, Techy, Dark Background -->
    <header class="policy-hero">
        <div class="policy-hero-pattern"></div>
        <div class="container position-relative z-1">
            <div class="row">
                <div class="col-lg-8">
                    <span class="text-uppercase tracking-wider fw-bold text-accent fs-7" style="color: #13ce85;">Governance & Security</span>
                    <h1 class="display-5 fw-bolder mt-3 mb-3 text-white">Privacy Policy</h1>
                    <p class="lead opacity-75 text-white-50 fs-6">Last Updated: January 2025. This policy explains how Startex IT collects, protects, and manages data across our website, SaaS portals, and custom client projects.</p>
                </div>
            </div>
        </div>
        <!-- Slanted bottom division -->
        <svg class="policy-angle-sep" preserveAspectRatio="none" viewBox="0 0 1440 50" fill="none" xmlns="http://www.w3.org/2000/svg">
            <polygon points="0,50 1440,50 1440,0" fill="#ffffff"/>
        </svg>
    </header>

    <!-- CONTENT BODY: Split Layout -->
    <main class="py-5 bg-white">
        <div class="container py-4">
            <div class="row g-5">

                <!-- Sticky Sidebar Table of Contents (Desktop only) -->
                <aside class="col-lg-3 d-none d-lg-block">
                    <div class="policy-sidebar">
                        <h6 class="text-uppercase fw-bold text-muted small tracking-wider mb-4">On This Page</h6>
                        <nav class="d-flex flex-column gap-3">
                            <a href="#introduction" class="policy-nav-link text-decoration-none active">1. Introduction</a>
                            <a href="#data-collection" class="policy-nav-link text-decoration-none">2. Data We Collect</a>
                            <a href="#data-usage" class="policy-nav-link text-decoration-none">3. How We Use Data</a>
                            <a href="#data-processing" class="policy-nav-link text-decoration-none">4. Client Data Handling</a>
                            <a href="#security" class="policy-nav-link text-decoration-none">5. Security Standards</a>
                            <a href="#disclosure" class="policy-nav-link text-decoration-none">6. Third-Party Sharing</a>
                            <a href="#legal-rights" class="policy-nav-link text-decoration-none">7. Compliance & Rights</a>
                        </nav>
                    </div>
                </aside>

                <!-- Plain Text Policy Content -->
                <article class="col-lg-9 policy-content">

                    <!-- 1. Introduction -->
                    <section id="introduction">
                        <h4>1. Introduction</h4>
                        <p>At Startex IT, we design secure software solutions with a commitment to maintaining user privacy and transparency. This Privacy Policy details the standard operational procedures we follow regarding the management of personal information collected through our corporate website, custom platforms, and product services.</p>
                        <p>By using our website or utilizing our technical services, you acknowledge the terms outlined in this document.</p>
                    </section>

                    <!-- 2. Data We Collect -->
                    <section id="data-collection">
                        <h4>2. Data We Collect</h4>
                        <p>We limit data collection to details required to communicate with prospective clients and maintain stable platform installations. This includes:</p>
                        <ul>
                            <li class="mb-2"><strong>Identity & Contact Information:</strong> Full Name, company name, work email address, contact telephone number, and country of residence provided voluntarily when completing contact or demo request forms.</li>
                            <li class="mb-2"><strong>Usage & Analytics Data:</strong> IP addresses, browser specifications, operating system details, and basic browsing telemetry collected using system cookies for routine performance debugging.</li>
                            <li class="mb-2"><strong>Operational Client Data:</strong> Technical logs and error reports generated automatically during the utilization of our hosted portals.</li>
                        </ul>
                    </section>

                    <!-- 3. How We Use Data -->
                    <section id="data-usage">
                        <h4>3. How We Use Data</h4>
                        <p>We process collected data exclusively for the following functional purposes:</p>
                        <ul>
                            <li class="mb-2">To reply to service inquiries, project briefs, and demo requests submitted through our contact channels.</li>
                            <li class="mb-2">To configure system database credentials, platform licenses, and workspace accounts for clients onboarding onto our platforms.</li>
                            <li class="mb-2">To analyze website traffic metrics to ensure stable rendering speeds and cross-device compatibility.</li>
                            <li class="mb-2">To comply with active legal frameworks within Pakistan, including requests from authorized digital infrastructure regulators.</li>
                        </ul>
                    </section>

                    <!-- 4. Client Data Handling -->
                    <section id="data-processing">
                        <h4>4. Client Data Handling (As Processors)</h4>
                        <div class="legal-note-box p-3 mb-3">
                            <p class="small mb-0 fw-semibold text-dark"><i class="fa-solid fa-circle-info text-primary me-1"></i> Data Processing Disclaimer:</p>
                            <p class="small text-muted mb-0 mt-1">For custom applications, enterprise ERPs, and database platforms built or deployed for our corporate clients, Startex IT acts strictly as a <strong>Data Processor</strong>. The client remains the sole <strong>Data Controller</strong> of their operational databases.</p>
                        </div>
                        <p>Our developers and support staff only access client-managed databases when explicitly requested by the client for maintenance, backup configurations, or code debugging purposes. Clients retain full ownership and administrative control over all internal records stored within their platforms.</p>
                    </section>

                    <!-- 5. Security Standards -->
                    <section id="security">
                        <h4>5. Security Standards</h4>
                        <p>We follow standard industry security practices to protect data against unauthorized access, loss, or disclosure. These measures include:</p>
                        <ul>
                            <li class="mb-2"><strong>Data Encryption:</strong> Utilization of HTTPS (SSL/TLS) encryption layers for all web communication and encrypted storage for sensitive platform parameters.</li>
                            <li class="mb-2"><strong>Hosting Infrastructure:</strong> We host web portals and systems on leading secure cloud providers, utilizing firewalls and restricted access patterns.</li>
                            <li class="mb-2"><strong>Access Control:</strong> System administrative rights are strictly restricted to authorized development personnel on a need-to-know basis.</li>
                        </ul>
                    </section>

                    <!-- 6. Third-Party Sharing -->
                    <section id="disclosure">
                        <h4>6. Third-Party Sharing</h4>
                        <p>We do not sell, rent, or trade personal data to third-party marketing brokers. Data sharing is strictly restricted to essential business service providers (sub-processors) under binding operational limitations:</p>
                        <ul>
                            <li class="mb-2">Cloud hosting providers, secure mail servers, and database backup systems utilized to host and deliver our software platforms.</li>
                            {{-- <li class="mb-2">Local cellular networks or gateway services utilized to dispatch automated platform alerts (such as work-order SMS notifications).</li> --}}
                            <li class="mb-2">In mandatory situations, to comply with valid legal processes under the <strong>Prevention of Electronic Crimes Act (PECA) 2016</strong> or other regulatory bodies in Pakistan.</li>
                        </ul>
                    </section>

                    <!-- 7. Compliance & Rights -->
                    <section id="legal-rights">
                        <h4>7. Compliance & Rights</h4>
                        <p>Under local electronic transaction laws, website visitors and platform users have the right to inspect, correct, or request the deletion of their personal contact details stored in our databases.</p>
                        {{-- <p>If you wish to review, update, or remove your personal details from our contact records, please reach out directly to our support desk:</p> --}}

                        {{-- <div class="p-4 rounded-4 border bg-light mt-4" style="max-width: 500px;">
                            <h6 class="fw-bold mb-3" style="color: var(--navy-blue, #0a192f);">Startex IT Data Support</h6>
                            <p class="small text-muted mb-2 d-flex gap-2 align-items-center">
                                <i class="fa-solid fa-location-dot"></i> Office # 511-513, 5th Floor, Eden Towers, Gulberg III, Lahore, Pakistan.
                            </p>
                            <p class="small text-muted mb-2 d-flex gap-2 align-items-center">
                                <i class="fa-solid fa-envelope"></i> <a href="mailto:info@startexmarketing.com" class="text-decoration-none">info@startexmarketing.com</a>
                            </p>
                            <p class="small text-muted mb-0 d-flex gap-2 align-items-center">
                                <i class="fa-solid fa-phone"></i> <a href="tel:04235782381" class="text-decoration-none">042 35782381</a>
                            </p>
                        </div> --}}
                    </section>

                </article>
            </div>
        </div>
    </main>

@endsection

@push('scripts')
    <!-- jQuery Simple Sidebar Link Highlighter -->
    <script>
        $(document).ready(function () {
            const $navLinks = $('.policy-nav-link');
            const $sections = $('.policy-content section');

            $(window).on('scroll', function () {
                let currentScroll = $(this).scrollTop() + 120; // Matches scroll margin

                $sections.each(function () {
                    const top = $(this).offset().top;
                    const bottom = top + $(this).outerHeight();

                    if (currentScroll >= top && currentScroll <= bottom) {
                        const id = $(this).attr('id');
                        $navLinks.removeClass('active');
                        $navLinks.filter('[href="#' + id + '"]').addClass('active');
                    }
                });
            });
        });
    </script>
@endpush
