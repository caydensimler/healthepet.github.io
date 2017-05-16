<div class="allContent">

@extends('layouts.master')

@section('content')
	<div class="col-xs-12 welcomeHeaderAccountPage">
		{{ $pet->petName}}'s Vaccination Records
	</div>

	@if (Auth::user()->user_type === 'vet')
	<div class="col-xs-offset-5 col-xs-2 loginRegisterButtonBody">
		<div class="shotButton"><i class="fa fa-plus-square" aria-hidden="true"></i> Add Vaccination</div>
	</div>
	@endif

	@if (sizeof($shots) === 0) 
		<div class="col-xs-12 noRecordsFound">Sorry, no records available! :(</div>
		<div class="col-xs-offset-4 col-xs-4"><img src="/img/{{ $pet->species == 'dog' ?'noRecordsDog.jpg' :'noRecordsCat.jpg' }}" alt="No Records Found Sad Puppy" class="noRecordsPicture"></div>
	@elseif (sizeof($shots) != 0)
		<div class="col-xs-12 shotRecordsTable">

			<div class="col-xs-12 shotRecordsHeaderBody">
				<div class="col-xs-3 shotRecordsHeader">Vaccination Name</div>
				<div class="col-xs-3 shotRecordsHeader">Date Administered</div>
				<div class="col-xs-3 shotRecordsHeader">Renewal Date</div>
				<div class="col-xs-3 shotRecordsHeader">Clinic's Name</div>
			</div>



			<?php $i = 0; ?>
			@foreach ($pet->shots as $shot)
				<div class="col-xs-12 <?php if ($i % 2 === 0) { echo 'shotRecordsBody'; } else { echo 'shotRecordsBodyAlt' ;} ?>">
					<div class="col-xs-3 shotRecordsContent">
						{{ $shot->shotName }}
					</div>

					<div class="col-xs-3 shotRecordsContent">
						{{ $shot->pivot->date_administered }}
					</div>		

					<div class="col-xs-3 shotRecordsContent">
						{{ $shot->pivot->date_renewal }}
					</div>

					<div class="col-xs-3 shotRecordsContent">
						{{ $pet->vet->name }}
					</div>
					<?php $i++ ?>
				</div>
			@endforeach

		</div>
	@endif



</div>

	<!-- Forms Hidden by Default -->
	@if (Auth::user()->user_type === 'vet')
	<div class="shotsForm" style="display: none;">
		<form action="{{ action('PetsController@shotStore', [$pet->id])}}" method="POST">
		{!! csrf_field() !!}
			<div class="col-xs-offset-2 col-xs-8 col-sm-offset-3 col-sm-6 formBackground">
	            <div class="col-xs-8 formHeader">Add New Vaccination Record</div>
	            <div class="col-xs-4 closeButton">
	                <i class="fa fa-window-close" aria-hidden="true"></i>
	            </div>

	            <div class="col-xs-12">
		            <div class="col-xs-12 formLabel">Shot Name</div>

		            <div class="col-xs-12">
		                <select name="shot_id" id="shot_id" class="birthYearDropDown shotsDropdown" required>
		                	
		                		<option value="" disabled selected>Select a shot</option>
		                		@foreach($shots as $shot)
		                        	<option value="{{$shot->id}}">{{$shot->shotName}}</option>
		                        @endforeach
		               
		                </select>
		        	</div>
		        </div>

				
				<div class="col-xs-6">
					<div class="col-xs-12 formLabel">Date Administered</div>

					<div class="col-xs-12">
						<input type="text" name="date_administered" id="date_administered" class="formInput" placeholder="DD/MM/YYYY" required>
					</div>
				</div>

				<div class="col-xs-6">
					<div class="col-xs-12 formLabel">Renewal Date</div>

					<div class="col-xs-12">
						<input type="text" name="date_renewal" id="date_renewal" class="formInput" placeholder="DD/MM/YYYY" required>
					</div>
				</div>

				<div class="col-xs-12 loginRegisterButtonBody">
                    <button type="submit" class="petOwnerRegisterButton btn btn-default loginRegisterButton">Add</button>
                </div>

			</div>
		</form>
	</div>
	@endif


@stop
