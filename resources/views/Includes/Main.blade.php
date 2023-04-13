<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="title" content="Apollo">
        <meta name="description" content="World of Apollo minecraft">
        <meta name="keywords" content="world of apollo">
        <meta name="robots" content="index, nofollow">
        <meta name="revisit-after" content="60 days">
        <meta name="author" content="Slachy_dot">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <script>
            fetch('https://api.mcsrvstat.us/2/Worldofapollo.com')
                .then(response => response.json())
                .then(data => {
                    console.log(data.players.list)
                    let pList = document.getElementById('list')
                    pList.innerText = data.players.list
                    //display some data on page
                    //using data.players.list});
        </script>

    </head>

    <header>

    @include(' Includes.Navbar')

    </header>
