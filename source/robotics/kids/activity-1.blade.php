@extends('_layouts.module')

@section('introduction')
    <h1><b>Line Following Robot</b></h1>
    <p>&nbsp</p>
@endsection

@section('table_of_contents')
    <li>
        <a href="#components">Components</a>
    </li>
    <li>
        <a href="#circuit-diagram">Circuit Diagram</a>
    </li>
    <li>
        <a href="#how-does-it-work">How does it work?</a>
    </li>
    <li>
        <a href="#quiz">Quiz</a>
    </li>
@endSection

@section('content')
    <h3 id="components"><b>Components</b></h3>

    <div class="container-fluid mt-3 p-0">
        <div class="row gy-5">
            @include('_partials.component_card', [
                'component' => 'Power Switch',
                'title' => '1pc Power Switch',
                'active' => 1
            ])
    
            @include('_partials.component_card', [
                'component' => 'Jumping Wires',
                'title' => '5pcs Jumping Wires',
                'active' => 1
            ])
        
            @include('_partials.component_card', [
                'component' => 'MOSFET',
                'title' => '2pcs P16NF06L MOSFET',
                'active' => 1
            ])

            @include('_partials.component_card', [
                'component' => 'Diode',
                'title' => '2pcs PN Diode',
                'active' => 1
            ])

            @include('_partials.component_card', [
                'component' => 'Resistor',
                'title' => '2pcs 4.7k Ω Resistor',
                'active' => 1
            ])

            @include('_partials.component_card', [
                'component' => 'Resistor',
                'id' => 'SecondResistor',
                'title' => '2pcs 220 Ω Resistor',
                'active' => 1
            ])

            @include('_partials.component_card', [
                'component' => 'IR Sensor',
                'title' => '2pcs RPR220 Optoelectronic IR Sensor',
                'active' => 1
            ])
        
            @include('_partials.component_card', [
                'component' => 'DC Motor',
                'title' => '2pcs 12v DC Motor',
                'active' => 1
            ])

            @include('_partials.component_card', [
                'component' => 'Battery',
                'id' => 'BatteryHolder',
                'title' => '1pc Battery Holder',
                'active' => 1
            ])

            @include('_partials.component_card', [
                'component' => 'Battery',
                'title' => '4pcs AA Battery'
            ])
        </div>
    </div>

    <p>&nbsp</p>

    <h3 id="circuit-diagram"><b>Circuit Diagram</b></h3>
    <div class="container-fluid text-center my-3 p-0">
        <img src="{{ $page->link('assets/build/img/robotics/kids/circuit-diagram/activity-1.jpg') }}" 
            alt="robot-car-design-1"
            class="img-fluid rounded-2" />
    </div>

    <h5 id="how-does-it-work"><b>How Does It Work?</b></h5>
    <p> The IR (infrared) sensor, which senses light, is used by the robot. Each sensor controls the speed of the robot. When
        all sensors "detect" white, the robot drives straight and both wheels rotate at maximum speed. When one of the
        sensors detects the black line, it forces one of the robot's wheels to slow down, causing the robot to move so that
        it can continue to follow the line.
    </p>

    <p>&nbsp</p>

    @include('_partials.modal_quiz', [ 'activityNo' => 1, 'title' => 'Line Following Robot'])
@endsection

@push('scripts')
    <script src="{{ $page->link(mix('js/quiz.js', 'assets/build')) }}"></script>
    <script>
        $('#quiz').quiz({
            questions: [
                {
                    'q': 'Which component serves as the detector of the black line?',
                    'options': [
                        'Diode',
                        'IR Sensor',
                        'MOSFET',
                        'Resistor'
                    ],
                    'correctIndex': 1,
                    'correctResponse': 'Correct!',
                    'incorrectResponse': 'Wrong Answer'
                },
                {
                    'q': 'What will happen if the right sensor detects a black line?',
                    'options': [
                        'It will stop',
                        'The robot goes straight',
                        'The robot turns left',
                        'The robot turns right'
                    ],
                    'correctIndex': 3,
                    'correctResponse': 'Correct!',
                    'incorrectResponse': 'Wrong Answer'
                },
                {
                    'q': 'What will happen if before the robot turns right?',
                    'options': [
                        'Move forward',
                        'Drive at full speed',
                        'It will slow down',
                        'It will stop',
                    ],
                    'correctIndex': 2,
                    'correctResponse': 'Correct!',
                    'incorrectResponse': 'Wrong Answer'
                },
            ]
        })
    </script>
@endpush