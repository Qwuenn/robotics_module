<?php

use Illuminate\Support\Str;

return [
    'production' => false,
    'baseUrl' => '',
    'title' => 'Robotics Academy',
    'description' => "Educational robotics strengthen and support student's skills developing their knowledge through the creation, design, assembly, and operation of robots.",
    'developer' => 'Kim S. Sto. Tomas',
    'collections' => [],

    // Navigation
    'navigation' => [
        'kids' => require_once('./navigation/kids.php'),
        'teens' => require_once('./navigation/teens.php'),
        'adults' => require_once('./navigation/adults.php')
    ],

    // Helpers
    'selected' => function ($page, $section) {
        return Str::contains($page->getPath(), $section) ? 'selected' : '';
    },

    'svg' => function($page, $file, $properties = []) {
        $svg = new \DOMDocument();
        $svg->load("./source/_assets/svg/". $file .(str_contains($file, '.svg') ? '' : '.svg'));

        if (!is_null($properties)) {
            foreach ($properties as $key => $value) {
                if ($key === 'class') {
                    $svg->documentElement->setAttribute($key, $value);
                } else if ($key === 'css') {
                    $style = "";
                    foreach($value as $property => $value) {
                        $style .= "$property: $value;";
                    }
                    $svg->documentElement->setAttribute('style', $style);
                }
            }
        }

        return $svg->saveXML($svg->documentElement);
    },

    'link' => function ($page, $link) {
        return $page->baseUrl . '/' . trim($link, '/');
    }
];
