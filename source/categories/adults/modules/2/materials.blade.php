@extends('_layouts.module')

@section('introduction')
    <h1>Materials</h1>
    <p>
        There are components in Robotics and Automation to build simple robot shown below:
    </p>
    <p>&nbsp;</p>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row row-cols-1 gy-5">
            @include('_partials.component_symbol', [
                'img' => $page->link('assets/build/img/components/arduino-uno-r3.png'),
                'symbol' => $page->link('assets/build/img/components/symbols/arduino-uno.png'),
                'title' => 'Arduino Uno',
                'description' => '
                    The Arduino Uno is a Microchip ATmega328P-based open-source microcontroller board created by Arduino. The board has a
                    number of digital and analog input/output (I/O) pins that can be used to connect to various expansion boards (shields)
                    and other circuits. The board has 14 digital I/O pins (six of which are capable of PWM output), 6 analog I/O pins, and
                    is programmable via a type B USB cable with the Arduino IDE (Integrated Development Environment). It can be powered by a
                    USB cable or an external 9-volt battery, and it accepts voltages ranging from 7 to 20 volts. It is comparable to the
                    Arduino Nano and Leonardo.
                '
            ])

            @include('_partials.component_symbol', [
                'img' => $page->link('assets/build/img/components/flame-sensor.png'),
                'symbol' => $page->link('assets/build/img/components/symbols/flame-sensor.png'),
                'title' => 'Flame Sensor',
                'description' => '
                    <p>
                        A Flame Sensor is a device that detects the presence of a fire or other bright light sources. A Flame Sensor can be
                        implemented in a variety of ways, but the module used in this project is an Infrared Radiation Sensitive Sensor.
                    </p>
                    <p>
                        A flame-sensor is a type of detector that is primarily intended for detecting and responding to the occurrence of a fire
                        or flame. The response to flame detection can be affected by its fitting. It includes a fire suppression system, a
                        natural gas line, propane, and an alarm system. This sensor is commonly found in industrial boilers. The main purpose of
                        this is to verify whether or not the boiler is operational. Because of the mechanism used to detect the flame, the
                        response time of these sensors is faster and more accurate than that of a heat/smoke detector.
                    </p>
                '
            ])

            @include('_partials.component_symbol', [
                'img' => $page->link('assets/build/img/components/sg90-servo-motor.png'),
                'symbol' => $page->link('assets/build/img/components/symbols/servo-motor.png'),
                'title' => 'Servo Motor',
                'description' => '
                    A servomotor is a rotary or linear actuator capable of precisely controlling angular or linear position, velocity, and
                    acceleration. It is made up of a suitable motor connected to a position feedback sensor. It also necessitates the use of
                    a fairly sophisticated controller, which is often a dedicated module designed specifically for use with servomotors.
                    Servomotors are not a specific type of motor, though the term is frequently used to refer to a motor that can be used in
                    a closed-loop control system.
                '
            ])

            @include('_partials.component_symbol', [
                'img' => $page->link('assets/build/img/components/l293d-driver-module.png'),
                'symbol' => $page->link('assets/build/img/components/symbols/l293d-driver-module.png'),
                'title' => 'L293D Driver Module',
                'description' => '
                    <p>
                        The Motor Driver is a motor module that allows you to control the speed and direction of two motors at the same time.
                        Based on the L293D IC, this Motor Driver was designed and developed.
                    </p>
                    <p>
                        Motor drivers serve as a link between motors and control circuits. The motor requires a high current, whereas the
                        controller circuit operates on low current signals. So the function of motor drivers is to convert a low-current control
                        signal into a higher-current signal capable of driving a motor.
                    </p>
                '
            ])

            @include('_partials.component_symbol', [
                'img' => $page->link('assets/build/img/components/submersible-pump.png'),
                'title' => 'Submersible Pump',
                'description' => '
                    <p>
                        Submersible pumps are pumping machines that can be submerged in liquids. The term "DC submersible pump" refers to
                        submersible pumps that are powered by direct current electricity.
                    </p>
                    <p>
                        DC submersible pumps, like other types of submersible pumps, resemble a metal tube and are designed to push water to the
                        surface. This type of pipe-look water pump conceals the motor within the tube, preventing liquid from entering the
                        pump\'s electrical components.
                    </p>
                    <p>
                        DC submersible pumps are more versatile and can accommodate a wider range of working environments. Solar modules,
                        batteries, and generators are the most commonly used power sources for DC submersible pumps. DC submersible pumps with
                        solar power supplies may include a controller to boost current when sunlight is scarce.
                    </p>
                '
            ])

            @include('_partials.component_symbol', [
                'img' => $page->link('assets/build/img/components/connecting-wires.png'),
                'symbol' => $page->link('assets/build/img/components/symbols/connecting-wires.png'),
                'title' => 'Connecting Wires',
                'description' => '
                    A jump wire is an electrical wire, or a group of them in a cable, that has a connector or pin at each end. It is
                    typically used to connect the components of a breadboard or other prototype or test circuit, either internally or with
                    other equipment or components, without the use of solder.
                '
            ])

            @include('_partials.component', [
                'img' => $page->link('assets/build/img/components/breadboard.png'),
                'title' => 'Breadboard',
                'description' => '
                    <p>
                        A breadboard, also known as a protoboard, is a building base for electronic prototyping. Originally, the term referred
                        to a literal bread board, which was a polished piece of wood used to slice bread. The solderless breadboard (also known
                        as a plugboard or a terminal array board) was introduced in the 1970s, and the term "breadboard" is now commonly used to
                        refer to these.
                    </p> 
                    <p>
                        The solderless breadboard is reusable because it does not require soldering. This makes it ideal for
                        making quick prototypes and experimenting with circuit design. As a result, solderless breadboards are popular among
                        students and in technological education. Breadboards can be used to prototype a wide range of electronic systems, from
                        simple analog and digital circuits to full-fledged central processing units (CPUs).
                    </p>
                '
            ])
        </div>
    </div>
@endsection