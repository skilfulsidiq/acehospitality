<div>
      <livewire:frontend.components.image-breadcrumb title="Conference Rooms"/>

      <section class="glo-event-area pt-110">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="intro-title-wrapper-2 mb-50 revealed" data-reveal="">
              <span class="intro-subtitle-3">Conference Room</span>
              <h2 class="intro-title-3">Our Conference/Event Center</h2>
            </div>
          </div>
        </div>
        <div class="row">
            @forelse ($rooms as $room )
             <div class="col-md-6">
            <div class="glo-event-item mb-30 revealed" data-reveal="left">
              <a href="{{ route('event-details',$room->slug) }}">
                <div class="glo-event-thumb img-hover overlay">
                  <img src="{{ asset($room->images) }}" alt="img not found">
                </div>

                <div class="glo-event-content">
                  <span class="glo-event-subtitle">{{ $room->hotel->hotel_name}}</span>
                  <h3 class="glo-event-title">{{ $room->name }}</h3>
                  {{-- <h4 class="text-white">Capacity: {{ $room->no_of_person }}</h4>
                  <h4 class="text-white">Capacity: {{ $room->no_of_person }}</h4> --}}
                </div>
              </a>
            </div>
          </div>
            @empty

            @endforelse




        </div>
      </div>
    </section>
</div>
