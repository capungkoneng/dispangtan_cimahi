  <section class="wrapper bg-dark">
      <div class="swiper-container swiper-hero dots-over" data-margin="0" data-autoplay="true" data-autoplaytime="7000"
          data-nav="true" data-dots="true" data-items="1" data-autoheight="true">
          <div class="swiper">
              <div class="swiper-wrapper">
                  @foreach ($sliders as $slider)
                      <div class="swiper-slide bg-overlay bg-overlay-400 bg-dark bg-image"
                          data-image-src="{{ asset('storage/' . $slider->slider_photo ?? '') }}">
                          <div class="container h-100">
                              <div class="row h-100">
                                  <div
                                      class="col-md-10 offset-md-1 col-lg-7 offset-lg-0 col-xl-6 col-xxl-5 text-center text-lg-start justify-content-center align-self-center align-items-start">
                                      <h4
                                          class="display-1 fs-38 mb-4 text-white animate__animated animate__slideInDown animate__delay-1s">
                                          {{ $slider->title }}</h4>
                                      <p
                                          class="lead fs-23 lh-sm mb-7 text-white animate__animated animate__slideInRight animate__delay-2s">
                                          {{ $slider->text }}</p>
                                      <div class="animate__animated animate__slideInUp animate__delay-3s"><a
                                              href="{{ $slider->button_url }}"
                                              class="btn btn-lg btn-outline-white rounded-pill">{{ $slider->button_text }}</a>
                                      </div>
                                  </div>
                                  <!--/column -->
                              </div>
                              <!--/.row -->
                          </div>
                          <!--/.container -->
                      </div>
                  @endforeach

                  <!--/.swiper-slide -->
              </div>
              <!--/.swiper-wrapper -->
          </div>
          <!-- /.swiper -->
      </div>
      <!-- /.swiper-container -->
  </section>
