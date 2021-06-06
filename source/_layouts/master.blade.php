<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $page->description }}">
    <meta name="developer" content="{{ $page->developer }}">

    <meta property="og:title" content="{{ $page->title }}"/>
    <meta property="og:description" content="{{ $page->description }}"/>
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:image" content="{{ $page->link('assets/build/img/robot.png') }}"/>
    <meta property="og:type" content="website"/>

    <meta name="twitter:title" content="{{ $page->title }}">
    <meta name="twitter:description" content="{{ $page->description }}">
    <meta name="twitter:image" content="{{ $page->link('assets/build/img/robot.png') }}">
    <meta name="twitter:image:alt" content="{{ $page->title }}">
    <meta name="twitter:card" content="summary_large_image">

    <link rel="canonical" href="{{ $page->getUrl() }}">
    <link rel="icon" href="{{ $page->link('favicon.svg') }}">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="{{ $page->link(mix('css/main.css', 'assets/build')) }}">

    <title>{{ $page->title }}</title>

    @stack('styles')
</head>
<body class="antialiased">
    <div class="d-flex flex-column min-vh-100 bg-light">
        @include('_partials.header')
        @yield('body')
        @include('_partials.footer')
    </div>
    <script defer src="{{ $page->link(mix('js/main.js', 'assets/build')) }}"></script>
    @stack('scripts')
</body>
</html>
