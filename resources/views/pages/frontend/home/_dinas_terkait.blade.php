 <section class="padding-top-65">
     <div class="container">
         <div class="row">
             <div class=" col-sm-12 col-md-12 col-lg-12">
                 <h2 class="title">Dinas Terkait</h2>
                 <div class="customNavigation">
                     <a class="btn prev-partners"><i class="fa fa-angle-left"></i></a>
                     <a class="btn next-partners"><i class="fa fa-angle-right"></i></a>
                 </div><!-- End owl button -->

                 <div id="owl-partners" class="owl-carousel owl-theme owl-partners clearfix">
                     {{-- Foreach untuk Gambar --}}
                     @foreach ($logoDinasSettings as $name_setting => $logo)
                         <div class="item">
                             <img src="{{ asset('storage/' . $logo) }}" class="img-responsive" alt="Image">
                         </div>
                     @endforeach
                 </div>
             </div><!-- End row partners -->
         </div><!-- End Row -->
     </div>
 </section>
