<section class="padding-top-55">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="title">Pengumuman</h2>
                <div class="customNavigation">
                    <a class="btn prev-project"><i class="fa fa-angle-left"></i></a>
                    <a class="btn next-project"><i class="fa fa-angle-right"></i></a>
                </div><!-- End owl button -->
                <span class="seperator"></span>
                <a href="/pengumuman" class="more-all">Lihat Semua</a>

                <div id="owl-project" class="owl-carousel owl-theme  owl-project clearfix">
                    @foreach ($pengumuman as $item)
                        <div class="item">
                            <a href="{{ '/' . $item->slug }}">
                                <img src="{{ asset('storage/' . $item->image) }}" class="img-responsive" alt="Image">
                                <h5 class="title-project">{{ $item->title }}</h5>
                            </a>
                        </div>
                    @endforeach
                </div> <!--End Owl  -->
            </div><!-- End Col -->
        </div><!-- End Row -->
    </div> <!-- End Container -->
</section>
