@extends('_layouts.master')

@push('styles')
    <link rel="stylesheet" href="{{ mix('css/index.css', 'assets/build') }}">
@endpush

@section('body')
    {{-- Hero Header --}}
    <div class="container-fluid hero-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-lg-2 my-4 mx-0 text-center">
                    {!! $page->svg('robot-hero-vector', ['class' => 'hero-vector']) !!}
                </div>
                <div class="col-lg-6 order-lg-1 my-auto hero-message">
                    <h1 class="fw-bold">{{ $page->title }}</h1>
                    <p class="fs-4">
                        Learn how to build your own robots easily.<br>
                        No computer programming required!
                    </p>
                    <div class="d-grid gap-2 d-sm-block">
<<<<<<< HEAD
                        <a class="btn btn-lg btn-primary fw-bold shadow-sm" href="/categories" role="button">
=======
                        <a class="btn btn-lg btn-primary fw-bold shadow" href="/categories" role="button">
>>>>>>> f23e7f2112ec792b0ea94e19e89b6f20dcde82d9
                            Get Started
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Categories --}}
    <div class="container py-5">
        <h2 class="pb-2 border-bottom mb-2">Categories</h2>
        <div class="row py-5 gy-5">
            <div class="col-md-4 d-flex align-items-stretch">
                <div class="card">
                    {!! $page->svg('erovoutika-icon(white)', [
                        'class' => 'card-img-top bg-primary bg-gradient p-3',
                        'css' => [
                            'height' => '192px'
                        ]
                    ]) !!}
                    <div class="card-body">
                        <h5 class="card-title">Robotics for Kids!</h5>
                        <p class="card-text">
                            Learn how to build your own robots easily with no computer programming required!
                        </p>
                        <a href="/robotics/kids/introduction" class="btn btn-primary">Get Started</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex align-items-stretch">
                <div class="card">
                    {!! $page->svg('erovoutika-icon(white)', [
                        'class' => 'card-img-top bg-primary bg-gradient p-3',
                        'css' => [
                            'height' => '192px'
                        ]
                    ]) !!}
                    <div class="card-body">
                        <h5 class="card-title">Robotics for Teens!</h5>
                        <p class="card-text">
                            Some quick example text to build on the card title and make up the bulk of the card's content.
                        </p>
                        <a href="#" class="btn btn-primary">Get Started</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex align-items-stretch">
                <div class="card">
                    {!! $page->svg('erovoutika-icon(white)', [
                        'class' => 'card-img-top bg-primary bg-gradient p-3',
                        'css' => [
                            'height' => '192px'
                        ]
                    ]) !!}
                    <div class="card-body">
                        <h5 class="card-title">Robotics for Adults</h5>
                        <p class="card-text">
                            Some quick example text to build on the card title and make up the bulk of the card's content.
                        </p>
                        <a href="#" class="btn btn-primary">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection