<header class="header navbar navbar-expand-lg bg-default-black py-0 px-lg-5">
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
                    <a class="nav-link" 
                        href="https://www.erovoutika.ph">
                        {!! $page->svg('icon-globe', [
                            'css' => [
                                'height' => '1rem'
                            ]
                        ]) !!}
                        Main Website
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" 
                        href="https://www.facebook.com/erovoutika">
                        {!! $page->svg('icon-facebook', [
                            'css' => [
                                'height' => '1rem'
                            ]
                        ]) !!}
                        Facebook
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" 
                        href="https://www.youtube.com/channel/UC405vJKrS2r20iFV_5ccgVg">
                        {!! $page->svg('icon-youtube', [
                            'css' => [
                                'height' => '1rem'
                            ]
                        ]) !!}
                        Youtube
                    </a>
                </li>
            </ul>
        </div>
    </div>
</header>