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
                'img' => $page->link('assets/build/img/components/potentiometer.png'),
                'symbol' => $page->link('assets/build/img/components/symbols/potentiometer.png'),
                'title' => '10K Pot-Variable Resistor',
                'description' => '
                    <p>
                        A potentiometer, also known as a "pot," is a three-terminal mechanically operated rotary analogue device found and
                        used in a wide range of electrical and electronic circuits. They are passive devices, which mean they don\'t need a
                        power supply or extra circuitry to perform their basic linear or rotary position function.
                    </p>
                    <p>
                        Variable potentiometers come in a variety of mechanical variations that allow for simple adjustment to control a
                        voltage, current, or the biasing and gain control of a circuit to achieve a zero condition.
                    </p>
                    <p>
                        The term "potentiometer" is a combination of the words Potential Difference and Metering, and it dates back to the early
                        days of electronic development. It was thought at the time that adjusting large wirewound resistive coils metered or
                        measured a fixed amount of potential difference, thereby making it a type of voltage-metering device.
                    </p>
                '
            ])

            @include('_partials.component_symbol', [
                'img' => $page->link('assets/build/img/components/1.5v-battery.png'),
                'symbol' => $page->link('assets/build/img/components/symbols/battery.png'),
                'title' => 'Battery',
                'description' => '
                    A battery is a type of power source that consists of one or more electrochemical cells with external connections that
                    can be used to power electrical devices such as flashlights, mobile phones, and electric cars. When a battery is
                    supplying electricity, the positive terminal is known as the cathode and the negative terminal is known as the anode.
                    The negative terminal serves as the source of electrons that will flow to the positive terminal via an external electric
                    circuit. When a battery is connected to an external electric load, a redox reaction occurs in which high-energy
                    reactants are converted to lower-energy products, with the free-energy difference being delivered to the external
                    circuit as electrical energy. Historically, the term "battery" referred to a device made up of multiple cells; however,
                    the term has come to refer to devices made up of a single cell as well.
                '
            ])

            @include('_partials.component_symbol', [
                'img' => $page->link('assets/build/img/components/connecting-wires.png'),
                'symbol' => $page->link('assets/build/img/components/symbols/connecting-wires.png'),
                'title' => 'Connecting Wires',
                'description' => '
                    Since electricity requires a medium to travel through, connecting wires allows an electrical current to travel from one
                    point on a circuit to another. In the case of computers, wires are embedded in circuit boards, carrying electrical
                    pulses that are decoded as binary signals of zeros and ones. The majority of computer and electronic component wires are
                    made of copper or aluminum. Copper is both inexpensive and electrically conductive. Although silver has a higher
                    conductivity, it is much more expensive. The wire in a basic circuit is connected to one terminal of a power source,
                    such as a battery. It is then linked to a switch, which determines whether the circuit is open or closed. The wire then
                    connects to the power-drawing device, allowing it to draw electricity and perform its function. Finally, the wire
                    connects the load to the power source\'s opposing terminal. Before a current can flow through a wire, the circuit must
                    be closed; that is, there must be no breaks in the path. Electricity cannot easily travel through air, and if it does,
                    there is a risk of stray current leaking into the environment and damaging or failing to power the appliance.
                '
            ])

            @include('_partials.component', [
                'img' => $page->link('assets/build/img/components/breadboard.png'),
                'title' => 'Breadboard',
                'description' => '
                    A breadboard, also known as a protoboard, is a building base for electronic prototyping. Originally, the term referred
                    to a literal bread board, which was a polished piece of wood used to slice bread. The solderless breadboard (also known
                    as a plugboard or a terminal array board) was introduced in the 1970s, and the term "breadboard" is now commonly used to
                    refer to these. The solderless breadboard is reusable because it does not require soldering. This makes it ideal for
                    making quick prototypes and experimenting with circuit design. As a result, solderless breadboards are popular among
                    students and in technological education. Breadboards can be used to prototype a wide range of electronic systems, from
                    simple analog and digital circuits to full-fledged central processing units (CPUs).

                '
            ])
        </div>
    </div>
@endsection