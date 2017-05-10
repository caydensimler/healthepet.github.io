@extends('layouts.master')

@section('content')

    <h1>Edit Pet</h1>
    
	<!-- EDITING/UPDATING POST -->
	<form  method="POST" action="{{ action('PetsController@update', [$pet->id]) }}">
		{!! csrf_field() !!}
		<div class="row control-group">
			<div class="form-group col-xs-12 floating-label-form-group controls">
				<label for="name">Name:</label> 
				<input class="form-control" type="text" name="name" value="{{ $pet->name }}" placeholder="name">
				@if ($errors->has('name'))
					{{$errors->first('name')}}
				@endif
			</div>
		</div>
		<div class="row control-group">
			<div class="form-group col-xs-12 floating-label-form-group controls">
				<label for="species">species:</label>
				<input class="form-control" type="text" name="species" value="{{ $pet->species }}" placeholder="species">
				@if ($errors->has('species'))
					{{$errors->first('species')}}
				@endif
			</div>
		</div>
		<div class="row control-group">
			<div class="form-group col-xs-12 floating-label-form-group controls">
				<label for="breed">breed:</label>
				<textarea style="resize: none;" class="form-control" name="breed" rows="5" cols="40" placeholder="breed">{{ $pet->breed }}</textarea>
			</div>
		</div>
		{{ method_field('PUT') }}
		<input type="hidden" name="id" value="{{Auth::id()}}">
		<input type="submit" value="Update Pet" class="btn btn-primary">
	</form>

	<!-- DELETE POST BUTTON-->
	<form  method="POST" action="{{ action('PetsController@destroy', [$pet->id]) }}">
		{!! csrf_field() !!}
		<input class="btn btn-danger pull-right" type="submit" value="Delete">
		{{ method_field('DELETE') }}
	</form>
@stop