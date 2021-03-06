@extends('_layouts.module')

@section('introduction')
    <h1>Rover Robot Car</h1>
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
                'title' => '3pcs Jumping Wires',
                'active' => 1
            ])

            @include('_partials.kids.component_symbol', [
                'component' => 'Potentiometer',
                'title' => '2pcs Potentiometer',
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
        <img src="{{ $page->link('assets/build/img/categories/kids/modules/1/circuit-diagram/activity-5.jpg') }}" 
            alt="robot-car-design-1"
            class="img-fluid rounded-2" />
    </div>

    <h5 id="how-does-it-work">How Does It Work?</h5>
    <p> This is just a simple rover robot car because it only relies on the potentiometer. The speed of the robot will
        depend on the potentiometer so the kids can adjust the speed of the robot whenever they want. If they switch the
        potentiometer to ???high???, the motor will accelerate its speed and if they switch the potentiometer to ???low???, the
        motor will slow down.
    </p>

    <p>&nbsp;</p>

    <h3 id="quiz">Quiz</h3>
    @include('_partials.modal_quiz', [ 
        'modalTitle' => 'Robotics for Kids!',
        'quizHeader' => 'Activity 5 Quiz', 
        'quizDescription' => 'Rover Robot Car'
    ])
@endsection

@push('scripts')
    <script src="{{ $page->link(mix('js/quiz.js', 'assets/build')) }}"></script>
    <script>
        $('#quiz-modal-body').quiz({
            questions: [
                {
                    'q': 'What component will be used to control the speed of the robot?',
                    'options': [
                        'Potentiometer',
                        'Jumping Wires',
                        'DC Motor',
                        'IR Sensor'
                    ],
                    'correctIndex': 0
                },
                {
                    'q': 'What will happen if you turn the potentiometer to \'high\'?',
                    'options': [
                        'It will stop',
                        'It will slow down',
                        'It will accelerate',
                        'It will turn right'
                    ],
                    'correctIndex': 2
                },
                {
                    'q': 'What will happen if you turn the potentiometer to \'low\'?',
                    'options': [
                        'It will stop',
                        'It will slow down',
                        'It will accelerate',
                        'It will turn right',
                    ],
                    'correctIndex': 1
                },
            ]
        });
    </script>
@endpush