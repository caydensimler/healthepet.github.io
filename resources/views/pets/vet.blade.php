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
			<div class="col-xs-12 col-md-6 petBody">
				<div class="col-xs-5 petNameVet">{{ $pet->name }}</div>
				<div class="col-xs-7 recordsLink">
					<a href="/pets/{{ $pet->id }}">Click here to view records. <i class="fa fa-file-text-o" aria-hidden="true"></i></a>
				</div>

				<div class="col-xs-12 petInformationBody">

					<div class="col-xs-12 petInformationHeader">Pet Information</div>

					<div class="col-xs-6 petRecordInformation">
						<div class="col-xs-4 subHeader">Species:</div>
						<div class="col-xs-8">{{ $pet->species }}</div>
					</div>					

					<div class="col-xs-6 petRecordInformation">
						<div class="col-xs-4 subHeader">Breed:</div>
						<div class="col-xs-8">{{ $pet->breed }}</div>
					</div>					

					<div class="col-xs-6 petRecordInformation">
						<div class="col-xs-4 subHeader">Sex:</div>
						<div class="col-xs-8">{{ $pet->sex }}</div>
					</div>					

					<div class="col-xs-6 petRecordInformation">
						<div class="col-xs-4 subHeader">Weight:</div>
						<div class="col-xs-8">{{ $pet->weight }} lbs</div>
					</div>					

					<div class="col-xs-6 petRecordInformation">
						<div class="col-xs-4 subHeader">Color(s):</div>
						<div class="col-xs-8">{{ $pet->color }}</div>
					</div>					

					<div class="col-xs-6 petRecordInformation">
						<div class="col-xs-4 subHeader">Age:</div>
						<div class="col-xs-8">{{ $pet->age }} years</div>
					</div>

				</div>
			

				<div class="col-xs-12 petInformationBody">

					<div class="col-xs-12 petInformationHeader">Owner Information</div>

					<div class="col-xs-12 petRecordInformation">
						<div class="col-xs-4 subHeader">Name:</div>
						<div class="col-xs-8">{{ $pet->user->name }}</div>
					</div>						

					<div class="col-xs-12 petRecordInformation">
						<div class="col-xs-4 subHeader">Phone Number:</div>
						<div class="col-xs-8">{{ $pet->user->phoneNumber }}</div>
					</div>						

					<div class="col-xs-12 petRecordInformation">
						<div class="col-xs-4 subHeader">Email:</div>
						<div class="col-xs-8">{{ $pet->user->email }}</div>
					</div>					

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