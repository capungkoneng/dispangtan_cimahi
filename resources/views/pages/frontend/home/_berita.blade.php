 <section class="bg-grey">
     <div class="container">
         <div class="row">
             <div class="col-md-12 ">
                 <div class="section-lastest-news">
                     <h2 class="title ">Berita</h2>
                     <span class="seperator"></span><a href="blogList.html" class="more-all">More All</a>
                     <p style=" margin-top: -20px; margin-bottom: 20px;"> Daftar Berita terbaru</p>
                     <div class="row clearfix">
                         <div class="col-12 col-sm-6 col-lg-6">
                             <div class="card">
                                 <div class="card-body">
                                     <div class="owl-carousel owl-theme slider" id="slider2">
                                         @foreach ($last_news as $news)
                                             <div><img alt="image" src="{{ asset('storage/' . $news->image) }}"
                                                     style="object-fit: cover; max-height: 300px; object-position: center top;">
                                                 <div class="slider-caption">
                                                     <div class="slider-description">{{ $news->updated_at }}</div>
                                                     <div class="slider-title">{{ $news->title }}</div>
                                                 </div>
                                             </div>
                                         @endforeach
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="col-12 col-sm-6 col-lg-6">
                             <div class="card">
                                 <div class="card-body">
                                     @php $counter = 0; @endphp
                                     @foreach ($last_news as $news)
                                         @if ($counter < 2)
                                             <article class="item-lastest-news no-margin">
                                                 <a href="blogDetail.html" class="img-news-container">
                                                     <img src="{{ asset('storage/' . $news->image) }}"
                                                         class="img-responsive" alt="Image">
                                                 </a>
                                                 <div class="news-text-container" style="padding-bottom: 12px;">
                                                     <a href="blogDetail.html">
                                                         <h3 class="title-news">{{ $news->title }}</h3>
                                                     </a>
                                                     <p>{{ strlen($news->content_short) > 80 ? substr($news->content_short, 0, 90) . '...' : $news->content_short }}
                                                     </p>
                                                     <div class="latest-news-data">
                                                         <span class="tags"><a
                                                                 href="blogDetail.html">Retirement</a></span>
                                                         <span class="dates">March 18,2016</span>
                                                     </div>
                                                 </div>
                                             </article>
                                             @php $counter++; @endphp
                                         @endif
                                     @endforeach
                                 </div>
                             </div>
                         </div>


                     </div><!-- End Row -->
                 </div>
             </div><!-- End "section-lastest-news -->
         </div><!-- End row -->
     </div> <!-- End container -->
 </section>
 <!-- End section -->
