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
            'Codes' => 'categories\teens\modules\1/codes',
            'Quiz' => 'categories\teens\modules\1/quiz'
        ]
    ]
];