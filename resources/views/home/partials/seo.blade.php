@php
    $company_details = [
        'title'             => 'Startex IT | Custom Software Development & Enterprise Solutions',
        'description'       => 'Startex IT engineers custom software systems, responsive web applications, and asset tracking platforms to automate business workflows in Pakistan and globally.',
        'keywords'          => 'custom software development Lahore, software house Lahore, IT services Pakistan, asset management software, customer feedback platform, AI inventory management, Startex IT',
        'author'            => 'Startex IT',
        'alternate_name'    => 'Startex',
        'phone'             => '+92-42-35782381',
        'email'             => 'info@startexmarketing.com',

        // Physical Location Details
        'street_address'    => 'Office # 511-513, 5th Floor, Eden Towers, Main Boulevard, Gulberg III',
        'locality'          => 'Lahore',
        'region'            => 'Punjab',
        'postal_code'       => '54660',
        'country_code'      => 'PK',

        // Exact Map Coordinates
        'latitude'          => 31.518594,
        'longitude'         => 74.344857,

        // Media Asset Fallbacks (Relative to public/ directory)
        'logo_path'         => 'images/logo.png',
        'og_image_path'     => 'images/startex-og-image.jpg',

        // Social Media Footprints
        'facebook_url'      => 'https://www.facebook.com/profile.php?id=100021280965800',
        'linkedin_url'      => 'https://www.linkedin.com/company/startex-marketing-services/',

        // Standard Target Service Areas
        'service_countries' => ['PK', 'US', 'CA', 'GB', 'IN', 'UAE', 'SA', 'CH', 'HK']
    ];
    $service_schema = [
        "@context" => "https://schema.org",
        "@type" => "ProfessionalService",
        "name" => $company_details['author'],
        "alternateName" => $company_details['alternate_name'],
        "url" => url('/'),
        "logo" => asset($company_details['logo_path']),
        "image" => asset($company_details['og_image_path']),
        "description" => $company_details['description'],
        "telephone" => $company_details['phone'],
        "email" => $company_details['email'],
        "address" => [
            "@type" => "PostalAddress",
            "streetAddress" => $company_details['street_address'],
            "addressLocality" => $company_details['locality'],
            "addressRegion" => $company_details['region'],
            "postalCode" => $company_details['postal_code'],
            "addressCountry" => $company_details['country_code']
        ],
        "geo" => [
            "@type" => "GeoCoordinates",
            "latitude" => $company_details['latitude'],
            "longitude" => $company_details['longitude']
        ],
        "openingHoursSpecification" => [
            "@type" => "OpeningHoursSpecification",
            "dayOfWeek" => ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
            "opens" => "09:00",
            "closes" => "18:00"
        ],
        "sameAs" => [
            $company_details['facebook_url'],
            $company_details['linkedin_url']
        ],
        "contactPoint" => [
            "@type" => "ContactPoint",
            "telephone" => $company_details['phone'],
            "contactType" => "customer service",
            "email" => $company_details['email'],
            "areaServed" => $company_details['service_countries'],
            "availableLanguage" => "English"
        ]
    ];

    // Build WebSite Search Schema safely in PHP
    $website_schema = [
        "@context" => "https://schema.org",
        "@type" => "WebSite",
        "name" => $company_details['author'],
        "url" => url('/'),
        "potentialAction" => [
            "@type" => "SearchAction",
            "target" => url('/') . "/search?q={search_term_string}",
            "query-input" => "required name=search_term_string"
        ]
    ];
@endphp

<!-- Primary Meta Tags -->
{{-- <title>@yield('title', $company_details['title'])</title> --}}
<meta name="title" content="@yield('title', $company_details['title'])">
<meta name="description" content="@yield('meta_description', $company_details['description'])">
<meta name="keywords" content="{{ $company_details['keywords'] }}">
<meta name="robots" content="index, follow">
<meta name="language" content="English">
<meta name="author" content="{{ $company_details['author'] }}">

<!-- Canonical URL -->
<link rel="canonical" href="{{ url()->current() }}">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:title" content="@yield('meta_title', $company_details['title'])">
<meta property="og:description" content="@yield('meta_description', $company_details['description'])">
<meta property="og:image" content="@yield('meta_image', asset($company_details['og_image_path']))">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="{{ url()->current() }}">
<meta property="twitter:title" content="@yield('meta_title', $company_details['title'])">
<meta property="twitter:description" content="@yield('meta_description', $company_details['description'])">
<meta property="twitter:image" content="@yield('meta_image', asset($company_details['og_image_path']))">

<!-- Schema.org JSON-LD Structured Data: LocalBusiness & ProfessionalService -->
<script type="application/ld+json">
{!! json_encode($service_schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
</script>

<!-- Schema.org JSON-LD: WebSite Schema (Enhances Google Sitelinks Search Box) -->
<script type="application/ld+json">
{!! json_encode($website_schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
</script>
