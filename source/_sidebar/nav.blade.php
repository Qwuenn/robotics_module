@php $level = $level ?? 0 @endphp

<ul class="{{ $level !== 0 ? 'btn-toggle-nav ps-3' : 'ps-0' }}">
    @isset ($items)
        @foreach ($items as $label => $item)
            @include('_sidebar.nav_item')
        @endforeach
    @endisset
</ul>