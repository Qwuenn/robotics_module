<?php

return [
    'Introduction' => 'categories\adults/introduction',
    'Materials' => 'categories\adults\modules\1/materials',
    'Quiz' => 'categories\adults\modules\1/quiz',
    'Introduction to Mobility' => 'categories\adults\modules\2/introduction-to-mobility',
    'Fire Fighter Robot' => [
        'collapsible' => true,
        'children' => [
            'Circuit Diagram' => 'categories\adults\modules\2/circuit-diagram',
            'Design' => 'categories\adults\modules\2/design'
        ]
    ]
];