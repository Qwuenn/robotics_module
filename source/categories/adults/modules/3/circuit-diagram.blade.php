@extends('_layouts.module')

@section('introduction')
    <h1>Circuit Diagram</h1>
    <p>&nbsp;</p>
@endsection

@section('table_of_contents')
    @include('_toc.toc', [ 'items' => [
        'Arduino Based Gimbal Stabilizer Without Buck Converter',
        'Arduino Based Gimbal Stabilizer With Buck Converter',
    ]])
@endSection

@section('content')
    <h3 id="arduino-based-gimbal-stabilizer-without-buck-converter">Arduino Based Gimbal Stabilizer Without Buck Converter</h3>
    @include('_partials.image', [
        'img' => $page->link('assets/build/img/categories/adults/modules/3/circuit-diagram/circuit-diagram-of-arduino-based-gimbal-stabilizer-without-buck-converter.png'),
        'alt' => 'Circuit Diagram of Arduino Based Gimbal Stabilizer Without Buck Converter',
        'class' => 'my-3'
    ])
    <p>
        The image above shows the circuit diagram of Arduino Based Gimbal Stabilizer without Buck Converter because the battery
        used is 5 volts. The image above shows the connection of 3-axis accelerator to Arduino Nano and the connection of servo
        motor to batteries and Arduino Nano.
    </p>

    @include('_partials.image', [
        'img' => $page->link('assets/build/img/categories/adults/modules/3/circuit-diagram/arduino-based-gimbal-stabilizer-without-buck-converter.png'),
        'alt' => 'Arduino Based Gimbal Stabilizer Without Buck Converter',
        'class' => 'my-3'
    ])
    <p>
        The image above shows the actual designed circuit of Arduino based Gimbal Stabilizer without Buck Converter.
    </p>

    <p>&nbsp;</p>

    <h3 id="arduino-based-gimbal-stabilizer-with-buck-converter">Arduino Based Gimbal Stabilizer With Buck Converter</h3>
    @include('_partials.image', [
        'img' => $page->link('assets/build/img/categories/adults/modules/3/circuit-diagram/circuit-diagram-of-arduino-based-gimbal-stabilizer-with-buck-converter.png'),
        'alt' => 'Circuit Diagram of Arduino Based Gimbal Stabilizer With Buck Converter',
        'class' => 'my-3'
    ])
    <p>
        The circuit diagram of Arduino Based Gimbal Stabilizer with Buck Converter. Buck Converter use when the battery is
        higher than required voltage. This circuit shows 9 volts battery used, but the required voltage of Arduino Based Gimbal
        Stabilizer is 5 volts.
    </p>
@endsection