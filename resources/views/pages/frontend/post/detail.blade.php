@extends('layouts.app-front')
@section('title', $post->title)
@section('content')
    <!-- Section Header Title -->
    <section class="bg-grey clearfix" style="position: relative; padding-top: 10px; padding-bottom: 10px;">
        <div class="container">
            <div class="row">
                <div class="section-title" style="position: relative; z-index: 1;">
                    <div class="col-md-12" style="position: relative; z-index: 1;">
                        <div class="background-image"
                            style="background-image: url('{{ asset('storage/' . $page->banner ?? '') }}'); height: 150px; background-size: cover; background-position: center;">
                        </div>
                        <h2
                            style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: #fff; z-index: 2;">
                            {{ $post->title }}</h2>
                    </div>
                </div>
            </div><!-- End Row -->
        </div><!-- End container -->
    </section><!-- End Section -->


    <!-- Section BreadCrumb -->
    <div class="no-padding border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ol class="breadcrumb breadcrumb-finance">
                        <li><a href="/"> <i class="fa fa-home" aria-hidden="true"></i> Beranda</a></li>
                        <li class="active">{{ $post->title }}</li>
                    </ol>
                </div><!--  End col -->
            </div> <!-- End Row -->
        </div><!-- End container -->
    </div><!--  End Section -->

    <div class="line"></div>

    <!--Blog Detail -->
    <section class="no-padding">
        <div class="container">
            <div class="row">
                <div id="primary" class="content-area  col-md-9 no-padding-right padding-bottom-70">
                    <main id="main" class="site-main padding-top-50">
                        <h1>{{ $post->title }}</h1>
                        <div class="latest-news-data">
                            <span class="tags"><a href="">Financial</a>, <a href="#"> Maketing</a></span>
                            <span class="dates">March 22,2023</span>
                        </div>
                        <div class="lastest-news-detail">
                            <img src="{{ asset('storage/' . $post->image) }}" class="img-responsive" alt="Image">
                            {{ $post->content }}

                            <div class="padding-top-50">

                                @if ($post->attachment)
                                    <a href="{{ $post->attachment }}" class="btn btn-info" target="_blank"
                                        rel="noopener noreferrer">Download Lampiran</a>
                                @endif
                                <div class="footer-detail-blog">
                                </div>
                                <div class="tags-bottom">
                                    <p>Kategori&nbsp;: &nbsp;
                                        @php
                                            $categories = json_decode($post->categories);
                                        @endphp

                                        @if (is_array($categories))
                                            @foreach ($categories as $category)
                                                <a> {{ $category }}</a>
                                                @if (!$loop->last)
                                                    ,&nbsp;
                                                @endif
                                            @endforeach
                                        @endif
                                    </p>
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="entry_post_navigation">
                                <div class="preview_entry_post">
                                    @if ($previousPost)
                                        <a href="{{ $previousPost->slug }}">
                                            <span><i class="fa fa-angle-double-left" aria-hidden="true"></i> PREVIEW</span>
                                            <h3>{{ $previousPost->title }}</h3>
                                        </a>
                                    @endif
                                </div>
                                <div class="next_entry_post">
                                    @if ($nextPost)
                                        <a href="{{ $nextPost->slug }}">
                                            <span>NEXT <i class="fa fa-angle-double-right" aria-hidden="true"></i> </span>
                                            <h3>{{ $nextPost->title }}</h3>
                                        </a>
                                    @endif
                                </div>
                            </div>
                            <!-- End entry Post Navigation -->
                    </main>
                </div> <!-- End Col -->


                @include('pages.frontend.post._sidebar')
            </div><!-- End Row -->

        </div><!-- End container -->
    </section><!--  End Section -->
@endsection
