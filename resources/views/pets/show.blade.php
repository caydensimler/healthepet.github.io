@extends('layouts.master')

@section('content')
	<div class="col-xs-12 welcomeHeaderAccountPage">
		{{ $pet->name}}'s Shot Records
	</div>


	<div class="col-xs-12 invisible invisibleTwo">filler text</div>

	<form action="" method="POST">
	@if ($pet->species === 'Dog' || $pet->species === 'Cat')

		<label for="rabies" class="col-xs-12 col-sm-4 shotRecordBody">
			<div class="col-xs-12 shotName">
				<i class="fa fa-square-o" aria-hidden="true"></i> Rabies
			</div>

			<div class="col-xs-12 shotDate">
				Date Administered: <span class="dateAdministered"></span>
			</div>			

			<div class="col-xs-12 shotDate">
				Renewal Date: <span class="dateRenewal"></span>
			</div>

			<input type="checkbox" class="shotRecordCheckbox" name="shot" id="rabies" value="rabies">
	
		</label>

		<label for="bordetella" class="col-xs-12 col-sm-4 shotRecordBody">
			<div class="col-xs-12 shotName">
				<i class="fa fa-square-o" aria-hidden="true"></i> Bordetella
			</div>

			<div class="col-xs-12 shotDate">
				Date Administered: <span class="dateAdministered"></span>
			</div>

			<div class="col-xs-12 shotDate">
				Renewal Date: <span class="dateRenewal"></span>
			</div>

			<input type="checkbox" class="shotRecordCheckbox" name="shot" id="bordetella" value="rabies">

		</label>		

	@endif



	@if ($pet->species === 'Dog')

		<label for="canine_distemper" class="col-xs-12 col-sm-4 shotRecordBody">
			<div class="col-xs-12 shotName">
				<i class="fa fa-square-o" aria-hidden="true"></i> Canine Distemper
			</div>

			<div class="col-xs-12 shotDate">
				Date Administered: <span class="dateAdministered"></span>
			</div>

			<div class="col-xs-12 shotDate">
				Renewal Date: <span class="dateRenewal"></span>
			</div>

			<input type="checkbox" class="shotRecordCheckbox" name="shot" id="canine_distemper" value="rabies">

		</label>		

		<label for="measles" class="col-xs-12 col-sm-4 shotRecordBody">
			<div class="col-xs-12 shotName">
				<i class="fa fa-square-o" aria-hidden="true"></i> Measles
			</div>

			<div class="col-xs-12 shotDate">
				Date Administered: <span class="dateAdministered"></span>
			</div>

			<div class="col-xs-12 shotDate">
				Renewal Date: <span class="dateRenewal"></span>
			</div>

			<input type="checkbox" class="shotRecordCheckbox" name="shot" id="measles" value="rabies">

		</label>		

		<label for="parvo" class="col-xs-12 col-sm-4 shotRecordBody">
			<div class="col-xs-12 shotName">
				<i class="fa fa-square-o" aria-hidden="true"></i> Parvovirus
			</div>

			<div class="col-xs-12 shotDate">
				Date Administered: <span class="dateAdministered"></span>
			</div>

			<div class="col-xs-12 shotDate">
				Renewal Date: <span class="dateRenewal"></span>
			</div>

			<input type="checkbox" class="shotRecordCheckbox" name="shot" id="parvo" value="rabies">

		</label>

		<label for="hepatitis" class="col-xs-12 col-sm-4 shotRecordBody">
			<div class="col-xs-12 shotName">
				<i class="fa fa-square-o" aria-hidden="true"></i> Hepatitis
			</div>

			<div class="col-xs-12 shotDate">
				Date Administered: <span class="dateAdministered"></span>
			</div>

			<div class="col-xs-12 shotDate">
				Renewal Date: <span class="dateRenewal"></span>
			</div>

			<input type="checkbox" class="shotRecordCheckbox" name="shot" id="hepatitis" value="rabies">

		</label>		

		<label for="cav2" class="col-xs-12 col-sm-4 shotRecordBody">
			<div class="col-xs-12 shotName">
				<i class="fa fa-square-o" aria-hidden="true"></i> CAV2
			</div>

			<div class="col-xs-12 shotDate">
				Date Administered: <span class="dateAdministered"></span>
			</div>

			<div class="col-xs-12 shotDate">
				Renewal Date: <span class="dateRenewal"></span>
			</div>
			<input type="checkbox" class="shotRecordCheckbox" name="shot" id="cav2" value="rabies">
		</label>		

		<label for="para" class="col-xs-12 col-sm-4 shotRecordBody">
			<div class="col-xs-12 shotName">
				<i class="fa fa-square-o" aria-hidden="true"></i> Parainfluenza
			</div>

			<div class="col-xs-12 shotDate">
				Date Administered: <span class="dateAdministered"></span>
			</div>

			<div class="col-xs-12 shotDate">
				Renewal Date: <span class="dateRenewal"></span>
			</div>

			<input type="checkbox" class="shotRecordCheckbox" name="shot" id="para" value="rabies">

		</label>		

		<label for="lepto" class="col-xs-12 col-sm-4 shotRecordBody">
			<div class="col-xs-12 shotName">
				<i class="fa fa-square-o" aria-hidden="true"></i> Leptospirosis
			</div>

			<div class="col-xs-12 shotDate">
				Date Administered: <span class="dateAdministered"></span>
			</div>

			<div class="col-xs-12 shotDate">
				Renewal Date: <span class="dateRenewal"></span>
			</div>

			<input type="checkbox" class="shotRecordCheckbox" name="shot" id="lepto" value="rabies">

		</label>		

		<label for="corona" class="col-xs-12 col-sm-4 shotRecordBody">
			<div class="col-xs-12 shotName">
				<i class="fa fa-square-o" aria-hidden="true"></i> Coronavirus
			</div>

			<div class="col-xs-12 shotDate">
				Date Administered: <span class="dateAdministered"></span>
			</div>

			<div class="col-xs-12 shotDate">
				Renewal Date: <span class="dateRenewal"></span>
			</div>

			<input type="checkbox" class="shotRecordCheckbox" name="shot" id="corona" value="rabies">

		</label>		

		<label for="lyme" class="col-xs-12 col-sm-4 shotRecordBody">
			<div class="col-xs-12 shotName">
				<i class="fa fa-square-o" aria-hidden="true"></i> Lyme
			</div>

			<div class="col-xs-12 shotDate">
				Date Administered: <span class="dateAdministered"></span>
			</div>

			<div class="col-xs-12 shotDate">
				Renewal Date: <span class="dateRenewal"></span>
			</div>

			<input type="checkbox" class="shotRecordCheckbox" name="shot" id="lyme" value="rabies">

		</label>

	@elseif ($pet->species === 'Cat')


	@endif
	</form>

@stop