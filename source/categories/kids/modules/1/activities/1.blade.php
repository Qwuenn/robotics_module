@extends('_layouts.module')

@section('introduction')
    <h1>Line Following Robot</h1>
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
                'title' => '5pcs Jumping Wires',
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
                'component' => 'Resistor',
                'title' => '2pcs 4.7k Ω Resistor',
                'active' => 1
            ])

            @include('_partials.kids.component_symbol', [
                'component' => 'Resistor',
                'id' => 'SecondResistor',
                'title' => '2pcs 220 Ω Resistor',
                'active' => 1
            ])

            @include('_partials.kids.component_symbol', [
                'component' => 'IR Sensor',
                'title' => '2pcs RPR220 Optoelectronic IR Sensor',
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
        <img src="{{ $page->link('assets/build/img/categories/kids/modules/1/circuit-diagram/activity-1.jpg') }}" 
            alt="robot-car-design-1"
            class="img-fluid rounded-2" />
    </div>

    <h5 id="how-does-it-work">How Does It Work?</h5>
    <p> The IR (infrared) sensor, which senses light, is used by the robot. Each sensor controls the speed of the robot. When
        all sensors "detect" white, the robot drives straight and both wheels rotate at maximum speed. When one of the
        sensors detects the black line, it forces one of the robot's wheels to slow down, causing the robot to move so that
        it can continue to follow the line.
    </p>

    <p>&nbsp;</p>

    <h3 id="quiz">Quiz</h3>
    @include('_partials.modal_quiz', [ 
        'modalTitle' => 'Robotics for Kids!',
        'quizHeader' => 'Activity 1 Quiz', 
        'quizDescription' => 'Line Following Robot'
    ])
@endsection

@push('scripts')
    <script src="{{ $page->link(mix('js/quiz.js', 'assets/build')) }}"></script>
    <script>
        $('#quiz-modal-body').quiz({
            questions: [
                {
                    'q': 'Which component serves as the detector of the black line?',
                    'options': [
                        'Diode',
                        'IR Sensor',
                        'MOSFET',
                        'Resistor'
                    ],
                    'correctIndex': 1
                },
                {
                    'q': 'What will happen if the right sensor detects a black line?',
                    'options': [
                        'It will stop',
                        'The robot goes straight',
                        'The robot turns left',
                        'The robot turns right'
                    ],
                    'correctIndex': 3
                },
                {
                    'q': 'What will happen if before the robot turns right?',
                    'options': [
                        'Move forward',
                        'Drive at full speed',
                        'It will slow down',
                        'It will stop',
                    ],
                    'correctIndex': 2
                },
            ]
        });
    </script>
@endpush