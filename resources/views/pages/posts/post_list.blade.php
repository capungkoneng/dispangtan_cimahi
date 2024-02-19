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
                     <div class="blog classic-view">
                         @foreach ($posts as $post)
                             <article class="post">
                                 <div class="card">
                                     <figure class="card-img-top overlay overlay-1 hover-scale" style="max-height: 320px"><a
                                             href="/{{ $post->slug }}"><img
                                                 src="{{ asset('storage/' . ($post->image ?? $gen_setting['logo_image_default'])) }}"
                                                 alt="{{ $post->title }}" /></a>
                                         <figcaption>
                                             <h5 class="from-top mb-0">Baca Selengkapnya</h5>
                                         </figcaption>
                                     </figure>
                                     <div class="card-body">
                                         <div class="post-header">
                                             <div class="post-category text-line">
                                                 <ul class="list-unstyled tag-list mb-0">
                                                     <li>{{ $post->categories }} </li>
                                                 </ul>

                                             </div>
                                             <!-- /.post-category -->
                                             <h2 class="post-title mt-1 mb-0"><a class="link-dark"
                                                     href="/{{ $post->slug }}">{{ $post->title }}</a></h2>
                                         </div>
                                         <!-- /.post-header -->
                                         <div class="post-content">
                                             <p>{{ $post->content_short }}</p>
                                         </div>
                                         <!-- /.post-content -->
                                     </div>
                                     <!--/.card-body -->
                                     <div class="card-footer">
                                         <ul class="post-meta d-flex mb-0">
                                             <li class="post-date">
                                                 <i class="uil uil-calendar-alt"></i>
                                                 <span>{{ $post->updated_at->format('d F Y') }}</span>
                                             </li>
                                             <li class="post-author">
                                                 <i class="uil uil-user"></i>
                                                 <span>By {{ $post->user_update->name }}</span>
                                             </li>
                                             <li class="post-comments"><i class="uil uil-eye"></i></i>
                                                 {{-- {{ views($post)->collection($post->slug)->count() }} --}}
                                                 {{ $post->visit_count_total }}
                                                 kali
                                                 <span> Dilihat</span>
                                             </li>
                                         </ul>
                                         <!-- /.post-meta -->
                                     </div>
                                     <!-- /.card-footer -->
                                 </div>
                                 <!-- /.card -->
                             </article>
                         @endforeach
                         <!-- /.post -->
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
