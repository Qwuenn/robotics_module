<div class="col">
    <img class="img-fluid rounded-2 mx-auto d-block {{ isset($class) ? $class : '' }}"
        src="{{ isset($img) ? $img : '' }}"
        alt="{{ isset($alt) ? $alt : 'N/A' }}" />
    @isset($label)
        <p class="fst-italic text-center mt-2">{{ $label }}</p>
    @endisset
</div>