@extends('_layouts.module')

@section('introduction')
    <h1>Obstacle Avoidance Robot</h1>
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
                'title' => '11pcs Jumping Wires',
                'active' => 1
            ])

            @include('_partials.kids.component_symbol', [
                'component' => 'H-Bridge Motor Driver',
                'title' => '1pc L293D H-bridge Motor Driver',
                'active' => 1
            ])

            @include('_partials.kids.component_symbol', [
                'component' => 'Resistor',
                'id' => 'SecondResistor',
                'title' => '4pcs 10 kΩ Resistor',
                'active' => 1
            ])

            @include('_partials.kids.component_symbol', [
                'component' => 'Limit Switch',
                'title' => '2pcs Limit Switch',
                'active' => 1
            ])

            @include('_partials.kids.component_symbol', [
                'component' => 'DC Motor',
                'title' => '2pcs 12v DC Motor',
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
        <img src="{{ $page->link('assets/build/img/categories/kids/modules/1/circuit-diagram/activity-2.jpg') }}" 
            alt="robot-car-design-1"
            class="img-fluid rounded-2" />
    </div>

    <h5 id="how-does-it-work">How Does It Work?</h5>
    <p> The robot has two wheels attached to the motor. As the motor spins, it keeps moving forward. However, if the limit
        switch detects some obstacle, it causes the wheel on the opposite side to move backward and steer away from the
        obstacle.
    </p>

    <p>&nbsp;</p>

    <h3 id="quiz">Quiz</h3>
    @include('_partials.modal_quiz', [ 
        'modalTitle' => 'Robotics for Kids!',
        'quizHeader' => 'Activity 2 Quiz', 
        'quizDescription' => 'Obstacle Avoidance Robot'
    ])
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
                    'correctIndex': 2
                },
                {
                    'q': 'Which components serve as the sensor in avoiding obstacles?',
                    'options': [
                        'Limit Switch',
                        'L293D H-Bridge Motor Driver',
                        'Jumping Wires',
                        '10 kΩ Resistor'
                    ],
                    'correctIndex': 0
                },
                {
                    'q': 'What parameter does the sensor used in this circuit detects?',
                    'options': [
                        'Sound',
                        'Light',
                        'Obstacle',
                        'Distance',
                    ],
                    'correctIndex': 2
                },
            ]
        });
    </script>
@endpush