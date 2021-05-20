<footer class="mt-auto pt-5 pb-3 bg-default-black text-white">
    <div class="container-lg">
        <div class="row gy-5 gx-lg-5">
            <div class="col-lg-4">
                {!! $page->svg('erovoutika-white', [
                    'css' => [
                        'height' => '128px'
                    ] 
                ])!!}
                <p class="mt-3">
                    One-stop Solutions for Robotics, Electronics, Automation, and ICT Solutions.
                </p>
            </div>

            <div class="col-lg-4">
                <h5 class="pb-2 border-bottom border-white mb-3">Quick Links</h4>
                <div class="d-flex flex-row">
                    <nav class="nav flex-column flex-fill">
                        <a class="nav-link {{ empty($page->getPath()) ? 'selected' : ''}}" href="{{ $page->link('/') }}">Home</a>
                        <a class="nav-link {{ $page->selected('/categories\kids') }}" href="{{ $page->link('categories/kids/introduction') }}">Robotics for Kids!</a>
                        <a class="nav-link" href="#">Robotics for Teens!</a>
                        <a class="nav-link" href="#">Robotics for Adults</a>
                    </nav>
                </div>
            </div>

            <div class="col-lg-4 fw-light">
                <h5 class="pb-2 border-bottom border-white mb-3">Contact</h4>
                <p class="mt-3">
                    <span class="fw-semibold">Location:</span>
                    <a class="nav-link"
                        href="https://goo.gl/maps/KRJ4rUowxattN2Z1A">
                        Unit D 2476 P. Urdaneta Rd., Guadalupe Nuevo, Makati City 1212 Makati, Philippines
                    </a>
                </p>
                <p class="text-white">
                    <span class="fw-semibold">Email:</span> erovoutika@gmail.com
                </p>
                <p class="text-white">
                    <span class="fw-semibold">Phone:</span> +(02)8370 1811
                </p>
            </div>
        </div>

        <div class="d-flex flex-column align-items-center mt-4">
            <nav class="nav gap-3">
                <a class="nav-link"
                    href="https://www.erovoutika.ph">
                    {!! $page->svg('icon-globe', [
                        'css' => [
                            'height' => '32px'
                        ]
                    ]) !!}
                </a>
                <a class="nav-link"
                    href="https://www.facebook.com/erovoutika">
                    {!! $page->svg('icon-facebook', [
                        'css' => [
                            'height' => '32px'
                        ]
                    ]) !!}
                </a>
                <a class="nav-link"
                    href="https://www.youtube.com/channel/UC405vJKrS2r20iFV_5ccgVg">
                    {!! $page->svg('icon-youtube', [
                        'css' => [
                            'height' => '32px'
                        ]
                    ]) !!}
                </a>
            </nav>
            <span class="fs-6 mt-3 text-center">&copy; Erovoutika International Corporation {{ date('Y') }}. All Rights Reserved.</span>
        </div>
    </div>
</footer>