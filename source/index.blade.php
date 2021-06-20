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
                    <p class="fs-5">{{ $page->description }}</p>
                    <div class="d-grid gap-2 d-sm-block">
                        <a class="btn btn-lg btn-default-yellow fw-medium shadow-sm" 
                            href="#categories" 
                            role="button">
                            Get Started
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Categories --}}
    <div class="container-lg py-5" id="categories">
        <h2 class="pb-2 border-bottom mb-2">Categories</h2>
        <div class="row pt-3 pb-5 gy-5">
            <div class="col-md-4 d-flex align-items-stretch">
                <div class="card shadow">
                    <div class="card-img-top bg-default-blue">
                        <img src="{{ $page->link('assets/build/img/robotics-for-kids.png') }}" 
                            class="mx-auto d-block"
                            style="height: 192px; width: 192px" />
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center fw-semibold">Robotics for Kids!</h5>
                        <p class="card-text text-center">
                            Learn how to build your own robots easily by building your own Robot Car and your own Robot Arm.
                        </p>
                        <a href="{{ $page->link('categories/kids/introduction') }}" class="btn btn-default-blue fw-medium text-white">Get Started</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex align-items-stretch">
                <div class="card shadow">
                    <div class="card-img-top bg-default-blue">
                        <img src="{{ $page->link('assets/build/img/robotics-for-teens.png') }}" 
                            class="mx-auto d-block"
                            style="height: 192px; width: 192px" />
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center fw-semibold">Robotics for Teens!</h5>
                        <p class="card-text text-center">
                            Learn how to build and code your own personalized Sumo Bot and your own Camera Drone with Arduino.
                        </p>
                        <a href="{{ $page->link('categories/teens/introduction') }}" class="btn btn-default-blue fw-medium text-white">Get Started</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex align-items-stretch">
                <div class="card shadow">
                    <div class="card-img-top bg-default-blue">
                        <img src="{{ $page->link('assets/build/img/robotics-for-adults.png') }}" 
                            class="mx-auto d-block"
                            style="height: 192px; width: 192px" />
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center fw-semibold">Robotics for Adults</h5>
                        <p class="card-text text-center">
                            Learn advanced robotics and automation. Build your own Fire Fighter Robot and Gimbal Stabilizers.
                        </p>
                        <a href="{{ $page->link('categories/adults/introduction') }}" class="btn btn-default-blue fw-medium text-white">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection