  <footer class="bg-dark text-inverse">
      <div class="container py-10 py-md-10">
          <div class="row gy-6 gy-lg-0">
              <div class="col-lg-4 col-lg-3">
                  <div class="widget">
                      <img class="mb-4" src="{{ asset('storage/' . $gen_setting['logo_footer'] ?? '') }}"
                          srcset="{{ asset('storage/' . $gen_setting['logo_footer'] ?? '') }} 2x" alt=""
                          style="max-width: 200px" />
                      <p style="margin-bottom: 0px;">Sosial Media Kami:</p>
                      <nav class="nav social social-white mb-4">
                          @foreach ($socialMedia as $media)
                              <a href="{{ $media->url }}" target="_blank"><i
                                      class="uil uil-{{ $media->icon }}"></i></a>
                          @endforeach
                      </nav>
                      <p class="mb-4">Copyright © {{ date('Y') }} {{ $gen_setting['footer_copyright'] ?? '' }}</p>
                      <!-- /.social -->
                  </div>
                  <!-- /.widget -->
              </div>
              <!-- /column -->
              <div class="col-md-4 col-lg-2">
                  <div class="widget">
                      <h4 class="widget-title mb-3 text-white">{{ $gen_setting['text_footer_column_1'] }}</h4>
                      <ul class="list-unstyled mb-0">
                          @foreach ($footerColumn1 as $link)
                              <li><a href="{{ $link->url }}">{{ $link->text }}</a></li>
                          @endforeach
                      </ul>
                  </div>
                  <!-- /.widget -->
              </div>
              <!-- /column -->
              <div class="col-md-4 col-lg-2">
                  <div class="widget">
                      <h4 class="widget-title mb-3 text-white">{{ $gen_setting['text_footer_column_2'] }} </h4>
                      <ul class="list-unstyled mb-0">
                          @foreach ($footerColumn2 as $link)
                              <li><a href="{{ $link->url }}">{{ $link->text }}</a></li>
                          @endforeach
                      </ul>
                  </div>
                  <!-- /.widget -->
              </div>
              <!-- /column -->
              <div class="col-md-4 col-lg-3">
                  <div class="widget">
                      <h4 class="widget-title mb-3 text-white">{{ $gen_setting['text_footer_column_3'] }}</h4>
                      <address>{{ $gen_setting['contact_alamat'] ?? '' }}</address>
                      <a href="mailto:{{ $gen_setting['contact_email'] }}">
                          {{ $gen_setting['contact_email'] ?? '' }}</a><br />
                      {{ $gen_setting['contact_telpon'] ?? '' }}
                  </div>
                  <!-- /.widget -->
              </div>
              <!-- /column -->
          </div>
          <!--/.row -->
      </div>
      <!-- /.container -->
  </footer>
