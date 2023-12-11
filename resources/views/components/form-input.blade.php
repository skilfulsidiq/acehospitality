<div class="form-group">
    <div>
        <label  for="{{ $name }}">{{ \Illuminate\Support\Str::of($name)->kebab()->replace('-', ' ')->ucfirst() }}</label>
    </div>

    <div>
        <input class="form-control" type="{{$type}}"  wire:model.lazy="{{ $name }}">
    </div>

    @error($name)
    <div class="mt-1 text-red-500 text-sm">
        {{ $message }}
    </div>
    @enderror
</div>
