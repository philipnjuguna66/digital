<head>

    <!-- metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />

    <link rel="canonical" href="{{ url()->current() }}" />


    <!-- title  -->
    <title>@yield('title','')</title>

    <meta name="description" content="@yield('description','')">
    <meta name="og:site_name" content="Digital Marketing, SEO and Web Developers in Nairobi Kenya ">
    <meta name="og:locale" content="en_US">
    <meta name="og:type" content="website">

@yield('metas')


    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('img/logos/favicon.png') }}"/>
    <link rel="apple-touch-icon" href="{{ asset('img/logos/apple-touch-icon-57x57.png') }}"/>
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/logos/apple-touch-icon-72x72.png') }}"/>
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img/logos/apple-touch-icon-114x114.png') }}"/>

    <!-- plugins -->
    <link rel="stylesheet" href="{{ asset('css/plugins.css') }}">

    <!-- search css -->
    <link rel="stylesheet" href="{{ asset('search/search.css') }}">

    <!-- quform css -->
    <link rel="stylesheet" href="{{ asset('quform/css/base.css') }}">

    <!-- theme core css -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

    <!-- custom css -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

    @livewireStyles


    @stack('styles')
</head>
