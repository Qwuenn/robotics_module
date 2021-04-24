<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $page->description }}">
    <link rel="canonical" href="{{ $page->getUrl() }}">
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    <link rel="icon" href="/favicon.svg">
    <title>{{ $page->title }}</title>
</head>
<body class="text-gray-900 font-sans antialiased">
    @include('_partials.header')
    @yield('body')
    <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
</body>
</html>