@extends('_layouts.module')

@section('introduction')
    <h1 id="quiz">Quiz</h1>
    <p>&nbsp;</p>
@endsection

@section('content')
    <h5 id="pop-up-quiz">Click here to begin.</h5>
    @include('_partials.modal_quiz', [
        'modalTitle' => 'Robotics for Kids!',
        'quizHeader' => 'Pop-up Quiz',
        'quizDescription' => '3-Axis Robotic Arm',
        'buttonText' => 'Pop-up Quiz' 
    ])
@endsection

@push('scripts')
    <script src="{{ $page->link(mix('js/quiz.js', 'assets/build')) }}"></script>
    <script>
        $('#quiz-modal-body').quiz({
            questions: [
                {
                    'q': 'What is a robotic arm?',
                    'options': [
                        'It is a mechanical leg that performs the same functions that a human leg can.',
                        'It is a machine resembling and replicate certain human movements and functions automatically.',
                        'These robots that have been designed to perform a specific task or job effectively, efficiently, and precisely.',
                        'It is a system for controlling the humidity, ventilation, and temperature in a building or a vehicle, typically to maintain a cool atmosphere in warm conditions.'
                    ],
                    'correctIndex': 2,
                    'correctResponse': 'Correct!',
                    'incorrectResponse': 'Wrong Answer'
                },
                {
                    'q': 'It is a robot with rotary joints. For example, this may be used to open doors or pass delicate bombs.',
                    'options': [
                        'Cartesian Robot Arm',
                        'Delta Robot Arm',
                        'Cylindrical Robot Arm',
                        'Articulated Robot Arm'
                    ],
                    'correctIndex': 3,
                    'correctResponse': 'Correct!',
                    'incorrectResponse': 'Wrong Answer'
                },
                {
                    'q': 'It is capable of performing tasks that require high speed and accuracy.',
                    'options': [
                        'Delta Robot Arm',
                        'SCARA Robot Arm',
                        'Cylindrical Robot Arm',
                        'Articulated Robot Arm'
                    ],
                    'correctIndex': 1,
                    'correctResponse': 'Correct!',
                    'incorrectResponse': 'Wrong Answer'
                },
                {
                    'q': 'It is an open-source electronics application that uses simple hardware and software to make it convenient to use.',
                    'options': [
                        'Arduino UNO',
                        'Breadboard',
                        'SG-90 Servo Motor',
                        'Potentiometer'
                    ],
                    'correctIndex': 0,
                    'correctResponse': 'Correct!',
                    'incorrectResponse': 'Wrong Answer'
                },
                {
                    'q': 'It is a three-terminal variable resistor with a resistance that can be manually adjusted to regulate the flow of electric current.',
                    'options': [
                        'SG-90 Servo Motor',
                        'Potentiometer',
                        'Breadboard',
                        'USB Printer Cable'
                    ],
                    'correctIndex': 1,
                    'correctResponse': 'Correct!',
                    'incorrectResponse': 'Wrong Answer'
                },
                {
                    'q': 'Which part of the robot arm has the control on the servo motor?',
                    'options': [
                        'Arduino UNO',
                        'Breadboard',
                        'Potentiometer',
                        'USB Printer Cable'
                    ],
                    'correctIndex': 2,
                    'correctResponse': 'Correct!',
                    'incorrectResponse': 'Wrong Answer'
                },
                {
                    'q': 'Which part of the robot arm that moves left to right?',
                    'options': [
                        'Base',
                        'Elbow',
                        'Grip',
                        'Knee'
                    ],
                    'correctIndex': 0,
                    'correctResponse': 'Correct!',
                    'incorrectResponse': 'Wrong Answer'
                },
                {
                    'q': 'Which part of the robot arm that moves up and down?',
                    'options': [
                        'Base',
                        'Elbow',
                        'Grip',
                        'Knee'
                    ],
                    'correctIndex': 1,
                    'correctResponse': 'Correct!',
                    'incorrectResponse': 'Wrong Answer'
                },
                {
                    'q': 'Which part of the robot arm that widens the clamp?',
                    'options': [
                        'Base',
                        'Elbow',
                        'Grip',
                        'Knee'
                    ],
                    'correctIndex': 2,
                    'correctResponse': 'Correct!',
                    'incorrectResponse': 'Wrong Answer'
                },
                {
                    'q': 'Which robot arm is common in the food processing and packaging, chemical, medicinal, and electronics industries because they can perform fast, accurate, and gentle movements?',
                    'options': [
                        'Cylindrical Robot Arm',
                        'Polar or Sphericcal Robot Arm',
                        'Delta Robot Arm',
                        'Cartesian Robot Arm'
                    ],
                    'correctIndex': 2,
                    'correctResponse': 'Correct!',
                    'incorrectResponse': 'Wrong Answer'
                },
            ]
        });
    </script>
@endpush