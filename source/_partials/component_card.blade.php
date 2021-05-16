<div class="col-md-4 d-flex align-items-stretch">
    <div class="card component-card">
        <div id="carousel{{ str_replace(' ', '', $component) }}" 
            class="carousel slide card-img-top mx-auto" 
            data-bs-ride="carousel" 
            data-bs-interval="false">
            <div class="carousel-indicators">
                <button type="button" 
                    data-bs-target="#carousel{{ str_replace(' ', '', $component) }}" 
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
                    data-bs-target="#carousel{{ str_replace(' ', '', $component) }}" 
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
            <div class="carousel-inner mb-4 mt-3">
                <div class="carousel-item {{ (isset($active) && $active === 0) || !isset($active) ? 'active' : '' }}">
                    <img src="{{ $page->link('assets/build/img/robotics/kids/components/p-'. str_replace(' ', '-', strtolower($component)) .'.jpg') }}" 
                        alt="Picture of {{ $component }}" 
                        class="mx-auto d-block" />
                </div>
                <div class="carousel-item {{ (isset($active) && $active === 1) ? 'active' : '' }}">
                    <img src="{{ $page->link('assets/build/img/robotics/kids/components/s-'. str_replace(' ', '-', strtolower($component)) .'.jpg') }}"
                        alt="Symbol of {{ $component }}" 
                        class="mx-auto d-block" />
                </div>
            </div>
            <button class="carousel-control-prev" 
                type="button" 
                data-bs-target="#carousel{{ str_replace(' ', '', $component) }}" 
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" 
                type="button" 
                data-bs-target="#carousel{{ str_replace(' ', '', $component) }}" 
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="card-body">
            <h6 class="card-title text-center">
                {{ isset($title) ? $title : $component}}
            </h6>
            @isset ($description)
                <p class="card-text small">{{ $description }}</p>
            @endisset
        </div>
    </div>
</div>