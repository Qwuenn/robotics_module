<?php

use Illuminate\Support\Str;

return [
    'production' => false,
    'baseUrl' => '',
    'title' => 'Robotics for Kids!',
    'description' => 'Website description.',
    'collections' => [],

    'selected' => function ($page, $section) {
        return Str::contains($page->getPath(), $section) ? 'selected' : '';
    },
];
