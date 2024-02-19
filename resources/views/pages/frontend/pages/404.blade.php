 @extends('layouts.app-front')

 @section('title', 'Error 404')

 @section('content')
     <!-- section begin -->
     <section id="section-404" class="no-padding">
         <div class="container">
             <div class="row">

                 <div class="content-404 intro-text margin-top-170 text-center">
                     <h2>404</h2>
                     <p>Oop! We are sorry, the page not found!</p>
                     <div class="divider-single"></div>
                     <a href="javascript:void(0);" onclick="window.history.back();"
                         class="ot-btn btn-main-color large-btn btn-rounded">Kembali Ke Halaman Sebelumnya</a>

                 </div>

             </div>
         </div>
     </section>
     <!-- section close -->

 @endsection
