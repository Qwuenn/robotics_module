<div class="col">
    <img class="img-fluid rounded-2 mx-auto d-block"
        src="{{ isset($img) ? $img : '' }}"
        alt="{{ isset($alt) ? $alt : 'N/A' }}" />
    @isset($label)
        <p class="fst-italic mt-2">{{ $label }}</p>
    @endisset
</div>