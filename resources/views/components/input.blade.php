<div class="form-group">
    <label for="">{{$label}}</label>
    <input type="{{$type}}" class="form-control" name="{{$name}}" aria-describedby="HelpId" />
    <span class="text-danger">
        
        {{-- @error('name')
        {{$message}}
        @enderror --}}
    </span>
</div>