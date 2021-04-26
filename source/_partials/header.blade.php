<header class="navbar navbar-expand-sm bg-white position-relative shadow-sm py-0 px-md-5">
    <div class="container-xxl">
        <a class="navbar-brand" href="/">
            {!! $page->svg('brand.svg', ['css' => ['height' => '76px']]) !!}
        </a>
        <form class="d-flex navbar-search">
            <div class="input-group">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-primary" type="submit">
                    {!! $page->svg('magnifying-glass.svg') !!}
                </button>
            </div>
        </form>
    </div>
</header>