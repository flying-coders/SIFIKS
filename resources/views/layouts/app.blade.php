<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        SIFIKS
    </title>
    <link rel="icon" href="{{ asset("favicon.ico") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">


</head>
<body>
    <div class="loading-box" id="loading">
        <img class="loading-img" src="{{ asset('storage/images/loading.gif') }}">
    </div>

    <div id="bodyContent" style="display: none">
        @yield('content')
        <footer class="foot">
            <p class="text-center">Copyright © 2019 <a href="https://flying-coders.github.io/" target="_blank">Flying Coders</a></p>
        </footer>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>

    <script type="text/javascript">
        $(window).on('load', function() {
            $('#loading').fadeOut( function() {
                $('#bodyContent').fadeIn();
            });
        })
    </script>

</body>
</html>
