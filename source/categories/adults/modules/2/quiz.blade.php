@extends('_layouts.module')

@section('introduction')
    <h1>Quiz</h1>
    <p>&nbsp;</p>
@endsection

@section('content')
    <h5>Click here to begin.</h5>
    @include('_partials.modal_quiz', [
        'modalTitle' => 'Robotics for Adults',
        'quizHeader' => 'Pop-up Quiz',
        'quizDescription' => 'Fire Fighter Robot',
        'buttonText' => 'Pop-up Quiz' 
    ])
@endsection

@push('scripts')
    <script src="{{ $page->link(mix('js/quiz.js', 'assets/build')) }}"></script>
    <script>
        $('#quiz-modal-body').quiz({
            questions: [
                {
                    'q': 'Often refers to whether or not an injured body part, such as a joint or limb, can be moved, but it can also refer to movement in general.',
                    'options': [
                        'Flexibility',
                        'Stability',
                        'Mobility',
                        'Capability'
                    ],
                    'correctIndex': 2
                },
                {
                    'q': 'Is a device that detects the presence of a fire or other bright light sources.',
                    'options': [
                        'Flame Sensor',
                        'Arduino Uno',
                        'Smoke Sensor',
                        'Infrared'
                    ],
                    'correctIndex': 0
                },
                {
                    'q': 'Is a motor module that allows you to control the speed and direction of two motors at the same time.',
                    'options': [
                        'Driver Module',
                        'Motor Driver',
                        'Speed Motor',
                        'Driver'
                    ],
                    'correctIndex': 1
                },
                {
                    'q': 'Are pumping machines that can be submerged in liquids.',
                    'options': [
                        'Immersible Pump',
                        'Submersible Pipe',
                        'Submersible Pump',
                        'Immersible Pipe'
                    ],
                    'correctIndex': 2
                },
                {
                    'q': 'It is made up of a suitable motor connected to a position feedback sensor.',
                    'options': [
                        'Feedback Motor',
                        'Motor Sensor',
                        'Loop Motor',
                        'Servo Motor'
                    ],
                    'correctIndex': 3
                },
                {
                    'q': `
                        <img class="img-fluid mx-auto d-block w-50" src="{{ $page->link('assets/build/img/components/l293d-motor-driver.png') }}" />
                        <p>What component is this called?</p>
                    `,
                    'options': [
                        'Flame Sensor',
                        'Breadboard',
                        'Servo Motor',
                        'Arduino Uno',
                        'L293D Motor Driver'
                    ],
                    'correctIndex': 4
                },
                {
                    'q': `
                        <img class="img-fluid mx-auto d-block w-50" src="{{ $page->link('assets/build/img/components/sg90-servo-motor.png') }}" />
                        <p>What component is this called?</p>
                    `,
                    'options': [
                        'Flame Sensor',
                        'Breadboard',
                        'Servo Motor',
                        'Arduino Uno',
                        'L293D Motor Driver'
                    ],
                    'correctIndex': 2
                },
                {
                    'q': `
                        <img class="img-fluid mx-auto d-block w-50" src="{{ $page->link('assets/build/img/components/breadboard.png') }}" />
                        <p>What component is this called?</p>
                    `,
                    'options': [
                        'Flame Sensor',
                        'Breadboard',
                        'Servo Motor',
                        'Arduino Uno',
                        'L293D Motor Driver'
                    ],
                    'correctIndex': 1
                },
                {
                    'q': `
                        <img class="img-fluid mx-auto d-block w-50" src="{{ $page->link('assets/build/img/components/flame-sensor.png') }}" />
                        <p>What component is this called?</p>
                    `,
                    'options': [
                        'Flame Sensor',
                        'Breadboard',
                        'Servo Motor',
                        'Arduino Uno',
                        'L293D Motor Driver'
                    ],
                    'correctIndex': 0
                },
                {
                    'q': `
                        <img class="img-fluid mx-auto d-block w-50" src="{{ $page->link('assets/build/img/components/arduino-uno-r3.png') }}" />
                        <p>What component is this called?</p>
                    `,
                    'options': [
                        'Flame Sensor',
                        'Breadboard',
                        'Servo Motor',
                        'Arduino Uno',
                        'L293D Motor Driver'
                    ],
                    'correctIndex': 3
                },
                {
                    'q': `
                        <img class="img-fluid mx-auto d-block w-75" src="{{ $page->link('assets/build/img/categories/adults/modules/2/label-circuit-diagram.png') }}" />
                        <p class="mt-4">What is the component called in no. 1?</p>
                    `,
                    'options': [
                        'Motor Driver',
                        'Arduino Uno',
                        'Straight Sensor',
                        'Flame Sensor'
                    ],
                    'correctIndex': 1
                },
                {
                    'q': `
                        <img class="img-fluid mx-auto d-block w-75" src="{{ $page->link('assets/build/img/categories/adults/modules/2/label-circuit-diagram.png') }}" />
                        <p class="mt-4">What is the component called in no. 2?</p>
                    `,
                    'options': [
                        'Straight Sensor',
                        'Flame Sensor',
                        'Left Sensor',
                        'Right Sensor'
                    ],
                    'correctIndex': 3
                },
                {
                    'q': `
                        <img class="img-fluid mx-auto d-block w-75" src="{{ $page->link('assets/build/img/categories/adults/modules/2/label-circuit-diagram.png') }}" />
                        <p class="mt-4">What is the component called in no. 3?</p>
                    `,
                    'options': [
                        'Straight Sensor',
                        'Flame Sensor',
                        'Left Sensor',
                        'Right Sensor'
                    ],
                    'correctIndex': 2
                },
                {
                    'q': `
                        <img class="img-fluid mx-auto d-block w-75" src="{{ $page->link('assets/build/img/categories/adults/modules/2/label-circuit-diagram.png') }}" />
                        <p class="mt-4">What is the component called in no. 4?</p>
                    `,
                    'options': [
                        'Straight Sensor',
                        'Flame Sensor',
                        'Left Sensor',
                        'Right Sensor'
                    ],
                    'correctIndex': 0
                },
                {
                    'q': `
                        <img class="img-fluid mx-auto d-block w-75" src="{{ $page->link('assets/build/img/categories/adults/modules/2/label-circuit-diagram.png') }}" />
                        <p class="mt-4">What is the component called in no. 5?</p>
                    `,
                    'options': [
                        'Left Motor',
                        'Right Motor',
                        'Motor Driver',
                        'Driver Module'
                    ],
                    'correctIndex': 2
                },
                {
                    'q': `
                        <img class="img-fluid mx-auto d-block w-75" src="{{ $page->link('assets/build/img/categories/adults/modules/2/label-circuit-diagram.png') }}" />
                        <p class="mt-4">What is the component called in no. 6?</p>
                    `,
                    'options': [
                        'Left Motor',
                        'Right Motor',
                        'Motor Driver',
                        'Arduino Uno'
                    ],
                    'correctIndex': 0
                },
                {
                    'q': `
                        <img class="img-fluid mx-auto d-block w-75" src="{{ $page->link('assets/build/img/categories/adults/modules/2/label-circuit-diagram.png') }}" />
                        <p class="mt-4">What is the component called in no. 7?</p>
                    `,
                    'options': [
                        'Left Motor',
                        'Right Motor',
                        'Motor Driver',
                        'Arduino Uno'
                    ],
                    'correctIndex': 1
                }
            ]
        });
    </script>
@endpush