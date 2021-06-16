@extends('_layouts.module')

@section('introduction')
    <h1>Robotic Arm Kit</h1>
    <p>&nbsp;</p>
@endsection

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
@endsection