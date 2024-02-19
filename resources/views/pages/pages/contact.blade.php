@extends('layouts.landing.app')

@section('title', 'Kontak & Pengaduan - Dispangtan Cimahi')
@section('seoTitle', 'Kontak & Pengaduan - Dispangtan Cimahi')
{{-- @section('seoMetaDescription', $post->seo_meta_description) --}}

@section('main')
    <section class="wrapper image-wrapper bg-image bg-overlay bg-overlay-400 text-white"
        data-image-src="{{ asset('storage/' . $page->banner) }}" style="max-height: 400px">
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
    <section class="wrapper bg-light angled upper-end">
        <div class="container pb-11">
            <div class="row mb-14 mb-md-16">
                <div class="col-xl-10 mx-auto mt-n19">
                    <div class="card">
                        <div class="row gx-0">
                            <div class="col-lg-6">
                                <div class="p-10 p-md-11 p-lg-14">
                                    <h2> Silahkan <span class="underline-3 style-2 leaf">Pilih Saluran </span> Pengaduan
                                        yang
                                        akan digunakan:</h2>
                                    <br>
                                    <br>
                                    @foreach ($gen_setting as $key => $value)
                                        @if (strpos($key, 'pengaduan_text') === 0)
                                            <h3>{{ $value }}</h3>
                                            <a href="{{ $gen_setting['pengaduan_link_' . substr($key, 15)] }}"
                                                target="blank">
                                                <img src="{{ 'storage/' . $gen_setting['pengaduan_logo_' . substr($key, 15)] }}"
                                                    alt="{{ substr($key, 15) }}" width="200px">
                                            </a>
                                            <br>
                                            <hr class="my-8" />
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                            <!--/column -->
                            <div class="col-lg-6">
                                <div class="p-10 p-md-11 p-lg-14">
                                    <h2>Kontak Kami :</h2>
                                    <br>
                                    <div class="d-flex flex-row">
                                        <div>
                                            <div class="icon text-primary fs-28 me-4 mt-n1"> <i
                                                    class="uil uil-location-pin-alt"></i> </div>
                                        </div>
                                        <div class="align-self-start justify-content-start">
                                            <h5 class="mb-1">Alamat</h5>
                                            <address> {{ $gen_setting['contact_alamat'] }}</address>
                                        </div>
                                    </div>
                                    <!--/div -->
                                    <div class="d-flex flex-row">
                                        <div>
                                            <div class="icon text-primary fs-28 me-4 mt-n1"> <i
                                                    class="uil uil-envelope"></i> </div>
                                        </div>
                                        <div>
                                            <h5 class="mb-1">E-mail</h5>
                                            <p class="mb-0"><a href="mailto:{{ $gen_setting['contact_email'] }}"
                                                    class="link-body"> {{ $gen_setting['contact_email'] }}</a></p>

                                        </div>
                                    </div>
                                    <!--/div -->
                                </div>
                                <!--/div -->
                                <div class="map map-full rounded-top rounded-lg-start" style="max-height: 200px">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.1757792241297!2d107.55174167418856!3d-6.869529593129139!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e43e39ecd595%3A0xe17d46c7f693affb!2sDinas%20Pangan%20Dan%20Pertanian%20Kota%20Cimahi!5e0!3m2!1sid!2sid!4v1701816397360!5m2!1sid!2sid"
                                        style="width:100%; height: 100%; padding: 10px" allowfullscreen></iframe>
                                </div>
                                <!-- /.map -->
                            </div>
                            <!--/column -->
                        </div>
                        <!--/.row -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

@endsection
