<div class="allContent">

@extends('layouts.master')

@section('content')
	<div class="col-xs-12 welcomeHeaderAccountPage">
		{{ $pet->name}}'s Shot Records
	</div>

	@if (Auth::user()->user_type === 'vet')
	<div class="col-xs-offset-1 col-xs-10 col-md-offset-4 col-md-4 treatmentTypeButton shotButton">
		Add Shot	
	</div>
	@endif

	@if (sizeof($shots) === 0) 
		<div class="col-xs-12 noRecordsFound">Sorry, no shot records available! :(</div>
		<div class="col-xs-offset-4 col-xs-4"><img src="/img/noRecords.jpg" alt="No Records Found Sad Puppy" class="noRecordsPicture"></div>
	@elseif (sizeof($shots) != 0)
		<div class="col-xs-12 shotRecordsTable">

			<div class="col-xs-12 shotRecordsHeaderBody">
				<div class="col-xs-6 shotRecordsHeader">Shot Name</div>
				<div class="col-xs-3 shotRecordsHeader">Date Administered</div>
				<div class="col-xs-3 shotRecordsHeader">Renewal Date</div>
			</div>



			<?php $i = 0; ?>
			@foreach ($shots as $shot)
				<div class="col-xs-12 <?php if ($i % 2 === 0) { echo 'shotRecordsBody'; } else { echo 'shotRecordsBodyAlt' ;} ?>">
					<div class="col-xs-6 shotRecordsContent">
						{{ $shot->shotName }}
					</div>

					<div class="col-xs-3 shotRecordsContent">
						{{ $shot->date_administered }}
					</div>		

					<div class="col-xs-3 shotRecordsContent">
						{{ $shot->date_renewal }}
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
		<form action="" method="POST">
		{!! csrf_field() !!}
			<div class="col-xs-offset-2 col-xs-8 col-sm-offset-3 col-sm-6 formBackground">
	            <div class="col-xs-8 formHeader">Add a new shot.</div>
	            <div class="col-xs-4 closeButton">
	                <i class="fa fa-window-close" aria-hidden="true"></i>
	            </div>

	            <div class="col-xs-12">
		            <div class="col-xs-12 formLabel">Shot Name</div>

		            <div class="col-xs-12">
		                <select name="shotType" id="shotType" class="birthYearDropDown shotsDropdown" required>
		                	@if ($pet->species === 'Dog' || $pet->species === 'Cat')
		                		<option value=""></option>
		                        <option value="rabies">Rabies</option>
		                        <option value="bordetella">Bordetella</option>
		                    @endif

		                    @if ($pet->species === 'Dog')
		                        <option value="canineDistemper">Canine Distemper</option>
		                        <option value="measles">Measles</option>
		                        <option value="parvovirus">Parvovirus</option>
		                        <option value="hepatitis">Hepatitis</option>
		                        <option value="CAV2">CAV2</option>
		                        <option value="parainfluenza">Parainfluenza</option>
		                        <option value="leptospirosis">Leptospirosis</option>
		                        <option value="coronavirus">Coronavirus</option>
		                        <option value="lyme">Lyme</option>
		                    @elseif ($pet->species === 'Cat')
		                        <option value="panleukopenia">Panleukopenia</option>
		                        <option value="rhinotracheitis">Rhinotracheitis</option>
		                        <option value="felineLeukemia">Feline Leukemia</option>
		                        <option value="chlamydophila">Chlamydophila</option>
		                        <option value="felineInfectiousPeritonitis">Feline Infectious Peritonitis</option>
		                        <option value="giardia">Giardia</option>
		                        <option value="felineImmunodeficiencyVirus">Feline Immunodeficiency Virus</option>
							@endif
		                </select>
		        	</div>
		        </div>
				
				<div class="col-xs-6">
					<div class="col-xs-12 formLabel">Date Administered</div>

					<div class="col-xs-12">
						<input type="text" name="shotAdmin" id="shotAdmin" class="formInput" required>
					</div>
				</div>

				<div class="col-xs-6">
					<div class="col-xs-12 formLabel">Renewal Date</div>

					<div class="col-xs-12">
						<input type="text" name="shotRenew" id="shotRenew" class="formInput" required>
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
