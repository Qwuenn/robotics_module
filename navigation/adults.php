<?php

return [
    'Introduction' => 'categories\adults/introduction',
    'Materials' => 'categories\adults\modules\1/materials',
    'Quiz' => 'categories\adults\modules\1/quiz',
    'Fire Fighter Robot' => [
        'collapsible' => true,
        'children' => [
            'Introduction to Mobility' => 'categories\adults\modules\2/introduction-to-mobility',
            'Circuit Diagram' => 'categories\adults\modules\2/circuit-diagram',
            'Design' => 'categories\adults\modules\2/design',
            'Materials' => 'categories\adults\modules\2/materials'
        ]
    ]
];