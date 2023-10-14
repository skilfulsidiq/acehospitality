<div>
            @forelse ($cart as $c)
                <div class="mb-3">
                    <span>{{ $c['attributes']['arrival'] }} - {{ $c['attributes']['departure'] }} <em>(Night:
                            <strong>{{ $c['attributes']['night'] }} </strong>)</em></span>
                        <h3 class="h6 mb-0 d-flex align-items-center">
                            <span>{{ $c['name'] }}</span>
                            <a href="#" class="text-danger fs-6 ms-2"><i
                                    class="hicon hicon-line-close hicon-60 hicon-bold"></i></a>
                        </h3>
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Quantity <strong>{{ $c['quantity'] }}</strong>: </span>
                            <strong class="fw-semibold fs-6"><sup>N</sup>{{ number_format($c['price']) }}</strong>
                        </div>

                </div>
                <!-- Room Item -->
                <!-- Room Item -->

                <!-- Room Item -->

             @empty
                <div class="text-center"> No Selected Room</div>
                @endforelse
        <!-- Room list -->
        <hr>
        @if (count(cartList()) > 0)
                <div class="d-flex justify-content-between align-items-center">
                    <h3 class="h4 mb-0">Total Amount:</h3>
                    <strong class="fw-bold fs-4"><sup>N</sup>{{ number_format(\Cart::getTotal()) }}</strong>
                </div>
                <p><em>*All taxes and fees included</em></p>

            <!-- Total Amount-->
            {{-- <hr> --}}

            {{-- <a class="btn btn-sm btn-outline-light bg-light d-block shadow-sm" href="javascript:;" wire:click="clearCart">
                                                    <i class="hicon hicon-80 hicon-line-close"></i>
                                                    <span>Clear</span>
                                                </a> --}}
        @endif
</div>
