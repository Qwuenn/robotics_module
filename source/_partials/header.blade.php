<header class="header navbar navbar-expand-lg py-0 px-lg-5" style="background-color: #3d8bff">
    <div class="container-xxl">
        <a class="navbar-brand" href="{{ $page->link('/') }}">
            {!! $page->svg('erovoutika-white.svg', ['css' => ['height' => '76px']]) !!}
        </a>
        <button class="navbar-toggler" 
            type="button" 
            data-bs-toggle="collapse" 
            data-bs-target="#navMenu" 
            aria-controls="navMenu" 
            aria-expanded="false" 
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                {!! $page->svg('list') !!}
            </span>
        </button>
        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ empty($page->getPath()) ? 'selected' : ''}}" 
                        href="{{ $page->link('/') }}">
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $page->selected('categories') }}" 
                        href="{{ $page->link('categories') }}">
                        Categories
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" 
                        href="https://www.erovoutika.ph">
                        Main Website
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" 
                        href="https://www.facebook.com/erovoutika">
                        Facebook
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" 
                        href="https://www.youtube.com/channel/UC405vJKrS2r20iFV_5ccgVg">
                        Youtube
                    </a>
                </li>
            </ul>
        </div>
    </div>
</header>