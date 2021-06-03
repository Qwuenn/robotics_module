<div class="card component-card bg-light">
    <div id="carousel{{ str_replace(' ', '', (isset($id) ? $id : $component)) }}" 
        class="carousel slide card-img-top mx-auto" 
        data-bs-ride="carousel" 
        data-bs-interval="false">
        <div class="carousel-indicators">
            <button type="button" 
                data-bs-target="#carousel{{ str_replace(' ', '', (isset($id) ? $id : $component)) }}" 
                data-bs-slide-to="0" 
                @if ((isset($active) && $active == 0) || !isset($active))
                    class="active component-picture"
                    aria-current="true"
                @else
                    class="component-picture"
                @endif
                >
            </button>
            <button type="button" 
                data-bs-target="#carousel{{ str_replace(' ', '', (isset($id) ? $id : $component)) }}" 
                data-bs-slide-to="1" 
                @if (isset($active) && $active == 1)
                    class="active component-symbol"
                    aria-current="true"
                @else
                    class="component-symbol"
                @endif
                >
            </button>
        </div>
        <div class="carousel-inner mt-3 mb-5">
            <div class="carousel-item {{ (isset($active) && $active === 0) || !isset($active) ? 'active' : '' }}">
                <img src="{{ $page->link('assets/build/img/categories/adults/components/p-'. str_replace(' ', '-', strtolower($component)) .'.png') }}" 
                    alt="Picture of {{ $component }}" 
                    class="mx-auto d-block" />
            </div>
            <div class="carousel-item {{ (isset($active) && $active === 1) ? 'active' : '' }}">
                <img src="{{ $page->link('assets/build/img/categories/adults/components/s-'. str_replace(' ', '-', strtolower($component)) .'.png') }}"
                    alt="Symbol of {{ $component }}" 
                    class="mx-auto d-block" />
            </div>
        </div>
        <button class="carousel-control-prev" 
            type="button" 
            data-bs-target="#carousel{{ str_replace(' ', '', (isset($id) ? $id : $component)) }}" 
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" 
            type="button" 
            data-bs-target="#carousel{{ str_replace(' ', '', (isset($id) ? $id : $component)) }}" 
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="card-body">
        <h5 class="card-title text-center">
            {{ isset($title) ? $title : $component}}
        </h5>
        @isset ($description)
            <p class="card-text small">{{ $description }}</p>
        @endisset
    </div>
</div>