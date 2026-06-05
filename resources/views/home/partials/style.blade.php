<style>
    /* =========================================
        CSS VARIABLES & DESIGN SYSTEM
        ========================================= */
    :root {
        --navy-blue: #001b3d;
        --green: #13ce85;
        --red-range: #de7c6f;
        --white: #ffffff;
        --light-bg: #f8f9fa;
        --text-dark: #212529;
        --text-muted: #6c757d;
    }

    body {
        font-family: 'Inter', sans-serif;
        color: var(--text-dark);
        overflow-x: hidden;
        background-color: var(--white);
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    .brand-font {
        font-family: 'Space Grotesk', sans-serif;
        font-weight: 700;
    }

    /* =========================================
           ANIMATIONS (jQuery handles adding .active)
            ========================================= */
    .reveal {
        opacity: 0;
        transform: translateY(40px);
        transition: all 0.8s cubic-bezier(0.165, 0.84, 0.44, 1);
    }

    .reveal.active {
        opacity: 1;
        transform: translateY(0);
    }

    section {
        padding: 100px 0;
    }

    /* =========================================
           CONTACT FORM
            ========================================= */
    .form-control {
        padding: 15px;
        border-radius: 10px;
        border: 1px solid #ddd;
    }

    .form-control:focus {
        border-color: var(--green);
        box-shadow: 0 0 0 0.25rem rgba(19, 206, 133, 0.25);
    }
</style>
