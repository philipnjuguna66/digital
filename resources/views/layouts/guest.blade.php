<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @stack('metas')
    <title>@yield('title','Laravel')</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>


    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8438942375783163"
            crossorigin="anonymous"></script>

    @livewireStyles
</head>
<body class="bg-white">
<div class="font-sans text-gray-900 antialiased">
    <div class="relative " x-data="{mobile:false}">

        @include('layouts.nav-menu')
        <main>






            {{$slot}}



        </main>

    </div>


</div>
<script>
    (adsbygoogle = window.adsbygoogle || []).push({});
</script>

@livewireScripts
</body>
</html>
