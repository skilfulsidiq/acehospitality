<div>


    {{-- <section class="glo-room2-area bg-grey-4 pt-115 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="intro-title-wrapper text-center mb-60 revealed" data-reveal="">
                        <div class="intro-subtitle">
                            <span>Locations</span>
                        </div>
                        <div class="intro-title">
                            <h2>Our Hotels</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="glo-location-active swiper-container swiper-container-initialized swiper-container-horizontal revealed"
            data-reveal="">
            <div class="glo-location-wrapper swiper-wrapper" id="swiper-wrapper-9c877a38c8f108729" aria-live="polite"
                style="transition-duration: 0ms; transform: translate3d(-893.75px, 0px, 0px);">

                @forelse ($hotels as $hotel)
                    <livewire:frontend.components.property-cards.version-two :hotel="$hotel" />
                @empty
                @endforelse


            </div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
        </div>

    </section> --}}



    <section class="glo-gallery-2">
        <div class="container">
            <div class="row">
                  <div class="col-12">
                    <div class="intro-title-wrapper text-center mb-60 revealed" data-reveal="">
                        <div class="intro-subtitle">
                            <span>Locations</span>
                        </div>
                        <div class="intro-title">
                            <h2>Our Hotels</h2>
                        </div>
                    </div>
                    <div class="d-flex justify-content-md-between align-items-md-center mb-10">
                        <h2></h2>
                          <div class="glo-gallery-parent-navigation ">
                        <button class="swiper-parent-gallery-prev" tabindex="0" aria-label="Previous slide"
                            aria-controls="swiper-wrapper-0d83c5eb0691c80e" aria-disabled="false">
                            <i class="far fa-long-arrow-left"></i>
                        </button>
                        <button class="swiper-parent-gallery-next" tabindex="0" aria-label="Next slide"
                            aria-controls="swiper-wrapper-0d83c5eb0691c80e" aria-disabled="false">
                            <i class="far fa-long-arrow-right"></i>
                        </button>
                    </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="swiper-container swiper-parent-gallery-active swiper-container-initialized swiper-container-horizontal swiper-container-ios revealed"
            data-reveal="">
            <div class="swiper-wrapper" id="swiper-wrapper-0d83c5eb0691c80e" aria-live="polite"
                style="transform: translate3d(-870px, 0px, 0px); transition-duration: 0ms;">
                @php
                    $n = count($hotels);
                @endphp
                @forelse ($hotels as $key=> $hotel)
                    <div class="swiper-slide" role="group" aria-label="{{ $key }} / {{ $n }}"
                        style="width: 375px; margin-right: 60px;">
                        <div class="glo-gallery-wrapper">
                            <div
                                class="swiper-container glo-gallery-2-active-1 swiper-container-fade swiper-container-initialized swiper-container-horizontal swiper-container-ios">
                                <div class="swiper-wrapper" id="swiper-wrapper-2ee7ddfc5ead28e1" aria-live="polite"
                                    style="transition-duration: 0ms;">
                                    <div class="swiper-slide swiper-slide-duplicate swiper-slide-prev"
                                        data-swiper-slide-index="2" role="group" aria-label="1 / 5"
                                        style="width: 375px; opacity: 1; transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">

                                        <div class="glo-gallery-thumb">
                                            <div class="img-hover overlay">
                                                <img src="{{ asset($hotel->hotel_cover_image) }}" alt="Image not found">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0"
                                        role="group" aria-label="2 / 5"
                                        style="width: 375px; opacity: 1; transform: translate3d(-375px, 0px, 0px); transition-duration: 0ms;">
                                        <div class="glo-gallery-thumb">
                                             <a href="{{ route('hotel-details',$hotel->slug) }}">
                                            <div class="img-hover overlay">
                                                <img src="{{ asset($hotel->hotel_cover_image) }}"alt="Image not found">
                                            </div>
                                             </a>
                                        </div>
                                    </div>

                                    {{-- <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="1"
                                        role="group" aria-label="3 / 5"
                                        style="width: 375px; opacity: 0; transform: translate3d(-750px, 0px, 0px); transition-duration: 0ms;">
                                        <div class="glo-gallery-thumb">
                                            <div class="img-hover overlay">
                                                <img src="{{ asset($hotel->hotel_cover_image) }}" alt="Image not found">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide swiper-slide-duplicate-prev" data-swiper-slide-index="2"
                                        role="group" aria-label="4 / 5"
                                        style="width: 375px; opacity: 0; transform: translate3d(-1125px, 0px, 0px); transition-duration: 0ms;">
                                        <div class="glo-gallery-thumb">
                                            <div class="img-hover overlay">
                                                <img src="{{ asset($hotel->hotel_cover_image) }}" alt="Image not found">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active"
                                        data-swiper-slide-index="0" role="group" aria-label="5 / 5"
                                        style="width: 375px; opacity: 0; transform: translate3d(-1500px, 0px, 0px); transition-duration: 0ms;">
                                        <div class="glo-gallery-thumb">
                                            <div class="img-hover overlay">
                                                <img src="{{ asset($hotel->hotel_cover_image) }}" alt="Image not found">
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                            </div>
                            <div class="glo-gallery-action">
                                <div class="glo-gallery-inner">
                                    <div class="glo-gallery-content">
                                        {{-- <span>{{ $hotel->hotel_name }}</span> --}}
                                        <h4><a
                                                href="{{ route('hotel-details', $hotel->slug) }}">{{ $hotel->hotel_name }}</a>
                                        </h4>
                                    </div>
                                    {{-- <div class="glo-gallery-navigation">
                                        <button class="swiper-gallery-prev-1" tabindex="0"
                                            aria-label="Previous slide"
                                            aria-controls="swiper-wrapper-2ee7ddfc5ead28e1">
                                            <i class="far fa-long-arrow-left"></i>
                                        </button>
                                        <button class="swiper-gallery-next-1" tabindex="0" aria-label="Next slide"
                                            aria-controls="swiper-wrapper-2ee7ddfc5ead28e1">
                                            <i class="far fa-long-arrow-right"></i>
                                        </button>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse





            </div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
        </div>
    </section>
</div>
