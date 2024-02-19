 <div id="secondary" class="widget-area  col-md-4 padding-top-50" role="complementary">
     <aside class="widget widget_text">
         <h3 class="widget-title">Berita terkini</h3>
         <div class="textwidget">
             @foreach ($last_news as $news)
                 <article class="item-lastest-news" style="padding-bottom: 20px;padding-right: 0px;">
                     <a href="blogDetail.html" class="img-news-container">
                         <img src="{{ asset('frontend/images/Blog/b1.jpg') }}" class="img-responsive" alt="Image">
                     </a>
                     <div class="news-text-container">
                         <div class="latest-news-data">
                             <span class="dates">March 22,2016</span>
                         </div>
                         <a href="blogDetail.html">
                             <h5 class="title-news">The best experience from the experts</h5>
                         </a>
                     </div>
                 </article>
             @endforeach
         </div>
     </aside>

     <aside class="widget widget_text">
         <h3 class="widget-title">Artikel terbaru</h3>
         <div class="textwidget">
             @foreach ($articles as $article)
                 <article class="item-lastest-news" style="padding-bottom: 20px;padding-right: 0px;">
                     <a href="blogDetail.html" class="img-news-container">
                         <img src="{{ asset('frontend/images/Blog/b1.jpg') }}" class="img-responsive" alt="Image">
                     </a>
                     <div class="news-text-container">
                         <div class="latest-news-data">
                             <span class="dates">March 22,2016</span>
                         </div>
                         <a href="blogDetail.html">
                             <h5 class="title-news">The best experience from the experts</h5>
                         </a>
                     </div>
                 </article>
             @endforeach
         </div>
     </aside>

     <aside class="widget widget_text">
         <h3 class="widget-title">Pengumuman</h3>
         <div class="textwidget">
             @foreach ($pengumuman as $item)
                 <article class="item-lastest-news" style="padding-bottom: 20px;padding-right: 0px;">
                     <a href="blogDetail.html" class="img-news-container">
                         <img src="{{ asset('frontend/images/Blog/b1.jpg') }}" class="img-responsive" alt="Image">
                     </a>
                     <div class="news-text-container">
                         <div class="latest-news-data">
                             <span class="dates">March 22,2016</span>
                         </div>
                         <a href="blogDetail.html">
                             <h5 class="title-news">The best experience from the experts</h5>
                         </a>
                     </div>
                 </article>
             @endforeach
         </div>
     </aside>

     <aside id="categories-2" class="widget widget_categories">
         <h3 class="widget-title">Categories</h3>

         <ul>
             @foreach ($list_category as $category)
                 <li><a href="/{{ $category->slug }}">{{ $category->name }}</a></li>
             @endforeach
         </ul> <!-- End Ul -->
     </aside>
 </div>
