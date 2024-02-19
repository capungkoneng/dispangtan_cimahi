 <aside class="col-lg-4 sidebar mt-8 mt-lg-6">
     <div class="widget">
         <h4 class="widget-title mb-3">Berita Terbaru :</h4>
         <ul class="image-list">
             @foreach ($last_news as $news)
                 <li>
                     <figure class="rounded"><a href="{{ $news->slug }}"><img
                                 src="{{ asset('storage/' . ($news->image ?? $gen_setting['logo_image_default'])) }}"
                                 alt="" /></a></figure>
                     <div class="post-content">
                         <h6 class="mb-2"> <a class="link-dark" href="{{ $news->slug }}">{{ $news->title }}</a>
                         </h6>
                         <ul class="post-meta">
                             <li class="post-date"><i
                                     class="uil uil-calendar-alt"></i><span>{{ $news->updated_at->format('d F Y') }}</span>
                             </li>
                         </ul>
                         <!-- /.post-meta -->
                     </div>
                 </li>
             @endforeach
         </ul>
         <div style="text-align: right; padding-top: 20px">
             <a href="/Berita">
                 <i class="uil uil-arrow-right"></i>
                 <span>Lihat Semua</span>
             </a>
         </div>
         <!-- /.image-list -->
     </div>
     <!-- /.widget -->

     <div class="widget">
         <h4 class="widget-title mb-3">Pengumuman Terbaru :</h4>
         <ul class="image-list">
             @foreach ($pengumuman as $item)
                 <li>
                     <figure class="rounded"><a href="{{ $item->slug }}"><img
                                 src="{{ asset('storage/' . ($item->image ?? $gen_setting['logo_image_default'])) }}"
                                 alt="" /></a></figure>
                     <div class="post-content">
                         <h6 class="mb-2"> <a class="link-dark" href="{{ $item->slug }}">{{ $item->title }}</a>
                         </h6>
                         <ul class="post-meta">
                             <li class="post-date"><i
                                     class="uil uil-calendar-alt"></i><span>{{ $item->updated_at->format('d F Y') }}</span>
                             </li>
                         </ul>
                         <!-- /.post-meta -->
                     </div>
                 </li>
             @endforeach
         </ul>
         <div style="text-align: right; padding-top: 20px">
             <a href="/pengumuman">
                 <i class="uil uil-arrow-right"></i>
                 <span>Lihat Semua</span>
             </a>
         </div>
         <!-- /.image-list -->
     </div>
     <!-- /.widget -->

     <div class="widget">
         <h4 class="widget-title mb-3">Artikel Terbaru :</h4>
         <ul class="image-list">
             @foreach ($articles as $artikel)
                 <li>
                     <figure class="rounded"><a href="{{ $artikel->slug }}"><img
                                 src="{{ asset('storage/' . ($artikel->image ?? $gen_setting['logo_image_default'])) }}"
                                 alt="" /></a></figure>
                     <div class="post-content">
                         <h6 class="mb-2"> <a class="link-dark"
                                 href="{{ $artikel->slug }}">{{ $artikel->title }}</a>
                         </h6>
                         <ul class="post-meta">
                             <li class="post-date"><i
                                     class="uil uil-calendar-alt"></i><span>{{ $artikel->updated_at->format('d F Y') }}</span>
                             </li>
                         </ul>
                         <!-- /.post-meta -->
                     </div>
                 </li>
             @endforeach
         </ul>
         <div style="text-align: right; padding-top: 20px">
             <a href="/pengumuman">
                 <i class="uil uil-arrow-right"></i>
                 <span>Lihat Semua</span>
             </a>
         </div>
         <!-- /.image-list -->
     </div>
     <!-- /.widget -->

     <div class="widget">
         <h4 class="widget-title mb-3">Categories</h4>
         <ul class="unordered-list bullet-primary text-reset">
             @foreach ($categories as $category => $count)
                 <li><a href="{{ route('search', ['query' => $category]) }}">{{ $category }}
                         ({{ $count }})</a></li>
             @endforeach
         </ul>
     </div>
 </aside>
