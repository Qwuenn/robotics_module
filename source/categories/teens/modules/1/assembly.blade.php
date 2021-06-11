@extends('_layouts.module')

@section('introduction')
    <h1>Assembly</h1>
    <p>&nbsp;</p>
@endsection

@section('table_of_contents')
    @include('_toc.toc', ['items' => [
        'Connecting and Testing the Components',
        'Assembly of the Sumo Bot and Testing'
    ]])
@endSection

@section('content')
    <h3 id="connecting-and-testing-the-components" class="mb-4">Connecting and Testing the Components</h3>
    <ol class="d-grid gap-4">
        <li>
            <p>
                Using a breadboard and jumper wires, connect every component as what is shown on the circuit diagram.
            </p>
            @include('_partials.image', [
                'img' => $page->link('assets/build/img/categories/teens/modules/1/assembly.png'),
                'alt' => 'Fritzing',
                'label' => 'Top View'
            ])
        </li>
        <li>
            <p>
                Power up Arduino UNO by connecting it to your desktop/laptop. Open Arduino Desktop IDE. Select a code from one to
                three below. Each code can make the sumo bot behave differently so choose what suits your style.
            </p>
        </li>
        <li>
            <p>
                Verify the code before running to check if there’s any error. If no error is detected, click upload and check if the
                motors, infrared and ultrasonic sensors are working. If not, then check for the connections, there may be some loose
                wire.
            </p>
        </li>
        <li>
            <p>
                If the components are working perfectly, then you can now start building it on the design chassis that you choose.
            </p>
        </li>
    </ol>

    <p>&nbsp;</p>

    <h3 id="assembly-of-the-sumo-bot-and-testing" class="mb-4">Assembly of the Sumo Bot and Testing</h3>
    <ol class="d-grid gap-4">
        <li>
            <p>
                Assemble the robot by carefully attaching the connected components to the 3D printed Sumo Bot Chassis. Always check
                if the components are properly connected and in place.
            </p>
        </li>
        <li>
            <p>
                Try to run the Sumo bot on a circle to check if it's properly working. If not, check the connections. Also, check the
                battery if it has enough juice to run the bot.
            </p>
        </li>
        <li>
            <p>
                If there’s no problem running it, then the Sumo fight can begin! The mechanics of the game is simple, defeat the
                opponent’s robot by pushing it outside the white circle. This is the exciting part because the robots behave differently
                based on their program codes so the users will be able to strategize what style they need to win. They can also design
                their own Sumo Bot by editing the existing codes and upload another program to make it their personalized Sumo Bot.
            </p>
        </li>
    </ol>
    <p>
        This activity will show how to use the Ultrasonic Sensor and the IR Sensor in conjunction with the Sumo Bot. The users
        can design their own sumo bot that will challenge their creativity and be able to strategize how the sumo bot will react
        once it detects its target.
    </p>
@endsection