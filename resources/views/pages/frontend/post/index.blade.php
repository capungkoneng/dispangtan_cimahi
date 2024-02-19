@extends('layouts.app-front')
@section('title', $page->title)
@section('content')
    <!-- Section Header Title -->
    <section class="bg-grey clearfix" style="position: relative; padding-top: 10px; padding-bottom: 10px;">
        <div class="container">
            <div class="row">
                <div class="section-title" style="position: relative; z-index: 1;">
                    <div class="col-md-12" style="position: relative; z-index: 1;">
                        <div class="background-image"
                            style="background-image: url('{{ asset('storage/' . $page->banner) }}'); height: 150px; background-size: cover; background-position: center;">
                        </div>
                        <h2
                            style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: #fff; z-index: 2;">
                            {{ $page->title }}</h2>
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
                        <li class="active">{{ $page->title }}</li>
                    </ol>
                </div><!--  End col -->
            </div> <!-- End Row -->
        </div><!-- End container -->
    </div><!--  End Section -->

    <div class="line"></div>

    <!--List Blog -->
    <div class="no-padding">
        <div class="container">
            <div class="row">

                <div id="primary" class="content-area col-md-8 no-padding-right">

                    <main id="main" class="site-main padding-top-50">
                        @foreach ($posts as $post)
                            <article class="item-lastest-news itemBlogList">
                                <a href="'/{{ $post->slug }}'" class="img-news-container">
                                    <img src="{{ asset('storage/' . $post->image) }}" class="img-responsive"
                                        alt="{{ $post->slug }}">
                                </a>
                                <div class="news-text-container">
                                    <a href="/{{ $post->slug }}">
                                        <h3 class="title-news">{{ $post->title }}</h3>
                                    </a>

                                    <div class="latest-news-data">
                                        <span class="tags">
                                            @php
                                                $categories = json_decode($post->categories);
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


                                        <span class="dates">{{ $post->updated_at->format('d F Y') }}/span>
                                    </div>
                                    <p> {{ $post->content_short }}</p>

                                    <a class="continueReading" href="blogDetail.html">Continue Reading</a>
                                </div> <!-- End Text box -->

                            </article><!-- End Arcicle -->
                        @endforeach
                    </main> <!-- End Main -->
                    {{-- Pagination --}}
                    <div class="col-md-12 text-center clearfix">
                        <ul class="pagination pagination-finance">
                            {{ $posts->links() }}

                        </ul>
                    </div>
                </div>


                @include('pages.frontend.post._sidebar')
            </div><!-- End Row -->

        </div><!-- End container -->
    </div><!--  End Section -->
@endsection
