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
                            style="background-image: url('{{ asset('storage/' . $page->banner ?? '') }}'); height: 150px; background-size: cover; background-position: center;">
                        </div>
                        <h2
                            style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: #fff; z-index: 2;">
                            {{ $page->title }}
                        </h2>
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

    <!--Content-->
    <section class="no-padding">
        <div class="container">
            <div class="row">
                <div id="primary" class="content-area  col-md-9 no-padding-right padding-bottom-70">
                    <section class="padding-top-50 padding-bottom-20">
                        <div class="container">
                            <div class="row">
                                <div class="services-wrap">
                                    <div class="services-list-contain">

                                        {{-- Item List --}}
                                        @foreach ($posts as $post)
                                            <div class="item-services">
                                                <div class="thumbnail">
                                                    <a href="/{{ $post->slug }}" class="services-3-column-img-container">
                                                        <img src="{{ asset('storage/' . $post->image) }}" alt="">
                                                        <h4>{{ $post->title }}</h4>
                                                    </a>

                                                    <div class="caption">
                                                        <p>
                                                            {{ $post->content_short }}
                                                        </p>
                                                        <a class="learn-more" href="/{{ $post->slug }}"><i
                                                                class="fa fa-caret-right" aria-hidden="true"></i> Baca
                                                            Selengkapnya

                                                        </a>
                                                    </div>
                                                </div>
                                            </div> <!-- end column 1 -->
                                        @endforeach
                                    </div>
                                </div><!--  End col -->
                            </div><!-- End Row -->
                        </div><!-- End container -->
                    </section><!--  End Section -->
                </div> <!-- End Col -->

                @include('pages.frontend.post._sidebar')
            </div><!-- End Row -->

        </div><!-- End container -->
    </section><!--  End Section -->
@endsection
