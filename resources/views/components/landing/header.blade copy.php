<header class="wrapper bg-soft-primary">
    <nav class="navbar navbar-expand-lg center-nav transparent position-absolute navbar-dark caret-none">
        <div class="container flex-lg-row flex-nowrap align-items-center">
            <div class="navbar-brand w-100">
                <a href="/">
                    <img class="logo-dark" src="{{ asset('storage/' . $gen_setting['logo'] ?? '') }}"
                        style="max-width: 200px;" srcset="{{ asset('storage/' . $gen_setting['logo'] ?? '') }} 2x"
                        alt="" />
                    <img class="logo-light" src="{{ asset('storage/' . $gen_setting['logo'] ?? '') }}"
                        style="max-width: 200px;" srcset="{{ asset('storage/' . $gen_setting['logo'] ?? '') }} 2x"
                        alt="" />
                </a>
            </div>
            <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                <div class="offcanvas-header d-lg-none">
                    <h3 class="text-white fs-30 mb-0">Dispangtan</h3>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                    <ul class="navbar-nav">
                        @foreach ($menu_setting as $menu_set)
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{ $menu_set->slug_page }}"
                                    data-bs-toggle="dropdown">{{ $menu_set->menu_name }}</a>
                                @if ($menu_set->submenus->count())
                                    <ul class="dropdown-menu">
                                        @foreach ($menu_set->submenus as $submenu)
                                            <li class="nav-item"><a class="dropdown-item"
                                                    href="{{ $submenu->slug_page }}">{{ $submenu->menu_name }}</a></li>
                                        @endforeach

                                    </ul>
                                @endif
                            </li>
                        @endforeach
                        {{-- blog --}}


                    </ul>
                    <!-- /.navbar-nav -->
                    <div class="offcanvas-footer d-lg-none">
                        <div>
                            <a href="mailto:first.last@email.com" class="link-inverse">info@email.com</a>
                            <br /> 00 (123) 456 78 90 <br />
                            <nav class="nav social social-white mt-4">
                                <a href="#"><i class="uil uil-twitter"></i></a>
                                <a href="#"><i class="uil uil-facebook-f"></i></a>
                                <a href="#"><i class="uil uil-dribbble"></i></a>
                                <a href="#"><i class="uil uil-instagram"></i></a>
                                <a href="#"><i class="uil uil-youtube"></i></a>
                            </nav>
                            <!-- /.social -->
                        </div>
                    </div>
                    <!-- /.offcanvas-footer -->
                </div>
                <!-- /.offcanvas-body -->
            </div>
            <!-- /.navbar-collapse -->
            <div class="navbar-other w-100 d-flex ms-auto">
                <ul class="navbar-nav flex-row align-items-center ms-auto">
                    {{-- <li class="nav-item"> --}}
                    <li class="nav-item d-none d-md-block">
                        <img class="logo-dark" src="{{ asset('storage/' . $gen_setting['logo-berakhlak'] ?? '') }}"
                            style="max-width: 200px;"
                            srcset="{{ asset('storage/' . $gen_setting['logo-berakhlak'] ?? '') }} 2x" alt="" />
                        <img class="logo-light" src="{{ asset('storage/' . $gen_setting['logo-berakhlak'] ?? '') }}"
                            style="max-width: 200px;"
                            srcset="{{ asset('storage/' . $gen_setting['logo-berakhlak'] ?? '') }} 2x"
                            alt="" />
                    </li>
                    {{-- </li> --}}

                    <li class="nav-item d-lg-none">
                        <button class="hamburger offcanvas-nav-btn"><span></span></button>
                    </li>
                </ul>
                <!-- /.navbar-nav -->
            </div>
            <!-- /.navbar-other -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- /.navbar -->
    <div class="offcanvas offcanvas-end text-inverse" id="offcanvas-info" data-bs-scroll="true">
        <div class="offcanvas-header">
            <h3 class="text-white fs-30 mb-0">Dispangtan</h3>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body pb-6">
            <div class="widget mb-8">
                <p>Sandbox is a multipurpose HTML5 template with various layouts which will be a great solution
                    for your business.</p>
            </div>
            <!-- /.widget -->
            <div class="widget mb-8">
                <h4 class="widget-title text-white mb-3">Contact Info</h4>
                <address> Moonshine St. 14/05 <br /> Light City, London </address>
                <a href="mailto:first.last@email.com">info@email.com</a><br /> 00 (123) 456 78 90
            </div>
            <!-- /.widget -->
            <div class="widget mb-8">
                <h4 class="widget-title text-white mb-3">Learn More</h4>
                <ul class="list-unstyled">
                    <li><a href="#">Our Story</a></li>
                    <li><a href="#">Terms of Use</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
            <!-- /.widget -->
            <div class="widget">
                <h4 class="widget-title text-white mb-3">Follow Us</h4>
                <nav class="nav social social-white">
                    <a href="#"><i class="uil uil-twitter"></i></a>
                    <a href="#"><i class="uil uil-facebook-f"></i></a>
                    <a href="#"><i class="uil uil-dribbble"></i></a>
                    <a href="#"><i class="uil uil-instagram"></i></a>
                    <a href="#"><i class="uil uil-youtube"></i></a>
                </nav>
                <!-- /.social -->
            </div>
            <!-- /.widget -->
        </div>
        <!-- /.offcanvas-body -->
    </div>
    <!-- /.offcanvas -->
    <div class="offcanvas offcanvas-top bg-light" id="offcanvas-search" data-bs-scroll="true">
        <div class="container d-flex flex-row py-6">
            <form class="search-form w-100">
                <input id="search-form" type="text" class="form-control"
                    placeholder="Type keyword and hit enter">
            </form>
            <!-- /.search-form -->
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <!-- /.container -->
    </div>
    <!-- /.offcanvas -->
</header>
