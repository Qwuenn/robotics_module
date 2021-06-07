<div class="col bg-light rounded-5 shadow p-4">
    <img class="img-fluid mx-auto d-block"
        alt="{{ isset($title) ? $title : 'N/A' }}"
        src="{{ isset($img) ? $img : '' }}" />
    @isset ($title)    
        <h4 class="mt-2 mb-3">{{ $title }}</h4>
    @endisset
    @isset ($description)
        <p class="text-justify">{{ $description }}</p>
    @endisset
</div>