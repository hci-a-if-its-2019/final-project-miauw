<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Microsoft Azure</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

        <!-- Icons -->
        <link href="{{ URL::asset('/assets/vendor/nucleo/css/nucleo.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">

        <!-- Argon CSS -->
        <link type="text/css" href="{{ URL::asset('/assets/css/argon.min.css') }}" rel="stylesheet">

        
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        
        <!-- Styles -->
        @yield('css')
    </head>
    <body>
        @yield('body')
        
        <script src="{{ URL::asset('/assets/vendor/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ URL::asset('/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

        <!-- Argon JS -->
        <script src="{{ URL::asset('/assets/js/argon.min.js') }}"></script>

        @yield('js')
    </body>
</html>