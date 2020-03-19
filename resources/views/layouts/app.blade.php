    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Forever Living HDF</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
@include('components.nav')
<div class="min-h-screen bg-gray-200">
    <div class="flex flex-wrap w-auto pt-40 px-10">
        @yield('content')
    </div>
</div>
</body>
</html>
