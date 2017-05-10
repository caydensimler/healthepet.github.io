@extends('layouts.master')

@section('content')
	<div class="container col-sm-12">
		<h1 class="text-center">{{ $pet->name}}</h1>
		<table class="table">
			<tr>
				<th class="col-sm-3">Shot Name:</th>
				<th class="col-sm-3"></a>Received Shot:</th>
				<th class="col-sm-3">Date Administered:</th>
				<th class="col-sm-3">Renew Date:</th>
				<th class="col-sm-3">Comments:</th>
			</tr>
			
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			
		</table>
		
	</div>

@stop