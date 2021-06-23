@extends('_layouts.module')

@section('introduction')
    <h1>Materials</h1>
    <p>&nbsp;</p>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row row-cols-1 gy-5">
            @include('_partials.component', [
                'img' => $page->link('assets/build/img/components/arduino-nano.png'),
                'title' => 'Arduino Nano',
                'description' => '
                    The Arduino Nano could be a little, total, and breadboard-friendly board based on the ATmega328P discharged in 2008. It
                    offers the same network and specs of the Arduino Uno board in a smaller form factor.
                '
            ])

            @include('_partials.component', [
                'img' => $page->link('assets/build/img/components/adxl335-accelerometer-module.png'),
                'title' => 'ADXL335 Accelerometer Module',
                'description' => '
                    It can be utilized in applications requiring tilt detecting. The ADXL335 measures increasing speed along X, Y and Z
                    tomahawks and gives analog voltage yield corresponding to the increasing speed along these 3 tomahawks. Microcontrollers
                    can handle these voltages by changing over them to computerized signals utilizing ADC.
                '
            ])

            @include('_partials.component', [
                'img' => $page->link('assets/build/img/components/buck-converter.png'),
                'title' => 'Buck Converter',
                'description' => '
                    <p>
                        A buck converter (step-down converter) may be a DC-to-DC control converter which steps down voltage (whereas drawing
                        less normal current) from its input (supply) to its yield (stack). It may be a course of switched-mode control supply
                        (SMPS) ordinarily containing at slightest two semiconductors (a diode and a transistor, in spite of the fact that
                        advanced buck converters regularly supplant the diode with a moment transistor utilized for synchronous correction) and
                        at slightest one vitality capacity component, a capacitor, inductor, or the two in combination. To diminish voltage
                        swell, channels made of capacitors (in some cases in combination with inductors) are regularly included to such a
                        converter\'s yield (load-side channel) and input (supply-side channel).
                    </p>

                    <p><b>NOTE:</b> <i>Buck converter is needed when you use high voltage battery than required.</i></p>
                '
            ])

            @include('_partials.component', [
                'img' => $page->link('assets/build/img/components/connecting-wires.png'),
                'title' => 'Connecting Wires',
                'description' => '
                    <p>
                        A wire could be a flexible metallic conductor, particularly one made of copper, ordinarily protects, and utilized to
                        carry electric current in a circuit.
                    </p>

                    <p> <b>NOTE:</b> <i>Use solid wires.</i></p>
                '
            ])

            @include('_partials.component', [
                'img' => $page->link('assets/build/img/components/sg90-servo-motor.png'),
                'title' => 'Servo Motor',
                'description' => '
                    A servomotor is a rotary or linear actuator capable of precisely controlling angular or linear position, velocity, and
                    acceleration. It is made up of a suitable motor connected to a position feedback sensor. It also necessitates the use of
                    a fairly sophisticated controller, which is often a dedicated module designed specifically for use with servomotors.
                    Servomotors are not a specific type of motor, though the term is frequently used to refer to a motor that can be used in
                    a closed-loop control system.
                '
            ])

            @include('_partials.component', [
                'img' => $page->link('assets/build/img/components/universal-pcb.png'),
                'title' => 'Universal PCB',
                'description' => '
                    A printed circuit board (PCB) mechanically underpins and electrically interfaces electrical or electronic components
                    utilizing conductive tracks, cushions and other highlights carved from one or more sheet layers of copper covered onto
                    and/or between sheet layers of a non-conductive substrate. Components are for the most part patched onto the PCB to both
                    electrically interface and mechanically secure them to it. Printed circuit sheets are utilized in all but the only
                    electronic items. They are moreover utilized in a few electrical items, such as detached switch boxes.
                '
            ])

            @include('_partials.component', [
                'img' => $page->link('assets/build/img/components/1.5v-battery.png'),
                'title' => '1.5V Battery',
                'description' => '
                    <p>
                        A battery is a type of power source that consists of one or more electrochemical cells with external connections that
                        can be used to power electrical devices such as flashlights, mobile phones, and electric cars. When a battery is
                        supplying electricity, the positive terminal is known as the cathode and the negative terminal is known as the anode.
                        The negative terminal serves as the source of electrons that will flow to the positive terminal via an external electric
                        circuit. When a battery is connected to an external electric load, a redox reaction occurs in which high-energy
                        reactants are converted to lower-energy products, with the free-energy difference being delivered to the external
                        circuit as electrical energy.
                    </p>

                    <p> <b>NOTE:</b> <i>Use 5 volts.</i></p>
                '
            ])
        </div>
    </div>

@endsection