<div>
    <livewire:frontend.components.image-breadcrumb title="Hotels" />

    <section class="glo-reservation-area pt-120 pb-90">
        <div class="container">

            @forelse ($locations as $loc )
             <div class="location">
                @includeIf('includes.room-cards.room-list-title', ['title' => $loc->location_name])

                <div class="row justify-content-center">
                     @forelse ($loc->hotels as $hotel )
                    <div class="col-xxl-4 col-xl-4 col-lg-4 mb-10 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s"
                        style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInUp;">
                        @include('includes.room-cards.portrait',['hotel'=>$hotel])
                    </div>
                    @empty

                @endforelse
                </div>


            </div>

            @empty

            @endforelse


            {{-- <div class="location">
                @includeIf('includes.room-cards.room-list-title', ['title' => 'Lagos'])

                <div class="row justify-content-center">
                    <div class="col-xxl-4 col-xl-4 col-lg-4 mb-10  wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s"
                        style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInUp;">
                        @include('includes.room-cards.portrait')
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 mb-10 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s"
                        style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInUp;">
                        @include('includes.room-cards.portrait')
                    </div>
                </div>
            </div>
            <div class="location">
                @includeIf('includes.room-cards.room-list-title', ['title' => 'Kano'])

                <div class="row justify-content-center">
                    <div class="col-xxl-4 col-xl-4 col-lg-4 mb-10  wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s"
                        style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInUp;">
                        @include('includes.room-cards.portrait')
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 mb-10  wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s"
                        style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInUp;">
                        @include('includes.room-cards.portrait')
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 mb-10  wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s"
                        style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInUp;">
                        @include('includes.room-cards.portrait')
                    </div>
                </div>
            </div> --}}
        </div>

    </section>





    {{-- <section class="glo-reservation-area pt-120 pb-90">
        <div class="container">
            @includeIf('includes.room-cards.room-list-title', ['title' => 'Abuja'])
            @includeIf('includes.room-cards.list-stye')

            @includeIf('includes.room-cards.room-list-title', ['title' => 'Lagos'])
            @includeIf('includes.room-cards.list-stye')

        </div>
    </section> --}}




</div>
