<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'MyMovies')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- CDN -->
    @yield('cdns')
</head>

<body>
    <!-- HEADER -->
    @include('includes.header')
    <main>
        @yield('content')
    </main>

    <!-- SCRIPTS -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
