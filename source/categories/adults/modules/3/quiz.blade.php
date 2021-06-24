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
        'quizDescription' => 'Arduino Based Gimbal Stabilizer',
        'buttonText' => 'Pop-up Quiz' 
    ])
@endsection

@push('scripts')
    <script src="{{ $page->link(mix('js/quiz.js', 'assets/build')) }}"></script>
    <script>
        $('#quiz-modal-body').quiz({
            questions: [
                {
                    'q': 'This component be a DC-to-DC control converter which steps down voltage from its input to its yield.',
                    'options': [
                        'Arduino',
                        'Robotic',
                        '3-Axis Accelerator Arduino',
                        'Buck Converter'
                    ],
                    'correctIndex': 3
                },
                {
                    'q': 'It can be utilized in applications requiring tilt detecting',
                    'options': [
                        'IMU',
                        'Arduino Nano',
                        'Arduino Uno',
                        '3-Axis Accelerator Arduino'
                    ],
                    'correctIndex': 3
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
                    'q': 'It is mechanically underpinning and electrically interfaces electrical or electronic components utilizing conductive tracks, cushions and other highlights carved from one or more sheet layers of copper covered onto and/or between sheet layers of a non-conductive substrate.',
                    'options': [
                        'Breadboard',
                        'Chip Board',
                        'Universal PCB',
                        'Motherboard'
                    ],
                    'correctIndex': 2
                },
                {
                    'q': 'It offers the same network and specs of the Arduino Uno board in a smaller form factor.',
                    'options': [
                        'Arduino Nano',
                        'Buck Converter',
                        '3-Axis Accelerator Arduino',
                        'Arduino Uno'
                    ],
                    'correctIndex': 0
                }
            ]
        });
    </script>
@endpush