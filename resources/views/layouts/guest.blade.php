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

    <script async custom-element="amp-ad" src="https://cdn.ampproject.org/v0/amp-ad-0.1.js"></script>

    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
    @livewireStyles
</head>
<body class="bg-white">
<div class="font-sans text-gray-900 antialiased">
    <div class="relative " x-data="{mobile:false}">

        @include('layouts.nav-menu')
        <main>

            <!-- display ads -->
            <ins class="adsbygoogle"
                 style="display:block"
                 data-ad-client="ca-pub-8438942375783163"
                 data-ad-slot="8520733366"
                 data-ad-format="auto"
                 data-full-width-responsive="true"></ins>



            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8438942375783163"
                    crossorigin="anonymous"></script>
            <ins class="adsbygoogle"
                 style="display:block; text-align:center;"
                 data-ad-layout="in-article"
                 data-ad-format="fluid"
                 data-ad-client="ca-pub-8438942375783163"
                 data-ad-slot="9183144582"></ins>

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
