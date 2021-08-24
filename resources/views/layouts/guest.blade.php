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

<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8438942375783163"
        crossorigin="anonymous"></script>

<script>
    (adsbygoogle = window.adsbygoogle || []).push({});
</script>
<!-- Cookie Consent by https://www.FreePrivacyPolicy.com -->
<script type="text/javascript" src="//www.freeprivacypolicy.com/public/cookie-consent/4.0.0/cookie-consent.js" charset="UTF-8"></script>
<script type="text/javascript" charset="UTF-8">
    document.addEventListener('DOMContentLoaded', function () {
        cookieconsent.run({"notice_banner_type":"simple","consent_type":"express","palette":"dark","language":"en","page_load_consent_levels":["strictly-necessary"],"notice_banner_reject_button_hide":false,"preferences_center_close_button_hide":false,"website_name":"Digital Marketing Kenya"});
    });
</script>

<noscript>Cookie Consent by <a href="https://www.FreePrivacyPolicy.com/free-cookie-consent/" rel="nofollow noopener">FreePrivacyPolicy.com</a></noscript>
<!-- End Cookie Consent -->

@livewireScripts
</body>
</html>
