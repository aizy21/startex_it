@extends('home.layout')

@section('title', 'Terms & Conditions - Startex IT')

@push('styles')
    <style>
        /* Terms Page Hero */
        .terms-hero {
            background-color: var(--navy-blue, #0a192f);
            color: #ffffff;
            padding: 120px 0 70px;
            position: relative;
            overflow: hidden;
        }

        .terms-hero-pattern {
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background-image: radial-gradient(rgba(255, 255, 255, 0.05) 2px, transparent 2px);
            background-size: 30px 30px;
            z-index: 0;
            mask-image: linear-gradient(to bottom, rgba(0,0,0,1) 0%, rgba(0,0,0,0) 100%);
            -webkit-mask-image: linear-gradient(to bottom, rgba(0,0,0,1) 0%, rgba(0,0,0,0) 100%);
        }

        /* Slanted bottom division */
        .terms-angle-sep {
            position: absolute;
            bottom: -1px;
            left: 0;
            width: 100%;
            height: 50px;
            z-index: 3;
        }

        /* Sticky Sidebar Navigation */
        .terms-sidebar {
            position: sticky;
            top: 100px;
            z-index: 10;
        }

        .terms-nav-link {
            color: rgba(10, 25, 47, 0.65);
            font-size: 0.9rem;
            transition: all 0.2s ease;
            border-left: 2px solid transparent;
            padding-left: 15px;
        }

        .terms-nav-link:hover,
        .terms-nav-link.active {
            color: var(--navy-blue, #0a192f);
            border-left-color: #13ce85;
            font-weight: 600;
        }

        /* Content Styling */
        .terms-content h4 {
            color: var(--navy-blue, #0a192f);
            font-weight: 700;
            margin-top: 35px;
            margin-bottom: 15px;
            scroll-margin-top: 110px; /* Offset for smooth scrolling */
        }

        .terms-content p,
        .terms-content li {
            color: rgba(33, 37, 41, 0.75);
            font-size: 0.95rem;
            line-height: 1.7;
        }

        .terms-content ul {
            padding-left: 20px;
        }

        .warning-note-box {
            background-color: #fff8f8;
            border-left: 3px solid #dc3545;
            border-radius: 4px;
        }
    </style>
@endpush

@section('content')

    <!-- HERO HEADER: Sleek, Techy, Dark Background -->
    <header class="terms-hero">
        <div class="terms-hero-pattern"></div>
        <div class="container position-relative z-1">
            <div class="row">
                <div class="col-lg-8">
                    <span class="text-uppercase tracking-wider fw-bold text-accent fs-7" style="color: #13ce85;">Contractual Agreement</span>
                    <h1 class="display-5 fw-bolder mt-3 mb-3 text-white">Terms & Conditions</h1>
                    <p class="lead opacity-75 text-white-50 fs-6">Last Updated: January 2025. Please read these terms carefully before utilizing our custom development services or accessing our software portals.</p>
                </div>
            </div>
        </div>
        <!-- Slanted bottom division -->
        <svg class="terms-angle-sep" preserveAspectRatio="none" viewBox="0 0 1440 50" fill="none" xmlns="http://www.w3.org/2000/svg">
            <polygon points="0,50 1440,50 1440,0" fill="#ffffff"/>
        </svg>
    </header>

    <!-- CONTENT BODY: Split Layout -->
    <main class="py-5 bg-white">
        <div class="container py-4">
            <div class="row g-5">

                <!-- Sticky Sidebar Table of Contents (Desktop only) -->
                <aside class="col-lg-3 d-none d-lg-block">
                    <div class="terms-sidebar">
                        <h6 class="text-uppercase fw-bold text-muted small tracking-wider mb-4">On This Page</h6>
                        <nav class="d-flex flex-column gap-3">
                            <a href="#acceptance" class="terms-nav-link text-decoration-none active">1. Acceptance of Terms</a>
                            <a href="#custom-services" class="terms-nav-link text-decoration-none">2. Custom Dev Services</a>
                            <a href="#saas-use" class="terms-nav-link text-decoration-none">3. SaaS & Platform Access</a>
                            <a href="#payments" class="terms-nav-link text-decoration-none">4. Payment & Suspensions</a>
                            <a href="#intellectual-property" class="terms-nav-link text-decoration-none">5. Intellectual Property</a>
                            <a href="#liability" class="terms-nav-link text-decoration-none">6. Limitation of Liability</a>
                            {{-- <a href="#jurisdiction" class="terms-nav-link text-decoration-none">7. Governing Law</a> --}}
                        </nav>
                    </div>
                </aside>

                <!-- Plain Text Terms Content -->
                <article class="col-lg-9 terms-content">

                    <!-- 1. Acceptance of Terms -->
                    <section id="acceptance">
                        <h4>1. Acceptance of Terms</h4>
                        <p>These Terms and Conditions constitute a legally binding agreement made between you (whether personally or on behalf of an entity) and <strong>Startex IT</strong>, concerning your access to and use of our website, custom software solutions, and platform subscriptions.</p>
                        <p>By accessing our systems or signing a project proposal with us, you agree that you have read, understood, and agreed to be bound by all of these terms.</p>
                    </section>

                    <!-- 2. Custom Development Services -->
                    <section id="custom-services">
                        <h4>2. Custom Development Services</h4>
                        <p>For custom web, mobile, or enterprise software development projects:</p>
                        <ul>
                            <li class="mb-2"><strong>Scope of Work:</strong> All development works are executed based on a mutually signed Project Proposal or Statement of Work (SOW). Any features requested outside the SOW will be subject to separate change requests and billings.</li>
                            <li class="mb-2"><strong>Client Approvals:</strong> Clients are expected to provide timely feedback during development cycles. Delays in feedback exceeding 10 business days may impact estimated release schedules.</li>
                        </ul>
                    </section>

                    <!-- 3. SaaS & Platform Access -->
                    <section id="saas-use">
                        <h4>3. SaaS & Platform Access License</h4>
                        <p>Subject to payment of active subscription fees, Startex IT grants clients a restricted, non-exclusive, non-transferable license to access our proprietary management portals.</p>
                        <div class="warning-note-box p-3 mb-3">
                            <p class="small mb-0 fw-semibold text-danger"><i class="fa-solid fa-triangle-exclamation text-danger me-1"></i> Strictly Prohibited Actions:</p>
                            <p class="small text-muted mb-0 mt-1">Users may not reverse-engineer, decompile, copy, or attempt to extract the source code of our platforms, or bypass any security constraints designed to protect system infrastructure.</p>
                        </div>
                    </section>

                    <!-- 4. Payment, Billings & Suspensions -->
                    <section id="payments">
                        <h4>4. Payment, Billings & Suspensions</h4>
                        <ul>
                            <li class="mb-2"><strong>Billing Terms:</strong> Development milestones are billed according to SOW payment schedules. SaaS subscriptions are billed in advance on a monthly or annual cycle.</li>
                            <li class="mb-2"><strong>Late Payments:</strong> For custom projects, milestones must be cleared within 7 days of invoice presentation. For subscriptions, failed payments not resolved within 5 business days will result in automated workspace suspension.</li>
                            {{-- <li class="mb-2"><strong>Tax Compliance:</strong> All billings are subject to local provincial sales tax (such as PRA) or withholding taxes as applicable under the laws of Pakistan, unless a valid tax exemption certificate is provided.</li> --}}
                        </ul>
                    </section>

                    <!-- 5. Intellectual Property Rights -->
                    <section id="intellectual-property">
                        <h4>5. Intellectual Property Rights</h4>
                        <ul>
                            <li class="mb-2"><strong>Our Platforms:</strong> All proprietary codebases, custom logic, dashboard visual setups, databases, and assets generated by Startex IT remain the sole property of Startex IT.</li>
                            <li class="mb-2"><strong>Custom Projects SOW:</strong> For bespoke software built specifically for a client, the intellectual property and ownership rights of the final customized code transfer to the client <strong>only after all outstanding invoices and final payments have been cleared in full</strong>.</li>
                        </ul>
                    </section>

                    <!-- 6. Limitation of Liability -->
                    <section id="liability">
                        <h4>6. Limitation of Liability</h4>
                        <p>While we target high systems uptime and secure hosting architectures, Startex IT is not liable for operational losses, data loss, database downtime, or delayed dispatches caused by:</p>
                        <ul>
                            <li class="mb-2">Local network interruptions, cellular SMS dispatch delays, or national power grid disruptions (Force Majeure events).</li>
                            <li class="mb-2">Unauthorized access gained through client-managed login credentials.</li>
                        </ul>
                        <p>In all situations, our aggregate financial liability is capped at the total amount actually paid by the client to Startex IT for the specific service in question during the three (3) months preceding the claim event.</p>
                    </section>

                    <!-- 7. Governing Law & Dispute Resolution -->
                    {{-- <section id="jurisdiction">
                        <h4>7. Governing Law</h4>
                        <p>These Terms and Conditions shall be governed by and constructed in accordance with the laws of the **Islamic Republic of Pakistan**. Any dispute arising under these terms shall be subject to the exclusive jurisdiction of the competent courts located in **Lahore, Pakistan**.</p>

                        <p class="mt-4">If you have any questions regarding these terms, please contact our administrative desk:</p>
                        <div class="p-4 rounded-4 border bg-light" style="max-width: 500px;">
                            <h6 class="fw-bold mb-3" style="color: var(--navy-blue, #0a192f);">Startex IT Legal Representative</h6>
                            <p class="small text-muted mb-2 d-flex gap-2 align-items-center">
                                <i class="fa-solid fa-location-dot"></i> Office # 511-513, 5th Floor, Eden Towers, Gulberg III, Lahore, Pakistan.
                            </p>
                            <p class="small text-muted mb-2 d-flex gap-2 align-items-center">
                                <i class="fa-solid fa-envelope"></i> <a href="mailto:info@startexmarketing.com" class="text-decoration-none">info@startexmarketing.com</a>
                            </p>
                            <p class="small text-muted mb-0 d-flex gap-2 align-items-center">
                                <i class="fa-solid fa-phone"></i> <a href="tel:04235782381" class="text-decoration-none">042 35782381</a>
                            </p>
                        </div>
                    </section> --}}

                </article>
            </div>
        </div>
    </main>

@endsection

@push('scripts')
    <!-- jQuery Simple Sidebar Link Highlighter -->
    <script>
        $(document).ready(function () {
            const $navLinks = $('.terms-nav-link');
            const $sections = $('.terms-content section');

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
