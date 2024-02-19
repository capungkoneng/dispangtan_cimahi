 @extends('layouts.landing.app')

 @section('title', $page->seo_title)
 @section('seoTitle', $page->seo_title)
 @section('seoMetaDescription', $page->seo_meta_description)

 @section('main')
     <section class="wrapper image-wrapper bg-image bg-overlay bg-overlay-400 text-white"
         data-image-src="{{ asset('storage/' . $page->banner) }}" style="max-height: 200px">
         <div class="container pt-10 pb-20 pt-md-10 pb-md-21 text-center">
             <div class="row">
                 <div class="col-lg-8 mx-auto">
                     <h1 class="display-1 mb-3 text-white">{{ $page->title }}</h1>
                     <nav class="d-inline-block" aria-label="breadcrumb">
                         <ol class="breadcrumb text-white">
                             <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                             <li class="breadcrumb-item active" aria-current="page">{{ $page->title }}</li>
                         </ol>
                     </nav>
                     <!-- /nav -->
                 </div>
                 <!-- /column -->
             </div>
             <!-- /.row -->
         </div>
         <!-- /.container -->
     </section>
     <!-- /section -->
     <section class="wrapper bg-light">
         <div class="container py-14 py-md-16">
             <div class="row gx-lg-8 gx-xl-12">
                 <div class="col-lg-8">
                     <div class="blog grid grid-view">
                         <div class="row isotope gx-md-8 gy-8 mb-8">
                             @foreach ($posts as $post)
                                 <article class="item post col-md-6">
                                     <div class="card">
                                         <figure class="card-img-top overlay overlay-1 hover-scale"><a
                                                 href="{{ $post->slug }}"><img
                                                     src="{{ asset('storage/' . ($post->image ?? $gen_setting['logo_image_default'])) }}"
                                                     alt="{{ $post->title }}" /></a>
                                             <figcaption>
                                                 <h5 class="from-top mb-0">Baca Selengkapnya</h5>
                                             </figcaption>
                                         </figure>
                                         <div class="card-body">
                                             <div class="post-header">
                                                 <div class="post-category text-line">
                                                     @foreach (explode(',', $post->categories) as $category)
                                                         <a href="#" class="hover"
                                                             rel="category">{{ $category }}</a>
                                                     @endforeach
                                                 </div>
                                                 <!-- /.post-category -->
                                                 <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark"
                                                         href="/{{ $post->slug }}">{{ $post->title }}</a></h2>
                                             </div>
                                             <!-- /.post-header -->
                                             @if ($post->agenda)
                                                 <div class="post-content">
                                                     <p class="mb-0"><strong>Lokasi:</strong>
                                                         {{ $post->agenda->location }}</p>
                                                     <p class="mb-0"><strong>Tanggal:</strong>
                                                         {{ $post->agenda->date }}
                                                     </p>
                                                     <p class="mb-0"><strong>Catatan:</strong>
                                                         <br>{{ $post->agenda->notes }}
                                                     </p>
                                                 </div>
                                             @else
                                                 <div class="post-content">
                                                     <p>{{ $post->content_short }}</p>
                                                 </div>
                                             @endif
                                             <!-- /.post-content -->
                                         </div>
                                         <!--/.card-body -->
                                         <div class="card-footer">
                                             <ul class="post-meta d-flex mb-0">
                                                 <li class="post-date">
                                                     <i class="uil uil-calendar-alt"></i>
                                                     <span>{{ $post->updated_at->format('d M Y') }}</span>
                                                 </li>
                                                 <li class="post-author"><i class="uil uil-user"></i><span>By
                                                         {{ $post->user_update->name }}</span></li>
                                                 <li class="post-comments ms-auto"><i class="uil uil-eye"></i><span>
                                                         {{-- {{ views($post)->collection($post->slug)->count() }} --}}
                                                         {{ $post->visit_count_total }}
                                                         kali</span></li>
                                             </ul>


                                             <!-- /.post-meta -->
                                         </div>
                                         <!-- /.card-footer -->
                                     </div>
                                     <!-- /.card -->
                                 </article>
                                 <!-- /.post -->
                             @endforeach
                         </div>
                         <!-- /.row -->
                     </div>
                     <!-- /.blog -->
                     <nav class="d-flex" aria-label="pagination">
                         {{ $posts->links() }}
                         <!-- /.pagination -->
                     </nav>
                     <!-- /nav -->
                 </div>
                 <!-- /column -->
                 @include('pages.posts._sidebar')
                 <!-- /column .sidebar -->
             </div>
             <!-- /.row -->
         </div>
         <!-- /.container -->
     </section>
 @endsection
