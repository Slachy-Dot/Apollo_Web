<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="title" content="Apollo">
        <meta name="description" content="World of Apollo minecraft">
        <meta name="keywords" content="world of apollo">
        <meta name="robots" content="index, nofollow">
        <meta name="revisit-after" content="60 days">
        <meta name="author" content="Slachy_dot">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Apollo') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Stylesheet -->
        @vite('resources/js/app.js')

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>

        <script>
            fetch('https://api.mcsrvstat.us/2/Worldofapollo.com')
                .then(response => response.json())
                .then(data => {
                    console.log(data.players.list)
                    let pList = document.getElementById('list')
                    pList.innerText = data.players.list
                    //display some data on page
                    //using data.players.list

                });

        </script>
    </head>

    <header>

        @include('Modules.Includes.Core.Navbar ')

    </header>

    <!--Web background-->

    <body style="background-image: url(/storage/images/main/background.jpg);" class="min-h-screen bg-cover lg:">

        <div id="app">

         @yield('content')

        <div class="mt-20"></div>
        
        @include('Modules.Includes.Footer ')

        <script src="https://leonardosnt.github.io/mc-player-counter/dist/mc-player-counter.min.js"></script>
    </body>
</html>
