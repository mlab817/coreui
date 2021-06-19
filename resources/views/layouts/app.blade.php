<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="{{ config('app.name', 'Laravel') }}">
    <meta name="author" content="Mark Lester A. Bolotaolo">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/@coreui/icons@2.0.0-beta.3/css/all.min.css">

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="c-app">

    @include('includes.sidebar')

    <div class="c-wrapper c-fixed-components">

        @include('includes.header')

        <div class="c-body">
            <main class="c-main">
                @yield('content')
            </main>

            @include('includes.footer')
        </div>

    </div>

    <!-- Scripts -->
    <script src="https://unpkg.com/@coreui/coreui/dist/js/coreui.bundle.min.js"></script>

    @stack('scripts')
</body>
</html>
