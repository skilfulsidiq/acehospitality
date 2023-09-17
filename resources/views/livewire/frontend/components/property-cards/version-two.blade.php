<div class="item">

    <div class="feature-style1 mb30">
        {{-- <a class="ud-btn2" href="{{ route('hotel-details') }}"> --}}
        <div class="feature-img"><img class="w-100" src="{{ $image }}" alt=""></div>
        <div class="feature-content">
            <div class="top-area">
                <h6 class="title mb-1">{{ $title }}</h6>
                <p class="text">{{ $location }}</p>
            </div>
            <div class="bottom-area">
                <a class="ud-btn2" href="{{ route('hotel-details') }}">View Details<i
                        class="fal fa-arrow-right-long"></i></a>
            </div>
        </div>
        {{-- </a> --}}
    </div>

</div>
