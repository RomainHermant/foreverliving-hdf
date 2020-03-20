<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="https://kit.fontawesome.com/458ecbc1c5.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.15.0/lodash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.15.3/axios.js"></script>
</head>
<body class="bg-gray-100">
<div class="flex flex-col lg:flex-none">
    <div class="lg:w-2/12 bg-gray-700 lg:fixed lg:h-full">

        <!-- Logo -->
        <div class="bg-gray-800 flex items-center justify-center" style="height: 65px;">
            <img src="{{ asset('storage/images/logo-hdf.png') }}" class="h-12">
        </div>

        @include('auth.admin.partials.menu')

    </div>
    <div class="lg:ml-64 flex-1 bg-gray-100">

        <!-- Menu -->
        <div class="px-4 mb-4 bg-white flex items-center justify-end" style="height: 65px;">
            <a href="{{ route('index') }}">Revenir au site</a>
        </div>

        <!-- Content -->
        <div class="px-8 mb-4">
            <h1 class="text-2xl text-gray-800">Dashboard</h1>
            @yield('content')
        </div>
    </div>
</div>
@yield('script')
</body>
</html>
