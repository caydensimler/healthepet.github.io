    {!! csrf_field() !!} 

    <div class="form-group">
		<label for="name">Name</label>
		<input 
            type="text" 
            id="title" 
            name="title" 
            class="form-control" 
            value="{{old('name')}}"
        >
        @if ($errors->has('name'))
            {{ $errors->first('name') }}
        @endif
	</div>

	<div class="form-group">
		<label for="species">Species</label>
		<input 
            type="text" 
            id="species" 
            name="species" 
            class="form-control" 
            value="{{old('species')}}"
        >
        </input>
	</div>

	<div class="form-group">
		<label for="breed">breed</label>
		<input 
            type="text" 
            id="breed" 
            name="breed" 
            class="form-control" 
            value="{{old('breed')}}"
        >
        @if ($errors->has('breed'))
            {{$errors->first('breed')}}
        @endif
	</div>