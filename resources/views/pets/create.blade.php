@extends('layouts.master')

@section('content')
	<h1>Add New Pet</h1>

	<form action="{{ action('PetsController@store') }}" method="POST">
		
		@include('partials.pet-form')

		<input type="submit" class="btn btn-primary" value="Add">

	</form>
@stop