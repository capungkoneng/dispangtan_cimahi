 @extends('layouts.landing.app')

 @section('title', $post->seo_title)
 @section('seoTitle', $post->seo_title)
 @section('seoMetaDescription', $post->seo_meta_description)

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
     <section class="wrapper bg-light">
         <div class="container py-14 py-md-16">
             <div class="row gx-lg-8 gx-xl-12">
                 <div class="col-lg-8">
                     <div class="blog single">
                         <div class="card">
                             <figure class="card-img-top"><img
                                     src="{{ asset('storage/' . ($post->image ?? $gen_setting['logo_image_default'])) }}"
                                     alt="{{ $post->title }}" /></figure>
                             <div class="card-body">
                                 <div class="classic-view">
                                     <article class="post">
                                         <div class="post-content mb-5">
                                             <h2 class="h1 mb-4">{{ $post->title }}</h2>
                                             <ul class="post-meta mb-5">
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
                                             <p>{{ $post->content }}</p>

                                             @if ($post->attachment)
                                                 <a href="{{ $post->attachment }}" class="btn btn-leaf rounded-pill"
                                                     target="_blank" rel="noopener noreferrer"><i
                                                         class="uil uil-file-download-alt"></i> Download Lampiran</a>
                                             @endif

                                             @if (count($post->galleries))
                                                 <h3>Galeri :</h3>
                                                 <div class="row g-6 mt-3 mb-10">
                                                     @foreach ($galleries as $item)
                                                         <div class="col-md-6">
                                                             <figure class="hover-scale rounded cursor-dark"><a
                                                                     href="{{ 'storage/' . $item->content }}"
                                                                     data-glightbox data-gallery="post"> <img
                                                                         src="{{ 'storage/' . $item->content }}"
                                                                         alt="{{ $item->alt_text }}" /></a></figure>
                                                         </div>
                                                     @endforeach
                                                 </div>
                                             @endif

                                             @if ($post->agenda)
                                                 <div class="col-lg-6">

                                                     <div class="d-flex flex-row">
                                                         <div>
                                                             <div class="icon text-primary fs-28 me-6 mt-n1"> <i
                                                                     class="uil uil-location-pin-alt"></i> </div>
                                                         </div>
                                                         <div>
                                                             <h5 class="mb-1">Lokasi Kegiatan</h5>
                                                             <address>{{ $post->agenda->location }}
                                                             </address>
                                                         </div>
                                                     </div>
                                                     <div class="d-flex flex-row">
                                                         <div>
                                                             <div class="icon text-primary fs-28 me-6 mt-n1"> <i
                                                                     class="uil uil-calender"></i> </div>
                                                         </div>
                                                         <div>
                                                             <h5 class="mb-1">Tanggal Kegiatan</h5>
                                                             <p>{{ $post->agenda->date }}</p>
                                                         </div>
                                                     </div>
                                                     <div class="d-flex flex-row">
                                                         <div>
                                                             <div class="icon text-primary fs-28 me-6 mt-n1"> <i
                                                                     class="uil uil-notes"></i></div>
                                                         </div>
                                                         <div>
                                                             <h5 class="mb-1">Catatan</h5>
                                                             <p class="mb-0">{{ $post->agenda->notes }}</p>
                                                         </div>
                                                     </div>
                                                 </div>
                                             @endif
                                         </div>
                                         <!-- /.post-content -->
                                         <div
                                             class="post-footer d-md-flex flex-md-row justify-content-md-between align-items-center mt-8">
                                             <div>
                                                 <ul class="list-unstyled tag-list mb-0">
                                                     Kategori :
                                                     @foreach (explode(',', $post->categories) as $category)
                                                         <li><a href="#"
                                                                 class="btn btn-soft-ash btn-sm rounded-pill mb-0">{{ $category }}</a>
                                                         </li>
                                                     @endforeach
                                                 </ul>
                                             </div>
                                             {{-- <div class="mb-0 mb-md-2">
                                                 <div class="dropdown share-dropdown btn-group">
                                                     <button
                                                         class="btn btn-sm btn-red rounded-pill btn-icon btn-icon-start dropdown-toggle mb-0 me-0"
                                                         data-bs-toggle="dropdown" aria-haspopup="true"
                                                         aria-expanded="false">
                                                         <i class="uil uil-share-alt"></i> Share </button>
                                                     <div class="dropdown-menu">
                                                         <a class="dropdown-item"
                                                             href="https://www.facebook.com/sharer/sharer.php?u=https://distanpangan_cms.test/{{ $post->slug }}&src=sdkpreparse"><i
                                                                 class="uil uil-twitter"></i>Twitter</a>
                                                         <a class="dropdown-item" href="#"><i
                                                                 class="uil uil-facebook-f"></i>Facebook</a>
                                                     </div>
                                                     <!--/.dropdown-menu -->
                                                 </div>
                                                 <!--/.share-dropdown -->
                                             </div> --}}
                                         </div>
                                         <!-- /.post-footer -->
                                     </article>
                                     <!-- /.post -->
                                 </div>

                                 <!-- /.social -->
                                 <hr />
                                 <h3 class="mb-6">Lihat {{ $page->title }} lainnya</h3>
                                 <div class="swiper-container blog grid-view mb-16" data-margin="30" data-dots="true"
                                     data-items-md="2" data-items-xs="1">
                                     <div class="swiper">
                                         <div class="swiper-wrapper">
                                             @foreach ($allpost as $post)
                                                 <div class="swiper-slide">
                                                     <article>
                                                         <figure class="overlay overlay-1 hover-scale rounded mb-5"
                                                             style="height: 150px"><a href="{{ $post->slug }}"> <img
                                                                     src="{{ asset('storage/' . ($post->image ?? $gen_setting['logo_image_default'])) }}"
                                                                     alt="" /></a>
                                                             <figcaption>
                                                                 <h5 class="from-top mb-0">Baca Selengkapnya</h5>
                                                             </figcaption>
                                                         </figure>
                                                         <div class="post-header">
                                                             <div class="post-category text-line">
                                                                 @foreach (explode(',', $post->categories) as $category)
                                                                     <a href="#" class="hover"
                                                                         rel="category">{{ $category }}</a>
                                                                 @endforeach
                                                             </div>
                                                             <!-- /.post-category -->
                                                             <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark"
                                                                     href="{{ $post->slug }}">{{ $post->title }}</a>
                                                             </h2>
                                                         </div>
                                                         <!-- /.post-header -->
                                                         <div class="post-footer">
                                                             <ul class="post-meta mb-0">
                                                                 <li class="post-date"><i
                                                                         class="uil uil-calendar-alt"></i><span>{{ $post->updated_at->format('d F Y') }}</span>
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
                                                         <!-- /.post-footer -->
                                                     </article>
                                                     <!-- /article -->
                                                 </div>
                                             @endforeach

                                             <!--/.swiper-slide -->

                                         </div>
                                         <!--/.swiper-wrapper -->
                                     </div>
                                     <!-- /.swiper -->
                                 </div>
                             </div>
                             <!-- /.card-body -->
                         </div>
                         <!-- /.card -->
                     </div>
                     <!-- /.blog -->
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
