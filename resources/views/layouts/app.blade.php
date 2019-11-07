<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{ asset('assets/img/apple-touch-icon.png') }}">
    <link rel="icon" href="{{ asset('theme/assets/img/favicon.png') }}">



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Styles -->
    <link href="{{ asset('theme/assets/css/core.min.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/assets/css/thesaas.min.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/assets/css/style.css') }}" rel="stylesheet">


    <!--  Open Graph Tags -->
    <meta property="og:title" content="TheSaaS">
    <meta property="og:description" content="A responsive, professional, and multipurpose SaaS, Software, Startup and WebApp landing template powered by Bootstrap 4.">
    <meta property="og:image" content="http://thetheme.io/thesaas/assets/img/og-img.jpg">
    <meta property="og:url" content="http://thetheme.io/thesaas/">
    <meta name="twitter:card" content="summary_large_image">
</head>
<body>


    <!-- Topbar -->
    <nav class="topbar topbar-inverse topbar-expand-md topbar-sticky">
      <div class="container">

        <div class="topbar-left">
          <button class="topbar-toggler">&#9776;</button>
          <a class="topbar-brand" href="{{url('/')}}">
            <img class="logo-default" src="{{ asset('theme/assets/img/logo.png') }}" alt="logo">
            <img class="logo-inverse" src="{{ asset('theme/assets/img/logo-light.png') }}" alt="logo">
          </a>
        </div>


        <div class="topbar-right">
          <ul class="topbar-nav nav">
            @if(Auth::check())
            <li class="nav-item"><a class="nav-link active" href="{{url('/')}}">Home</a></li>
            <li class="nav-item"><a class="nav-link active" href="{{route('series.index')}}">Add Series</a></li>
            <li class="nav-item"><a class="nav-link active" href="{{route('logout')}}">Logout</a></li>


            @else
            <li class="nav-item"><a class="nav-link active" href="javascript:;" data-toggle="modal" data-target="#loginModal">Login</a></li>
            <li class="nav-item"><a class="nav-link active" href="{{route('register')}}">Register</a></li>
            @endif

          </ul>
        </div>

      </div>
    </nav>
    <!-- END Topbar -->




    <!-- Header -->
    <header class="header fadeout header-inverse pb-0 h-fullscreen" style="background-image: linear-gradient(to bottom, #243949 0%, #517fa4 100%);">
      <canvas class="constellation"></canvas>

      <div class="container">
        <div class="row h-full">
          <div class="col-12 text-center align-self-center">

            @yield('banner-content')
          </div>

          <div class="col-12 align-self-end text-center pb-70">
            <a class="scroll-down-2 scroll-down-inverse" href="#" data-scrollto="section-demo"><span></span></a>
          </div>
        </div>
      </div>
    </header>
    <!-- END Header -->




    @yield('content')




@if(!Auth::check())
<div id="app">
    <vue-login></vue-login>
</div>
@endif




    <!-- Footer -->

    <!-- END Footer -->

        <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <script src="{{ asset('theme/assets/js/core.min.js') }}"></script>
    <script src="{{ asset('theme/assets/js/thesaas.min.js') }}"></script>
    <script src="{{ asset('theme/assets/js/script.js') }}"></script>


</body>
</html>
