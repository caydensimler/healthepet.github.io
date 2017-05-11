@extends('layouts.master')

@section('content')
	<div class="container col-sm-12">
		<h1 class="text-center">All Pets</h1>
		<table class="table">
			<tr>
				<th class="col-sm-1">Name:</th>
				<th class="col-sm-1">Species:</th>
				<th class="col-sm-1">Breed:</th>
				<th class="col-sm-1">Gender:</th>
				<th class="col-sm-1">Weight:</th>
				<th class="col-sm-1">Color:</th>
				<th class="col-sm-1">Age:</th>
				<th class="col-sm-1">Owner's Name:</th>
				<th class="col-sm-1">Owner's Phone Number:</th>
				<th class="col-sm-1">Owner's Email:</th>
			</tr>
			@foreach($pets as $pet) 
				<tr>
					<td><a href="{{action('PetsController@show', $pet->id)}}"> {{ $pet->name }} </a></td>
					<td> {{ $pet->species }}</td>
					<td> {{ $pet->breed }}</td>
					<td>{{ $pet->sex }}</td>
					<td>{{ $pet->weight }}</td>
					<td>{{ $pet->color }}</td>
					<td>{{ $pet->age }}</td>
					<td>{{ $pet->user->name }}</td>
					<td>{{ $pet->user->phoneNumber }}</td>
					<td>{{ $pet->user->email }}</td>
				</tr>
			@endforeach
		</table>

		@if(\Auth::check())
			<form method="get" action="{{ action('PetsController@create') }}">
				{!! csrf_field()!!}
				<input type="submit" class="btn btn-default" value="Add new Pet">
			</form>
		@endif

			{!! $pets->render() !!}
	</div>

@stop