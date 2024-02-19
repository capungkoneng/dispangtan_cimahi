 <!-- Footer -->
 <footer class=" bg-dark footer">
     <div class="container">
         <div class="row">
             <div class="footer-row">

                 <div class="footer-col-1">
                     <a href="index.html"><img src="{{ asset($gen_setting['logo_footer'] ?? '') }}" class="img-responsive"
                             alt="Image" style="max-width: 50%;"></a>
                     <ul class="clearfix">
                         @foreach ($footerLinks as $link)
                             <li><a href="{{ $link->url }}">{{ $link->text }}</a></li>
                         @endforeach
                     </ul>
                 </div>


                 <div class="footer-col-2">
                     <h3 class="text-white">Kontak Kami</h3>
                     <div class="border-2-side">
                         <p>Alamat: {{ $gen_setting['contact_alamat'] ?? '' }}</p>
                         <p><span>Telp: {{ $gen_setting['contact_telpon'] ?? '' }}</span></p>
                         <p><span>WA: {{ $gen_setting['contact_wa'] ?? '' }}</span></p>
                         <p><span>Email: {{ $gen_setting['contact_email'] ?? '' }}</span></p>
                     </div>
                 </div>

                 <div class="footer-col-3">
                     <h3 class="text-white">Sosial Media</h3>
                     <ul class="social social-footer">
                         @foreach ($socialMedia as $media)
                             <li class="{{ $media->name }}">
                                 <a href="{{ $media->url }}"><i class="fa fa-{{ $media->icon }}"></i></a>
                             </li>
                         @endforeach
                     </ul>
                 </div>

             </div> <!-- End footer row -->
             <div class="col-md-12 footer-link">
                 <p>Copyright © {{ date('Y') }} {{ $gen_setting['footer_copyright'] ?? '' }}. All rights reserved.
                 </p>

                 <ul>
                     <li><a href="about.html">About </a></li>
                     <li><a href="contact.html">Contact Us </a></li>
                     <li><a href="#">Term & Conditions</a></li>
                     <li><a href="#">Privacy Policy </a></li>
                     <li><a href="#">Sites Map</a></li>
                 </ul>
             </div>
         </div><!-- End Row -->

     </div><!-- End container -->
 </footer><!-- End  -->
