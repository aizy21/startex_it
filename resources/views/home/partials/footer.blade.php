<footer class="footer-section py-5 text-center text-md-start" style="background-color: var(--navy-blue, #0a192f); color: rgba(255, 255, 255, 0.7);">
    <div class="container">
        <div class="row g-4">

            <!-- Column 1: Brand & Socials -->
            <div class="col-lg-3 col-md-6 ">
                <a class="navbar-brand text-white fs-4 fw-bold mb-3 d-inline-block text-decoration-none" href="#home">
                    <i class="fa-solid fa-layer-group text-accent"></i> Startex <span class="fw-light">IT</span>
                </a>
                <p class="small mb-4 lh-lg">We engineer custom software systems, responsive web applications, and unified operational platforms designed to automate business workflows, trace high-value assets, and scale digital infrastructure securely.</p>
                <div class="d-flex gap-3 footer-socials">
                    <a class="social-btn mx-auto m-md-0" target="_blank" href="https://www.linkedin.com/company/startex-marketing-services/" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a class="social-btn mx-auto m-md-0" target="_blank" href="#" aria-label="Twitter"><i class="fa-brands fa-twitter"></i></a>
                    <a class="social-btn mx-auto m-md-0" target="_blank" href="https://www.facebook.com/profile.php?id=100021280965800" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                </div>
            </div>

            <!-- Column 2: Quick Links -->
            <div class="col-lg-3 col-md-6 ps-lg-5">
                <h5 class="text-white mb-3 fw-semibold text-uppercase fs-6 tracking-wider">Quick Links</h5>
                <ul class="list-unstyled d-flex flex-column gap-2 mb-0">
                    <li><a class="footer-link text-decoration-none" href="{{url("/")}}#about">About Us</a></li>
                    <li><a class="footer-link text-decoration-none" href="{{url("/")}}#solutions">Products</a></li>
                    {{-- <li><a class="footer-link text-decoration-none" href="{{url("/")}}#contact">Contact</a></li> --}}
                    <li><a class="footer-link text-decoration-none" href="{{url("/")}}#services">Services</a></li>
                    <li><a class="footer-link text-decoration-none" href="{{route("home.policy.index")}}">Privacy Policy</a></li>
                    <li><a class="footer-link text-decoration-none" href="{{route("home.terms.index")}}">Terms & Conditions</a></li>
                </ul>
            </div>

            <!-- Column 3: Contact Info -->
            <div class="col-lg-3 col-md-6 ">
                <h5 class="text-white mb-3 fw-semibold text-uppercase fs-6 tracking-wider">Get in Touch</h5>
                <ul class="list-unstyled d-flex flex-column gap-3 mb-0">
                    <li class="d-flex align-items-start gap-2">
                        <i class="fa-solid fa-envelope mt-1 text-white opacity-75 d-none d-md-block"></i>
                        <div class=" mx-auto ms-md-0">
                            <span class="d-block text-white-50 small">Email Address</span>
                            <a class="footer-link text-decoration-none text-break" href="mailto:info@startexmarketing.com">info@startexmarketing.com</a>
                        </div>
                    </li>
                    <li class="d-flex align-items-start gap-2">
                        <i class="fa-solid fa-phone mt-1 text-white opacity-75 d-none d-md-block"></i>
                        <div class=" mx-auto ms-md-0">
                            <span class="d-block text-white-50 small">Phone Numbers</span>
                            <a class="footer-link text-decoration-none" href="tel:04235782381">042 35782381</a> /
                            <a class="footer-link text-decoration-none" href="tel:04235782382">82</a>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- Column 4: Office Location -->
            <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-3 fw-semibold text-uppercase fs-6 tracking-wider">Our Office</h5>
                <div class="d-flex align-items-start gap-2">
                    <i class="fa-solid fa-location-dot mt-1 text-white opacity-75 d-none d-md-block"></i>
                    <p class="small lh-lg mb-0 mx-auto ms-md-0">
                        Office # 511-513, 5th Floor, Eden Towers,<br>
                        Main Boulevard, Gulberg III,<br>
                        Lahore, Punjab, Pakistan. 54660
                    </p>
                </div>
            </div>

        </div>

        <!-- Bottom Copyright -->
        <div class="text-center mt-5 pt-4 border-top border-secondary-subtle small opacity-75">
            &copy; {{date('Y')}} Startex IT. All Rights Reserved.
        </div>
    </div>
</footer>

<style>
    /* Footer Styles */
    .footer-section {
        position: relative;
        font-size: 0.95rem;
    }

    /* Custom spacing for section headers */
    .tracking-wider {
        letter-spacing: 0.08em;
    }

    /* Footer Links Interactive Transition */
    .footer-link {
        color: rgba(255, 255, 255, 0.7);
        transition: color 0.25s ease, padding-left 0.25s ease;
        display: inline-block;
    }

    .footer-link:hover {
        color: #ffffff;
        padding-left: 4px;
        /* Subtle slide-right effect on hover */
    }

    /* Social Buttons Styling */
    .footer-socials .social-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 36px;
        height: 36px;
        border-radius: 50%;
        background-color: rgba(255, 255, 255, 0.08);
        color: #ffffff;
        text-decoration: none;
        transition: background-color 0.25s ease, transform 0.25s ease;
    }

    .footer-socials .social-btn:hover {
        background-color: var(--accent-color, #0d6efd);
        /* Uses accent theme color or fallback */
        transform: translateY(-3px);
    }

    /* Subtle separator color tweak */
    .border-secondary-subtle {
        border-color: rgba(255, 255, 255, 0.1) !important;
    }
</style>
