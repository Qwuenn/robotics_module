@extends('_layouts.master')

@push('styles')
    <link rel="stylesheet" href="{{ $page->link(mix('css/module.css', 'assets/build')) }}">
@endpush

@section('body')
    <header class="subnavbar navbar navbar-expand-lg navbar-light bg-white position-relative p-lg-0 p-2 justify-content-end shadow-sm">
        <button class="navbar-toggler border-none collapsed" 
            type="button" 
            data-bs-toggle="collapse" 
            data-bs-target="#sidebar"
            aria-controls="sidebar" 
            aria-expanded="false" 
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </header>
    <div class="container-xxl layout px-0">
        {{-- Sidebar --}}
        @if (str_contains($page->getPath(), 'categories\kids'))
            @include('_sidebar.sidebar', ['title' => 'Robotics for Kids!', 'items' => $page->navigation->kids])
        @elseif (str_contains($page->getPath(), 'categories\teens'))
            @include('_sidebar.sidebar', ['title' => 'Robotics for Teens!', 'items' => $page->navigation->teens])
        @elseif (str_contains($page->getPath(), 'categories\adults'))
            @include('_sidebar.sidebar', ['title' => 'Robotics for Adults', 'items' => $page->navigation->adults])
        @endif
        
        <main class="mx-0 p-lg-5 py-5 px-3 shadow-sm">
            <div class="intro pe-lg-5">
                @yield('introduction')
            </div>

            <div class="content pe-lg-5">
                @yield('table_of_contents')
                @yield('content')
            </div>
        </main>
    </div>
@endSection

@push('scripts')
    <script defer src="{{ $page->link(mix('js/module.js', 'assets/build')) }}"></script>
@endpush