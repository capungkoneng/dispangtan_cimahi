<section class="padding-top-65">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="title ">Berita Terbaru</h2><span class="seperator"></span>
                <a href="/berita" class="more-all">Lihat Semua</a>
                <div class="row clearfix">
                    @foreach ($articles as $article)
                        <article class=" col-sm-6 col-md-6 item-lastest-news">
                            <a href="blogList.html" class="img-news-container">
                                <img src="{{ asset('storage/' . $article->image) }}" class="img-responsive"
                                    alt="Image">
                            </a>
                            <div class="news-text-container">
                                <a href="blogList.html">
                                    <h3 class="title-news">{{ $article->title }}</h3>
                                </a>
                                <p>{{ strlen($article->content_short) > 110 ? substr($article->content_short, 0, 110) . '...' : $article->content_short }}
                                </p>
                                <div class="latest-news-data">
                                    <span class="tags">
                                        @php
                                            $categories = json_decode($article->categories);
                                        @endphp

                                        @if (is_array($categories))
                                            @foreach ($categories as $category)
                                                <a href="{{ url('blogList.html') }}">{{ $category }}</a>
                                                @if (!$loop->last)
                                                    ,
                                                @endif
                                            @endforeach
                                        @endif
                                    </span>

                                    <span class="dates">{{ $article->updated_at->format('d F Y') }}</span>

                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div><!-- End col -->

        </div> <!-- End Row -->
    </div>
</section>
