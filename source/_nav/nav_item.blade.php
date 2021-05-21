@if (is_string($item))
    <li class="nav-item {{ $page->selected($item) }}">
        <a class="nav-link" href="{{ $page->link($item) }}">
            {{ $label }} 
        </a>
    </li>
@else
    <li class="nav-item">
        <a class="nav-link" 
            data-bs-toggle="collapse" 
            href="#{{ strtolower($label) }}" 
            role="button" 
            aria-expanded="false">
            {{ $label }}
        </a>
        <div class="collapse" id="{{ strtolower($label) }}">
            <ul class="nav flex-column btn-toggle-nav">
                @foreach ($item as $label => $item)
                    <li class="nav-item {{ $page->selected($item) }}">
                        <a class="nav-link" href="{{ $page->link($item) }}">
                            {{ $label }} 
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </li>
@endif