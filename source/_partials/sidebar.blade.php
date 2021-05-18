<div id="sidebar" class="sidebar d-lg-block collapse mt-lg-5">
    <div class="position-sticky ps-lg-3 py-lg-0 py-4 px-2">
        <div class="navbar-brand border-bottom border-primary text-primary fw-semibold mb-1 pt-lg-0 pt-2 pb-1">Robotics for Kids!</div>
        <ul class="nav flex-column fw-medium">
            <li class="nav-item {{ $page->selected('/robotics\kids/introduction') }}">
                <a class="nav-link" href="{{ $page->link('robotics/kids/introduction') }}">Introduction</a>
            </li>
            <li class="nav-item {{ $page->selected('/robotics\kids/robot-car-kit') }}">
                <a class="nav-link" href="{{ $page->link('robotics\kids/robot-car-kit') }}">
                    Robot Car Kit
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" 
                    data-bs-toggle="collapse" 
                    href="#robotics-kit-collapse" 
                    role="button" 
                    aria-expanded="false" 
                    aria-controls="collapseExample">
                    Activities
                </a>
                <div class="collapse" id="robotics-kit-collapse">
                    <ul class="nav flex-column btn-toggle-nav">
                        <li class="nav-item {{ $page->selected('/robotics\kids/activity-1') }}">
                            <a class="nav-link" href="{{ $page->link('robotics\kids/activity-1') }}">
                                1 - Line Following Robot
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sub Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sub Menu</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>