<header class="header navbar navbar-expand-lg bg-default-black py-0 px-lg-5">
    <div class="container-xxl">
        <a class="navbar-brand" href="https://www.erovoutika.ph">
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
                {!! $page->icon('list', ['width' => '32', 'height' => '32']) !!}
            </span>
        </button>
        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ empty($page->getPath()) ? 'active' : ''}}" 
                        href="{{ $page->link('/') }}">
                        {!! $page->icon('house-door-fill') !!} Robotics Home
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownCategories" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        {!! $page->icon('grid-fill') !!} Categories
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownCategories">
                        <li><a class="dropdown-item {{ $page->isActive('/categories\kids') }}" href="{{ $page->link('categories/kids/introduction') }}">Robotics for Kids!</a></li>
                        <li><a class="dropdown-item {{ $page->isActive('/categories\teens') }}" href="{{ $page->link('categories/teens/introduction') }}">Robotics for Teens!</a></li>
                        <li><a class="dropdown-item {{ $page->isActive('/categories\adults') }}" href="{{ $page->link('categories/adults/introduction') }}">Robotics for Adults</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" 
                        href="https://www.facebook.com/erovoutika">
                        {!! $page->icon('facebook') !!} Facebook
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" 
                        href="https://www.youtube.com/channel/UC405vJKrS2r20iFV_5ccgVg">
                        {!! $page->icon('youtube') !!} Youtube
                    </a>
                </li>
            </ul>
        </div>
    </div>
</header>