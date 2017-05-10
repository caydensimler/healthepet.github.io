@extends('layouts.master')

@section('content')
	<h1>{{ $pet->name}}</h1>
	    <p>{{ $pet->breed }}</p>
        <p>{{ $pet->sex }}</p>
        <p>{{ $pet->age }} </p>    
        <p>{{ $pet->owner_id }}  </p>     
        <p>{{ $pet->vet_id }}</p>

@stop