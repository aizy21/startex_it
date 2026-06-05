<!-- Include Slick Core CSS in your layout head or at the top of the style push -->
@push('styles')
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
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

        /* Navigation Button Styles */
        .btn-nav {
            width: 45px;
            height: 45px;
            border: 1px solid rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
            color: var(--navy-blue, #0a192f);
            transition: all 0.25s ease;
            z-index: 5;
        }

        .btn-nav:hover {
            background-color: var(--navy-blue, #0a192f);
            color: #ffffff;
            border-color: var(--navy-blue, #0a192f);
        }

        /*
           Slick Container wrapper to match grid spacing.
           Using negative horizontal margins compensates for the slide paddings below.
        */
        .testimonial-slider {
            margin: 0 -12px;
            overflow: hidden;
        }

        /*
           Slick Slide Item
           Top/Bottom padding ensures room for card translations on hover.
           Left/Right padding (12px) acts as a safe-zone, creating a 24px gap between cards
           and protecting card shadows from clipping.
        */
        .slider-item {
            padding: 15px 12px;
            outline: none; /* Removes default browser focus border */
        }

        /* Testimonial Cards styling */
        .testimonial-card {
            transition: transform 0.25s ease, box-shadow 0.25s ease;
            border: 1px solid rgba(0, 0, 0, 0.02) !important;
        }

        .testimonial-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 0.75rem 2rem rgba(0, 0, 0, 0.08) !important;
        }

        /* Placeholder Avatar Styling */
        .avatar-initials {
            background-color: var(--navy-blue, #0a192f) !important;
            flex-shrink: 0;
        }
        /* =======================================================
   SLICK CAROUSEL EQUAL HEIGHTS FIX
   ======================================================= */

/* 1. Force the slide track to act as a Flexbox container */
.testimonial-slider .slick-track {
    display: flex !important;
    align-items: stretch; /* Forces all slides to equal height */
}

/* 2. Ensure each Slick slide container stretches to fill the track height */
.testimonial-slider .slick-slide {
    height: auto !important;
    display: flex !important;
    flex-direction: column;
}

/* 3. Make the internal slide wrapper expand to 100% height */
.testimonial-slider .slider-item {
    display: flex !important;
    flex-direction: column;
    flex: 1 0 auto;
    height: 100%;
}

/* 4. Force the card itself to stretch and distribute its content evenly */
.testimonial-slider .testimonial-card {
    display: flex !important;
    flex-direction: column;
    justify-content: space-between; /* Keeps stars/text at the top, profile at the bottom */
    height: 100%;
    flex: 1 1 auto;
}
    </style>
@endpush

<section class="py-5 bg-light position-relative" id="testimonials">
    <div class="container py-3">
        <!-- Section Header -->
        <div class="d-flex flex-column flex-md-row align-items-md-end justify-content-between mb-5">
            <div class="max-w-600">
                <span class="text-uppercase tracking-wider fw-bold fs-7" style="color: var(--accent-color, #0d6efd);">Client Success</span>
                <h2 class="fw-bold mt-2 mb-0" style="color: var(--navy-blue, #0a192f);">Feedback from Our Happy Customers</h2>
            </div>
            <!-- Slider Navigation Controls -->
            <div class="d-flex gap-2 mt-3 mt-md-0">
                <button class="btn btn-nav d-flex align-items-center justify-content-center rounded-circle" id="prev-btn" aria-label="Previous slide">
                    <i class="fa-solid fa-chevron-left"></i>
                </button>
                <button class="btn btn-nav d-flex align-items-center justify-content-center rounded-circle" id="next-btn" aria-label="Next slide">
                    <i class="fa-solid fa-chevron-right"></i>
                </button>
            </div>
        </div>

        <!-- Sliding Testimonial Container -->
        <div class="slider-wrapper">
            <div class="testimonial-slider" id="testimonial-slider">

                <!-- Review 1 -->
                <div class="slider-item">
                    <div class="card border-0 p-4 shadow-sm h-100 rounded-4 testimonial-card bg-white d-flex flex-column justify-content-between">
                        <div>
                            <div class="mb-3 d-flex gap-1 text-warning">
                                <i class="fa-solid fa-star small"></i>
                                <i class="fa-solid fa-star small"></i>
                                <i class="fa-solid fa-star small"></i>
                                <i class="fa-solid fa-star small"></i>
                                <i class="fa-solid fa-star small"></i>
                            </div>
                            <p class="text-muted small lh-lg mb-4">"The smart asset tagging solution allowed us to audit our entire inventory within weeks instead of months. The team support during deployment was responsive and thoroughly professional."</p>
                        </div>
                        <div class="d-flex align-items-center gap-3 pt-3 border-top border-light">
                            <div class="avatar-initials d-flex align-items-center justify-content-center rounded-circle text-white fw-bold" style="width: 45px; height: 45px; font-size: 0.9rem;">
                                AM
                            </div>
                            <div>
                                <h6 class="fw-bold mb-0 text-dark small">Asim Mahmood</h6>
                                <span class="text-muted mb-0 d-block" style="font-size: 0.8rem;">Director of Operations</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Review 2 -->
                <div class="slider-item">
                    <div class="card border-0 p-4 shadow-sm h-100 rounded-4 testimonial-card bg-white d-flex flex-column justify-content-between">
                        <div>
                            <div class="mb-3 d-flex gap-1 text-warning">
                                <i class="fa-solid fa-star small"></i>
                                <i class="fa-solid fa-star small"></i>
                                <i class="fa-solid fa-star small"></i>
                                <i class="fa-solid fa-star small"></i>
                                <i class="fa-solid fa-star small"></i>
                            </div>
                            <p class="text-muted small lh-lg mb-4">"Transitioning to automated work orders significantly improved our team's response times. We now run our preventive maintenance schedules reliably, reducing equipment downtime."</p>
                        </div>
                        <div class="d-flex align-items-center gap-3 pt-3 border-top border-light">
                            <div class="avatar-initials d-flex align-items-center justify-content-center rounded-circle text-white fw-bold" style="width: 45px; height: 45px; font-size: 0.9rem;">
                                KS
                            </div>
                            <div>
                                <h6 class="fw-bold mb-0 text-dark small">Kamran S.</h6>
                                <span class="text-muted mb-0 d-block" style="font-size: 0.8rem;">Facilities Manager</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Review 3 -->
                <div class="slider-item">
                    <div class="card border-0 p-4 shadow-sm h-100 rounded-4 testimonial-card bg-white d-flex flex-column justify-content-between">
                        <div>
                            <div class="mb-3 d-flex gap-1 text-warning">
                                <i class="fa-solid fa-star small"></i>
                                <i class="fa-solid fa-star small"></i>
                                <i class="fa-solid fa-star small"></i>
                                <i class="fa-solid fa-star small"></i>
                                <i class="fa-solid fa-star-half-stroke small"></i>
                            </div>
                            <p class="text-muted small lh-lg mb-4">"Integrating Startex IT systems with our inventory tracking has provided visibility across both departments. It has streamlined operations considerably."</p>
                        </div>
                        <div class="d-flex align-items-center gap-3 pt-3 border-top border-light">
                            <div class="avatar-initials d-flex align-items-center justify-content-center rounded-circle text-white fw-bold" style="width: 45px; height: 45px; font-size: 0.9rem;">
                                TN
                            </div>
                            <div>
                                <h6 class="fw-bold mb-0 text-dark small">Tariq Naeem</h6>
                                <span class="text-muted mb-0 d-block" style="font-size: 0.8rem;">Technical Lead</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Review 4 -->
                <div class="slider-item">
                    <div class="card border-0 p-4 shadow-sm h-100 rounded-4 testimonial-card bg-white d-flex flex-column justify-content-between">
                        <div>
                            <div class="mb-3 d-flex gap-1 text-warning">
                                <i class="fa-solid fa-star small"></i>
                                <i class="fa-solid fa-star small"></i>
                                <i class="fa-solid fa-star small"></i>
                                <i class="fa-solid fa-star small"></i>
                                <i class="fa-solid fa-star small"></i>
                            </div>
                            <p class="text-muted small lh-lg mb-4">"Our supply chain tracking has improved since utilizing their platform. Managing asset depreciation and handling internal audits is now highly streamlined."</p>
                        </div>
                        <div class="d-flex align-items-center gap-3 pt-3 border-top border-light">
                            <div class="avatar-initials d-flex align-items-center justify-content-center rounded-circle text-white fw-bold" style="width: 45px; height: 45px; font-size: 0.9rem;">
                                ZR
                            </div>
                            <div>
                                <h6 class="fw-bold mb-0 text-dark small">Zainab Reza</h6>
                                <span class="text-muted mb-0 d-block" style="font-size: 0.8rem;">Supply Chain Manager</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Review 5 -->
                <div class="slider-item">
                    <div class="card border-0 p-4 shadow-sm h-100 rounded-4 testimonial-card bg-white d-flex flex-column justify-content-between">
                        <div>
                            <div class="mb-3 d-flex gap-1 text-warning">
                                <i class="fa-solid fa-star small"></i>
                                <i class="fa-solid fa-star small"></i>
                                <i class="fa-solid fa-star small"></i>
                                <i class="fa-solid fa-star small"></i>
                                <i class="fa-solid fa-star-half-stroke small"></i>
                            </div>
                            <p class="text-muted small lh-lg mb-4">"The predictive analytics module changed our approach to infrastructure lifecycle management. We can accurately predict critical failures beforehand."</p>
                        </div>
                        <div class="d-flex align-items-center gap-3 pt-3 border-top border-light">
                            <div class="avatar-initials d-flex align-items-center justify-content-center rounded-circle text-white fw-bold" style="width: 45px; height: 45px; font-size: 0.9rem;">
                                FI
                            </div>
                            <div>
                                <h6 class="fw-bold mb-0 text-dark small">Faisal Iqbal</h6>
                                <span class="text-muted mb-0 d-block" style="font-size: 0.8rem;">Infrastructure Head</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Review 6 -->
                <div class="slider-item">
                    <div class="card border-0 p-4 shadow-sm h-100 rounded-4 testimonial-card bg-white d-flex flex-column justify-content-between">
                        <div>
                            <div class="mb-3 d-flex gap-1 text-warning">
                                <i class="fa-solid fa-star small"></i>
                                <i class="fa-solid fa-star small"></i>
                                <i class="fa-solid fa-star small"></i>
                                <i class="fa-solid fa-star small"></i>
                                <i class="fa-solid fa-star small"></i>
                            </div>
                            <p class="text-muted small lh-lg mb-4">"Centralizing operations across four regional offices seemed daunting, but the software provided a unified view that unified our facilities team."</p>
                        </div>
                        <div class="d-flex align-items-center gap-3 pt-3 border-top border-light">
                            <div class="avatar-initials d-flex align-items-center justify-content-center rounded-circle text-white fw-bold" style="width: 45px; height: 45px; font-size: 0.9rem;">
                                SK
                            </div>
                            <div>
                                <h6 class="fw-bold mb-0 text-dark small">Sara Khan</h6>
                                <span class="text-muted mb-0 d-block" style="font-size: 0.8rem;">Chief Operating Officer</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@push('scripts')
    <!-- Include Slick Carousel JS -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    <script>
        $(document).ready(function() {
            const $slider = $('#testimonial-slider');

            if ($slider.length) {
                $slider.slick({
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 2000,
                    infinite: true,
                    arrows: true,
                    prevArrow: $('#prev-btn'),
                    nextArrow: $('#next-btn'),
                    pauseOnHover: true,
                    responsive: [
                        {
                            breakpoint: 992, // Tablet Breakpoint
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 1
                            }
                        },
                        {
                            breakpoint: 768, // Mobile Breakpoint
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
                            }
                        }
                    ]
                });
            }
        });
    </script>
@endpush
