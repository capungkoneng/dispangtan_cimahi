<section class="wrapper bg-light">
    <div class="overflow-hidden">
        <div class="container py-5 py-md-5">
            <div class="row align-items-center mb-10">
                <div class="col-md-8 col-lg-9 col-xl-8 col-xxl-7 pe-xl-20">
                    <h2 class="display-4 mb-0">Artikel Terbaru</h2>
                </div>
                <!--/column -->
                <div class="col-md-4 col-lg-3 ms-md-auto text-md-end mt-5 mt-md-0">
                    <a href="/artikel" class="btn btn-soft-primary rounded-pill mb-0">Lihat Semua Artikel</a>
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
            <div class="swiper-container nav-bottom nav-color mb-14" data-margin="30" data-dots="false" data-nav="true"
                data-autoplay="true" data-items-lg="4" data-items-md="2" data-items-xs="1">
                <div class="swiper overflow-visible pb-2">
                    <div class="swiper-wrapper">
                        @foreach ($articles as $article)
                            <div class="swiper-slide">
                                <article>
                                    <div class="card shadow-lg">
                                        <figure class="card-img-top overlay overlay-1"><a href="/{{ $article->slug }}">
                                                <img src="{{ asset('storage/' . ($article->image ?? ($gen_setting['logo_image_default'] ?? ''))) }}"
                                                    alt="{{ $article->title }}" />
                                            </a>
                                            <figcaption>
                                                <h5 class="from-top mb-0">Read More</h5>
                                            </figcaption>
                                        </figure>
                                        <div class="card-body p-6">
                                            <div class="post-header">
                                                <div class="post-category">
                                                    <a href="#" class="hover" rel="category">
                                                        {{ $article->categories }}
                                                    </a>
                                                </div>
                                                <!-- /.post-category -->
                                                <h4 class="post-title h4 mt-1 mb-3"><a class="link-dark"
                                                        href="/{{ $article->slug }}">{{ $article->title }}</a></h4>
                                            </div>
                                            <!-- /.post-header -->
                                            <div class="post-footer">
                                                <ul class="post-meta d-flex mb-0">
                                                    <li class="post-date"><i
                                                            class="uil uil-calendar-alt"></i><span>{{ $article->updated_at->format('d F Y') }}</span>
                                                    </li>

                                                </ul>
                                                <!-- /.post-meta -->
                                            </div>
                                            <!-- /.post-footer -->
                                        </div>
                                        <!--/.card-body -->
                                    </div>
                                    <!-- /.card -->
                                </article>
                                <!-- /article -->
                            </div>
                        @endforeach
                    </div>
                    <!--/.swiper-wrapper -->
                </div>
                <!-- /.swiper -->
            </div>
            <!-- /.swiper-container -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.overflow-hidden -->
</section>
<!-- /section -->
