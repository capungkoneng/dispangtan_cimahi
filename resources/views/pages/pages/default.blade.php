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
    <section class="wrapper bg-light">
        <div class="container py-14 py-md-16">
            <div class="row gx-lg-8 gx-xl-12">
                <div class="col-lg-8">
                    <div class="blog single">
                        <div class="card">
                            <figure class="card-img-top"><img
                                    src="{{ asset('storage/' . ($page->image ?? $gen_setting['logo_image_default'])) }}"
                                    alt="{{ $page->title }}" /></figure>
                            <div class="card-body">
                                <div class="classic-view">
                                    <article class="post">
                                        <div class="post-content mb-5">
                                            <h2 class="h1 mb-4">{{ $page->title }}</h2>
                                            <ul class="post-meta mb-5">
                                                <li class="post-date">
                                                    <i class="uil uil-calendar-alt"></i>
                                                    <span>{{ $page->updated_at->format('d F Y') }}</span>
                                                </li>
                                                <li class="post-author">
                                                    <i class="uil uil-user"></i>
                                                    <span>By {{ $page->user_update->name }}</span>

                                                </li>
                                                <li class="post-comments"><i class="uil uil-eye"></i></i>
                                                    {{-- {{ views($page)->collection($page->slug)->count() }} --}}
                                                    {{ $page->visit_count_total }}
                                                    kali
                                                    <span> Dilihat</span>
                                                </li>
                                            </ul>
                                            {!! $page->content !!}
                                        </div>
                                        <!-- /.post-content -->
                                    </article>
                                    <!-- /.post -->
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
