@extends('layouts.master')

@section('content')
	<table class = "table">

		<tr>
			<th>Name: </th>
			<th>Species: </th>
			<th>Breed: </th>
			<th>Sex: </th>
			<th>Age: </th>
			<th>Owner's Name: </th>
			<th>Owner's Phone Number: </th>
			<th>Owner's Email Adress: </th>
		</tr>

		@foreach($pets as $pet)
			<tr>
				<td>{{ $pet->name }}</td>
				<td>{{ $pet->species }}</td>
				<td>{{ $pet->breed }}</td>
				<td>{{ $pet->sex }}</td>
				<td>{{ $pet->age }}</td>
				<td>{{ $pet->user->name }}</td>
				<td>{{ $pet->user->email }}</td>
				<td>{{ $pet->user->phoneNumber }}</td>
			</tr>
		@endforeach
	</table>
    <form method="get" action="{{ action('PetsController@create') }}">
    {!! csrf_field()!!}
    <input type="submit" class="btn btn-default" value="Add New Pet">
	</form>
    {!! $pets->render() !!}


@stop
