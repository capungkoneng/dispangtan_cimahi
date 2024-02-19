<section class="wrapper bg-light">
    <div class="container py-10 py-md-10">
        <div class="row align-items-center mb-10">
            <div class="col-md-8 col-lg-9 col-xl-8 col-xxl-7 pe-xl-20">
                <h2 class="display-4 mb-0">Dinas Terkait</h2>
            </div>
        </div>
        <div class="swiper-container mb-10" data-margin="30" data-autoplay="true" data-dots="true" data-items-xl="5"
            data-items-md="3" data-items-xs="2">
            <div class="swiper">
                <div class="swiper-wrapper">
                    @foreach ($logoDinasSettings as $name_setting => $logo)
                        <div class="swiper-slide">
                            <img src="{{ asset('storage/' . $logo) }}" class="img-responsive" alt="Image">
                        </div>
                    @endforeach
                    <!--/.swiper-slide -->
                </div>
                <!--/.swiper-wrapper -->
            </div>
            <!-- /.swiper -->
        </div>
    </div>
</section>
<!-- /.swiper-container -->
