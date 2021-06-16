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
            'Drone Movements' => 'categories\teens\modules\2/drone-movements',
            'Application' => 'categories\teens\modules\2/application',
            'Camera Drone Kit' => 'categories\teens\modules\2/camera-drone-kit',
            'Design' => 'categories\teens\modules\2/design',
            'Assembly' => 'categories\teens\modules\2/assembly',
            'Code' => 'categories\teens\modules\2/code',
            'Rules and Safety' => 'categories\teens\modules\2/rules-and-safety',
            'Quiz' => 'categories\teens\modules\2/quiz'
        ]
    ]
];