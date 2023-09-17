<div>

    <livewire:frontend.components.hero-section-one/>
    <livewire:frontend.components.frontend-availability-form wire:key="home"/>
    <livewire:frontend.components.home-about-section wire:key="home"/>
    {{-- <livewire:frontend.components.locations.hotel-card-list wire:key="home"/> --}}
    {{-- <livewire:frontend.components.feature-properties wire:key="home"/> --}}
    <livewire:frontend.components.home-amenities-section/>
    <livewire:frontend.components.home-testimonies/>



                  <div class="container">
                    <div class="p-5">
                            <input id="demo2"
                            type="text"
                            value=""
                           
                        />
                    </div>
                  </div>



</div>
@push('script')
<script type="text/javascript">
  (function () {
            var demo3 = new HotelDatepicker(
                    document.getElementById("demo2"),
                    {
                        format: "DD-MM-YYYY",
                    }
                );

                })();
</script>
@endpush
