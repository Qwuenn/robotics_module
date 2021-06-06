<p align="center">
	<img src="https://qwuenn.github.io/robotics_module/assets/build/img/robot.svg" height="320" />
</p>

# Robotics Webpage

A web page for Erovoutika's robotics module.

<p>&nbsp;</p>

## Requirements


This webpage is built with [Jigsaw](https://jigsaw.tighten.co/) framework and [Bootstrap 5](https://getbootstrap.com/). To know more on how to use them, refer to the documentation page of the links provided.

Strong knowledge on [Laravel blade templating engine](https://laravel.com/docs/8.x/blade) and [Composer](https://getcomposer.org/) is needed for this project. Knowledge on [Laravel Mix](https://laravel.com/docs/8.x/mix) and [Node Package Manager (NPM)](https://www.npmjs.com/) is optionally required if you want to compile your CSS and JavaScript using Laravel Mix.

<p>&nbsp;</p>

## Installation


#### System Requirements

You need to have PHP (minimum version 7.3) and Composer installed on your machine. You'll also optionally need Node.js and NPM installed if you want to use Laravel Mix to compile your CSS and Javascript. You'll also optionally need Git installed on your machine if you want version control or if you want to clone the project.

<p>&nbsp;</p>

#### 1. Download / Clone the Project

Download the zip file by going to the [code repository](https://github.com/Qwuenn/robotics_module). Click **Code > Download ZIP** and extract the zip file.

Alternatively, if you have git installed on your machine, run the following command below to clone the project:

```bash
git clone git@github.com:Qwuenn/robotics_module.git
```

<p>&nbsp;</p>

#### 2. Install dependencies

Navigate to the root of the project folder and run the following command below: 

```bash
composer install 
```

Optionally, if you have Node.js and NPM installed in your machine and want to use Laravel Mix to compile your assets, run the following command:

```bash
npm install 
```

This will pull all the dependencies needed for this project.

<p>&nbsp;</p>

#### 3. Build the webpage

Whenever you want to generate the webpage, run the `build` command from within your project root:

```bash
./vendor/bin/jigsaw build
```

Jigsaw will generate the static HTML and place it in the `/build_local` directory by default.

Alternatively, if you are using Laravel Mix to compile your assets, run:

```bash
npm run dev
```

First, Webpack will compile your assets and store them in the `/source/assets/build ` directory. Then, Jigsaw's build command will be run automatically to build your site (including your compiled assets) to `/build_local`.

<p>&nbsp;</p>

## Previewing the Webpage

#### Previewing with PHP

To quickly preview the webpage, use the `serve` command:

```bash
./vendor/bin/jigsaw serve
```

You can now view the webpage at `http://localhost:8000` in your browser.

You can also optionally specify the environment and port to serve like so:

```bash
./vendor/bin/jigsaw serve production --port=8080
```

This will serve your `/build_production` directory at `http://localhost:8080`.

<p>&nbsp;</p>

#### Previewing with Browsersync

If you are using Laravel Mix to compile your assets, you can preview your site with Browsersync by simply running:

```bash
npm run watch
```

*(If you haven't already, you'll need to run `npm install` before running `npm run watch`.)*

Browsersync will automatically open a new browser tab and reload the page every time you make a change. Very helpful for previewing your changes quickly!

<p>&nbsp;</p>

## Deploying the Webpage

#### 1. Specify the base URL

Define the `baseUrl` of the webpage in `config.production.php`.

```php
<?php

return [
    'baseUrl' => 'https://www.erovoutika.ph/', // Example
    'production' => true,
];
```

This will prefix the relative URL of your own domain to all the generated HTML document.

<p>&nbsp;</p>

#### 2. Build the webpage for production

Run the `build` command with `production` as an argument:

```bash
./vendor/bin/jigsaw build production
```

Alternatively, if you are using Laravel Mix to compile your assets, you can run the `prod` script found in `package.json`:

```bash
npm run prod
```

This will generate the webpage into a new folder called `build_production`. Upload the contents of this folder to your own domain.

<p>&nbsp;</p>

## Navigation

The navigation menu in the left-hand sidebar of the module layout is defined using an array in the `.php` files within the `/navigation` folder. Nested pages can be added by using the `children` associative array.

```php
<?php
// /navigation/kids.php

return [
    'Introduction' => 'categories\kids/introduction',
    'Robot Car Kit' => 'categories\kids/robot-car-kit',
    'Activities' => [
        'collapsible' => true,
        'children' => [
            '1. Line Following Robot' => 'categories\kids\activities/1',
            '2. Obstacle Avoidance Robot' => 'categories\kids\activities/2',
            '3. Light Tracker Robot' => 'categories\kids\activities/3',
            '4. Motion Tracker Robot' => 'categories\kids\activities/4',
            '5. Rover Robot Car' => 'categories\kids\activities/5'
        ]
    ]
];
```

Add the newly created navigation file to the `navigation` array of `config.php`.

```php
// config.php

'navigation' => [
    'kids' => require_once('./navigation/kids.php'),
]
```

In your blade files:
```php
// /source/_layouts/module.blade.php

@include('_sidebar.sidebar', ['title' => 'Robotics for Kids!', 'items' => $page->navigation->kids])
```

<p>&nbsp;</p>

### Syntax

###### Navigation items with URL as value of array:

```php
<?php

return [
    'Home' => '/home',
    'About' => '/about',
    'Contact' => '/contact'
];
```

<p>&nbsp;</p>

###### Navigation items with `url` property defined:

```php
<?php

return [
    'Home' => ['url' => '/home'],
    'About' => ['url' => '/about'],
    'Contact' => ['url' => '/contact']
];
```

<p>&nbsp;</p>

###### Nested navigation item as list menu with `url` and `children` array property defined:

```php
<?php

return [
    'Parent' => [
        'url' => '/parent',
        'children' => [
            'Child 1' => '/child-1',
            'Child 2' => '/child-2',
            'Child 3' => '/child-3'
        ]
    ]
];
```

<p>&nbsp;</p>

###### Nested navigation item as collapsible menu with `children` array property defined:

```php
<?php

return [
    'Parent' => [
        'collapsible' => true,
        'children' => [
            'Child 1' => '/child-1',
            'Child 2' => '/child-2',
            'Child 3' => '/child-3'
        ]
    ]
];
```

<p>&nbsp;</p>

**NOTE:** `url` and `collapsible` property cannot co-exist. Determine if you want the navigation item to be a list menu or collapsible menu.

```php
<?php

return [
    'Parent' => [
        'url' => '/parent',
        'collapsible' => true
    ]
];
```

<p>&nbsp;</p>

## Table of Contents

The table of contents menu in the right-hand section of the module layout is defined using an array in the blade files. You can nest them to any amount of level you want.

```php
// /source/categories/teens/sumo-bot.blade.php 

@section('table_of_contents')
    @include('_toc.toc', ['items' => [
        'Robotic Sumo',
        'Components',
        'Designs of Sumo Bot' => [
            'Design Based on Speed (Barry)',
            'Design Based on Power (Bruce)',
            'Design Based on Both Power and Speed (Clark)',
        ],
        'Assembly' => [
            'Connecting and Testing the Components',
            'Assembly of the Sumo Bot and Testing',
        ]
    ]])
@endSection
```
<p>&nbsp;</p>

### Syntax

###### Nested TOC items with label only:

```php
@include('_toc.toc', ['items' => [
    'Item 1',
    'Item 2',
    'Item 3' => [
        'Child 1',
        'Child 2',
        'Child 3'
    ]
]])
```

The label will be lowercased, converted to `kebab-case` and prefixed with pound symbol `#`. And will then be inserted to the `href` attribute of the `<a>` tag.

```html
<a href="#item-1">Item 1</a>
```

<p>&nbsp;</p>

###### Nested TOC items with section specified:

```php
@include('_toc.toc', ['items' => [
    'Item 1' => 'item-1',
    'Item 2' => 'item-2',
    'Item 3' => [
        'section' => 'item-3',
        'children' => [
            'Child 1' => 'child-1',
            'Child 2' => 'child-2',
            'Child 3' => 'child-3'
        ]
    ]
]])
```
<p>&nbsp;</p>

Although this is possible, I wouldn't recommend it:

```php
@include('_toc.toc', ['items' => [
    'Item 1' => 'item-1',
    'Item 2' => 'item-2',
    'Item 3' => [
        'section' => 'item-3',
        'Child 1' => 'child-1',
        'Child 2' => 'child-2',
        'Child 3' => 'child-3'
    ]
]])
```

<p>&nbsp;</p>

## Miscellaneous

#### Compiling Assets with Laravel Mix

Refer to this [link](https://jigsaw.tighten.co/docs/compiling-assets/).

<p>&nbsp;</p>

#### Deploying to Github Pages

First, create a `gh-pages` branch to your own code repository before you run the command below:

**WARNING**: Make sure you have pushed all commited changes to your own code repository before running the command:

```bash
npm run deploy
```

<p>&nbsp;</p>

#### Run `git log` command using NPM Script

Run git log command using npm script with `--abbrev-commit` and `--pretty=oneline`

```bash
npm run git-log
```
