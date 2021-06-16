@extends('_layouts.module')

@section('introduction')
    <h1>Quiz</h1>
    <p>&nbsp;</p>
@endsection

@section('content')
    <h5>Click here to begin.</h5>
    @include('_partials.modal_quiz', [
        'modalTitle' => 'Robotics for Teens!',
        'quizHeader' => 'Pop-up Quiz',
        'quizDescription' => 'Camera Drone',
        'buttonText' => 'Pop-up Quiz' 
    ])
@endsection

@push('scripts')
    <script src="{{ $page->link(mix('js/quiz.js', 'assets/build')) }}"></script>
    <script>
        $('#quiz-modal-body').quiz({
            questions: [
                {
                    'q': 'What is the other term for the drone?',
                    'options': [
                        'UAVs - Unmanned Aerial Vehicles',
                        'MAV - Micro Air Vehicle',
                        'PAV - Personal Air Vehicle',
                        'CAV - Compressed Air Vehicle'
                    ],
                    'correctIndex': 0,
                    'correctResponse': 'Correct!',
                    'incorrectResponse': 'Wrong Answer'
                },
                {
                    'q': 'Which of the following is an application of drones?',
                    'options': [
                        'Agriculture',
                        'Photography and Videography',
                        'Aerial Surveying of Maps',
                        'All of the above.'
                    ],
                    'correctIndex': 3,
                    'correctResponse': 'Correct!',
                    'incorrectResponse': 'Wrong Answer'
                },
                {
                    'q': 'What wireless transceiver module is used for sending and receiving data at an operating radio frequency of 2.4 to 2.5 GHz ISM band.',
                    'options': [
                        'NRF24L01 Wireless RF Module',
                        'SFP Optical Transceiver',
                        'HC-11 Wireless RF Transceiver Module',
                        'RR501 Wireless Base Transceiver Module'
                    ],
                    'correctIndex': 0,
                    'correctResponse': 'Correct!',
                    'incorrectResponse': 'Wrong Answer'
                },
                {
                    'q': 'An electronic circuit that controls and regulates the speed of an electric motor. It may also provide reversing of the motor and dynamic braking.',
                    'options': [
                        'DC Motor Speed Controller',
                        'Electronic Speed Controller',
                        'Induction Speed Controller',
                        'AC Motor Speed Controller'
                    ],
                    'correctIndex': 1,
                    'correctResponse': 'Correct!',
                    'incorrectResponse': 'Wrong Answer'
                },
                {
                    'q': 'The synchronous motor using a direct current (DC) electric power supply. This motor is typically connected to an ESC and lifts the drone from the ground.',
                    'options': [
                        'Brushless DC Motor',
                        'Brushed DC Motor',
                        'Series DC Motor',
                        'Shunt DC Motor'
                    ],
                    'correctIndex': 0,
                    'correctResponse': 'Correct!',
                    'incorrectResponse': 'Wrong Answer'
                },
                {
                    'q': 'What should you do before flying a drone?',
                    'options': [
                        'Check the weather.',
                        'Ensure your drone\'s battery is fully charged.',
                        'Check the propellers are secured.',
                        'All of the Above.'
                    ],
                    'correctIndex': 3,
                    'correctResponse': 'Correct!',
                    'incorrectResponse': 'Wrong Answer'
                },
                {
                    'q': 'What is the maximum above ground level that you can fly your drone? Based on Philippines implementation.',
                    'options': [
                        '200 feet',
                        '300 feet',
                        '400 feet',
                        '500 feet'
                    ],
                    'correctIndex': 2,
                    'correctResponse': 'Correct!',
                    'incorrectResponse': 'Wrong Answer'
                },
                {
                    'q': 'Minimum distance to keep your drones from persons not involved with the drone\'s operation.',
                    'options': [
                        '25 Meters',
                        '30 Meters',
                        '35 Meters',
                        '40 Meters'
                    ],
                    'correctIndex': 1,
                    'correctResponse': 'Correct!',
                    'incorrectResponse': 'Wrong Answer'
                },
                {
                    'q': 'Flying your drone in the Philippines is',
                    'options': [
                        'Allowed',
                        'Allowed only during the day',
                        'Allowed only during the night',
                        'Never Allowed'
                    ],
                    'correctIndex': 1,
                    'correctResponse': 'Correct!',
                    'incorrectResponse': 'Wrong Answer'
                },
                {
                    'q': 'What is the maximum weight that CAAP allowed for the drone to fly without a Remotely Piloted Aircraft certificate?',
                    'options': [
                        '9 kilograms',
                        '8 kilograms',
                        '7 kilograms',
                        '6 kilograms'
                    ],
                    'correctIndex': 2,
                    'correctResponse': 'Correct!',
                    'incorrectResponse': 'Wrong Answer'
                },
            ]
        });
    </script>
@endpush