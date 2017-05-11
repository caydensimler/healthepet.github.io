<div class="allContent">
@extends('layouts.master')

@section('content')

	<div class="col-xs-offset-1 col-xs-10">
		<button class="btn btn-default addPetButton"><i class="fa fa-plus-square" aria-hidden="true"></i> Add New Pet</button>
	</div>

	<div class="col-xs-12">
		@foreach($pets as $pet) 
			{{ $pet->name }}
			{{ $pet->species }}
			{{ $pet->breed }}
			{{ $pet->sex }}
			{{ $pet->weight }}
			{{ $pet->color }}
			{{ $pet->age }}
			{{ $pet->user->name }}
			{{ $pet->user->phoneNumber }}
			{{ $pet->user->email }}
		@endforeach
	</div>

	<form method="get" action="{{ action('PetsController@create') }}">
		{!! csrf_field()!!}
		<input type="submit" class="btn btn-default" value="Add new Pet">
	</form>

		{!! $pets->render() !!}

</div>

@stop