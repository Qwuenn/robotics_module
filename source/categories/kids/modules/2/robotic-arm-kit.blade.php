@extends('_layouts.module')

@section('introduction')
    <h1>Robotic Arm Kit</h1>
    <p>&nbsp;</p>
@endsection

@section('table_of_contents')
    @include('_toc.toc', [ 'items' => [
        'Components',
        'Design'
    ]])
@endSection

@section('content')
    <h3 id="components">Components</h3>

    <div class="container-fluid mt-4">
        <div class="row row-cols-1 gy-5">
            @include('_partials.component_card', [
                'img' => $page->link('assets/build/img/components/arduino-uno-r3.png'),
                'title' => 'Arduino Uno - R3',
                'description' => '
                    It is an open-source electronics application that uses simple hardware and software to make it convenient to use.
                '
            ])

            @include('_partials.component_card', [
                'img' => $page->link('assets/build/img/components/breadboard.png'),
                'title' => 'Breadboard',
                'description' => '
                    It is an electronic tool where you can test electronic components (transistors, resistors, chips, and so on) and can
                    also make electrical connections.
                '
            ])

            @include('_partials.component_card', [
                'img' => $page->link('assets/build/img/components/sg90-servo-motor.png'),
                'title' => 'SG90 Servo Motor',
                'description' => '
                    It is an electronic device that rotates machine parts with high precision and speed.
                '
            ])

            @include('_partials.component_card', [
                'img' => $page->link('assets/build/img/components/potentiometer.png'),
                'title' => 'Potentiometer',
                'description' => '
                    It is a three-terminal variable resistor with a resistance that can be manually adjusted to regulate the flow of
                    electric current.
                '
            ])
        </div>
    </div>
    
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>

    <h3 id="design">Design</h3>

    <div class="container-fluid text-center p-0">
        <div class="row row-cols-1 gy-4">
            @include('_partials.image', [
                'img' => $page->link('assets/build/img/categories/kids/modules/2/design/robot-arm-control-box.png'),
                'alt' => 'Robot Arm Control Box',
                'label' => 'Control Box'
            ])

            @include('_partials.image', [
                'img' => $page->link('assets/build/img/categories/kids/modules/2/design/robot-arm-base.png'),
                'alt' => 'Robot Arm Base',
                'label' => 'Base'
            ])

            @include('_partials.image', [
                'img' => $page->link('assets/build/img/categories/kids/modules/2/design/robot-arm-grip-holder.png'),
                'alt' => 'Robot Arm Grip Holder/Elbow',
                'label' => 'Grip Holder/Elbow'
            ])

            @include('_partials.image', [
                'img' => $page->link('assets/build/img/categories/kids/modules/2/design/robot-arm-grip.png'),
                'alt' => 'Robot Arm Grip',
                'label' => 'Grip'
            ])

            @include('_partials.image', [
                'img' => $page->link('assets/build/img/categories/kids/modules/2/design/robot-arm-isometric-1.png'),
                'alt' => 'Robot Arm Isometric 1',
                'label' => 'Isometric View 1'
            ])

            @include('_partials.image', [
                'img' => $page->link('assets/build/img/categories/kids/modules/2/design/robot-arm-isometric-2.png'),
                'alt' => 'Robot Arm Isometric 2',
                'label' => 'Isometric View 2'
            ])
        </div>
    </div>
@endsection