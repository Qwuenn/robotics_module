<li class="nav-item">
    @if ($url = is_string($item) ? $item : $item->url)
        {{-- Nav item with url --}}
        <a class="nav-link {{ $level <= 1 ? 'fw-medium' : '' }} {{ $page->selected($url) }}" href="{{ $page->link($url) }}">
            {{ $label }}
        </a>
    @else
        @if (! $item->collapsible)
            {{-- Nav item without url --}}
            <a class="nav-link pe-none {{ $level <= 1 ? 'fw-medium' : '' }}">
                {{ $label }} 
            </a>
        @endif
    @endif
    
    @if (! is_string($item) && $item->children)
        @if ($item->collapsible === true)
            {{-- Recursively handle children as nested collapse menu --}}
            <a class="nav-link {{ $level <= 1 ? 'fw-medium' : '' }}" 
                data-bs-toggle="collapse" 
                href="#{{ str_replace(' ', '-', strtolower($label)) }}" 
                role="button" 
                aria-expanded="false">
                {{ $label }}
            </a>
            <div class="collapse" id="{{ str_replace(' ', '-', strtolower($label)) }}">
                @include('_sidebar.nav', ['items' => $item->children, 'level' => ++$level])
            </div>
        @else
            {{-- Recursively handle children as nested list --}}
            @include('_sidebar.nav', ['items' => $item->children, 'level' => ++$level])
        @endif
    @endif
</li>