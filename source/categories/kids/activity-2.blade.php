@extends('_layouts.module')

@section('introduction')
    <h1><b>Obstacle Avoidance Robot</b></h1>
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
                'title' => '11pcs Jumping Wires',
                'active' => 1
            ])

            @include('_partials.component_card', [
                'component' => 'H-Bridge Motor Driver',
                'title' => '1pc L293D H-bridge Motor Driver',
                'active' => 1
            ])

            @include('_partials.component_card', [
                'component' => 'Resistor',
                'id' => 'SecondResistor',
                'title' => '4pcs 10 kΩ Resistor',
                'active' => 1
            ])

            @include('_partials.component_card', [
                'component' => 'Limit Switch',
                'title' => '2pcs Limit Switch',
                'active' => 1
            ])

            @include('_partials.component_card', [
                'component' => 'DC Motor',
                'title' => '2pcs 12v DC Motor',
                'active' => 1
            ])

            @include('_partials.component_card', [
                'component' => 'Battery Holder',
                'title' => '1pc Battery Holder',
                'active' => 1
            ])

            @include('_partials.component_card', [
                'component' => 'Battery',
                'title' => '4pcs AA Battery',
                'active' => 1
            ])
        </div>
    </div>

    <p>&nbsp</p>

    <h3 id="circuit-diagram"><b>Circuit Diagram</b></h3>
    <div class="container-fluid text-center my-3 p-0">
        <img src="{{ $page->link('assets/build/img/categories/kids/circuit-diagram/activity-2.jpg') }}" 
            alt="robot-car-design-1"
            class="img-fluid rounded-2" />
    </div>

    <h5 id="how-does-it-work"><b>How Does It Work?</b></h5>
    <p> The robot has two wheels attached to the motor. As the motor spins, it keeps moving forward. However, if the limit
        switch detects some obstacle, it causes the wheel on the opposite side to move backward and steer away from the
        obstacle.
    </p>

    <p>&nbsp</p>

    @include('_partials.modal_quiz', [ 'activityNo' => 2, 'title' => 'Obstacle Avoidance Robot'])
@endsection

@push('scripts')
    <script src="{{ $page->link(mix('js/quiz.js', 'assets/build')) }}"></script>
    <script>
        $('#quiz-modal-body').quiz({
            questions: [
                {
                    'q': 'What happens if the train detects an obstacle?',
                    'options': [
                        'It stops',
                        'The train will drive slowly',
                        'It moves on the opposite side of the wheel',
                        'It keeps moving forward'
                    ],
                    'correctIndex': 2,
                    'correctResponse': 'Correct!',
                    'incorrectResponse': 'Wrong Answer'
                },
                {
                    'q': 'Which components serve as the sensor in avoiding obstacles?',
                    'options': [
                        'Limit Switch',
                        'L293D H-Bridge Motor Driver',
                        'Jumping Wires',
                        '10 kΩ Resistor'
                    ],
                    'correctIndex': 0,
                    'correctResponse': 'Correct!',
                    'incorrectResponse': 'Wrong Answer'
                },
                {
                    'q': 'What parameter does the sensor used in this circuit detects?',
                    'options': [
                        'Sound',
                        'Light',
                        'Obstacle',
                        'Distance',
                    ],
                    'correctIndex': 2,
                    'correctResponse': 'Correct!',
                    'incorrectResponse': 'Wrong Answer'
                },
            ]
        });
    </script>
@endpush