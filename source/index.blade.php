@extends('_layouts.master')

@push('styles')
    <link rel="stylesheet" href="{{ $page->link(mix('css/index.css', 'assets/build')) }}">
@endpush

@section('body')
    {{-- Hero Header --}}
    <div class="container-fluid hero-header">
        <div class="container-lg">
            <div class="row">
                <div class="col-lg-6 order-lg-2 my-4 mx-0 text-center">
                    {!! $page->svg('robot-hero-vector', ['class' => 'hero-vector']) !!}
                </div>
                <div class="col-lg-6 order-lg-1 my-auto hero-message">
                    <h1 class="fw-medium">{{ $page->title }}</h1>
                    <p class="fs-5">
                        Educational robotics strengthen and support student's skills developing their knowledge through the creation, design,
                        assembly, and operation of robots.
                    </p>
                    <div class="d-grid gap-2 d-sm-block">
                        <a class="btn btn-lg btn-default-yellow fw-medium shadow-sm" 
                            href="{{ $page->link('categories') }}" 
                            role="button">
                            Get Started
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Categories --}}
    <div class="container-lg py-5">
        <h2 class="pb-2 border-bottom mb-2">Categories</h2>
        <div class="row pt-3 pb-5 gy-5">
            <div class="col-md-4 d-flex align-items-stretch">
                <div class="card shadow">
                    {!! $page->svg('erovoutika-icon(white)', [
                        'class' => 'card-img-top bg-default-blue p-3',
                        'css' => [
                            'height' => '192px'
                        ]
                    ]) !!}
                    <div class="card-body">
                        <h5 class="card-title text-center fw-semibold">Robotics for Kids!</h5>
                        <p class="card-text text-center">
                            Learn how to build your own robots easily with no computer programming required!
                        </p>
                        <a href="{{ $page->link('robotics/kids/introduction') }}" class="btn btn-default-blue fw-medium text-white">Get Started</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex align-items-stretch">
                <div class="card shadow">
                    {!! $page->svg('erovoutika-icon(white)', [
                        'class' => 'card-img-top bg-default-blue p-3',
                        'css' => [
                            'height' => '192px'
                        ]
                    ]) !!}
                    <div class="card-body">
                        <h5 class="card-title text-center fw-semibold">Robotics for Teens!</h5>
                        <p class="card-text text-center">
                            Some quick example text to build on the card title and make up the bulk of the card's content.
                        </p>
                        <a href="#" class="btn btn-default-blue fw-medium text-white">Get Started</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex align-items-stretch">
                <div class="card shadow">
                    {!! $page->svg('erovoutika-icon(white)', [
                        'class' => 'card-img-top bg-default-blue p-3',
                        'css' => [
                            'height' => '192px'
                        ]
                    ]) !!}
                    <div class="card-body">
                        <h5 class="card-title text-center fw-semibold">Robotics for Adults</h5>
                        <p class="card-text text-center">
                            Some quick example text to build on the card title and make up the bulk of the card's content.
                        </p>
                        <a href="#" class="btn btn-default-blue fw-medium text-white">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection