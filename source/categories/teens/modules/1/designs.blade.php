@extends('_layouts.module')

@section('introduction')
    <h1>Designs of Sumo Bot</h1>
    <p>
        The Sumo Bots have three designs to have uniqueness between each other, for visual representation as well as for the
        compatibility with the preferred fighting style.
    </p>
    <p>&nbsp;</p>
@endsection

@section('table_of_contents')
    @include('_toc.toc', ['items' => [
        'Design Based on Speed (Barry)',
        'Design Based on Power (Bruce)',
        'Design Based on Both Power and Speed (Clark)'
    ]])
@endSection

@section('content')
    <h5 id="design-based-on-speed-(barry)" class="mb-4">Design Based on Speed (Barry)</h5>
    <p>
        The design is solely focusing on speed and using a high gear ratio (large gear turning a small gear) to surprise an
        enemy with a fast attack. It can maneuver the dohyo with ease and it can also confuse slow-moving enemy. But due to low
        pushing power, it can’t win a face-to-face pushing and it can be easily overwhelmed.
    </p>
    <div class="container-fluid text-center p-0">
        <div class="row row-cols-1 gy-4">
            @include('_partials.image', [
                'img' => $page->link('assets/build/img/categories/teens/modules/1/design/barry-isometric-south-east.png'),
                'alt' => 'Barry South East Isometric View',
                'label' => 'South East Isometric View'
            ])

            @include('_partials.image', [
                'img' => $page->link('assets/build/img/categories/teens/modules/1/design/barry-isometric-south-west.png'),
                'alt' => 'Barry South West Isometric View',
                'label' => 'South West Isometric View'
            ])

            @include('_partials.image', [
                'img' => $page->link('assets/build/img/categories/teens/modules/1/design/barry-right.png'),
                'alt' => 'Barry Right Side View',
                'label' => 'Right Side View'
            ])
        </div>
    </div>

    <p>&nbsp;</p>

    <h5 id="design-based-on-power-(bruce)" class="mb-4">Design Based on Power (Bruce)</h5>
    <p>
        Using a low gear ratio (small gear turning a large gear), this design uses its high power output to push enemies out of
        the dohyo. It can withstand a long time in pushing each other compared to the design based on speed. But due to its
        power being diverted to pushing than speed, it is a slow-moving Sumo Bot and it is vulnerable to surprise and fast
        attack.
    </p>
    <div class="container-fluid text-center p-0">
        <div class="row row-cols-1 gy-4">
            @include('_partials.image', [
                'img' => $page->link('assets/build/img/categories/teens/modules/1/design/bruce-isometric-south-east.png'),
                'alt' => 'Bruce South East Isometric View',
                'label' => 'South East Isometric View'
            ])

            @include('_partials.image', [
                'img' => $page->link('assets/build/img/categories/teens/modules/1/design/bruce-isometric-south-west.png'),
                'alt' => 'Bruce South West Isometric View',
                'label' => 'South West Isometric View'
            ])

            @include('_partials.image', [
                'img' => $page->link('assets/build/img/categories/teens/modules/1/design/bruce-left.png'),
                'alt' => 'Bruce Left Side View',
                'label' => 'Left Side View'
            ])
        </div>
    </div>

    <p>&nbsp;</p>

    <h5 id="design-based-on-both-power-and-speed-(clark)" class="mb-4">Design Based on Both Power and Speed (Clark)</h5>
    <p>
        The design incorporates both speed and power into the Sumo Bot and uses a medium gear ratio to balance out the elements.
        This is ideal for those who love to have a match with flexibility.
    </p>
    <div class="container-fluid text-center p-0">
        <div class="row row-cols-1 gy-4">
            @include('_partials.image', [
                'img' => $page->link('assets/build/img/categories/teens/modules/1/design/clark-isometric-south-east.png'),
                'alt' => 'Clark South East Isometric View',
                'label' => 'South East Isometric View'
            ])

            @include('_partials.image', [
                'img' => $page->link('assets/build/img/categories/teens/modules/1/design/clark-isometric-south-west.png'),
                'alt' => 'Clark South West Isometric View',
                'label' => 'South West Isometric View'
            ])

            @include('_partials.image', [
                'img' => $page->link('assets/build/img/categories/teens/modules/1/design/clark-top.png'),
                'alt' => 'Clark Side View',
                'label' => 'Top View'
            ])
        </div>
    </div>
@endsection