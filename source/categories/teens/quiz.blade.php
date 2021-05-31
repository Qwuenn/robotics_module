@extends('_layouts.module')

@section('introduction')
    <h1 id="quiz">Quiz</h1>
    <p>&nbsp;</p>
@endsection

@section('table_of_contents')
    @include('_toc.toc', ['items' => [
        'Pop-up Quiz',
    ]])
@endSection

@section('content')
    <h3 id="pop-up-quiz"></h3>
    @include('_partials.modal_quiz', [
        'modalTitle' => 'Robotics for Teens!',
        'quizHeader' => 'Pop-up Quiz',
        'quizDescription' => 'Sumo Bot' 
    ])
@endsection

@push('scripts')
    <script src="{{ $page->link(mix('js/quiz.js', 'assets/build')) }}"></script>
    <script>
        $('#quiz-modal-body').quiz({
            questions: [
                {
                    'q': 'The national sport of Japan, in which a contestant wins a match by forcing his opponent outside a marked circle or by making him touch the ground with any body part except the feet.',
                    'options': [
                        'Karate',
                        'Sumo',
                        'Kendo',
                        'Judo'
                    ],
                    'correctIndex': 1,
                    'correctResponse': 'Correct!',
                    'incorrectResponse': 'Wrong Answer'
                },
                {
                    'q': 'It’s a circular ring where the Sumo contenders held their match. This is also where the Sumo Bots push each other to win.',
                    'options': [
                        'Dohyo',
                        'Dhoyo',
                        'Doyho',
                        'Doyoh'
                    ],
                    'correctIndex': 0,
                    'correctResponse': 'Correct!',
                    'incorrectResponse': 'Wrong Answer'
                },
                {
                    'q': 'The contest ring is designed in a certain size and it has two colors, the filling is black and the frame is white. This sensor can distinguish between the colors of the ring.',
                    'options': [
                        'Infrared Sensor',
                        'Ultrasonic Sensor',
                        'Color Sensor',
                        'PIR Sensor'
                    ],
                    'correctIndex': 0,
                    'correctResponse': 'Correct!',
                    'incorrectResponse': 'Wrong Answer'
                },
                {
                    'q': 'An electronic device that uses sonar to determine the distance of a target object and converts the reflected sound into an electrical signal.',
                    'options': [
                        'Infrared Sensor',
                        'Ultrasonic Sensor',
                        'Color Sensor',
                        'PIR Sensor'
                    ],
                    'correctIndex': 1,
                    'correctResponse': 'Correct!',
                    'incorrectResponse': 'Wrong Answer'
                },
                {
                    'q': 'This electrical component helps the sumo bot to maneuver and move within the ring of the component.',
                    'options': [
                        'AC Geared Motor',
                        'DC Geared Motor',
                        'AC Motor',
                        'DC Motor'
                    ],
                    'correctIndex': 1,
                    'correctResponse': 'Correct!',
                    'incorrectResponse': 'Wrong Answer'
                },
                {
                    'q': 'A driver that controls the speed and direction of the two DC Geared Motors and provides a constant voltage to the motors.',
                    'options': [
                        'L289N Motor Controller',
                        'L298N Motor Controller',
                        'L289N Motor Driver',
                        'L298N Motor Driver'
                    ],
                    'correctIndex': 3,
                    'correctResponse': 'Correct!',
                    'incorrectResponse': 'Wrong Answer'
                },
                {
                    'q': 'The most used microcontroller among its variant and based on the ATmega328 AVR microcontroller.',
                    'options': [
                        'Raspberry Pi',
                        'Arduino Uno',
                        'Beaglebone Black',
                        'Adafruit Flora'
                    ],
                    'correctIndex': 1,
                    'correctResponse': 'Correct!',
                    'incorrectResponse': 'Wrong Answer'
                },
                {
                    'q': 'A software that is downloaded and installed from a website to be able to communicate and code with Arduino.',
                    'options': [
                        'Arduino Web IDE',
                        'Arduino Desktop IDE',
                        'Arduino Portable IDE',
                        'Arduino Android IDE'
                    ],
                    'correctIndex': 1,
                    'correctResponse': 'Correct!',
                    'incorrectResponse': 'Wrong Answer'
                },
                {
                    'q': 'What should you consider when designing a robot to fight another robot by attempting to force it out of a ring?',
                    'options': [
                        'Structure',
                        'Weight',
                        'Gear Ratio',
                        'All of the above.'
                    ],
                    'correctIndex': 3,
                    'correctResponse': 'Correct!',
                    'incorrectResponse': 'Wrong Answer'
                },
                {
                    'q': 'How do you use the gear ratios to your beneﬁt during a competition?',
                    'options': [
                        'Use a low gear ratio and focus on a powerful attack.',
                        'Use a high gear ratio and focus on a speedy attack.',
                        'Use a medium gear ration and balance between both power and speed.',
                        'All of the above.'
                    ],
                    'correctIndex': 3,
                    'correctResponse': 'Correct!',
                    'incorrectResponse': 'Wrong Answer'
                },
            ]
        });
    </script>
@endpush