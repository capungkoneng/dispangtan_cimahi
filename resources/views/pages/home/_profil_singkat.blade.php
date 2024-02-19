  <section class="wrapper bg-light">
      <div class="container">
          <div class="row gy-10 gy-sm-13 gx-lg-3 align-items-center mb-14 mb-md-18">
              <div class="col-md-8 col-lg-6 position-relative">
                  <a href="{{ $gen_setting['video_profil_singkat'] ?? '' }}"
                      class="btn btn-circle btn-primary btn-play ripple mx-auto mb-5 position-absolute"
                      style="top:50%; left: 50%; transform: translate(-50%,-50%); z-index:3;" data-glightbox
                      data-gallery="about"><i class="icn-caret-right"></i></a>
                  <div class="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed="0"
                      style="bottom: -1.8rem; right: -1.5rem; width: 85%; height: 90%; "></div>
                  <figure class="rounded"><img
                          src="{{ asset('storage/' . $gen_setting['profil_singkat_logo_image'] ?? '') }}"
                          alt="">
                  </figure>
              </div>
              <!--/column -->
              <div class="col-lg-5 offset-lg-1">
                  <h2 class="fs-15 text-uppercase text-primary mb-3">{{ $gen_setting['label_profil_singkat'] ?? '' }}
                  </h2>
                  <h3 class="display-4 mb-6">{{ $gen_setting['label_profil_singkat'] ?? '' }}</h3>
                  <p class="mb-6">{{ $gen_setting['content_profil_singkat'] ?? '' }}
                  </p>
                  <!--/.row -->
              </div>
              <!--/column -->
          </div>
      </div>
      <!-- /.container -->
  </section>
