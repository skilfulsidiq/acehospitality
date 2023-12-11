<div>
    @props(['loading' => false])

<button {{ $attributes->merge(['type' => 'submit']) }}>
    @if ($loading && $target = $attributes->wire('click')->value())
        <span wire:loading.remove wire:target="{{$target}}">{{$slot}}</span>
        <span wire:loading wire:target="{{$target}}">   <i class="bx bx-loader bx-spin font-size-16 align-middle me-2"></i> Loading </span>
    @else
        {{ $slot }}
    @endif
</button>

</div>



