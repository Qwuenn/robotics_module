<?php

use Illuminate\Support\Str;

return [
    'production' => false,
    'baseUrl' => '',
    'title' => 'Robotics for Kids!',
    'description' => 'Website description.',
    'collections' => [],

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
    }
];
