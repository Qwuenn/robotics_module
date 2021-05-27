<div class="col bg-light rounded-5 shadow p-4">
    <img class="img-fluid mx-auto d-block"
        alt="{{ $component }}"
        src="{{ $page->link('assets/build/img/categories/teens/components/'. str_replace(' ', '-', strtolower($component)) .'.png') }}" />
    <h4 class="mt-2 mb-3">{{ isset($title) ? $title : $component }}</h4>
    @isset ($description)
        <p class="text-justify">{{ $description }}</p>
    @endisset
</div>