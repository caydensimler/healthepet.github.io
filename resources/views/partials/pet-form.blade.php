    {!! csrf_field() !!} 

    <div class="form-group">
		<label for="name">Name:</label>
		<input 
            type="text" 
            id="name" 
            name="name" 
            class="form-control" 
            value="{{old('petName')}}"
        >
        @if ($errors->has('petName'))
            {{ $errors->first('petName') }}
        @endif
	</div>

	<div class="form-group">
		<label for="species">Species:</label>
		<input 
            type="text" 
            id="species" 
            name="species"
            placeholder="Cat or Dog" 
            class="form-control" 
            value="{{old('species')}}"
        >
        </input>
	</div>

	<div class="form-group">
		<label for="breed">Breed:</label>
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

    <div class="form-group">
        <label for="sex">Gender:</label>
        <input 
            type="text" 
            id="sex" 
            name="sex" 
            class="form-control" 
            value="{{old('sex')}}"
        >
        @if ($errors->has('sex'))
            {{$errors->first('sex')}}
        @endif
    </div>

    <div class="form-group">
        <label for="weight">Weight:</label>
        <input 
            type="text" 
            id="weight" 
            name="weight" 
            class="form-control" 
            value="{{old('weight')}}"
        >
        @if ($errors->has('weight'))
            {{$errors->first('weight')}}
        @endif
    </div>

    <div class="form-group">
        <label for="color">Color:</label>
        <input 
            type="text" 
            id="color" 
            name="color" 
            class="form-control" 
            value="{{old('color')}}"
        >
        @if ($errors->has('color'))
            {{$errors->first('color')}}
        @endif
    </div>

    <div class="form-group">
        <label for="age">Age:</label>
        <input 
            type="text" 
            id="age" 
            name="age" 
            class="form-control" 
            value="{{old('age')}}"
        >
        @if ($errors->has('age'))
            {{$errors->first('age')}}
        @endif
    </div> 

    <div class="form-group">
        <label for="ownerName">Owner's Name:</label>
        <input 
            type="text" 
            id="ownerName" 
            name="ownerName" 
            class="form-control" 
            value="{{old('ownerName')}}"
        >
        @if ($errors->has('ownerName'))
            {{$errors->first('ownerName')}}
        @endif
    </div>

    <div class="form-group">
        <label for="phoneNumber">Owner's Phone Number:</label>
        <input 
            type="text" 
            id="phoneNumber" 
            name="phoneNumber" 
            class="form-control" 
            value="{{old('phoneNumber')}}"
        >
        @if ($errors->has('phoneNumber'))
            {{$errors->first('phoneNumber')}}
        @endif
    </div>

    <div class="form-group">
        <label for="ownerEmail">Owner's Email:</label>
        <input 
            type="text" 
            id="ownerEmail" 
            name="ownerEmail" 
            class="form-control" 
            value="{{old('ownerEmail')}}"
        >
        @if ($errors->has('ownerEmail'))
            {{$errors->first('ownerEmail')}}
        @endif
    </div>