<li>
    {{-- Check if array key doesn't have set value --}}
    @if (is_numeric($label))
        {{-- Label only without section specified --}}
        <a href="#{{ str_replace('?', '', str_replace(' ', '-', strtolower($item))) }}">{{ $item }}</a>
    @else
        @if ((isset($item->section) || is_string($item)) && $label !== 'section')
            @php $section = is_string($item) ? $item : $item->section @endphp
            {{-- List item string or array with section specified --}}
            <a href="#{{ $section }}">{{ $label }}</a>
        @else
            @if ($label !== 'section')
                {{-- List item array without section specified --}}
                <a href="#{{ str_replace('?', '', str_replace(' ', '-', strtolower($label))) }}">{{ $label }}</a>
            @endif
        @endif
    @endif

    @if (is_array($item))
        {{-- Recursively handle children --}}
        @if (isset($item->children))
            {{-- With children array specified --}}
            @include('_toc.list', ['items' => $item->children])
        @else
            {{-- Without children array specified --}}
            @include('_toc.list', ['items' => $item])
        @endif
    @endif
</li>