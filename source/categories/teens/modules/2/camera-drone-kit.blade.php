@extends('_layouts.module')

@section('introduction')
    <h1>Camera Drone Kit</h1>
    <p>
        The purpose of the module is to be able to understand and build the Camera Drone for Filmmaking which would be used by
        the hobbyist to capture aerial photographs and videos with the use of an RC transmitter (controller). The user can
        manipulate and control the drone at which angle they want with the use of the controller.
    </p>
    <p>&nbsp;</p>
@endsection

@section('table_of_contents')
    @include('_toc.toc', [ 'items' => [
        'Components' => [
            'Drone Components',
            'Controller Components'
        ]
    ]])
@endSection

@section('content')
    <h3 id="components">Components</h3>
    <p>
        A quadcopter is made up of mechanical and electrical components such as a chassis, engines, and other electronic
        components. The list of components is divided into two groups:
    </p>

    <p>&nbsp;</p>

    <h4 id="drone-components">Drone Components</h4>

    <div class="container-fluid mt-4">
        <div class="row row-cols-1 gy-5">
            @include('_partials.component_card', [
                'img' => $page->link('assets/build/img/components/arduino-nano.png'),
                'title' => 'Arduino Nano',
                'description' => '
                    Arduino Nano is a microcontroller based on the ATmega328p. Its board has a size of 45 mm by 18 mm and only weighs 8
                    grams making it the best board to be used in making drones. It has eight analog pins, 14 digital input/output pins, a DC
                    input of 5V, and LEDs for power and status. The Arduino Nano will be the flight controller of the drone for this module
                    because of its lightweight and powerful features.
                '
            ])

            @include('_partials.component_card', [
                'img' => $page->link('assets/build/img/components/emax-mt2204-brushless-motor.png'),
                'title' => 'EMAX MT2204 2300KV Brushless Motor',
                'description' => '
                    The MT2204 from EMAX is a 12V brushless motor that has a maximum thrust of 440 grams for 25 grams of weight. Its unique
                    air suction design rapidly cools the motor that allows for higher efficiency and longer motor life. Four MT2204
                    brushless motors will be needed for this module to be able for the drone to ascend and descend. CW and CCW markings on
                    the motor will help the placement of the motor on the drone\'s body.
                '
            ])

            @include('_partials.component_card', [
                'img' => $page->link('assets/build/img/components/emax-12a-blheli-electronic-speed-controller.png'),
                'title' => 'EMAX 12A BLHeli Electronic Speed Controller',
                'description' => '
                    The EMAX 12A BLHeli is an electronic speed controller (ESC) that will be used to control and regulate the speed of a
                    brushless motor. It has a constant current of 12A and a burst current of 15A, low voltage protection, and
                    over-temperature protection. Each brushless motor will be connected to an ESC to help improve the control of the speed
                    of the drone.
                '
            ])

            @include('_partials.component_card', [
                'img' => $page->link('assets/build/img/components/mpu6050.png'),
                'title' => 'MPU6050',
                'description' => '
                    The MPU6050 is a 3-axis accelerometer and 3-axis gyroscope module. It measures any motion parameter of an object such as
                    velocity, orientation, displacement, and acceleration. The DMP (Digital Motion Processor) of the MPU6050 is powerful in
                    that it can perform a complex calculation, freeing up the flight controller of too much work. The MPU6050 will be the
                    sensor fusion of the drone and will act as the compass for the drone so it can re-orient itself.
                '
            ])

            @include('_partials.component_card', [
                'img' => $page->link('assets/build/img/components/tattu-11.1v-1300mah-75c-3s-lipo-battery-pack.png'),
                'title' => 'Tattu 11.1V 1300mAh 75C 3S LiPo Battery Pack',
                'description' => '
                    The Tattu LiPo battery pack is composed of three cells (3S) that produce 11.1V with a capacity of 13000mAh. The battery
                    pack weighs 122 grams and with a discharge rate of 75%. This battery pack will power the whole drone.
                '
            ])

            @include('_partials.component_card', [
                'img' => $page->link('assets/build/img/components/nrf24l01-module-with-antenna.png'),
                'title' => 'NRF24L01 Module with Antenna',
                'description' => '
                    The NRF23L01 is a transceiver module used to communicate wirelessly with two Arduino boards. It operates in 2.4 GHz ISM
                    frequency, has a data transfer rate of up to 2 Mbps, and with an operating range of 1000 meters. It needs an operating
                    voltage of 1.9V up to 3.6V. But the logic pins of the module are 5V tolerant so it can be directly connected to Arduino.
                    The NRF24L01 module will be used to communicate between the drone and the controller.
                '
            ])

            @include('_partials.component_card', [
                'img' => $page->link('assets/build/img/components/pnzeo-w3-camera.png'),
                'title' => 'PNZEO W3 Camera',
                'description' => '
                    The PNZEO W3 is a small camera that can record 1080p resolution videos for up to 1.5 hours at full charge. It can be
                    connected to wifi and has a rechargeable battery. The camera can be operated thru a smartphone and it supports up to
                    128GB of external micro SD memory card. The PNZEO W3 will be the camera that will be used for the drone.
                '
            ])
        </div>
    </div>

    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>

    <h4 id="controller-components">Controller Components</h4>
    <p>
        The NRF24L01 module and the MPU6050 will not be described below but the mentioned components are needed in making the controller.
    </p>

    <div class="container-fluid mt-4">
        <div class="row row-cols-1 gy-5">
            @include('_partials.component_card', [
                'img' => $page->link('assets/build/img/components/arduino-pro-mini-v3.png'),
                'title' => 'Arduino Pro Mini V3',
                'description' => '
                    Arduino Pro Mini is a microcontroller based on the ATmega328. Its board has a size of 33 mm by 18 mm making it the third
                    smallest Arduino board. It weighs less than 2 grams and it is the best board to be used in making drones and
                    controllers. Even though it’s small, it has eight analog pins, 14 digital input/output pins, has over-current
                    protection, a DC input of 5V up to 12V, and LEDs for power and status. The Arduino Pro Mini will be the brain of the
                    controller for this module.
                '
            ])

            @include('_partials.component_card', [
                'img' => $page->link('assets/build/img/components/ps2-joystick-module.png'),
                'title' => 'PS2 Joystick Module',
                'description' => '
                    The PS2 Joystick Module is a combination of two 10k ohm potentiometers for each axis. The module is similar to the
                    joystick of Playstation 2 controllers. Two PS2 Joystick Module will be used to control the directions of the drone.
                '
            ])

            @include('_partials.component_card', [
                'img' => $page->link('assets/build/img/components/10k-potentiometer.png'),
                'title' => 'Potentiometer',
                'description' => '
                    A potentiometer is a resistor with three terminals with a rotating contact that can be used as a rheostat or a voltage
                    divider. Two 10k ohms potentiometers will be used to control the speed of the motor.
                '
            ])

            @include('_partials.component_card', [
                'img' => $page->link('assets/build/img/components/spdt-toggle-switch.png'),
                'title' => 'Toggle Switch',
                'description' => '
                    A toggle switch is a type of electrical switch that uses a mechanical lever to be actuated. Two single-pole,
                    double-throw, mini-toggle switches will be added for future functionality.
                '
            ])
        </div>
    </div>
@endsection