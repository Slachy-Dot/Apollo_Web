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
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Apollo') }}</title>

        <!-- Stylesheet -->
        @vite('resources/js/app.js')

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>



    </head>
    <!--Web background-->
    <body style="background-image: url({{ asset('images/background.jpg') }})" class="flex flex-col min-h-screen bg-cover lg:"></body>
</html>
