@extends('_layouts.module')

@section('introduction')
    <h1>Sumo Bot (Sumo Robot)</h1>
    <p>&nbsp</p>
@endsection

@section('table_of_contents')
    <li><a href="#robotic-sumo">Robotic Sumo</a></li>
    <li><a href="#components">Components</a></li>
    <li>
        <a href="#designs-of-sumo-bot">Designs of Sumo Bot</a>
        <ul>
            <li><a href="#design-based-on-speed-(barry)">Design Based on<br>Speed (Barry)</a></li>
            <li><a href="#design-based-on-power-(bruce)">Design Based on Power<br>(Bruce) </a></li>
            <li><a href="#design-based-on-both-power-and-speed-(clark)">Design Based on Both<br>Power and Speed<br>(Clark)</a></li>
        </ul>
    </li>
    <li>
        <a href="#assembly">Assembly</a>
        <ul>
            <li><a href="#connecting-and-testing-the-components">Connecting and <br>Testing the Components</a></li>
            <li><a href="#assembly-of-the-sumo-bot-and-testing">Assembly of the Sumo<br>Bot and Testing</a></li>
        </ul>
    </li>
@endSection

@section('content')
    <h3 id="robotic-sumo">Robotic Sumo</h3>
    <p>
        Robotic Sumo or “Robot Sumo” is a competitive match between two sumo bots based on the national sport of Japan, “Sumo
        Wrestling.” The robot in a match must find the enemy using infrared and ultrasonic sensors and push the enemy robot out
        of the black and flat circle arena called “dohyo” within three minutes. Each match has three rounds and the sumo bot
        with two victorious rounds wins the match.
    </p>

    <p>&nbsp</p>

    <h3 id="components">Components</h3>
    <p>
        Below are the components that will be used for the Sumo Bot and their specific functions:
    </p>

    <div class="container-fluid">
        <div class="row row-cols-1 gy-5">
            @include('categories.teens._partials.component_card', [
                'component' => 'Arduino Uno R3',
                'title' => 'Arduino UNO R3 Controller Board',
                'description' => '
                    The Arduino Uno R3 is the latest revision of the Arduino Uno microcontroller based on the ATmega328. It has 20 digital
                    I/O and programs can be loaded onto it from the computer using Arduino IDE. The Arduino UNO R3 will be used as the brain
                    of the Sumo Bot.
                '
            ])

            @include('categories.teens._partials.component_card', [
                'component' => 'L298N Motor Driver',
                'description' => '
                    The L298N Motor Driver is used for controlling up to 4 DC motors with directional and speed control. The L298N motor
                    driver will be used to control the two 12V Geared DC Motors for the Sumo Bot movement of legs with a constant supply of
                    voltage.
                '
            ])

            @include('categories.teens._partials.component_card', [
                'component' => 'Ultrasonic Sensor (HC-SR04)',
                'description' => '
                    The HC-SR04 ultrasonic sensor makes use of sonar to figure out the distance to an object. It gives better non-contact
                    range detection with high accuracy and consistent readings. It will be usually placed at the top of the robot, the
                    HC-SR04 is used to locate the distance of objects to avoid a collision.
                '
            ])

            @include('categories.teens._partials.component_card', [
                'component' => 'IR Sensor (TCRT5000)',
                'description' => '
                    The TCRT5000 IR sensor can detect the location of an object or other reflective surface in front of it. Also, with some
                    level of programming, it can calculate the distance of the object in front of it. The TCRT5000 is used to distinguish
                    the colors of the ring (black and white) so the Sumo Bot will not fall out of the ring.
                '
            ])

            @include('categories.teens._partials.component_card', [
                'component' => '12V Geared DC Motor',
                'description' => '
                    The 12V Geared DC motor is a small and low-cost but powerful motor used mainly for small to medium size RC applications.
                    The gear addition helps reduce the speed while increasing torque output. The Geared DC motor allows the robot to
                    maneuver the surface of the ring with ease and little power needed.
                '
            ])

            @include('categories.teens._partials.component_card', [
                'component' => '9V Battery',
                'description' => '
                    The 9V battery is a common size battery used mainly for electronic devices such as smoke detectors, clocks,
                    walkie-talkies, etc. The 9V battery will be used to power the Arduino UNO R3.
                '
            ])

            @include('categories.teens._partials.component_card', [
                'component' => '1.5V Battery',
                'description' => '
                    The 1.5V battery is a common household battery that powers most portable electronic devices. It can be a disposable or
                    rechargeable one. Four 1.5V batteries in the battery housing will power the two 12V Geared DC Motor so the wheels can
                    have the full force of the motor.
                '
            ])

            @include('categories.teens._partials.component_card', [
                'component' => 'Rocker Switch',
                'description' => '
                    Rocker Switch is a type of switch that can be pressed like a seesaw to connect or disconnect an electric circuit. It
                    will be used to turn ON/OFF the Arduino UNO R3 to preserve battery juice.
                '
            ])

            @include('categories.teens._partials.component_card', [
                'component' => 'Jumper Wires',
                'description' => '
                    Jumper Wires are electrical wires used to connect different components and microcontrollers without the hassle of
                    soldering them. It is used primarily in connecting components in a breadboard and other prototype devices.
                '
            ])
        </div>
    </div>

    <p>&nbsp</p>
    <p>&nbsp</p>
    <p>&nbsp</p>

    <h3 id="designs-of-sumo-bot">Designs of Sumo Bot</h3>
    <p>
        The Sumo Bots have three designs to have uniqueness between each other, for visual representation as well as for the
        compatibility with the preferred fighting style.
    </p>

    <p>&nbsp</p>

    <h5 id="design-based-on-speed-(barry)" class="mb-4">Design Based on Speed (Barry)</h5>
    <p>
        The design is solely focusing on speed and using a high gear ratio (large gear turning a small gear) to surprise an
        enemy with a fast attack. It can maneuver the dohyo with ease and it can also confuse slow-moving enemy. But due to low
        pushing power, it can’t win a face-to-face pushing and it can be easily overwhelmed.
    </p>
    <div class="container-fluid text-center p-0">
        <div class="row row-cols-1 gy-4">
            <div class="col">
                <img src="{{ $page->link('assets/build/img/categories/teens/design/barry-isometric.png') }}" 
                    alt="Barry Isometric View"
                    class="img-fluid rounded-2" />
                <p class="fst-italic">Isometric View</p>
            </div>
            <div class="col">
                <img src="{{ $page->link('assets/build/img/categories/teens/design/barry-side.png') }}" 
                    alt="Barry Side View"
                    class="img-fluid rounded-2" />
                <p class="fst-italic">Side View</p>
            </div>
        </div>
    </div>

    <p>&nbsp</p>

    <h5 id="design-based-on-power-(bruce)" class="mb-4">Design Based on Power (Bruce)</h5>
    <p>
        Using a low gear ratio (small gear turning a large gear), this design uses its high power output to push enemies out of
        the dohyo. It can withstand a long time in pushing each other compared to the design based on speed. But due to its
        power being diverted to pushing than speed, it is a slow-moving Sumo Bot and it is vulnerable to surprise and fast
        attack.
    </p>
    <div class="container-fluid text-center p-0">
        <div class="row row-cols-1 gy-4">
            <div class="col">
                <img src="{{ $page->link('assets/build/img/categories/teens/design/bruce-isometric.png') }}" 
                    alt="Bruce Isometric View"
                    class="img-fluid rounded-2" />
                <p class="fst-italic">Isometric View</p>
            </div>
            <div class="col">
                <img src="{{ $page->link('assets/build/img/categories/teens/design/bruce-side.png') }}" 
                    alt="Bruce Side View"
                    class="img-fluid rounded-2" />
                <p class="fst-italic">Side View</p>
            </div>
        </div>
    </div>

    <p>&nbsp</p>

    <h5 id="design-based-on-both-power-and-speed-(clark)" class="mb-4">Design Based on Both Power and Speed (Clark)</h5>
    <p>
        The design incorporates both speed and power into the Sumo Bot and uses a medium gear ratio to balance out the elements.
        This is ideal for those who love to have a match with flexibility.
    </p>
    <div class="container-fluid text-center p-0">
        <div class="row row-cols-1 gy-4">
            <div class="col">
                <img src="{{ $page->link('assets/build/img/categories/teens/design/clark-isometric.png') }}" 
                    alt="Clark Isometric View"
                    class="img-fluid rounded-2" />
                <p class="fst-italic">Isometric View</p>
            </div>
            <div class="col">
                <img src="{{ $page->link('assets/build/img/categories/teens/design/clark-top.png') }}" 
                    alt="Clark Side View"
                    class="img-fluid rounded-2" />
                <p class="fst-italic">Top View</p>
            </div>
        </div>
    </div>

    <p>&nbsp</p>

    <h3 id="assembly">Assembly</h3>

    <p>&nbsp</p>

    <h5 id="connecting-and-testing-the-components" class="mb-4">Connecting and Testing the Components</h5>
    <ol class="d-grid gap-4">
        <li>
            Using a breadboard and jumper wires, connect every component as what is shown on the circuit diagram.
            <img src="{{ $page->link('assets/build/img/categories/teens/assembly.png') }}" 
                alt="Fritzing"
                class="img-fluid rounded-2 text-center my-4" />
        </li>
        <li>
            Power up Arduino UNO by connecting it to your desktop/laptop. Open Arduino Desktop IDE. Select a code from one to
            three below. Each code can make the sumo bot behave differently so choose what suits your style.
        </li>
        <li>
            Verify the code before running to check if there’s any error. If no error is detected, click upload and check if the
            motors, infrared and ultrasonic sensors are working. If not, then check for the connections, there may be some loose
            wire.
        </li>
        <li>
            If the components are working perfectly, then you can now start building it on the design chassis that you choose.
        </li>
    </ol>

    <p>&nbsp</p>

    <h5 id="assembly-of-the-sumo-bot-and-testing" class="mb-4">Assembly of the Sumo Bot and Testing</h5>
    <ol class="d-grid gap-4">
        <li>
            Assemble the robot by carefully attaching the connected components to the 3D printed Sumo Bot Chassis. Always check
            if the components are properly connected and in place.
        </li>
        <li>
            Try to run the Sumo bot on a circle to check if it's properly working. If not, check the connections. Also, check the
            battery if it has enough juice to run the bot.
        </li>
        <li>
            If there’s no problem running it, then the Sumo fight can begin! The mechanics of the game is simple, defeat the
            opponent’s robot by pushing it outside the white circle. This is the exciting part because the robots behave differently
            based on their program codes so the users will be able to strategize what style they need to win. They can also design
            their own Sumo Bot by editing the existing codes and upload another program to make it their personalized Sumo Bot.
        </li>
    </ol>
    <p>
        This activity will show how to use the Ultrasonic Sensor and the IR Sensor in conjunction with the Sumo Bot. The users
        can design their own sumo bot that will challenge their creativity and be able to strategize how the sumo bot will react
        once it detects its target.
    </p>
@endsection