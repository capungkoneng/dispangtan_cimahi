<header class="header header-v4" id="sticked-menu">
    <div class="container">
        <div class="top-header">
            <div class="logo">
                <div class="mm-toggle visible-xs visible-sm">
                    <i class="fa fa-bars"></i><span class="mm-label">Menu</span>
                </div> <!-- End button mobile menu -->

                <a href=""><img src="{{ asset('storage/' . $gen_setting['logo'] ?? '') }}" class="img-responsive"
                        alt="Image">
                </a>
            </div><!-- End Logo -->
            <div class="navi-right">
                <div class="logo">
                    <a href=""><img src="{{ asset('storage/' . $gen_setting['logo-berakhlak'] ?? '') }}"
                            class="img-responsive" alt="Image">
                    </a>
                </div>
            </div> <!-- End Navi right -->
        </div> <!-- End Left Header -->
        <nav class="navi-desktop-site navi-desktop-site hidden-sm hidden-xs">
            <ul class="navi-level-1 navi-dark uppercase">
                <li><a href="/">Home</a></li>

                @foreach ($menu_setting as $menu_set)
                    <li class="has-sub">
                        <a href="{{ $menu_set->slug_page }}">{{ $menu_set->menu_name }} @if ($menu_set->submenus->count())
                                <i class="fa fa-angle-down"></i>
                            @endif
                        </a>
                        @if ($menu_set->submenus->count())
                            <ul class="navi-level-2">
                                @foreach ($menu_set->submenus as $submenu)
                                    <li><a href="{{ $submenu->slug_page }}">{{ $submenu->menu_name }}</a></li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach

                <li class="search-container">
                    <!-- ... (kode formulir pencarian) -->
                </li>
            </ul>


        </nav> <!-- End Desktop Navi -->
    </div> <!-- End Container -->
</header> <!-- END HEADER -->
