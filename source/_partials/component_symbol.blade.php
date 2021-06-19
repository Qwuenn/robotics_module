<div class="col card component-card bg-light shadow">
    <div id="carousel{{ str_replace(' ', '', (isset($id) ? $id : $title )) }}" 
        class="carousel slide card-img-top mx-auto" 
        data-bs-ride="carousel" 
        data-bs-interval="false">
        <div class="carousel-indicators">
            <button type="button" 
                data-bs-target="#carousel{{ str_replace(' ', '', (isset($id) ? $id : $title )) }}" 
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
                data-bs-target="#carousel{{ str_replace(' ', '', (isset($id) ? $id : $title )) }}" 
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
        <div class="carousel-inner w-100 mt-3 mb-5">
            <div class="carousel-item {{ (isset($active) && $active === 0) || !isset($active) ? 'active' : '' }}">
                <img src="{{ $img }}" 
                    alt="Picture of {{ $title  }}" 
                    class="img-fluid mx-auto d-block" />
            </div>
            <div class="carousel-item {{ (isset($active) && $active === 1) ? 'active' : '' }}">
                <img src="{{ $symbol }}"
                    alt="Symbol of {{ $title  }}" 
                    class="img-fluid mx-auto d-block" />
            </div>
        </div>
        <button class="carousel-control-prev" 
            type="button" 
            data-bs-target="#carousel{{ str_replace(' ', '', (isset($id) ? $id : $title)) }}" 
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" 
            type="button" 
            data-bs-target="#carousel{{ str_replace(' ', '', (isset($id) ? $id : $title)) }}" 
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="card-body mb-4">
        <h4 class="card-title">
            {{ $title }}
        </h4>
        @isset ($description)
            <p class="card-text">{!! $description !!}</p>
        @endisset
    </div>
</div>