<section class="wrapper bg-light">
    <div class="container py-10 py-md-10">
        <div class="row align-items-center mb-10">
            <div class="col-md-8 col-lg-9 col-xl-8 col-xxl-7 pe-xl-20">
                <h2 class="display-4 mb-0">Berita Terbaru</h2>
            </div>
            <!--/column -->
            <div class="col-md-4 col-lg-3 ms-md-auto text-md-end mt-5 mt-md-0">
                <a href="#" class="btn btn-soft-primary rounded-pill mb-0">Lihat Semua berita</a>
            </div>
            <!--/column -->
        </div>
        <!--/.row -->
        <div class="row gx-lg-8 gx-xl-11 gy-10 blog grid-view">
            <div class="col-lg-8">
                <article class="post">
                    <div class="post-slider rounded mb-6">
                        <div class="swiper-container dots-over" data-margin="5" data-dots="true" data-nav="true"
                            data-autoplay="true">
                            <div class="swiper">
                                <div class="swiper-wrapper">
                                    @foreach ($last_news as $news)
                                        <div class="post swiper-slide">
                                            <figure class="overlay overlay-1 hover-scale rounded mb-5"><a
                                                    href="/{{ $news->slug }}">
                                                    <img src="{{ asset('storage/' . ($news->image ?? ($gen_setting['logo_image_default'] ?? ''))) }}"
                                                        alt="{{ $news->title }}" /></a>
                                                <figcaption>
                                                    <h5 class="from-top mb-0">Baca Berita</h5>
                                                </figcaption>
                                            </figure>
                                            {{-- <img src="{{ 'assets/img/photos/b2.jpg' }}" alt="" /> --}}
                                            <div class="post-header">
                                                <div class="post-category text-line">
                                                    <a href="#" class="hover"
                                                        rel="category">{{ $news->categories }}</a>
                                                </div>
                                                <!-- /.post-category -->
                                                <h2 class="post-title mt-1 mb-4"><a class="link-dark"
                                                        href="/{{ $news->slug }}">{{ $news->title }}</a></h2>
                                                <ul class="post-meta mb-0">
                                                    <li class="post-date"><i
                                                            class="uil uil-calendar-alt"></i><span>{{ $news->updated_at }}</span>
                                                    </li>
                                                    <li class="post-author"><a href="#"><i
                                                                class="uil uil-user"></i><span>{{ $news->user_update->name }}</span></a>
                                                    </li>

                                                </ul>
                                                <!-- /.post-meta -->
                                            </div>
                                            <!-- /.post-header -->
                                            <div class="post-content">
                                                <p>{{ $news->content_short }}</p>
                                            </div>
                                            <!-- /.post-content -->

                                        </div>
                                    @endforeach
                                </div>
                                <!--/.swiper-wrapper -->
                            </div>
                            <!-- /.swiper -->
                        </div>
                        <!-- /.swiper-container -->
                    </div>
                    <!-- /.post-slider -->
                </article>
                <!-- /.post -->
            </div>
            <!-- /column -->
            <div class="col-lg-4">
                <div class="row gy-10">
                    @php $counter = 0; @endphp
                    @foreach ($last_news as $news)
                        @if ($counter < 2)
                            <div class="col-md-6 col-lg-12">
                                <article class="post">
                                    <figure class="overlay overlay-1 hover-scale rounded mb-5"><a href="#"> <img
                                                src="{{ asset('storage/' . $news->image) }}" alt="" /></a>
                                        <figcaption>
                                            <h5 class="from-top mb-0">Read More</h5>
                                        </figcaption>
                                    </figure>
                                    <div class="post-header">
                                        <div class="post-category text-line">
                                            <a href="#" class="hover" rel="category">{{ $news->categories }}</a>
                                        </div>
                                        <!-- /.post-category -->
                                        <h4 class="post-title h4 mt-1 mb-3"><a class="link-dark"
                                                href="./blog-post.html">{{ $news->title }}</a></h4>
                                    </div>
                                    <!-- /.post-header -->
                                    <div class="post-footer">
                                        <ul class="post-meta">
                                            <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14 Apr
                                                    2022</span>
                                            </li>
                                            <li class="post-comments"><a href="#"><i
                                                        class="uil uil-comment"></i>4</a>
                                            </li>
                                        </ul>
                                        <!-- /.post-meta -->
                                    </div>
                                    <!-- /.post-footer -->
                                </article>
                                <!-- /.post -->
                            </div>
                            @php $counter++; @endphp
                        @endif
                    @endforeach
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->
