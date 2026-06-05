<nav class="navbar navbar-expand-lg fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand text-white fs-3" href="#home">
            <i class="fa-solid fa-layer-group text-accent"></i> Startex <span class="fw-light">IT</span>
        </a>
        <button class="navbar-toggler border-0" data-bs-toggle="collapse" data-bs-target="#navbarContent" type="button">
            <i class="fa-solid fa-bars text-white fs-2"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="{{url("/")}}#home">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{url("/")}}#about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="{{url("/")}}#solutions">Solutions</a></li>
                <li class="nav-item"><a class="nav-link" href="{{url("/")}}#services">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="{{url("/")}}#clients">Clients</a></li>
            </ul>
            <a class="btn btn-theme" href="#contact">Contact Us</a>
        </div>
    </div>
</nav>

{{-- <style>
    /* =========================================
        NAVBAR
        ========================================= */
    .navbar {
        transition: all 0.4s ease;
        padding: 20px 0;
        background-color: transparent;
    }

    .navbar.scrolled {
        background-color: var(--navy-blue);
        padding: 10px 0;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    .nav-link {
        color: var(--white) !important;
        font-weight: 500;
        margin: 0 10px;
        position: relative;
    }

    .nav-link::after {
        content: '';
        position: absolute;
        width: 0;
        height: 2px;
        bottom: 0;
        left: 0;
        background-color: var(--green);
        transition: width 0.3s;
    }

    .nav-link:hover::after {
        width: 100%;
    }

    .btn-theme {
        background-color: var(--green);
        color: var(--navy-blue) !important;
        border-radius: 50px;
        font-weight: 700;
        padding: 10px 25px;
        transition: all 0.3s;
        border: none;
    }

    .btn-theme:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(19, 206, 133, 0.3);
        background-color: #10b876;
    }
</style> --}}
<style>
    /* =========================================
        NAVBAR
       ========================================= */
    .navbar {
        transition: all 0.4s ease;
        padding: 20px 0;
        background-color: transparent;
    }

    .navbar.scrolled {
        background-color: var(--navy-blue);
        padding: 10px 0;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    .nav-link {
        color: var(--white) !important;
        font-weight: 500;
        margin: 0 10px;
        position: relative;
    }

    .nav-link::after {
        content: '';
        position: absolute;
        width: 0;
        height: 2px;
        bottom: 0;
        left: 0;
        background-color: var(--green);
        transition: width 0.3s;
    }

    .nav-link:hover::after {
        width: 100%;
    }

    .btn-theme {
        background-color: var(--green);
        color: var(--navy-blue) !important;
        border-radius: 50px;
        font-weight: 700;
        padding: 10px 25px;
        transition: all 0.3s;
        border: none;
    }

    .btn-theme:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(19, 206, 133, 0.3);
        background-color: #10b876;
    }

    /* =========================================
        MOBILE VIEW SPECIFIC STYLES
       ========================================= */
    @media (max-width: 991px) {
        .navbar-collapse {
            /* Gives the expanded menu a solid background on mobile */
            background-color: var(--navy-blue, #0a192f);
            padding: 20px;
            border-radius: 16px;
            margin-top: 15px;
            border: 1px solid rgba(255, 255, 255, 0.08);
            box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.4);
        }

        .nav-link {
            margin: 8px 0;
            display: inline-block; /* Aligns hover underline to text length on mobile */
        }

        .navbar-nav {
            margin-bottom: 15px !important; /* Spacing between links and button on mobile */
        }
    }
</style>
