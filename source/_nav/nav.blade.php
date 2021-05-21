<div id="sidebar" class="sidebar d-lg-block collapse mt-lg-5">
    <div class="position-sticky px-lg-2 py-lg-0 py-4 px-2">
        <div class="navbar-brand border-bottom border-primary text-primary fw-semibold mb-1 pt-lg-0 pt-2 pb-1">{{ $title }}</div>
        <ul class="nav flex-column fw-medium">
            @isset ($items)
                @foreach ($items as $label => $item)
                    @include('_nav.nav_item')
                @endforeach
            @endisset
        </ul>
    </div>
</div>