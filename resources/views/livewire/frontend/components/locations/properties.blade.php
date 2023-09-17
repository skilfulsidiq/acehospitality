   <div class="row">
       <div class="col-lg-12 wow fadeInUp" data-wow-delay="300ms"
           style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
           <div
               class="feature-listing-slider2 vam_nav_style dots_none slider-dib-sm slider-3-grid owl-carousel owl-theme owl-loaded owl-drag">



               <div class="owl-stage-outer">
                   <div class="owl-stage"
                       style="transform: translate3d(-1236px, 0px, 0px); transition: all 0s ease 0s; width: 3708px;">
                       @for($i=0; $i <= $num; $i++)
                       <div class="owl-item cloned" style="width: 382px; margin-right: 30px;">
                           <div class="item">
                                <livewire:frontend.components.property-cards.version-two image="images/listings/g1-{{ $i+1 }}.jpg" title="Ace Premier" location="Abuja" />
                           </div>
                       </div>
                       @endfor



                   </div>
               </div>
               <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><i
                           class="far fa-arrow-left-long"></i></button><button type="button" role="presentation"
                       class="owl-next"><i class="far fa-arrow-right-long"></i></button></div>
               <div class="owl-dots disabled"><button role="button" class="owl-dot active"><span></span></button>
               </div>
           </div>
       </div>
   </div>
