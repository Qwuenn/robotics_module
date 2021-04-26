@extends('_layouts.master')

@section('body')
    <div class="container p-5">
        <div class="row">
            <div class="col-md-6 order-md-2 my-4 text-center">
                {!! $page->svg('robot.svg', ['css' => ['height' => '400px']]) !!}
            </div>
            <div class="col-md-6 order-md-1 py-5 my-auto">
                <h1 class="fw-bold">{{ $page->title }}</h1>
                <p class="fs-4">
                    Learn how to build robots easily.<br>
                    No computer programming required!
                </p>
                <div class="d-grid gap-2 d-sm-block">
                    <a class="btn btn-lg btn-primary" href="/" role="button">Get Started</a>
                </div>
            </div>
        </div>
    </div>
@endsection