@extends('_layouts.master')

@push('styles')
    <link rel="stylesheet" href="{{ mix('css/module.css', 'assets/build') }}">
@endpush

@section('body')
    <header class="navbar navbar-expand-lg navbar-light bg-white position-relative p-lg-0 p-2 justify-content-end">
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
    <section class="container-xxl container-fluid">
        <div class="row">
            {{-- Sidebar --}}
            <div class="col-lg-2 ps-lg-3 pt-lg-5">
                @include('_partials.sidebar')
            </div>
            <div class="col-lg-10 p-lg-5 bg-white shadow-sm">
                <div class="row">
                    {{-- Main Content --}}
                    <div class="col-lg-9 order-lg-1 order-2">
                        @yield('introduction')
                        @yield('content')
                    </div>
                    {{-- Table of Contents --}}
                    <div class="col-lg-3 order-lg-3 order-1  table-of-contents">
                        <div class="d-flex align-items-center pb-1 mb-1 mt-lg-0 mt-5 border-bottom disabled">
                            <span class="fw-semibold">On this page</span>
                        </div>
                        <nav id="table-of-contents">
                            <ul>
                                @yield('table_of_contents')
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endSection