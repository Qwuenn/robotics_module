<div id="sidebar" class="sidebar d-lg-block collapse mt-lg-5">
    <div class="position-sticky ps-lg-3 py-lg-0 py-4 px-2">
        <div class="navbar-brand mb-1 pt-lg-0 pt-2 pb-1">Robotics for Kids!</div>
        <ul class="nav flex-column">
            <li class="nav-item {{ $page->selected('/robotics\kids/introduction') }}">
                <a class="nav-link" href="/robotics/kids/introduction">
                    Introduction
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" 
                    data-bs-toggle="collapse" 
                    href="#robotics-kit-collapse" 
                    role="button" 
                    aria-expanded="false" 
                    aria-controls="collapseExample">
                    Robotics Kit
                </a>
                <div class="collapse" id="robotics-kit-collapse">
                    <ul class="nav flex-column btn-toggle-nav">
                        <li class="nav-item"><a class="nav-link" href="#">Sub Menu</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Sub Menu</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Sub Menu</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Sub Menu</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    Menu
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    Menu
                </a>
            </li>
        </ul>
    </div>
</div>