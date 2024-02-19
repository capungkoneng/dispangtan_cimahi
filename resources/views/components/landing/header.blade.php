<header class="wrapper bg-soft-primary">
    <div class="bg-primary text-white fw-bold fs-15 mb-2 d-lg-block d-md-none">
        <div class="container py-2 d-md-flex flex-md-row d-none">
            <div class="d-flex flex-row align-items-center">
                <nav class="nav social social-white">
                    @foreach ($socialMedia as $media)
                        <a href="{{ $media->url }}" target="_blank"><i class="uil uil-{{ $media->icon }}"></i></a>
                    @endforeach
                </nav>
            </div>
            <div class="d-flex flex-row align-items-center me-6 ms-auto">
            </div>
            <div class="d-flex flex-row align-items-center">
                <li class="nav-item d-none d-md-block">
                    <img src="{{ asset('storage/' . $gen_setting['logo-berakhlak'] ?? '') }}" style="max-width: 200px;"
                        alt="Logo Berahlak" />
                </li>
            </div>
        </div>
        <!-- /.container -->
    </div>
    <nav class="navbar navbar-expand-lg classic transparent navbar-light">
        <div class="container flex-lg-row flex-nowrap align-items-center">
            <div class="navbar-brand w-100">
                <a href="/">
                    <img src="{{ asset('storage/' . $gen_setting['logo'] ?? '') }}" style="max-width: 200px;"
                        srcset="{{ asset('storage/' . $gen_setting['logo'] ?? '') }} 2x" alt="" />
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
                            @if ($menu_set->submenus->count())
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="/{{ $menu_set->slug_page }}"
                                        data-bs-toggle="dropdown">{{ $menu_set->menu_name }}</a>
                                    @if ($menu_set->submenus->count())
                                        <ul class="dropdown-menu">
                                            @foreach ($menu_set->submenus as $submenu)
                                                @if (Str::contains($submenu->slug_page, 'http'))
                                                    <li class="nav-item"><a class="dropdown-item"
                                                            href="{{ $submenu->slug_page }}"
                                                            target="blank">{{ $submenu->menu_name }}</a>
                                                    </li>
                                                @else
                                                    <li class="nav-item"><a class="dropdown-item"
                                                            href="/{{ $submenu->slug_page }}">{{ $submenu->menu_name }}</a>
                                                    </li>
                                                @endif
                                            @endforeach

                                        </ul>
                                    @endif
                                </li>
                            @else
                                <li class="nav-item"><a class="nav-link"
                                        href="/{{ $menu_set->slug_page }}">{{ $menu_set->menu_name }}</a></li>
                            @endif
                        @endforeach
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="offcanvas"
                                data-bs-target="#offcanvas-search"><i class="uil uil-search"></i></a></li>
                    </ul>
                    <!-- /.navbar-nav -->
                    <div class="offcanvas-footer d-lg-none">
                        <div>
                            <a href="mailto:{{ $gen_setting['contact_email'] ?? '' }}"
                                class="link-inverse">{{ $gen_setting['contact_email'] ?? '' }}</a>
                            <br>
                            <br>
                            {{ $gen_setting['contact_alamat'] ?? '' }}<br />
                            <nav class="nav social social-white mt-4">
                                @foreach ($socialMedia as $media)
                                    <a href="{{ $media->url }}" target="_blank"><i
                                            class="uil uil-{{ $media->icon }}"></i></a>
                                @endforeach
                            </nav>
                            <!-- /.social -->
                        </div>
                    </div>
                    <!-- /.offcanvas-footer -->
                </div>
                <!-- /.offcanvas-body -->
            </div>
            <!-- /.navbar-collapse -->
            <div class="navbar-other ms-lg-4">
                <ul class="navbar-nav flex-row align-items-center ms-auto">
                    <li class="nav-item d-none d-lg-none d-md-block">
                        <img src="{{ asset('storage/' . $gen_setting['logo-berakhlak'] ?? '') }}"
                            style="max-width: 200px;" alt="Logo Berahlak" />
                    </li>
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

    <div class="offcanvas offcanvas-top bg-light" id="offcanvas-search" data-bs-scroll="true">
        <div class="container d-flex flex-row py-6">
            <form class="search-form w-100" action="{{ route('search') }}" method="GET">
                <input id="search-form" type="text" name="query" class="form-control"
                    placeholder="Ketikan Apa yang ingin anda cari...">
            </form>
            <!-- /.search-form -->
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <!-- /.container -->
    </div>
    <!-- /.navbar -->
</header>
