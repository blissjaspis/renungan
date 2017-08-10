<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Blog Bliss Jaspis">
    <meta name="author" content="Bliss Jaspis">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('css/custom.css') }}" rel="stylesheet"> --}}
</head>
<body>
    <div id="app">
        @include('layouts._partials._navbar')

        @yield('content')

        @include('layouts._partials._footer')
        
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    @stack('scripts')
</body>
</html>
