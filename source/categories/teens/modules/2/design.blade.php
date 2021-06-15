@extends('_layouts.module')

@section('introduction')
    <h1>Design of Camera Drone</h1>
    <p>
        The design of the drone is based on the X shape pattern mostly seen on different drones. This is to make sure that the
        drone is more stable and can be easier to maneuver and control.
    </p>
    <p>&nbsp;</p>
@endsection

@section('table_of_contents')
    @include('_toc.toc', [ 'items' => [
        'Quadcopter',
        'Components Case',
        'Controller'
    ]])
@endSection

@section('content')
    <h3 id="quadcopter">Quadcopter</h3>

    <div class="container-fluid text-center p-0">
        <div class="row row-cols-1 gy-4">
            @include('_partials.image', [
                'img' => $page->link('assets/build/img/categories/teens/modules/2/design/quadcopter-isometric-south-east.png'),
                'alt' => 'Quadcopter South East Isometric View',
                'label' => 'Isometric View of the Quadcopter'
            ])

            @include('_partials.image', [
                'img' => $page->link('assets/build/img/categories/teens/modules/2/design/quadcopter-isometric-south-west-(inside).png'),
                'alt' => 'Quadcopter South West Isometric View (Inside)',
                'label' => 'Inside of the Quadcopter'
            ])

            @include('_partials.image', [
                'img' => $page->link('assets/build/img/categories/teens/modules/2/design/quadcopter-top.png'),
                'alt' => 'Quadcopter Top View',
                'label' => 'Top View of the Quadcopter'
            ])

            @include('_partials.image', [
                'img' => $page->link('assets/build/img/categories/teens/modules/2/design/quadcopter-propellers.png'),
                'alt' => 'Quadcopter Propellers',
                'label' => 'Quadcopter Propellers'
            ])
        </div>
    </div>

    <p>
        The figure above shows where the brushless motor will be put. The long space after the brushless motor is where the
        electronic speed controller will be fixed.
    </p>

    <p>&nbsp;</p>

    <h3 id="components-case">Components Case</h3>
    <p>
        The primary drone components such as the Arduino Nano, MPU6050, NRF24L01 Module, the LiPo Battery will be house in this
        component case.
    </p>
    @include('_partials.image', [
        'img' => $page->link('assets/build/img/categories/teens/modules/2/design/quadcopter-components-case.png'),
        'alt' => 'Quadcopter Components Case',
        'label' => 'Quadcopter Components Case'
    ])

    <p>&nbsp;</p>

    <h3 id="controller">Controller</h3>
    <div class="container-fluid text-center p-0">
        <div class="row row-cols-1 gy-4">
            @include('_partials.image', [
                'img' => $page->link('assets/build/img/categories/teens/modules/2/design/controller-top.png'),
                'alt' => 'Controller Top View',
                'label' => 'Top View of the Controller'
            ])

            @include('_partials.image', [
                'img' => $page->link('assets/build/img/categories/teens/modules/2/design/controller-isometric-south-west.png'),
                'alt' => 'Controller Southwest Isometric View',
                'label' => 'Isometric View of the controller'
            ])
        </div>
    </div>
@endsection