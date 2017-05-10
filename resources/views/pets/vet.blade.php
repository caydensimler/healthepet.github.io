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

			{!! $pets->render() !!}
	</div>

@stop