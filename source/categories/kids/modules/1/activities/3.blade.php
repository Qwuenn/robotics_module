@extends('_layouts.module')

@section('introduction')
    <h1>Light Tracker Robot</h1>
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
            @include('_partials.kids.component_card', [
                'component' => 'Power Switch',
                'title' => '1pc Power Switch',
                'active' => 1
            ])
    
            @include('_partials.kids.component_card', [
                'component' => 'Jumping Wires',
                'title' => '9pcs Jumping Wires',
                'active' => 1
            ])
        
            @include('_partials.kids.component_card', [
                'component' => 'Potentiometer',
                'title' => '2pcs Potentiometer',
                'active' => 1
            ])

            @include('_partials.kids.component_card', [
                'component' => 'MOSFET',
                'title' => '2pcs P16NF06L MOSFET',
                'active' => 1
            ])

            @include('_partials.kids.component_card', [
                'component' => 'Photoresistor',
                'title' => '2pcs Photoresistor',
                'active' => 1
            ])

            @include('_partials.kids.component_card', [
                'component' => 'Diode',
                'title' => '2pcs Diode',
                'active' => 1
            ])

            @include('_partials.kids.component_card', [
                'component' => 'Battery Holder',
                'title' => '1pc Battery Holder',
                'active' => 1
            ])

            @include('_partials.kids.component_card', [
                'component' => 'Battery',
                'title' => '4pcs Battery',
                'active' => 1
            ])
        </div>
    </div>

    <p>&nbsp;</p>

    <h3 id="circuit-diagram">Circuit Diagram</h3>
    <div class="container-fluid text-center my-3 p-0">
        <img src="{{ $page->link('assets/build/img/categories/kids/modules/1/circuit-diagram/activity-3.jpg') }}" 
            alt="robot-car-design-1"
            class="img-fluid rounded-2" />
    </div>

    <h5 id="how-does-it-work">How Does It Work?</h5>
    <p> The motors are connected to the wheels and it causes them to move forward and drive around. If both sensors sense
        the same amount of light, the wheels rotate at the same speed, and the robot travels straight. If one light sensor
        sees more light than the other, one of the wheels would rotate faster, causing the robot to move.
    </p>

    <p>&nbsp;</p>

    <h3 id="quiz">Quiz</h3>
    @include('_partials.modal_quiz', [ 
        'modalTitle' => 'Robotics for Kids!',
        'quizHeader' => 'Activity 3 Quiz', 
        'quizDescription' => 'Light Tracker Robot'
    ])
@endsection

@push('scripts')
    <script src="{{ $page->link(mix('js/quiz.js', 'assets/build')) }}"></script>
    <script>
        $('#quiz-modal-body').quiz({
            questions: [
                {
                    'q': 'Which component serves as the light detector?',
                    'options': [
                        'Photoresistor',
                        'Potentiometer',
                        'MOSFET',
                        'Diode'
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
                        'Speed'
                    ],
                    'correctIndex': 1,
                    'correctResponse': 'Correct!',
                    'incorrectResponse': 'Wrong Answer'
                },
                {
                    'q': 'What component is used to adjust the light sensitivity?',
                    'options': [
                        'Photoresistor',
                        'Potentiometer',
                        'MOSFET',
                        'Diode',
                    ],
                    'correctIndex': 1,
                    'correctResponse': 'Correct!',
                    'incorrectResponse': 'Wrong Answer'
                },
            ]
        });
    </script>
@endpush