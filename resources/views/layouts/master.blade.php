<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Spark Tuscaloosa</title>


        <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon"/>
        <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon"/>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Khula:300,400|Open+Sans:300,400" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.css">

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        @include('partials.analytics')
    </head>
    <body>
        @include('partials.header')
        <main id="content">
            @yield('content')
        </main>
        @include('partials.footer')
    </body>
    <script src="{{ asset('js/app.js') }}"></script>
</html>
