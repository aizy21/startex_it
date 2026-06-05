<section class="py-5 position-relative solutions-section" id="contact">
    <!-- Subtle Dot Background for the whole section -->
    <div class="solutions-bg-pattern"></div>

    <div class="container position-relative z-1">
        <div class="row g-4 align-items-stretch">

            <!-- Left Column: Interactive Map -->
            <div class="col-lg-6 d-flex">
                <div class="map-wrapper w-100 d-flex flex-column rounded-4 overflow-hidden shadow-lg bg-white p-2">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d889.3880856280538!2d74.3445597323648!3d31.51836803939231!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2s!4v1780634940673!5m2!1sen!2s"
                        class="w-100 h-100 border-0 rounded-3"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        style="min-height: 400px;">
                    </iframe>
                </div>
            </div>

            <!-- Right Column: Form Card with Dotted Pattern -->
            <div class="col-lg-6">
                <div class="card-wrapper position-relative h-100">
                    <!-- Dotted backgrounds behind the card -->
                    <div class="dotted-pattern dotted-top-right"></div>
                    <div class="dotted-pattern dotted-bottom-left"></div>

                    <div class="card border-0 shadow-lg rounded-4 p-4 p-md-5 position-relative z-1 bg-white h-100 d-flex flex-column justify-content-center">
                        <div class="text-center mb-4">
                            <h2 class="fw-bold" style="color: var(--navy-blue, #0a192f);">Ready to Transform Your Business?</h2>
                            <p class="text-muted">Contact us for a personalized demo or custom pricing.</p>
                        </div>
                        <form class="needs-validation" action="#" novalidate>
                            <div class="row g-3">

                                <!-- Full Name -->
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input class="form-control" id="fullName" type="text" placeholder="Full Name" required>
                                        <label for="fullName">Full Name <span class="text-danger">*</span></label>
                                    </div>
                                </div>

                                <!-- Work Email -->
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input class="form-control" id="workEmail" type="email" placeholder="Work Email" required>
                                        <label for="workEmail">Work Email <span class="text-danger">*</span></label>
                                    </div>
                                </div>

                                <!-- Contact Number -->
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input class="form-control" id="contactNo" type="tel" placeholder="Contact Number" required>
                                        <label for="contactNo">Contact Number <span class="text-danger">*</span></label>
                                    </div>
                                </div>

                                <!-- Company Name -->
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input class="form-control" id="companyName" type="text" placeholder="Company Name" required>
                                        <label for="companyName">Company Name <span class="text-danger">*</span></label>
                                    </div>
                                </div>

                                <!-- Country -->
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select" id="countrySelect" required>
                                            <option value="" disabled selected hidden>Select Country</option>
                                            <option value="US">United States</option>
                                            <option value="CA">Canada</option>
                                            <option value="GB">United Kingdom</option>
                                            <option value="AU">Australia</option>
                                            <option value="IN">India</option>
                                            <option value="Other">Other</option>
                                        </select>
                                        <label for="countrySelect">Country <span class="text-danger">*</span></label>
                                    </div>
                                </div>

                                <!-- Interested Product (Optional) -->
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select" id="interestedProduct">
                                            <option value="" disabled selected hidden>Select Product (Optional)</option>
                                            <option value="syncrowise">Syncrowise</option>
                                            <option value="trakset">Trakset</option>
                                            <option value="inventory">Inventory System</option>
                                            <option value="feedback">Feedback Management</option>
                                        </select>
                                        <label for="interestedProduct">Interested Product</label>
                                    </div>
                                </div>

                                <!-- Message -->
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" id="message" style="height: 120px" placeholder="How can we help you?" required></textarea>
                                        <label for="message">How can we help you? <span class="text-danger">*</span></label>
                                    </div>
                                </div>

                                <div class="col-12 text-center mt-4">
                                    <button class="btn btn-theme btn-lg w-100 py-3" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@push('styles')
    <style>
        .solutions-section {
            background-color: #f8fafd; /* Very light, cool blue/gray */
            overflow: hidden;
        }

        /* Subtle Dot Background for the whole section */
        .solutions-bg-pattern {
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background-image: radial-gradient(rgba(0, 27, 61, 0.04) 2px, transparent 2px);
            background-size: 25px 25px;
            z-index: 0;
        }

        /* Map Wrapper Styling */
        .map-wrapper {
            border: 1px solid rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .map-wrapper:hover {
            transform: translateY(-2px);
            box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.125) !important;
        }

        /* Decorative Dotted Backgrounds behind the Card */
        .card-wrapper {
            position: relative;
            z-index: 1;
        }

        .dotted-pattern {
            position: absolute;
            width: 140px;
            height: 140px;
            background-image: radial-gradient(var(--navy-blue, #0a192f) 15%, transparent 15%);
            background-size: 12px 12px;
            opacity: 0.15;
            z-index: 0;
            pointer-events: none;
        }

        .dotted-top-right {
            top: -20px;
            right: -20px;
        }

        .dotted-bottom-left {
            bottom: -20px;
            left: -20px;
        }

        /* Card Zoom Interaction */
        .card-wrapper .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card-wrapper .card:hover {
            transform: translateY(-2px);
            box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.125) !important;
        }

        /* Form Floating Labels Override for validation state styling */
        .form-floating>.form-control:focus,
        .form-floating>.form-select:focus {
            border-color: var(--navy-blue, #0a192f);
            box-shadow: 0 0 0 0.25rem rgba(10, 25, 47, 0.15);
        }

        /* Adjustments for the text-danger asterisk alignment inside floating label */
        .form-floating>label {
            display: flex;
            align-items: center;
            gap: 4px;
        }

        /* Custom In-field Validation States using native Bootstrap class matching */
        .was-validated .form-control:invalid,
        .was-validated .form-select:invalid {
            border-color: #dc3545;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23dc3545'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right calc(0.375em + 0.1875rem) center;
            background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
        }

        /* Style for Button */
        .btn-theme {
            background-color: var(--navy-blue, #0a192f);
            color: #ffffff;
            border: none;
            font-weight: 600;
            transition: background-color 0.2s ease, opacity 0.2s ease;
        }

        .btn-theme:hover {
            background-color: #112240;
            color: #ffffff;
        }
    </style>
@endpush
