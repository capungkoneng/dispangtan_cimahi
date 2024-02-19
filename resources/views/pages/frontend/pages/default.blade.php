@extends('layouts.app-front')
@section('title', $page->title)
@section('content')
    <!-- Section Header Title -->
    <section class="bg-grey clearfix" style="position: relative; padding-top: 10px; padding-bottom: 10px;">
        <div class="container">
            <div class="row">
                <div class="section-title" style="position: relative; z-index: 1;">
                    <div class="col-md-12" style="position: relative; z-index: 1;">
                        <div class="background-image"
                            style="background-image: url('{{ asset('storage/' . $page->banner ?? '') }}'); height: 150px; background-size: cover; background-position: center;">
                        </div>
                        <h2
                            style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: #fff; z-index: 2;">
                            {{ $page->title }}</h2>
                    </div>
                </div>
            </div><!-- End Row -->
        </div><!-- End container -->
    </section><!-- End Section -->


    <!-- Section BreadCrumb -->
    <div class="no-padding border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ol class="breadcrumb breadcrumb-finance">
                        <li><a href="/"> <i class="fa fa-home" aria-hidden="true"></i> Beranda</a></li>
                        <li class="active">{{ $page->title }}</li>
                    </ol>
                </div><!--  End col -->
            </div> <!-- End Row -->
        </div><!-- End container -->
    </div><!--  End Section -->

    <div class="line"></div>

    <!--Blog Detail -->
    <section class="no-padding">
        <div class="container">
            <div class="row">
                <div id="primary" class="content-area  col-md-9 no-padding-right padding-bottom-70">
                    <main id="main" class="site-main padding-top-50">
                        <h1>{{ $page->title }}</h1>
                        <div class="latest-news-data">
                            <span class="dates">{{ $page->user_update->name }} ||</span>
                            <span class="dates">{{ $page->updated_at->format('d F Y') }}</span>
                        </div>
                        <div class="lastest-news-detail">
                            <img src="{{ asset('storage/' . $page->image) }}" class="img-responsive" alt="Image">
                            {{ $page->content }}
                        </div>
                    </main>
                </div> <!-- End Col -->

                <div id="secondary" class="widget-area  col-md-3 padding-top-50" role="complementary">
                    <aside class="widget widget_text">
                        <h3 class="widget-title">About</h3>
                        <div class="textwidget">
                            <p>Nulla eleifend, sapien eget porttitor maximus, nisl ante convallis dolor, nec consequat felis
                                ex a ex. Vestibulum, vitae fringilla nibh consectetur. Integer at volutpat augue.
                            </p>
                        </div>
                    </aside>

                    <aside class="widget widget_search">
                        <form action="GET" class="search-form" method="get" role="search">
                            <input name="s" value="" placeholder="Search …" class="search-field" type="search">
                            <button class="search-submit" type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </aside>
                    <aside id="categories-2" class="widget widget_categories">
                        <h3 class="widget-title">Categories</h3>

                        <ul>
                            <li><a href="#">Business Market</a></li>
                            <li><a href="#">Socials Network</a></li>
                            <li><a href="#">Team Work</a></li>
                            <li><a href="#">Rebuild Services</a></li>
                            <li><a href="#">Electrical System</a></li>
                        </ul> <!-- End Ul -->
                    </aside>

                    <aside class="promotion clearboth">
                        <img src="images/Blog/promotion.jpg" class="img-responsive" alt="Image">
                        <div class="promotionText">
                            <p>Amazing Theme! You can customize it very easy to fit your needs.</p>
                            <a href="" class="btn btn-buy-now"> Buy Now</a>
                        </div>
                    </aside><!-- End promotion -->

                    <aside class="widget widget_Archive">
                        <h3 class="widget-title">Archive</h3>
                        <ul>
                            <li><a href="#">March 2016</a>
                                <span class="count">(4)</span>
                            </li>
                            <li><a href="#">Febuary 2016</a>
                                <span class="count">(9)</span>

                            </li>
                            <li><a href="#">January 2016</a>
                                <span class="count">(34)</span>

                            </li>
                            <li><a href="#">December 2015</a>
                                <span class="count">(22)</span>

                            </li>
                            <li><a href="#">November 2015</a>
                                <span class="count">(35)</span>

                            </li>
                            <li><a href="#">Octorber 2015</a>
                                <span class="count">(4)</span>

                            </li>
                            <li><a href="#">September 2015</a>
                                <span class="count">(26)</span>

                            </li>
                            <li><a href="#">August</a>
                                <span class="count">(11)</span>

                            </li>
                        </ul> <!-- End Ul -->
                    </aside>

                    <aside class="widget widget_tag_cloud">
                        <h3 class="widget-title">Tags</h3>
                        <div class="tagcloud">
                            <a href="#">audio</a>
                            <a href="#">gallery</a>
                            <a href="#">image</a>
                            <a href="#">music</a>
                            <a href="#">photo</a>
                            <a href="#">quote</a>
                            <a href="#">text</a>
                            <a href="#">video</a>
                            <a href="#">vimeo</a>
                            <a href="#">youtube</a>
                        </div>
                    </aside>

                    <aside class="widget widget_meta">
                        <h3 class="widget-title">Meta</h3>
                        <ul>
                            <li><a href="#">Site Admin</a></li>
                            <li><a href="#">Log out</a></li>
                            <li><a href="#">Entries <abbr>RSS</abbr></a></li>
                            <li><a href="#">Comments <abbr>RSS</abbr></a></li>
                            <li><a href="#">WordPress.org</a></li>
                        </ul>
                    </aside>
                </div>
            </div><!-- End Row -->

        </div><!-- End container -->
    </section><!--  End Section -->
@endsection
