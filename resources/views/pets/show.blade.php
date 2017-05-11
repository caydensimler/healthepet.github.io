<div class="allContent">

@extends('layouts.master')

@section('content')
	<div class="col-xs-12 welcomeHeaderAccountPage">
		{{ $pet->name}}'s Shot Records
	</div>


	<div class="col-xs-12 invisible invisibleTwo">filler text</div>

	<div class="col-xs-offset-1 col-xs-10 col-md-offset-4 col-md-4 treatmentTypeButton shotButton">
		Add Shot	
	</div>

	<div class="col-xs-12"><hr></div>

	@foreach ($shots as $shot)
		<div class="col-xs-6 col-sm-4 col-md-3 shotRecordBody">
			<div class="col-xs-12 shotName">{{ $shot->shotName }}</div>
		</div>
	@endforeach



</div>

	<!-- Forms Hidden by Default -->

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
		                <select name="shotType" id="shotType" class="birthYearDropDown shotsDropdown">
		                	@if ($pet->species === 'Dog' || $pet->species === 'Cat')
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

				<div class="col-xs-12">
					<div class="col-xs-12 formLabel">Comments</div>

					<div class="col-xs-12">
						<input type="text" name="shotComment" id="shotComment" class="formInput">
					</div>
				</div>

			</div>
		</form>
	</div>


@stop
