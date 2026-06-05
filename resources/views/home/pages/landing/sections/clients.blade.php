<!-- CLIENTS / TRUSTED BY SECTION -->
<section id="clients" class="clients-section py-5 border-top border-bottom">
    <br>
    <br>
    <div class="container text-center reveal mb-4">
        <h6 class="text-muted fw-bold tracking-wide">POWERING INNOVATIVE ENTERPRISES</h6>
    </div>

    <!-- Infinite Marquee Wrapper -->
    <div class="marquee-wrapper">
        <!-- We duplicate the logo track inside to create the seamless infinite loop -->
        <div class="marquee-track">

            <!-- Logo Set 1 -->
            <div class="marquee-content">
                <img class="client-logo" src="{{asset('assets/media/brands/br.png')}}" alt="Baskin Robin">
                <img class="client-logo" src="{{asset('assets/media/brands/servis.png')}}" alt="Servis">
                <img class="client-logo" src="{{asset('assets/media/brands/stylo.png')}}" alt="Stylo">
                <img class="client-logo" src="{{asset('assets/media/brands/luxus.png')}}" alt="Luxus">
                <img class="client-logo" src="{{asset('assets/media/brands/jdot.png')}}" alt="J.">
                <img class="client-logo" src="{{asset('assets/media/brands/brim2.webp')}}" alt="BRIM">
                <img class="client-logo" src="{{asset('assets/media/brands/third_culture.png')}}" alt="Third Culture">
            </div>

            <!-- Logo Set 2 (Exact Duplicate for Seamless Looping) -->
            <div class="marquee-content">
                <img class="client-logo" src="{{asset('assets/media/brands/br.png')}}" alt="Baskin Robin">
                <img class="client-logo" src="{{asset('assets/media/brands/servis.png')}}" alt="Servis">
                <img class="client-logo" src="{{asset('assets/media/brands/stylo.png')}}" alt="Stylo">
                <img class="client-logo" src="{{asset('assets/media/brands/luxus.png')}}" alt="Luxus">
                <img class="client-logo" src="{{asset('assets/media/brands/jdot.png')}}" alt="J.">
                <img class="client-logo" src="{{asset('assets/media/brands/brim2.webp')}}" alt="BRIM">
                <img class="client-logo" src="{{asset('assets/media/brands/third_culture.png')}}" alt="Third Culture">
            </div>

        </div>
    </div>
</section>

@push('styles')
    <style>
        /* =========================================
           CLIENTS INFINITE MARQUEE
        ========================================= */
        .clients-section {
            background-color: #fafbfc; /* Match the subtle off-white from the About section */
            overflow: hidden;
        }

        .tracking-wide {
            letter-spacing: 2px;
        }

        /* The main wrapper that hides the overflow and adds edge fades */
        .marquee-wrapper {
            position: relative;
            width: 100%;
            max-width: 100vw;
            overflow: hidden;
            display: flex;
            align-items: center;
            padding: 20px 0;
            /* Creates a transparent-to-solid-to-transparent mask to fade edges */
            mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent);
            -webkit-mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent);
        }

        /* The track that moves */
        .marquee-track {
            display: flex;
            width: fit-content;
            /* 30s is the speed. Adjust for faster/slower */
            animation: scrollMarquee 30s linear infinite;
        }

        /* Pause animation when user hovers over the logos */
        .marquee-wrapper:hover .marquee-track {
            animation-play-state: paused;
        }

        /* The content blocks that hold the logos */
        .marquee-content {
            display: flex;
            align-items: center;
            justify-content: space-around;
            min-width: 100%;
            flex-shrink: 0;
            padding-right: 50px; /* Space between the end of Set 1 and start of Set 2 */
        }

        /* Logo styling */
        .client-logo {
            /* filter: grayscale(100%) opacity(0.4); */
            transition: all 0.4s ease;
            max-height: 45px;
            margin: 0 40px; /* Spacing between logos */
            cursor: pointer;
        }

        .client-logo:hover {
            filter: grayscale(0%) opacity(1);
            transform: scale(1.1);
        }

        /* The CSS Animation driving the scroll */
        @keyframes scrollMarquee {
            0% {
                transform: translateX(0);
            }
            100% {
                /* Shifts the track exactly half its width (the width of one logo set) to loop perfectly */
                transform: translateX(-50%);
            }
        }

        /* Mobile Adjustments */
        @media (max-width: 768px) {
            .client-logo {
                max-height: 35px;
                margin: 0 25px;
            }
            .marquee-wrapper {
                mask-image: linear-gradient(to right, transparent, black 5%, black 95%, transparent);
                -webkit-mask-image: linear-gradient(to right, transparent, black 5%, black 95%, transparent);
            }
        }
    </style>
@endpush
