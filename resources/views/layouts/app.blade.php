<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'CABINET MURHWA & CHERUBALA CONSEIL - Avocats d\'Affaires')</title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="xmlrpc.php">

    @include('layouts.partials.head_assets')

    @stack('styles')

    @livewireStyles()

</head>

<body class="home wp-singular page-template page-template-templates page-template-home-template page-template-templateshome-template-php page page-id-10 wp-custom-logo wp-theme-expert-lawyer-pro theme-expert-lawyer-pro woocommerce-no-js ht_right_sidebar columns-3">
    <div class="main-container">
        <a class="skip-link screen-reader-text" href="#content">Skip to content</a>

        @include('layouts.partials.header')

        <main id="content" class="site-main">
            @yield('content') {{-- C'est ici que le contenu de chaque vue spécifique sera injecté --}}
        </main>

        @include('layouts.partials.footer')
    </div>

    @include('layouts.partials.body_assets')

    <script src="{{ asset('expert-lawyer/custom.js') }}"></script>
    @stack('scripts')
</body>
</html>
