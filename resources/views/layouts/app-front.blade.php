<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]>
<!-->
<html class="no-js" lang="en"><!--<![endif]-->

<head>

    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8">
    <title>@yield('title') &mdash; Dispangtan kota cimahi</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas
  ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Font
  ================================================== -->

    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}">

    @stack('style')
    <!-- CSS
  ================================================== -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}" />
    <!-- SELECTBOX
  ================================================== -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/fancySelect.css') }}" media="screen" />

    <!-- SLIDER REVOLUTION 4.x SCRIPTS
  ================================================== -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/extralayers.css') }}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/rs-plugin/css/settings.css') }}" media="screen" />
    <!-- OWL CAROUSEL
  ================================================== -->
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.default.css') }}">
    <!-- SCROLL BAR MOBILE MENU
  ================================================== -->
    <link rel="stylesheet" href="{{ asset('frontend/css/jquery.mCustomScrollbar.css') }}" />
    <!-- MAIN STYLE
  ================================================== -->
    <link rel="stylesheet" href="{{ asset('frontend/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/components.css') }}">

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="{{ asset('frontend/favicon.png') }}">
    <style>
        /* default color: #e6f7d4 */
        /* custom color: #F2FBE8 */

        .header-v4.stuck,
        .header .navi-dark,
        .header .navi-dark .search-container .btn-search-navi,
        .header-v4 nav .navi-level-1 .search-container .form-search-navi input.form-control,
        .header .navi-dark .search-container .btn-search-navi {
            background: #F2FBE8;
        }

        /* second-color */
        .header .navi-dark .search-container .btn-search-navi {
            background: #e6f7d4 !important;
        }

        /*
        .main-btn,
        .main-btn:hover,
        .hightlight-btn,
        .hightlight-btn:hover,
        .moder-btn:hover,
        .btn-popover:hover,
        .btn-popover:active,
        .btn-popover:focus,
        .btn-download:hover,
        .pagination-finance>li>.current,
        .pagination-finance>li>.current:hover,
        .tagcloud a:hover,
        .promotion .promotionText .btn-buy-now:hover,
        .call-back-form .btn-submit,
        .accordion-process .panel-default>.panel-heading .panel-title>a,
        .accordion-process .panel-default>.panel-heading .panel-title>a.collapsed:hover,
        .pagination-finance>li>.current,
        .item-services .services-3-column-img-container:hover h4,
        .owl-project .item h5,
        .footer-col-1 ul li:hover:before,
        .bar-chart,
        .header .navi-desktop-site .navi-level-2 li:hover,
        .search-container .btn-search-navi.active,
        .header-v3 nav .navi-level-1 .search-container .form-search-navi .btn-search-navi.active,
        .header-v4 nav .navi-level-1 .search-container .form-search-navi .btn-search-navi.active,
        #to-the-top:hover,
        .mobile-menu li a:hover,
        .mobile-menu .open,
        .mobile-menu .open+a,
        .slidebar .list-group-item.active,
        .slidebar .list-group-item.active:hover,
        .slidebar .list-group-item.active:focus,
        .slider .btn-slider:hover,
        .btn-main-color,
        .finance-tabs-style-2 .nav-tabs>li.active>a,
        .finance-tabs-style-2 .nav-tabs>li.active>a:hover,
        .finance-tabs-style-2 .nav-tabs>li.active>a:focus,
        .finance-tabs-style-3 .nav-tabs>li.active>a,
        .finance-tabs-style-3 .nav-tabs>li.active>a:hover,
        .finance-tabs-style-3 .nav-tabs>li.active>a:focus,
        .finance-tabs-style-4 .nav-tabs>li.active::before,
        .accordion-style-light .panel-default>.panel-heading .panel-title>a,
        .accordion-style-light .panel-default>.panel-heading .panel-title>a.collapsed:hover,
        .call-back-form div.fancy-select ul.options li.selected,
        .call-back-form div.fancy-select ul.options li:hover,
        .btn-hightlight-color,
        .finance-sorting div.fancy-select ul.options li.selected,
        .header .navi-desktop-site .navi-level-1 li .navi-level-2 {
            background-color: #F2FBE8
        } */

        .header .navi-desktop-site .navi-level-2 li:hover {
            background: #cad8ba
        }

        .header .navi-desktop-site .navi-level-2 li {
            border-color: #cad8ba
        }

        /* .main-btn, */
        .hightlight-btn,
        .pagination-finance>li>.current,
        .pagination-finance>li>.current,
        .pagination-finance>li>.current:hover,
        .tagcloud a:hover,
        .promotion .promotionText .btn-buy-now,
        .customNavigation .btn:hover,
        .avatar-testimonials-1-columns .owl-wrapper .synced .item img,
        .arrowProjectPage .btn:hover,
        .slidebar .list-group-item.active,
        .slidebar .list-group-item.active:hover,
        .slidebar .list-group-item.active:focus,
        .btn-border-main-color:hover,
        .finance-tabs-style-2 .nav-tabs>li.active>a,
        .finance-tabs-style-2 .nav-tabs>li.active>a:hover,
        .finance-tabs-style-2 .nav-tabs>li.active>a:focus,
        .finance-tabs-style-2 .nav-tabs {
            border-color: #F2FBE8
        }

        /* .moder-btn:hover,
        .more-all,
        .item-blog .caption .learn-more,
        .item-lastest-news h3:hover,
        .item-lastest-news .news-text-container .tags a,
        .itemBlogList .continueReading:hover,
        .widget-area ul li:hover a,
        .widget-area ul li:hover:before,
        .tags-bottom a,
        .share-bottom a,
        .preview_entry_post:hover span,
        .next_entry_post:hover span,
        .preview_entry_post:hover h3,
        .next_entry_post:hover h3,
        .comment-respond .logged-in-as a:hover,
        .comments-area ol.comment-list li.comment .comment-content .reply,
        .comments-area ol.comment-list li.comment .comment-content .reply a,
        .comments-area ol.comment-list li.comment .comment-content cite a:hover,
        .comments-area ol.comment-list li.comment .comment-content span a:hover,
        .comments-area ol.comment-list li.comment .comment-content cite a,
        .widget .search-form .search-submit:hover,
        .promotion .promotionText a,
        .project-terms .current,
        .projectContainer3column .element-item h5:hover,
        ul.style-list-circle li:before,
        ul.style-list-circle li:hover a,
        .item-experts:hover .name-experts,
        .footer-col-1 ul li:hover a,
        .footer-link ul li a:hover,
        .customNavigation .btn:hover,
        .mm-toggle:hover,
        .mm-toggle:active,
        .arrowProjectPage .btn:hover,
        .breadcrumb-finance a:hover,
        .item-services .caption .learn-more,
        .services-list-2 .thumbnail-icon-item .learn-more,
        .btn-border-main-color:hover,
        ul.countdown li span,
        ul.social-dark li a {
            color: #F2FBE8
        } */

        .main-btn:hover,
        .hightlight-btn:hover,
        .call-back-form .btn-submit:hover,
        .slider .btn-slider:hover,
        .btn-main-color:hover,
        .btn-hightlight-color:hover {
            background-color: #e6f7d4
        }

        .main-btn:hover,
        .hightlight-btn:hover,
        .moder-btn:hover,
        .slider .btn-slider:hover,
        ul.countdown li,
        .finance-sorting div.fancy-select div.trigger {
            border-color: #e6f7d4
        }

        .tab-finance .nav-tabs>li.active>a {
            border-top: 2px solid #e6f7d4;
        }

        .more-all:hover,
        .item-blog .caption a h4:hover,
        .item-blog .learn-more:hover,
        .tags-bottom a:hover,
        .share-bottom a:hover,
        .comments-area ol.comment-list li.comment .comment-content .reply a:hover,
        .comments-area ol.comment-list li.comment .comment-content cite a:hover,
        .projectContainer3column .element-item .cateProject:hover,
        .item-lastest-news .news-text-container .tags a:hover,
        .services-list-2 .thumbnail-icon-item .learn-more:hover {
            color: #e6f7d4
        }

        .item-services .caption .learn-more:hover {
            color: #e6f7d4
        }

        .promotion .promotionText,
        .overlay-parallax-bg,
        .finance-sorting div.fancy-select ul.options li:hover {
            background: #f2fbe8da
        }

        .overlay-counter .counter-up-style-1 .couterup,
        .overlay-counter .counter-up-style-1 .unit,
        .overlay-counter .counter-up-style-1 .label-counter {
            color: #222
        }

        .item-services .caption .learn-more,
        .item-services .caption .learn-more:hover {
            color: #333;
        }

        .header .navi-desktop-site .navi-level-1 li .navi-level-2 li a,
        .ot-btn,
        .owl-project .item h5,
        .slider .tp-caption a.ot-btn,
        .slider .tp-caption a.ot-btn:hover,
        .ot-btn:hover,
        .item-services .services-3-column-img-container:hover h4 {
            color: #333
        }
    </style>

</head>

<body>
    <!-- Overlay Mobile Menu Click -->
    <div class="mobile-menu-first">
        <div id="mobile-menu" class="mobile-menu-light">
            <div class="mCustomScrollbar light" data-mcs-theme="minimal-dark">
                <div class="header-mobile-menu hmm-v1">
                    <span class="has-icon sm-icon"><span class="lnr lnr-phone-handset icon-set-1 icon-xs "></span> <span
                            class="sub-text-icon text-middle"><strong>0112-826-2789</strong></span></span>
                    <a href="#" class="ot-btn btn-rounded btn-hightlight-color">Get A Quote</a>
                </div> <!-- Mobile Menu -->
                <ul>
                    <li>
                        <a href="index.html"><i class="icon-home"></i> Home</a>
                        <ul>
                            <li><a href="index.html">Home Page Verison 1</a></li>
                            <li><a href="home_2.html">Home Page Verison 2</a></li>
                            <li><a href="home_3.html">Home Page Verison 3</a></li>
                            <li><a href="home_4.html">Home Page Verison 4</a></li>
                            <li><a href="home_5.html">Home Page Verison 5</a></li>
                            <li><a href="home_6.html">Home Page Verison 6</a></li>
                        </ul>
                    </li>

                    <li><a href="servicesList.html">Services</a>
                        <ul>
                            <li><a href="servicesList.html">Services Style 1</a></li>
                            <li><a href="servicesList2.html">Services Style 2</a></li>
                            <li><a href="services-detail.html">Services Details</a></li>
                        </ul>
                    </li>
                    <li><a href="projectList.html">Projects</a>
                        <ul>
                            <li><a href="projectList.html">Project Grid</a></li>
                            <li><a href="projectsDetail.html">Project Details</a></li>
                        </ul>
                    </li>
                    <li><a href="blogList.html">News</a>
                        <ul>
                            <li><a href="blogList.html">Blog List</a></li>
                            <li><a href="blogDetail.html">Blog Detail</a></li>
                        </ul>
                    </li>
                    <li><a href="shop-catalog.html">Shop</a>
                        <ul>
                            <li><a href="shop-catalog.html">Online Store Catalog</a></li>
                            <li><a href="shop-cart.html">Online Store Shopping Cart</a></li>
                            <li><a href="shop-checkout.html">Online Store Checkout</a></li>
                            <li><a href="shop-single.html">Single Store Product</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Pages</a>
                        <ul>
                            <li><a href="elements.html">Element</a></li>
                            <li><a href="typography.html">Typography</a></li>
                            <li><a href="testimonial.html">Testinmonials</a>
                            <li><a href="404.html">404 Page</a></li>
                            <li><a href="comingsoon.html">Coming Soon</a></li>
                        </ul>
                    </li>
                    <li><a href="about.html">About Us </a></li>
                    <li><a href="contact.html">Contact Us </a>
                        <ul>
                            <li><a href="contact.html">Contact Style 1</a></li>
                            <li><a href="contact2.html">Contact Style 2</a></li>
                            <li><a href="contact3.html">Contact Style 3</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="footer-mobile-menu fmm-v1">
                    <ul class="social">
                        <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li class="youtube"><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                        <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>

                    <ul class="address-footer-mobile">

                        <li><a href=""><span class="lnr lnr-map-marker"></span> 8th floor, 379 Hudson St, New
                                York, NY
                                10018</a></li>
                        <li><a href="tel:18001236879 "><span class="lnr lnr-smartphone"></span> 1-800-123-6879 </a>
                        </li>
                        <li><a href="mailto:contact@finance.com"><span class="lnr lnr-envelope"></span>
                                contact@finance.com</a></li>

                    </ul>
                </div>
            </div> <!-- /#rmm   -->
        </div>
    </div><!-- End Mobile Menu -->
    <div id="page">
        @include('components.front-header')

        @yield('content')

        <!-- Footer -->
        @include('components.front-footer')
    </div>

    <a id="to-the-top" style="display: block;"><i class="fa fa-angle-up"></i></a> <!-- Back To Top -->
    <!-- SCRIPT
    ================================================== -->
    <script src="{{ asset('frontend/js/vendor/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/jpreLoader.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/easing.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/fancySelect.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/custom.js') }}"></script>

    <!-- Mobile Menu
    ================================================== -->
    <script src="{{ asset('frontend/js/plugins/jquery.mobile-menu.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/sticky.min.js') }}"></script>
    <!-- Revo Lib
    ================================================== -->
    <script type="text/javascript" src="{{ asset('frontend/rs-plugin/js/jquery.themepunch.plugins.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
    <!-- Custom Revoslider -->
    <script src="{{ asset('frontend/js/plugins/revoslider-custom.js') }}"></script>
    <!-- Counter Up
    ================================================== -->
    <script src="{{ asset('frontend/js/plugins/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/custom-counterup.js') }}"></script>
    <!-- Initializing the isotope
    ================================================== -->
    <script src="{{ asset('frontend/js/plugins/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/custom-isotope.js') }}"></script>
    <!-- Initializing Owl Carousel
    ================================================== -->
    <script src="{{ asset('frontend/js/plugins/owl.carousel.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/custom-owl.js') }}"></script>
    <!-- Progress Bar Chart
    ================================================== -->
    <script src="{{ asset('frontend/js/plugins/bootstrap-progressbar.min.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/custom-progressbar.js') }}"></script>

    @stack('scripts')
    <script type="text/javascript">
        $("#btn-event").click(function() {
            var link = $(this).attr("data-href");

            var autoplay = "?autoplay=1";

            $("#video").attr("src", link + autoplay);
            $("#video-container").css({
                "z-index": "99",
                "transition": "all 3s"
            });
            $(".background-video").css({
                "opacity": "0",
                "transition": "all 3s"
            });

        });
    </script>

</body>

</html>
