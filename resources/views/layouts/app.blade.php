<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'SewaFilm')</title>

    <!-- Bootstrap CDN (cepat untuk prototyping) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    @stack('head')

    <script>
        window.history.scrollRestoration = 'manual';
        window.scrollTo(0, 0);
    </script>
</head>

<body>
    @include('components.navbar')

    <div class="container-fluid px-5">
        @yield('content')
    </div>

    @include('components.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>

</html>