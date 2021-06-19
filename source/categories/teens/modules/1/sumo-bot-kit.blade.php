@extends('_layouts.module')

@section('introduction')
    <h1>Sumo Bot Kit</h1>
    <p>&nbsp;</p>
@endsection

@section('table_of_contents')
    @include('_toc.toc', ['items' => [
        'Robotic Sumo',
        'Components'
    ]])
@endSection

@section('content')
    <h3 id="robotic-sumo">Robotic Sumo</h3>
    <p>
        Robotic Sumo or “Robot Sumo” is a competitive match between two sumo bots based on the national sport of Japan, “Sumo
        Wrestling.” The robot in a match must find the enemy using infrared and ultrasonic sensors and push the enemy robot out
        of the black and flat circle arena called “dohyo” within three minutes. Each match has three rounds and the sumo bot
        with two victorious rounds wins the match.
    </p>

    <p>&nbsp;</p>

    <h3 id="components">Components</h3>
    <p>
        Below are the components that will be used for the Sumo Bot and their specific functions:
    </p>

    <div class="container-fluid">
        <div class="row row-cols-1 gy-5">
            @include('_partials.component', [
                'img' => $page->link('assets/build/img/components/arduino-uno-r3.png'),
                'title' => 'Arduino UNO R3 Controller Board',
                'description' => '
                    The Arduino Uno R3 is the latest revision of the Arduino Uno microcontroller based on the ATmega328. It has 20 digital
                    I/O and programs can be loaded onto it from the computer using Arduino IDE. The Arduino UNO R3 will be used as the brain
                    of the Sumo Bot.
                '
            ])

            @include('_partials.component', [
                'img' => $page->link('assets/build/img/components/l298n-motor-driver.png'),
                'title' => 'L298N Motor Driver',
                'description' => '
                    The L298N Motor Driver is used for controlling up to 4 DC motors with directional and speed control. The L298N motor
                    driver will be used to control the two 12V Geared DC Motors for the Sumo Bot movement of legs with a constant supply of
                    voltage.
                '
            ])

            @include('_partials.component', [
                'img' => $page->link('assets/build/img/components/ultrasonic-sensor-(hc-sr04).png'),
                'title' => 'Ultrasonic Sensor (HC-SR04)',
                'description' => '
                    The HC-SR04 ultrasonic sensor makes use of sonar to figure out the distance to an object. It gives better non-contact
                    range detection with high accuracy and consistent readings. It will be usually placed at the top of the robot, the
                    HC-SR04 is used to locate the distance of objects to avoid a collision.
                '
            ])

            @include('_partials.component', [
                'img' => $page->link('assets/build/img/components/ir-sensor-(tcrt5000).png'),
                'title' => 'IR Sensor (TCRT5000)',
                'description' => '
                    The TCRT5000 IR sensor can detect the location of an object or other reflective surface in front of it. Also, with some
                    level of programming, it can calculate the distance of the object in front of it. The TCRT5000 is used to distinguish
                    the colors of the ring (black and white) so the Sumo Bot will not fall out of the ring.
                '
            ])

            @include('_partials.component', [
                'img' => $page->link('assets/build/img/components/12v-geared-dc-motor.png'),
                'title' => '12V Geared DC Motor',
                'description' => '
                    The 12V Geared DC motor is a small and low-cost but powerful motor used mainly for small to medium size RC applications.
                    The gear addition helps reduce the speed while increasing torque output. The Geared DC motor allows the robot to
                    maneuver the surface of the ring with ease and little power needed.
                '
            ])

            @include('_partials.component', [
                'img' => $page->link('assets/build/img/components/9v-battery.png'),
                'title' => '9V Battery',
                'description' => '
                    The 9V battery is a common size battery used mainly for electronic devices such as smoke detectors, clocks,
                    walkie-talkies, etc. The 9V battery will be used to power the Arduino UNO R3.
                '
            ])

            @include('_partials.component', [
                'img' => $page->link('assets/build/img/components/1.5v-battery.png'),
                'title' => '1.5V Battery',
                'description' => '
                    The 1.5V battery is a common household battery that powers most portable electronic devices. It can be a disposable or
                    rechargeable one. Four 1.5V batteries in the battery housing will power the two 12V Geared DC Motor so the wheels can
                    have the full force of the motor.
                '
            ])

            @include('_partials.component', [
                'img' => $page->link('assets/build/img/components/rocker-switch.png'),
                'title' => 'Rocker Switch',
                'description' => '
                    Rocker Switch is a type of switch that can be pressed like a seesaw to connect or disconnect an electric circuit. It
                    will be used to turn ON/OFF the Arduino UNO R3 to preserve battery juice.
                '
            ])

            @include('_partials.component', [
                'img' => $page->link('assets/build/img/components/jumper-wires.png'),
                'title' => 'Jumper Wires',
                'description' => '
                    Jumper Wires are electrical wires used to connect different components and microcontrollers without the hassle of
                    soldering them. It is used primarily in connecting components in a breadboard and other prototype devices.
                '
            ])
        </div>
    </div>
@endsection