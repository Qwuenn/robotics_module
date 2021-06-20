@extends('_layouts.module')

@section('introduction')
    <h1>Design</h1>
    <p>&nbsp;</p>
@endsection

@section('content')
    <div class="container-fluid text-center p-0">
        <div class="row row-cols-1 gy-4">
            @include('_partials.image', [
                'img' => $page->link('assets/build/img/categories/adults/modules/2/design/fire-fighter-robot-isometric-south-west.png'),
                'alt' => 'Fire Fighter South West Isometric View',
                'label' => 'Isometric View of the Fire Fighter Robot'
            ])

            @include('_partials.image', [
                'img' => $page->link('assets/build/img/categories/adults/modules/2/design/fire-fighter-robot-(inside).png'),
                'alt' => 'Fire Fighter Robot (Inside)',
                'label' => 'Fire Fighter Robot (Inside)'
            ])

            @include('_partials.image', [
                'img' => $page->link('assets/build/img/categories/adults/modules/2/design/water-container-and-mini-hose-holder.png'),
                'alt' => 'Water Container and Mini Hose Holder',
                'label' => 'Water Container and Mini Hose Holder'
            ])
        </div>
    </div>
@endsection