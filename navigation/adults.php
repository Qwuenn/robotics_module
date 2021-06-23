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
            'Materials' => 'categories\adults\modules\2/materials',
            'Procedure' => 'categories\adults\modules\2/procedure',
            'Quiz' => 'categories\adults\modules\2/quiz'
        ]
    ],

    'Gimbal Stabilizer' => [
        'collapsible' => true,
        'children' => [
            'Introduction' => 'categories\adults\modules\3/introduction',
            'Materials' => 'categories\adults\modules\3/materials',
            'Mechanical Designed' => 'categories\adults\modules\3/mechanical-designed'
        ]
    ]
];