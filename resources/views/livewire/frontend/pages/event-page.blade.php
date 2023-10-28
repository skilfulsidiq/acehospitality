<div>
    <livewire:frontend.components.image-breadcrumb title="Conference Rooms" />

    <section class="glo-event-area bg-grey-4 pt-120 pb-90">
        <div class="container">
            {{-- <div class="row">
          <div class="col-12">
            <div class="intro-title-wrapper-2 mb-50 revealed" data-reveal="">
              <span class="intro-subtitle-3">Conference Room</span>
              <h2 class="intro-title-3">Our Conference/Event Center</h2>
            </div>
          </div>
        </div> --}}
            <div class="row">
                @forelse ($rooms as $room)
                    <div class="col-md-4">
                        <div class="glo-event-item mb-10 revealed" data-reveal="">
                            <a href="{{ route('event-details', $room->slug) }}" >
                <div class="glo-event-thumb
                                img-hover overlay">
                                <img src="{{ asset($room->images) }}" alt="img not found">
                        </div>
                        </a>
                        <div class="glo-event-content static">
                            <span class="glo-event-date">{{ $room->hotel->hotel_name }}</span>
                            <h3 class="glo-event-title"><a
                                    href="{{ route('event-details', $room->slug) }}">{{ $room->name }}</a></h3>
                            {{-- <p class="glo-event-desc">A beach is a public place where people can play many sports.</p> --}}
                            <div class="glo-event-btn">
                                <a href="{{ route('event-details', $room->slug) }} class="glo-btn-link">View More</a>
                            </div>
                        </div>
                    </div>
            </div>

        @empty
            @endforelse

        </div>
    </section>
</div>
