@extends('_layouts.module')

@section('introduction')
    <h1>Introduction to Robotics and Automation</h1>
    <p>&nbsp;</p>
    <h3 id="learning-objectives">Learning Objectives:</h3>
    <ul>
        <li>To discuss the concept of Robotics and Automation.</li>
        <li>To learn and identify different materials used in.</li>
        <li>To learn how to build simple robotics project.</li>
    </ul>
    <p>&nbsp;</p>
@endsection

@section('table_of_contents')
    @include('_toc.toc', [ 'items' => [
        'Learning Objectives',
        'What is Robotics and Automation',
        'Materials'
    ]])
@endSection

@section('content')
    <h3 id="what-is-robotics-and-automation">What is Robotics and Automation?</h3>
    <p>
        Robotics is a branch of engineering that deals with the design and application of robots, as well as the use of
        computers to manipulate and process them. In industries, robots are used to speed up the manufacturing process. They are
        also used in nuclear science, sea exploration, transmission electric signal servicing, bio-medical equipment design, and
        so on. Robotics necessitates the use of computer-aided manufacturing (CAM), mechanical engineering, electrical
        engineering, biological mechanics, and software engineering.
    </p>
    <p>
        Robotics and automation: The use of control systems and information technologies to reduce the need for human labor in
        the production of goods and services is referred to as engineering. Automation is a step beyond mechanization in the
        context of industrialization.
    </p>

    <p>&nbsp;</p>

    <h3 id="materials">Materials</h3>
    <p>
        There are components in Robotics and Automation to build simple robot shown below:
    </p>

    <div class="container-fluid">
        <div class="row row-cols-1 gy-5">
            @include('_partials.adults.component_card', [
                'component' => 'Arduino Uno R3',
                'title' => 'Arduino Uno',
                'id' => 'r1',
                'description' => '
                    The Arduino Uno is a Microchip ATmega328P-based open-source microcontroller board created by Arduino. The board has a
                    number of digital and analog input/output (I/O) pins that can be used to connect to various expansion boards (shields)
                    and other circuits. The board has 14 digital I/O pins (six of which are capable of PWM output), 6 analog I/O pins, and
                    is programmable via a type B USB cable with the Arduino IDE (Integrated Development Environment). It can be powered by a
                    USB cable or an external 9-volt battery, and it accepts voltages ranging from 7 to 20 volts. It is comparable to the
                    Arduino Nano and Leonardo.
                '
            ])
        </div>
    </div>
@endsection