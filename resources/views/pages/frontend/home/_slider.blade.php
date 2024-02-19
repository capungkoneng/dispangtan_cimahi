 <div class="slider slider-home-2">
     <div class="tp-banner-container-box">
         <div class="tp-banner-box">
             <ul>
                 @foreach ($sliders as $slider)
                     <li data-transition="fade" data-slotamount="7" data-masterspeed="1500">
                         <!-- MAIN IMAGE -->
                         <img src="{{ asset('storage/' . $slider->slider_photo ?? '') }}" alt="slidebg1" data-bgfit="cover"
                             data-bgposition="center" data-bgrepeat="no-repeat">

                         <!-- LAYER NR. 1 -->
                         <div class="tp-caption sft h1-text-white" data-x="65" data-y="160" data-speed="800"
                             data-start="500" data-easing="easeInOutCubic">{{ $slider->title }}
                         </div>

                         <!-- LAYER NR. 3 -->
                         <div class="tp-caption sft h3-text-white grey-2 text-light" data-x="65" data-y="220"
                             data-speed="800" data-start="800" data-easing="easeInOutCubic"
                             style="max-width: 565px; text-align: left;">
                             {{ $slider->text }}
                         </div>

                         <!-- LAYER NR. 4 -->
                         <div class="tp-caption sft single-btn-slider" data-x="65" data-y="323" data-speed="700"
                             data-start="1100" data-easing="easeInOutCubic"> <a href="{{ $slider->button_url }}"
                                 class="ot-btn large-btn btn-rounded btn-main-color">{{ $slider->button_text }}</a>
                         </div>
                     </li>
                 @endforeach
             </ul>

         </div>
     </div>
 </div>
