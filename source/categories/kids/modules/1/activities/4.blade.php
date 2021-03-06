@extends('_layouts.module')

@section('introduction')
    <h1>Motion Tracker Robot</h1>
    <p>&nbsp;</p>
@endsection

@section('table_of_contents')
    @include('_toc.toc', [ 'items' => [
        'Components',
        'Circuit Diagram',
        'How does it work?',
        'Quiz'
    ]])
@endSection

@section('content')
    <h3 id="components">Components</h3>

    <div class="container-fluid mt-3 p-0">
        <div class="row gy-5">
            @include('_partials.kids.component_symbol', [
                'component' => 'Power Switch',
                'title' => '1pc Power Switch',
                'active' => 1
            ])

            @include('_partials.kids.component_symbol', [
                'component' => 'Jumping Wires',
                'title' => '7pcs Jumping Wires',
                'active' => 1
            ])

            @include('_partials.kids.component_symbol', [
                'component' => 'Jumping Wires',
                'id' => 'MaleFemaleJumperWire',
                'title' => 'Male-Female Jumper Wire',
                'active' => 1
            ])

            @include('_partials.kids.component_symbol', [
                'component' => 'MOSFET',
                'title' => '2pcs P16NF06L MOSFET',
                'active' => 1
            ])

            @include('_partials.kids.component_symbol', [
                'component' => 'Diode',
                'title' => '2pcs PN Diode',
                'active' => 1
            ])

            @include('_partials.kids.component_symbol', [
                'component' => 'PIR Sensor',
                'title' => '1pc PIR Sensor',
                'active' => 1
            ])

            @include('_partials.kids.component_symbol', [
                'component' => 'DC Motor',
                'title' => '2pcs DC Motor',
                'active' => 1
            ])

            @include('_partials.kids.component_symbol', [
                'component' => 'Battery Holder',
                'title' => '1pc Battery Holder',
                'active' => 1
            ])

            @include('_partials.kids.component_symbol', [
                'component' => 'Battery',
                'title' => '4pcs AA Battery',
                'active' => 1
            ])
        </div>
    </div>

    <p>&nbsp;</p>

    <h3 id="circuit-diagram">Circuit Diagram</h3>
    <div class="container-fluid text-center my-3 p-0">
        <img src="{{ $page->link('assets/build/img/categories/kids/modules/1/circuit-diagram/activity-4.jpg') }}" 
            alt="robot-car-design-1"
            class="img-fluid rounded-2" />
    </div>

    <h5 id="how-does-it-work">How Does It Work?</h5>
    <p> The robot uses a passive infrared (PIR) sensor to track infrared light shifts. If a person does not move, even if
        they do emit infrared light, the sensor will not trigger. However, if a human passes through a sensor, it detects a
        moving infrared light source and it will trigger the robot to make it move.
    </p>

    <p>&nbsp;</p>

    <h3 id="quiz">Quiz</h3>
    @include('_partials.modal_quiz', [ 
        'modalTitle' => 'Robotics for Kids!',
        'quizHeader' => 'Activity 4 Quiz', 
        'quizDescription' => 'Motion Tracker Robot'
    ])
@endsection

@push('scripts')
    <script src="{{ $page->link(mix('js/quiz.js', 'assets/build')) }}"></script>
    <script>
        $('#quiz-modal-body').quiz({
            questions: [
                {
                    'q': 'What sensor do we use to detect the motion using infrared lights?',
                    'options': [
                        'IR Sensor',
                        'Photoresistor',
                        'Thermistor',
                        'PIR Sensor'
                    ],
                    'correctIndex': 3
                },
                {
                    'q': 'What will happen if the sensor detects a person who does not move?',
                    'options': [
                        'It will accelerate',
                        'The wheels will turn',
                        'It will stop',
                        'It will reverse'
                    ],
                    'correctIndex': 2
                },
                {
                    'q': 'What will happen if the sensor detects a person moving?',
                    'options': [
                        'It will accelerate',
                        'The wheels will turn',
                        'It will stop',
                        'It will reverse',
                    ],
                    'correctIndex': 0
                },
            ]
        });
    </script>
@endpush