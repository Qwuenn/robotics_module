<div class="col-md-4 d-flex align-items-stretch">
    <div class="card component-card">
        <div id="carousel{{ str_replace(' ', '', $title) }}" class="carousel slide card-img-top mx-auto" data-bs-ride="carousel" data-bs-interval="false">
            <div class="carousel-indicators">
                <button type="button" 
                    data-bs-target="#carousel{{ str_replace(' ', '', $title) }}" 
                    data-bs-slide-to="0" 
                    class="active component-picture" 
                    aria-current="true">
                </button>
                <button type="button" 
                    data-bs-target="#carousel{{ str_replace(' ', '', $title) }}" 
                    data-bs-slide-to="1" 
                    class="component-symbol">
                </button>
            </div>
            <div class="carousel-inner mb-4">
                <div class="carousel-item active">
                    <img src="{{ $page->link('assets/build/img/robotics/kids/components/p-'. str_replace(' ', '-', strtolower($title)) .'.jpg') }}" 
                        alt="Picture of {{ $title }}" 
                        class="mx-auto d-block w-50" />
                </div>
                <div class="carousel-item">
                    <img src="{{ $page->link('assets/build/img/robotics/kids/components/s-'. str_replace(' ', '-', strtolower($title)) .'.jpg') }}"
                        alt="Symbol of {{ $title }}" 
                        class="mx-auto d-block w-50" />
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carousel{{ str_replace(' ', '', $title) }}" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carousel{{ str_replace(' ', '', $title) }}" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="card-body">
            <h6 class="card-title text-center">{{ $title }}</h6>
            @isset($description)
                <p class="card-text small">{{ $description }}</p>
            @endisset
        </div>
    </div>
</div>