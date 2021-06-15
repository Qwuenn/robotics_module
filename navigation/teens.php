<?php

return [
    'Introduction' => 'categories\teens/introduction',
    'Arduino' => 'categories\teens/arduino',
    'Robotic Sumo' => [
        'collapsible' => true,
        'children' => [
            'Sumo Bot Kit' => 'categories\teens\modules\1/sumo-bot-kit',
            'Designs' => 'categories\teens\modules\1/designs',
            'Assembly' => 'categories\teens\modules\1/assembly',
            'Rules and Requirements' => 'categories\teens\modules\1/rules-and-requirements',
            'Codes' => 'categories\teens\modules\1/codes',
            'Quiz' => 'categories\teens\modules\1/quiz'
        ]
    ],

    'Camera Drone' => [
        'collapsible' => true,
        'children' => [
            'Introduction' => 'categories\teens\modules\2/introduction',
            'Classification' => 'categories\teens\modules\2/classification',
            'Multirotor Drones' => 'categories\teens\modules\2/multirotor-drones',
            'Quadcopter' => 'categories\teens\modules\2/quadcopter',
            'Camera Drone Kit' => 'categories\teens\modules\2/camera-drone-kit'
        ]
    ]
];