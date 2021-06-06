<?php

return [
    'Introduction' => 'categories\kids/introduction',

    'Robot Car' => [
        'collapsible' => true,
        'children' => [
            'Robot Car Kit' => 'categories\kids\modules\1/robot-car-kit',
            'Activities' => [
                'collapsible' => true,
                'children' => [
                    'Line Following Robot' => 'categories\kids\modules\1\activities/1',
                    'Obstacle Avoidance Robot' => 'categories\kids\modules\1\activities/2',
                    'Light Tracker Robot' => 'categories\kids\modules\1\activities/3',
                    'Motion Tracker Robot' => 'categories\kids\modules\1\activities/4',
                    'Rover Robot Car' => 'categories\kids\modules\1\activities/5'
                ]
            ]
        ]
    ],

    'Robotic Arm' => [
        'collapsible' => true,
        'children' => [
            'Introduction' => 'categories\kids\modules\2/introduction'
        ]
    ]
];