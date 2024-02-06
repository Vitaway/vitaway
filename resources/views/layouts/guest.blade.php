<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Manirabona Patience" />

    @yield('metas')

    <meta name="rating" content="adult" />
    <meta name="rating" content="RTA-5042-1996-1400-1577-RTA" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="/images/favicon_io/site.webmanifest">

    <title>@yield('title') | Vitaway</title>

    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/Global.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    {{-- prevent duplicate content issues by specifying the preferred URL  --}}
    <link rel="canonical" href="{{ canonical_url() }}">

    @yield('styles')

    @yield('header-scripts')
</head>
<body>
    <main id="app">
        <!-- preloader
        ================================================== -->
        <div id="preloader">
            <div id="loader" class="dots-fade">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>

        @yield('content')
    </main>

    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

    <!-- Vue JS -->
    <script src="/js/global.js"></script>
    <script src="{{ mix('js/app.js') }}" defer></script>

    {{-- fontawesome --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js" integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-element-bundle.min.js"></script> --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        new WOW().init();
    </script>

    @yield('scripts')
</body>
</html>
