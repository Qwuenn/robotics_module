<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $page->description }}">
    <link rel="canonical" href="{{ $page->getUrl() }}">
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    <link rel="icon" href="/favicon.svg">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,300i,400,400i,700,700i,800,800i" rel="stylesheet">
    <title>{{ $page->title }}</title>
</head>
<body class="antialiased">
    <div class="d-flex flex-column min-vh-100 bg-light">
        @include('_partials.header')
        <main>
            @yield('body')
        </main>
        @include('_partials.footer')
    </div>
    <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
</body>
</html>
