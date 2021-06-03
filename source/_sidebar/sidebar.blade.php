<div id="sidebar" class="sidebar d-lg-block collapse mt-lg-5">
    <div class="position-sticky px-lg-2 py-lg-0 py-4 px-2">
        <div class="navbar-brand border-bottom border-primary text-primary fw-semibold mb-1 pt-lg-0 pt-2 pb-1">{{ $title }}</div>
        @include('_sidebar.nav')
    </div>
</div>

{{-- 
    Include sidebar items with url value:
    
    'Home' => '/home',
    'About' => '/about',
    'Contact' => '/contact'

    Or with 'url' property:

    'Home' => ['url' => '/home'],
    'About' => ['url' => '/about'],
    'Contact' => ['url' => '/contact']


    Include sidebar item with children:

    'Parent' => [
        'url' => '/parent',
        'children' => [
            'Child 1' => '/child-1',
            'Child 2' => '/child-2',
            'Child 3' => '/child-3'
        ]
    ]
    
    Sidebar item with children as collapsible menu:
    
    'Parent' => [
        'collapsible' => true,
        'children' => [
            'Child 1' => '/child-1',
            'Child 2' => '/child-2',
            'Child 3' => '/child-3'
        ]
    ]

    Note: 'url' and 'collapsible' property cannot co-exist. Determine if you need the sidebar item to be a collapsible menu or not:

    // Not recommended
    'Parent' => [
        'url' => '/parent',
        'collapsible' => true
    ]

--}}