@extends('_layouts.module')

@section('introduction')
    <h1>Mechanical Designed</h1>
    <p>&nbsp;</p>
@endsection

@section('table_of_contents')
    @include('_toc.toc', [ 'items' => [
        'Arduino Based Gimbal Stabilizer',
        'Three Axes Motion of Arduino Based Gimbal Stabilizer'
    ]])
@endSection

@section('content')
    <h3 id="arduino-based-gimbal-stabilizer">Arduino Based Gimbal Stabilizer</h3>
    @include('_partials.image', [
        'img' => $page->link('assets/build/img/categories/adults/modules/3/mechanical-designed/arduino-based-gimbal-stabilizer.png'),
        'alt' => 'Arduino Based Gimbal Stabilizer',
        'class' => 'my-3'
    ])
    <p>
        The image above shows the frame carrying the system should be enduring sufficient to carry the camera and light enough
        to provide ease of use. Carbon fiber pipe is the material has good quality conditions that we are looking for. It has
        cellphone holder on the edge of upper handle and another replaceable handle.
    </p>
    <p>
        The Arduino Nano and a three-axis angular accelerometer which included to Inertial Movement Unit (IMU) is often needed
        to detect camera movements. Thus, we can obtain the information such as orientation, speed, and position from a single
        unit.
    </p>

    <p>&nbsp;</p>

    <h3 id="three-axes-motion-of-arduino-based-gimbal-stabilizer">Three Axes Motion of Arduino Based Gimbal Stabilizer</h3>
    @include('_partials.image', [
        'img' => $page->link('assets/build/img/categories/adults/modules/3/mechanical-designed/3-axes-motion-of-arduino-based-gimbal-stabilizer.png'),
        'alt' => '3 Axes Motion of Arduino Based Gimbal Stabilizer',
        'class' => 'my-3'
    ])
    <p>
        The image above shows the three axes motion of the Arduino based Gimbal Stabilizer. The three axes are named pitch,
        yaw, and roll, which carry the same name as the axes of the movement of a plane. In order to avoid shaky movements of
        these three axes, three separate servo motors are connected on these axes corresponding to the camera lens. Motors are
        connected in the line with the camera lens receive feedback from the sensor and are used to provide a sensible motion in
        the opposite direction of the movement to keep the camera lens steady.
    </p>
@endsection