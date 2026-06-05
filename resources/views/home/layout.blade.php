<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        {{-- <title>Startex IT | Enterprise Software Solutions</title> --}}
        <title>@yield('title', 'Startex IT | Custom Software Development & Enterprise Solutions')</title>

        @include('home.partials.seo')
        <!-- Bootstrap 5 CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- FontAwesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Space+Grotesk:wght@500;700;900&display=swap" rel="stylesheet">

        @include("home.partials.style")

        @stack('styles')

    </head>

    <body data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="100">

        <!-- NAVBAR -->
        @include('home.partials.navbar')

        @yield('content')

        <!-- FOOTER -->
        @include('home.partials.footer')

        <!-- jQuery & Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Custom Script for Animations & Nav -->
        <script>
            $(document).ready(function() {
                // 1. Scroll Reveal Animation Logic (using jQuery)
                function revealElements() {
                    var windowHeight = $(window).height();
                    var scrollTop = $(window).scrollTop();

                    $('.reveal').each(function() {
                        var elementTop = $(this).offset().top;
                        // If element is in viewport
                        if (elementTop < (scrollTop + windowHeight - 50)) {
                            $(this).addClass('active');
                        }
                    });
                }

                // Trigger on load and scroll
                revealElements();
                $(window).scroll(function() {
                    revealElements();

                    // 2. Navbar color change on scroll
                    if ($(this).scrollTop() > 50) {
                        $('.navbar').addClass('scrolled');
                    } else {
                        $('.navbar').removeClass('scrolled');
                    }
                });

                // 3. Smooth Scrolling for Nav Links // cause error on link click to home
                // $('a.nav-link, .navbar-brand, .btn-outline-light, .btn-theme[href^="#"]').on('click', function(event) {
                //     if (this.hash !== "") {
                //         event.preventDefault();
                //         var hash = this.hash;
                //         var offset = $(hash).offset().top - 80; // offset for sticky nav

                //         $('html, body').animate({
                //             scrollTop: offset
                //         }, 800);

                //         // Close mobile menu on click
                //         if ($('.navbar-collapse').hasClass('show')) {
                //             $('.navbar-toggler').click();
                //         }
                //     }
                // });

                // Initialize Navbar background if loaded not at top
                if ($(window).scrollTop() > 50) {
                    $('.navbar').addClass('scrolled');
                }
            });
        </script>

        @stack('scripts')
    </body>

</html>
