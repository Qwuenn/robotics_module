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
        'quizDescription' => 'Module 1',
        'buttonText' => 'Pop-up Quiz' 
    ])
@endsection

@push('scripts')
    <script src="{{ $page->link(mix('js/quiz.js', 'assets/build')) }}"></script>
    <script>
        $('#quiz-modal-body').quiz({
            questions: [
                {
                    'q': 'A branch of engineering that deals with the design and application.',
                    'options': [
                        'Electronics',
                        'Robotics',
                        'Programming',
                        'Mechatronics'
                    ],
                    'correctIndex': 1
                },
                {
                    'q': 'Also known as a "pot," is a three-terminal mechanically operated rotary analogue device found and used in a wide range of electrical and electronic circuits.',
                    'options': [
                        'Three-way Switch',
                        'Potentiometer',
                        'Voltmeter',
                        'Ohmmeter'
                    ],
                    'correctIndex': 1
                },
                {
                    'q': 'A rotary or linear actuator capable of precisely controlling angular or linear position, velocity, and acceleration.',
                    'options': [
                        'Servo Motor',
                        'Micro Stepper Motor',
                        'Brushless DC Motor',
                        'Dynamo Motor'
                    ],
                    'correctIndex': 0
                },
                {
                    'q': 'A Microchip ATmega328P-based open-source microcontroller board.',
                    'options': [
                        'Semi-conductor',
                        'Resistor',
                        'Arduino',
                        'Capacitor'
                    ],
                    'correctIndex': 2
                },
                {
                    'q': 'A rectangular plastic board with a bunch of tiny holes in it.',
                    'options': [
                        'Breadboard',
                        'Chip Board',
                        'Universal PCB',
                        'Motherboard'
                    ],
                    'correctIndex': 0
                },
                {
                    'q': 'A simply wires that have connector pins at each end, allowing them to be used to connect two points to each other without soldering.',
                    'options': [
                        'Extension Wire',
                        'Wire',
                        'Alligator Clip',
                        'Jumping Wire'
                    ],
                    'correctIndex': 3
                },
                {
                    'q': 'What is the symbol of the resistor?',
                    'options': [
                        '<img class="img-fluid" src="{{ $page->link('assets/build/img/categories/adults/modules/1/quiz/servo-motor.png') }}" />',
                        '<img class="img-fluid" src="{{ $page->link('assets/build/img/categories/adults/modules/1/quiz/potentiometer.png') }}" />',
                        '<img class="img-fluid" src="{{ $page->link('assets/build/img/categories/adults/modules/1/quiz/battery.png') }}" />',
                        '<img class="img-fluid" src="{{ $page->link('assets/build/img/categories/adults/modules/1/quiz/resistor.png') }}" />'
                    ],
                    'correctIndex': 3
                },
                {
                    'q': 'What is the symbol of the potentiometer?',
                    'options': [
                        '<img class="img-fluid" src="{{ $page->link('assets/build/img/categories/adults/modules/1/quiz/servo-motor.png') }}" />',
                        '<img class="img-fluid" src="{{ $page->link('assets/build/img/categories/adults/modules/1/quiz/potentiometer.png') }}" />',
                        '<img class="img-fluid" src="{{ $page->link('assets/build/img/categories/adults/modules/1/quiz/battery.png') }}" />',
                        '<img class="img-fluid" src="{{ $page->link('assets/build/img/categories/adults/modules/1/quiz/resistor.png') }}" />'
                    ],
                    'correctIndex': 1
                },
                {
                    'q': 'What is the symbol of the servo motor?',
                    'options': [
                        '<img class="img-fluid" src="{{ $page->link('assets/build/img/categories/adults/modules/1/quiz/servo-motor.png') }}" />',
                        '<img class="img-fluid" src="{{ $page->link('assets/build/img/categories/adults/modules/1/quiz/potentiometer.png') }}" />',
                        '<img class="img-fluid" src="{{ $page->link('assets/build/img/categories/adults/modules/1/quiz/battery.png') }}" />',
                        '<img class="img-fluid" src="{{ $page->link('assets/build/img/categories/adults/modules/1/quiz/resistor.png') }}" />'
                    ],
                    'correctIndex': 0
                },
                {
                    'q': 'What is the symbol of the battery?',
                    'options': [
                        '<img class="img-fluid" src="{{ $page->link('assets/build/img/categories/adults/modules/1/quiz/servo-motor.png') }}" />',
                        '<img class="img-fluid" src="{{ $page->link('assets/build/img/categories/adults/modules/1/quiz/potentiometer.png') }}" />',
                        '<img class="img-fluid" src="{{ $page->link('assets/build/img/categories/adults/modules/1/quiz/battery.png') }}" />',
                        '<img class="img-fluid" src="{{ $page->link('assets/build/img/categories/adults/modules/1/quiz/resistor.png') }}" />'
                    ],
                    'correctIndex': 2
                },
                {
                    'q': `
                        <img class="img-fluid mx-auto d-block" src="{{ $page->link('assets/build/img/categories/adults/modules/1/quiz/label-arduino-components.png') }}" />
                        <p class="mt-4">What is the Arduino component in no. 1?</p>
                    `,
                    'options': [
                        'Reset Switch',
                        'Power Port',
                        'USB Interface Chip',
                        'USB Connector'
                    ],
                    'correctIndex': 0
                },
                {
                    'q': `
                        <img class="img-fluid mx-auto d-block" src="{{ $page->link('assets/build/img/categories/adults/modules/1/quiz/label-arduino-components.png') }}" />
                        <p class="mt-4">What is the Arduino component in no. 2?</p>
                    `,
                    'options': [
                        'Reset Switch',
                        'Power Port',
                        'USB Interface Chip',
                        'USB Connector'
                    ],
                    'correctIndex': 3
                },
                {
                    'q': `
                        <img class="img-fluid mx-auto d-block" src="{{ $page->link('assets/build/img/categories/adults/modules/1/quiz/label-arduino-components.png') }}" />
                        <p class="mt-4">What is the Arduino component in no. 3?</p>
                    `,
                    'options': [
                        'Reset Switch',
                        'Power Port',
                        'USB Interface Chip',
                        'USB Connector'
                    ],
                    'correctIndex': 2
                },
                {
                    'q': `
                        <img class="img-fluid mx-auto d-block" src="{{ $page->link('assets/build/img/categories/adults/modules/1/quiz/label-arduino-components.png') }}" />
                        <p class="mt-4">What is the Arduino component in no. 4?</p>
                    `,
                    'options': [
                        'Voltage Regulator',
                        'USB Interface Chip',
                        'Microcontroller',
                        'Crystal Oscillator'
                    ],
                    'correctIndex': 3
                },
                {
                    'q': `
                        <img class="img-fluid mx-auto d-block" src="{{ $page->link('assets/build/img/categories/adults/modules/1/quiz/label-arduino-components.png') }}" />
                        <p class="mt-4">What is the Arduino component in no. 5?</p>
                    `,
                    'options': [
                        'Voltage Regulator',
                        'USB Interface Chip',
                        'Microcontroller',
                        'Crystal Oscillator'
                    ],
                    'correctIndex': 0
                },
                {
                    'q': `
                        <img class="img-fluid mx-auto d-block" src="{{ $page->link('assets/build/img/categories/adults/modules/1/quiz/label-arduino-components.png') }}" />
                        <p class="mt-4">What is the Arduino component in no. 6?</p>
                    `,
                    'options': [
                        'TX RX LEDs',
                        'Analog Input Pins',
                        'Power Port',
                        'Digital Pins'
                    ],
                    'correctIndex': 2
                },
                {
                    'q': `
                        <img class="img-fluid mx-auto d-block" src="{{ $page->link('assets/build/img/categories/adults/modules/1/quiz/label-arduino-components.png') }}" />
                        <p class="mt-4">What is the Arduino component in no. 7?</p>
                    `,
                    'options': [
                        'TX RX LEDs',
                        'Analog Input Pins',
                        'Power Port',
                        'Digital Pins'
                    ],
                    'correctIndex': 3
                },
                {
                    'q': `
                        <img class="img-fluid mx-auto d-block" src="{{ $page->link('assets/build/img/categories/adults/modules/1/quiz/label-arduino-components.png') }}" />
                        <p class="mt-4">What is the Arduino component in no. 8?</p>
                    `,
                    'options': [
                        'TX RX LEDs',
                        'Analog Input Pins',
                        'Power Port',
                        'Digital Pins'
                    ],
                    'correctIndex': 0
                },
                {
                    'q': `
                        <img class="img-fluid mx-auto d-block" src="{{ $page->link('assets/build/img/categories/adults/modules/1/quiz/label-arduino-components.png') }}" />
                        <p class="mt-4">What is the Arduino component in no. 9?</p>
                    `,
                    'options': [
                        'Crystal Oscillator',
                        'Voltage Regulator',
                        'Microcontroller',
                        'Analog Input Pins'
                    ],
                    'correctIndex': 2
                },
                {
                    'q': `
                        <img class="img-fluid mx-auto d-block" src="{{ $page->link('assets/build/img/categories/adults/modules/1/quiz/label-arduino-components.png') }}" />
                        <p class="mt-4">What is the Arduino component in no. 10?</p>
                    `,
                    'options': [
                        'Crystal Oscillator',
                        'Voltage Regulator',
                        'Microcontroller',
                        'Analog Input Pins'
                    ],
                    'correctIndex': 3
                }
            ]
        });
    </script>
@endpush