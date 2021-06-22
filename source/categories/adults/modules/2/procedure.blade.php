@extends('_layouts.module')

@section('introduction')
    <h1>Procedure</h1>
    <p>&nbsp;</p>
@endsection

@section('content')
    <ol class="d-grid gap-4">
        <li>
            <p>
                First, place the L293D Motor Driver on the breadboard.
            </p>
            @include('_partials.image', [
                'img' => $page->link('assets/build/img/categories/adults/modules/2/procedure/1.png')
            ])
        </li>
        <li>
            <p>
                Use the Jump Wire to connect the Left motor and Right motor to the output 1,2,3 and 4 of the Motor Driver in the
                breadboard.
            </p>
            @include('_partials.image', [
                'img' => $page->link('assets/build/img/categories/adults/modules/2/procedure/2.png')
            ])
        </li>
        <li>
            <p>
                Using Jump wire and breadboard connect the pins of the Motor Driver in breadboard to the Arduino. And Connect also the Servo Motor and battery to the breadboard as shown in the picture.
            </p>
            @include('_partials.image', [
                'img' => $page->link('assets/build/img/categories/adults/modules/2/procedure/3.png')
            ])
        </li>
        <li>
            <p>
                Using Jump wire and breadboard connect the pin of the Submersible Pump to the Arduino.
            </p>
            @include('_partials.image', [
                'img' => $page->link('assets/build/img/categories/adults/modules/2/procedure/4.png')
            ])
        </li>
    </ol>
@endsection