@extends('_layouts.module')

@push('styles')
    <link rel="stylesheet" href="{{ $page->link(mix('css/codebox.css', 'assets/build')) }}">
@endpush

@section('introduction')
    <h1>Activity</h1>
    <p>&nbsp;</p>
@endsection

@section('table_of_contents')
    @include('_toc.toc', ['items' => [
        'Main Parts',
        'Circuit Design',
        'How to Assemble'
    ]])
@endsection

@section('content')
    <h3 id="main-parts">Main Parts</h3>
    <p id="main-parts">
        This robotic arm has 3 main parts: the base, elbow, and the grip. Each part has a servo motor that can be controlled by a potentiometer.
    </p>
    <h6>Base</h6>
    <p>
        The servo motor in the base can rotate 180° left and right.
    </p>
    <h6>Elbow</h6>
    <p>
        The servo motor in the elbow can rotate 180° up and down.
    </p>

    <h6>Grip</h6>
    <p>
        The servo motor in the grip can widen its clamp by 180°.
    </p>

    <p>&nbsp;</p>

    <h3 id="circuit-design">Circuit Design</h3>

    @include('_partials.image', [
        'img' => $page->link('assets/build/img/categories/kids/modules/2/circuit-diagram/circuit-design.png'),
        'alt' => 'Circuit Design'
    ])

    <p>&nbsp;</p>
    <p>&nbsp;</p>

    <h3 id="how-to-assemble" class="mb-4">How to Assemble</h3>
    <ol class="d-grid gap-4">
        <li>
            <p>
                Connect the wiring of the potentiometer and servo motor to the breadboard and Arduino based on the circuit diagram shown above.
            </p>

            <p>&nbsp;</p>

            <h6>For servo motor:</h6>
            <p>
                Connect the signal (yellow wire) to the Digital (PWM) of the Arduino. ~3 for base, ~6 for elbow, and ~9 for grip, then
                connect the power (red wire) to the positive and ground (black wire) to the negative of the breadboard.
            </p>

            <p>&nbsp;</p>

            <h6>For potentiometer:</h6>
            <p>
                Connect the wiper (blue wire) to the Arduino board. A4 for base, A2 for elbow, and A0 for grip, then connect the
                terminal 1 (black) & 2 (red) to the positive and negative of the breadboard.
            </p>

            <p>&nbsp;</p>

            <p>
                Then, use jumping wires to connect the breadboard to the Arduino board. 5V on the positive and ground (GND) on the negative.
            </p>

            @include('_partials.image', [
                'img' => $page->link('assets/build/img/categories/kids/modules/2/circuit-diagram/arduino-uno-connection.png'),
                'alt' => 'Arduino UNO Connection'
            ])

            <p>&nbsp;</p>
        </li>

        <li>
            <p>
                Set up the Arduino. But first, you need to download the Arduino IDE if you don't have one.  
            </p>

            @include('_partials.image', [
                'img' => $page->link('assets/build/img/categories/kids/modules/2/arduino/arduino-step-2.png'),
                'alt' => 'Arduino IDE Official Download Website'
            ])

            <p>&nbsp;</p>
        </li>

        <li>
            <p>
                Open the Arduino IDE on your desktop or laptop. Then configure it based on your device you use. Go to 
                <span class="fw-semibold">Tools → Board → Choose 'Arduino Uno'</span>.
            </p>

            @include('_partials.image', [
                'img' => $page->link('assets/build/img/categories/kids/modules/2/arduino/arduino-step-3.png'),
                'alt' => 'Choosing the right board'
            ])

            <p>&nbsp;</p>
        </li>

        <li>
            <p>
                You must select the port which the Arduino is on. To find the COM port, go to 
                <span class="fw-semibold">Device Manager → Ports (COM & LPT)</span> then click where the Arduino is connected.
            </p>

            @include('_partials.image', [
                'img' => $page->link('assets/build/img/categories/kids/modules/2/arduino/arduino-step-4-1.png'),
                'alt' => 'Finding the COM port'
            ])

            <p>&nbsp;</p>

            <p>
                Next, go back to Arduino IDE and select the port where the Arduino is on. Go to
                <span class="fw-semibold">Tools → Port → Choose the correct port</span>.
            </p>

            @include('_partials.image', [
                'img' => $page->link('assets/build/img/categories/kids/modules/2/arduino/arduino-step-4-2.png'),
                'alt' => 'Choosing the correct port'
            ])

            <p>&nbsp;</p>
        </li>

        <li>
            <p>
                Copy the code of the robotic arm and paste it into the sketch.
            </p>

            @include('_partials.codebox', [ 'code' => 
'// EROVOUTIKA ROBOTIC ARM
#include<Servo.h>

//========================================================
Servo base;  
Servo elbow;
Servo grip;

//========================================================
int potpin = 0;  
int val;    

int potpin2 = 2;
int val2;

int potpin3 = 4;
int val3;

//=========================================================
void setup() {
  base.attach(9);  
  elbow.attach(6);
  grip.attach(3);
}

//=========================================================
void loop() {
  val = analogRead(potpin);
  val2 = analogRead(potpin2);
  val3 = analogRead(potpin3);
  
  
  val = map(val, 0, 1022, 0, 180);
  val2 = map(val2, 0, 1022, 0, 180);
  val3 = map(val3, 0, 1022, 0, 180);
  
  
  base.write(val);
  elbow.write(val2);
  grip.write(val3);
  
  delay(15);
}
'
            ])

            <p>&nbsp;</p>
        </li>

        <li>
            <p>Click the check button to verify the code.</p>

            @include('_partials.image', [
                'img' => $page->link('assets/build/img/categories/kids/modules/2/arduino/arduino-step-6-1.png'),
                'alt' => 'Verifying the code',
            ])

            <p>&nbsp;</p>

            <p>After verifying, the bottom part should be like this.</p>

            @include('_partials.image', [
                'img' => $page->link('assets/build/img/categories/kids/modules/2/arduino/arduino-step-6-2.png'),
                'alt' => 'Done Compiling'
            ])

            <p>&nbsp;</p>
        </li>

        <li>
            <p>Upload the code to Arduino. Click the arrow button to upload.</p>

            @include('_partials.image', [
                'img' => $page->link('assets/build/img/categories/kids/modules/2/arduino/arduino-step-7.png'),
                'alt' => 'Uploading the code'
            ])
        </li>
    </ol>

    <p>&nbsp;</p>

    <p>And you're done! You can now try your robotic arm!</p>
@endsection


@push('scripts')
    <script src="{{ $page->link(mix('js/codebox.js', 'assets/build')) }}"></script>
@endpush