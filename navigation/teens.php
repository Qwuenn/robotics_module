<?php

return [
    'Introduction' => 'categories\teens/introduction',
    'Arduino' => 'categories\teens/arduino',
    'Robotic Sumo' => [
        'collapsible' => true,
        'children' => [
            'Sumo Bot' => 'categories\teens\modules\1/sumo-bot',
            'Codes for the Sumo Bot' => 'categories\teens\modules\1/codes-for-the-sumo-bot',
            'Quiz' => 'categories\teens\modules\1/quiz'
        ]
    ]
];