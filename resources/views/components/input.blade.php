<div class="form-group">
    <label for="">{{$label}}</label>
    <input type="{{$type}}" class="form-control" name="{{$name}}" id="" aria-describedby="HelpId" />
    <span class="text-danger">
        {{$demo}}
        {{-- @error('name')
        {{$message}}
        @enderror --}}
    </span>
</div>