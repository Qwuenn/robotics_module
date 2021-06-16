@extends('_layouts.module')

@section('introduction')
    <h1>Assembly</h1>
    <p>&nbsp;</p>
@endsection

@section('table_of_contents')
    @include('_toc.toc', [ 'items' => [
        'Connecting and Testing the Drone Components',
        'Assembly of the Drone and the Controller'
    ]])
@endSection

@section('content')
    <h3 id="connecting-and-testing-the-drone-components">Connecting and Testing the Drone Components</h3>
    
    <ol class="d-grid gap-4">
        <li>
            <p>
                Before soldering the parts of the drone components, first, connect them together using breadboard and jumper wires to
                test if the components are working correctly. Use the circuit diagrams below to properly connect the components.
            </p>
            @include('_partials.image', [
                'img' => $page->link('assets/build/img/categories/teens/modules/2/assembly/1-close-up-of-the-circuit-diagram-of-the-drone.png'),
                'alt' => 'A close up of the circuit diagram of the drone',
                'label' => 'A close up of the circuit diagram of the drone'
            ])

            @include('_partials.image', [
                'img' => $page->link('assets/build/img/categories/teens/modules/2/assembly/2-whole-circuit-diagram-of-the-drone.png'),
                'alt' => 'The whole circuit diagram of the drone',
                'label' => 'The whole circuit diagram of the drone'
            ])
        </li>
        <li>
            <p>
                Double-check the polarity of the components and make sure that the brushless motors are in their proper place. Check for
                the CCW and CW markings.
            </p>
        </li>
        <li>
            <p>
                Connect the Arduino nano to the laptop or desktop using a micro-USB cable. Upload the program below and test the
                circuit. Check if the brushless motors are rotating and the LEDs of the different components are working.
            </p>
        </li>
        <li>
            <p>
                If the drone is not working, check for loose wires and bad connections. Try to use a good solid wire for a better grip
                on the breadboard.
            </p>
        </li>
        <li>
            <p>
                If the drone components are working, do the same to controller components. But upload the controller program and test
                the wireless connectivity between the two. Refer to the circuit diagram of the controller below.
            </p>
            @include('_partials.image', [
                'img' => $page->link('assets/build/img/categories/teens/modules/2/assembly/3-whole-circuit-diagram-of-the-controller.png'),
                'alt' => 'The whole circuit diagram of the controller',
                'label' => 'The whole circuit diagram of the controller'
            ])
        </li>
        <li>
            <p>
                Check the range of wireless connections between the controller and the drone. Use the joystick to make the brushless
                motor move in different directions.
            </p>
        </li>
        <li>
            <p>
                Use the potentiometer to adjust the speed of the drone. The speed of the motor should go slow or fast as you twist the
                potentiometer.
            </p>
        </li>
        <li>
            <p>
                If all of the components are working, then it is time to assemble the drone and the controller.
            </p>
        </li>
    </ol>

    <p>&nbsp;</p>

    <h3 id="assembly-of-the-drone-and-the-controller">Assembly of the Drone and the Controller</h3>

    <ol class="d-grid gap-4">
        <li>
            <p>
                Carefully put the brushless motor on the chassis’ corner and make sure that they fit. Use the screw of the motor to put
                it in place. For extra measure, you can use a glue stick or double-sided tape. <b>But be careful no to put many melted 
                glue sticks as it will add the weight of the drone and can affect performance</b>. Put the wires of the motor inside the 
                chassis.
            </p>
        </li>
        <li>
            <p>
                Connect the motors to each respective electronic speed controller. Check for the polarity. Use double-sided tape to fix
                the ESC in its place. Double-check the connection and make sure to use a multitester to check the continuity of the
                circuit.
            </p>
        </li>
        <li>
            <p>
                Fix the LiPo battery in the middle of the drone and connect the necessary wires from the ESC to the battery. Also fix
                the Arduino nano and the MPU6050 and the NRF24L01 Module on top of the battery. Then refer to the circuit diagram for
                the connection.
            </p>
        </li>
        <li>
            <p>
                Double-check the connections before turning it on. Do the same to the controller component.
            </p>
        </li>
        <li>
            <p>
                Turn on the drone and try to slowly increase the speed of the motor. If the drone lifts from the ground with no
                resistance then you can go outside to test it further.
            </p>
        </li>
        <li>
            <p>
                Once outside, try to hover the drone at 10 meters above the ground. If the drone is flying without issue, try to turn it
                to the left, right, up, down, yaw to the left, yaw to the right, go straight forward, backward, and land it. If the
                drone is having trouble doing it, try to check if the drone’s weight is balanced. Also, check the wires and make sure
                that there’s no loose connection. If there’s no problem with it, then you can now fly your drone!
            </p>
        </li>
        <li>
            Refer to the <a href="{{ $page->link('categories\teens\modules\2/rules-and-safety') }}">Rules and Safety</a> page in
            flying a drone in the Philippines.
        </li>
    </ol>
@endsection