<div class="allContent">
@extends('layouts.master')

@section('content')

	<div class="col-xs-12 welcomeHeaderAccountPage">
		{{ Auth::user()->name }}'s Records
	</div>

	<div class="col-xs-offset-1 col-xs-10">
		<button class="btn btn-default addPetButton"><i class="fa fa-plus-square" aria-hidden="true"></i> Add New Pet</button>
	</div>

	<div class="col-xs-12">
		@foreach($pets as $pet)
			<div class="col-xs-6 petBody">
				<div class="col-xs-12 petNameVet">{{ $pet->name }}</div>

				<div class="col-xs-6">
					<div class="col-xs-12 petRecordSubHeader">Pet Information</div>


					<div class="col-xs-6 petRecordInformation">
						<div class="col-xs-3">Species:</div>
						<div class="col-xs-9">{{ $pet->species }}</div>
					</div>					

					<div class="col-xs-6 petRecordInformation">
						<div class="col-xs-3">Breed:</div>
						<div class="col-xs-9">{{ $pet->breed }}</div>
					</div>					

					<div class="col-xs-6 petRecordInformation">
						<div class="col-xs-3">Sex:</div>
						<div class="col-xs-9">{{ $pet->sex }}</div>
					</div>					

					<div class="col-xs-6 petRecordInformation">
						<div class="col-xs-3">Weight:</div>
						<div class="col-xs-9">{{ $pet->weight }}</div>
					</div>					

					<div class="col-xs-6 petRecordInformation">
						<div class="col-xs-3">Color(s)</div>
						<div class="col-xs-9">{{ $pet->color }}</div>
					</div>					

					<div class="col-xs-6 petRecordInformation">
						<div class="col-xs-3">Age (years):</div>
						<div class="col-xs-9">{{ $pet->age }}</div>
					</div>

				</div>
				<div class="col-xs-6">
					<div class="col-xs-12 petRecordSubHeader">Owner Information</div>
					<div class="col-xs-12">{{ $pet->user->name }}</div>
					<div class="col-xs-12">{{ $pet->user->phoneNumber }}</div>
					<div class="col-xs-12">{{ $pet->user->email }}</div>
				</div>
			</div> 
		@endforeach
	</div>

<!-- 	<form method="get" action="{{ action('PetsController@create') }}">
		{!! csrf_field()!!}
		<input type="submit" class="btn btn-default" value="Add new Pet">
	</form> -->

		{!! $pets->render() !!}

</div>

@stop