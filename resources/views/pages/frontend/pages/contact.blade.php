@extends('layouts.app-front')

@section('title', 'Kontak & Pengaduan')

@section('content')
    <section class="padding-top:50px;">
        <div class="container">
            <div class="row">
                <div class="col-md-7 left-contact">
                    <h4> Pengaduan</h4>
                    <div class="accordion-style-light no-round accordion-3">
                        <div class="accordion-warp">
                            <div class="panel-group" id="accordion3">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion3" href="#collapseOne2"><i
                                                    class="fa fa-exclamation" aria-hidden="true">
                                                </i> Lapor</a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne2" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <div class="accordion-content">
                                                <h3>{{ $gen_setting['text_lapor'] }}</h3>
                                                <br>
                                                <a href="{{ $gen_setting['link_lapor'] }}" target="blank">
                                                    <img src="{{ 'storage/' . $gen_setting['logo_lapor'] }}"
                                                        alt="lapor.go.id">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion3" href="#collapseTwo2"
                                                class="collapsed"><i class="fa fa-mobile" aria-hidden="true"></i>
                                                Pesduk Kota Cimahi </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo2" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <div class="accordion-content">
                                                <dl class="dl-horizontal">
                                                    <h3>{{ $gen_setting['text_pesduk'] }}</h3>
                                                    <br>
                                                    <a href="{{ $gen_setting['link_pesduk'] }}" target="blank">
                                                        <img src="{{ 'storage/' . $gen_setting['logo_pesduk'] }}"
                                                            alt="pesduk_kota_cimahi">
                                                    </a>
                                                </dl>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion3" href="#collapseThree2"
                                                class="collapsed"><i class="fa fa-mobile" aria-hidden="true"></i> Whatsapp
                                                aduan Dispangtan Kota Cimahi</a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree2" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <div class="accordion-content">
                                                <dl class="dl-horizontal">
                                                    <h3>{{ $gen_setting['text_whatsapp'] }}</h3>
                                                    <br>
                                                    <a href="{{ $gen_setting['link_whatsapp'] }}" target="blank">
                                                        <img src="{{ 'storage/' . $gen_setting['logo_whatsapp'] }}"
                                                            alt="whatsapp_kota_cimahi">
                                                    </a>
                                                </dl>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- End panel group -->
                        </div>
                    </div>
                </div> <!-- End col -->
                <div class="col-md-5 right-contact">
                    <h4>Informasi Kontak Kami</h4>
                    <ul class="address">
                        <li>
                            <p><i class="fa fa-building" aria-hidden="true"></i>&nbsp;&nbsp;
                                {{ $gen_setting['contact_alamat'] }}</p>
                        </li>
                        <li>
                            <p><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;&nbsp;
                                {{ $gen_setting['contact_telpon'] }}</p>
                        </li>
                        <li>
                            <p><i class="fa fa-whatsapp" aria-hidden="true"></i> &nbsp;{{ $gen_setting['contact_wa'] }}</p>
                        </li>
                        <li>
                            <p><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp;
                                {{ $gen_setting['contact_email'] }}
                            </p>
                        </li>
                    </ul>
                    <div class="no-padding ">
                        <div class="margin-top-15">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.1757792241297!2d107.55174167418856!3d-6.869529593129139!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e43e39ecd595%3A0xe17d46c7f693affb!2sDinas%20Pangan%20Dan%20Pertanian%20Kota%20Cimahi!5e0!3m2!1sid!2sid!4v1701816397360!5m2!1sid!2sid"
                                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div> <!-- End col -->
            </div>
        </div>
    </section>
@endsection
