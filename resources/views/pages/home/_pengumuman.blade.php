<section class="wrapper bg-light">
    <div class="container py-10 py-md-10">
        <div class="row gx-lg-8 gx-xl-12 gy-10 gy-lg-0">
            <div class="col-lg-4 mt-lg-2">
                <img src="{{ asset('assets/img/icons/lineal/megaphone.svg') }}"
                    class="svg-inject icon-svg icon-svg-md mb-4" alt="" />
                <h2 class="display-4 mb-3">Pengumuman</h2>
                <p class="lead fs-lg mb-6 pe-xxl-5">Dinas Pangan dan Pertanian Kota Cimahi
                </p>
                <a href="/pengumuman" class="btn btn-soft-primary rounded-pill">Lihat Semua Pengumuman</a>
            </div>
            <!-- /column -->
            <div class="col-lg-8">
                <div class="swiper-container blog grid-view mb-6" data-margin="30" data-dots="true" data-items-md="2"
                    data-items-xs="1" data-autoplay="true">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            @foreach ($pengumuman as $item)
                                <div class="swiper-slide">
                                    <article>
                                        <figure class="overlay overlay-1 hover-scale rounded mb-5"><a
                                                href="{{ '/' . $item->slug }}">
                                                <img src="{{ asset('storage/' . ($item->image ?? ($gen_setting['logo_image_default'] ?? ''))) }}"
                                                    alt="" /></a>
                                            <figcaption>
                                                <h5 class="from-top mb-0">Baca Selengkapnya</h5>
                                            </figcaption>
                                        </figure>
                                        <div class="post-header">
                                            <div class="post-category text-line">
                                                <a href="#" class="hover"
                                                    rel="category">{{ $item->categories ?? '' }}</a>
                                            </div>
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark"
                                                    href="{{ '/' . $item->slug }}">{{ $item->title }}</a></h2>
                                        </div>
                                        <!-- /.post-header -->
                                        <div class="post-footer">
                                            <ul class="post-meta mb-0">
                                                <li class="post-date"><i
                                                        class="uil uil-calendar-alt"></i><span>{{ $item->updated_at }}</span>
                                                </li>
                                                {{-- <li class="post-comments"><a href="#"><i
                                                            class="uil uil-comment"></i>4</a></li> --}}
                                            </ul>
                                            <!-- /.post-meta -->
                                        </div>
                                        <!-- /.post-footer -->
                                    </article>
                                    <!-- /article -->
                                </div>
                                <!--/.swiper-slide -->
                            @endforeach
                        </div>
                        <!--/.swiper-wrapper -->
                    </div>
                    <!-- /.swiper -->
                </div>
                <!-- /.swiper-container -->
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->
