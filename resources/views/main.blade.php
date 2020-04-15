<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>PLAN BIODIVERSITÉ 2020-2023 DE LA STRATÉGIE BIODIVERSITÉ GENÈVE 2030</title>

    <meta name="description" content="La biodiversité c’est notre assurance vie face aux changements climatiques.
    Il faut en faire une priorité pour réussir
    la transition écologique." >



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link rel="icon" href="/img/plan_biodiversite_logo.png">
</head>
<body>
    <div id="app">
        {{-- <router-view></router-view> --}}
        {{-- <app></app> --}}
    </div>
</body>
<script src="{{ mix('js/app.js') }}"></script>
</html>
