@extends('layouts.app-front')

@section('title', 'Beranda')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/owl.carousel/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/owl.carousel/dist/assets/owl.theme.default.min.css') }}">
@endpush

@section('content')

    {{-- Slider section --}}
    @include('pages.frontend.home._slider')
    <!-- RevoSlider End -->

    <!-- Section Pengumuman-->
    @include('pages.frontend.home._pengumuman')
    <!-- End Section -->

    <!-- Berita terbaru-->
    @include('pages.frontend.home._berita')
    <!-- End section-->

    <!-- Line -->
    <div class="container">
        <div class="line col-md-12"></div>
    </div> <!-- End line -->

    <!-- Component Counter Up-->
    <section class="padding-top-70 padding-bottom-70">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="video-intro-container">
                        <div class="background-video">
                            <img src="{{ asset('frontend/images/About/bg-youtube.jpg') }}" class="images-responsive"
                                alt="Image">
                            <button data-href="https://www.youtube.com/embed/vOAB6XOkY2E" id="btn-event"
                                class="btn btn-play"></button>
                        </div>


                        <div id="video-container" class="embed-responsive embed-responsive-16by9 iframe-video-container">
                            <iframe id="video" class="embed-responsive-item"
                                src="https://www.youtube.com/embed/vOAB6XOkY2E" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h2 class="margin-bottom-25 margin-top-3">We are Finance</h2>
                    <div class="clearfix"></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus id lectus quis dui euismod
                        consectetur. Pellentesque ac ante sollicitudin, tincidunt nulla in, bibendum massa.
                        Phasellus bibendum,
                        sem velue aliquam gravida, eros ex dapibus neque, eget fermentum dolor arcu a tortor.
                        Integer placerat
                        massa nec elit egestas efficitur. </p>
                    <div class="counter-up counter-up-style-3">
                        <ul>
                            <li>
                                <p><span class="couterup" id="yoe"></span></p>
                                <span class="label-counter">Years of experience</span>
                            </li>
                            <li>
                                <p><span class="couterup" id="hc"></span><span class="unit">K</span></p>
                                <span class="label-counter">Happy Customers</span>
                            </li>
                            <li>
                                <p><span class="couterup" id="satis"></span><span class="unit">%</span></p>
                                <span class="label-counter">Satisfaction</span>
                            </li>
                        </ul>
                    </div><!-- End counter up -->
                </div><!-- End col -->
            </div><!-- End row -->
        </div><!-- End container-->
    </section><!-- End section-->

    <!-- Line -->
    <div class="container">
        <div class="line col-md-12"></div>
    </div> <!-- End line -->

    <!-- Component Overlay Prallax -->
    <section class="overlay-parallax no-padding" style="background-image: url(images/Overlay/2.jpg);">
        <h3 class="text-center text-drak heading-overlay">We focus on advice consulting business financials</h3>
        <div class="overlay-parallax-bg"></div>
    </section><!-- End section -->

    <!-- Component Berita terakhir -->
    @include('pages.frontend.home._artikel')
    <!-- End section -->

    <!-- Line -->
    <div class="container">
        <div class="line col-md-12"></div>
    </div> <!-- End line -->


    <!-- Component Dinas Terkait -->
    @include('pages.frontend.home._dinas_terkait')
    <!-- End section -->

@endsection
@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/owl.carousel/dist/owl.carousel.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/modules-slider.js') }}"></script>
@endpush
