@extends('_layouts.master')

@push('styles')
    <link rel="stylesheet" href="{{ $page->link(mix('css/index.css', 'assets/build')) }}">
@endpush

@section('body')
    {{-- Categories --}}
    <div class="container-lg py-5">
        <h2 class="pb-2 border-bottom">Categories</h2>
        <div class="row pt-3 pb-5 gy-5">
            <div class="col-md-4 d-flex align-items-stretch">
                <div class="card">
                    {!! $page->svg('erovoutika-icon(white)', [
                        'class' => 'card-img-top bg-primary bg-gradient p-3',
                        'css' => [
                            'height' => '192px'
                        ]
                    ]) !!}
                    <div class="card-body">
                        <h5 class="card-title text-center">Robotics for Kids!</h5>
                        <p class="card-text text-center">
                            Learn how to build your own robots easily with no computer programming required!
                        </p>
                        <a href="{{ $page->link('robotics/kids/introduction') }}" class="btn btn-primary">Get Started</a>
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
                        <h5 class="card-title text-center">Robotics for Teens!</h5>
                        <p class="card-text text-center">
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
                        <h5 class="card-title text-center">Robotics for Adults</h5>
                        <p class="card-text text-center">
                            Some quick example text to build on the card title and make up the bulk of the card's content.
                        </p>
                        <a href="#" class="btn btn-primary">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection