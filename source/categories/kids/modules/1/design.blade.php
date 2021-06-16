@extends('_layouts.module')

@section('introduction')
    <h1>Design</h1>
    <p>&nbsp;</p>
@endsection

@section('content')
    <div class="container-fluid text-center p-0">
        <div class="row row-cols-1 gy-4">
            @include('_partials.image', [
                'img' => $page->link('assets/build/img/categories/kids/modules/1/design/light-following-robot-isometric-south-east.png'),
                'alt' => 'Light Following Robot South East Isometric View',
                'label' => 'South East Isometric View'
            ])

            @include('_partials.image', [
                'img' => $page->link('assets/build/img/categories/kids/modules/1/design/light-following-robot-isometric-south-west.png'),
                'alt' => 'Light Following Robot South West Isometric View',
                'label' => 'South West Isometric View'
            ])

            @include('_partials.image', [
                'img' => $page->link('assets/build/img/categories/kids/modules/1/design/light-following-robot-top.png'),
                'alt' => 'Light Following Robot Top View',
                'label' => 'Top View'
            ])
        </div>
    </div>
@endsection