@extends('layouts.master')


@section('content')

	<div class="allContent">

	<!-- Welcome Header -->
	<div class="col-xs-12 welcomeHeader">
		What can HealthEPet do for you?
	</div>
	
	<!-- Pet Owner Introduction -->
	<div class="col-xs-12 col-sm-6 petOwnerBodyHome petOwnerBodyBackground">

		<div class="col-xs-offset-1 col-xs-10 introductionContentHeader">
			<div class="col-xs-12 introductionHeaderHome">For Pet Owners</div>
			<div class="col-xs-12 introductionList">
				<i class="fa fa-paw" aria-hidden="true"></i> Localized records from all clinic visits.
				<br>
				<i class="fa fa-paw" aria-hidden="true"></i> Ability to switch vets easily without having to request records from previous vet clinics.
				<br>
				<i class="fa fa-paw" aria-hidden="true"></i> No hastle of keeping folders and receipts of all treatments to your pet(s).
				<br>
				<i class="fa fa-paw" aria-hidden="true"></i> Completely paperless.
			</div>

			<div class="col-xs-12 loginRegisterButtonBody">
				<div class="col-xs-6">
					<button class="btn btn-default loginRegisterButton petOwnerLogin">Login</button>
				</div>

				<div class="col-xs-6">
					<button class="btn btn-default loginRegisterButton petOwnerRegister">Register</button>
				</div>
			</div>

		</div>

	</div>


	<!-- Vet Clinic Introduction -->
	<div class="col-xs-12 col-sm-6 vetClinicBodyHome vetClinicBodyBackground">

		<div class="col-xs-offset-1 col-xs-10 introductionContentHeader">
			<div class="col-xs-12 introductionHeaderHome">For Vet Clinics</div>
			<div class="col-xs-12 introductionList">
				<i class="fa fa-paw" aria-hidden="true"></i> Ability to pull in new patient's records from other clinics.
				<br>
				<i class="fa fa-paw" aria-hidden="true"></i> Fully structured list of all patients in your personal database.
				<br>
				<i class="fa fa-paw" aria-hidden="true"></i> Backed up files stored in our database.
				<br>
				<i class="fa fa-paw" aria-hidden="true"></i> Completely paperless.
			</div>


			<div class="col-xs-12 loginRegisterButtonBody">
				<div class="col-xs-6">
					<button class="btn btn-default loginRegisterButton vetClinicLogin">Login</button>
				</div>

				<div class="col-xs-6">
					<button class="btn btn-default loginRegisterButton vetClinicRegister">Register</button>
				</div>
			</div>

		</div>
	</div>

	</div>




<!-- Forms (not loaded by default) -->

	<!-- Pet Owner Login Form -->
	<div class="petOwnerLoginForm" style="display: none;">
		<div class="col-xs-offset-2 col-xs-8 col-sm-offset-3 col-sm-6 formBackground">
			<form action="{{action('Auth\AuthController@postLogin')}}" method="POST">
				<div class="col-xs-12 closeButton">
					<div class="col-xs-8">Pet Owner Login</div>
					<i class="fa fa-window-close" aria-hidden="true"></i>
				</div>

				<div class="col-xs-offset-3 col-xs-6 formLabel">Email</div>
				<div class="col-xs-offset-3 col-xs-6">
					<input type="text" name="petOwnerLoginEmail" id="petOwnerLoginEmail" class="formInput">
				</div>				

				<div class="col-xs-offset-3 col-xs-6 formLabel">Password</div>
				<div class="col-xs-offset-3 col-xs-6">
					<input type="password" name="petOwnerLoginPassword" id="petOwnerLoginPassword" class="formInput">
				</div>

				<div class="col-xs-offset-3 col-xs-6 formSubmit">
					<button type="submit" class="petOwnerLoginButton">Login</button>
				</div>

			</form>
		</div>
	</div>
	

	<!-- Pet Owner Registration Form -->
	<div class="petOwnerRegisterForm" style="display: none;">
		<div class="col-xs-offset-2 col-xs-8 col-sm-offset-3 col-sm-6 formBackground">
			<form action="" method="POST">
				<div class="col-xs-12 closeButton">
					<div class="col-xs-8">Pet Owner Registration</div>
					<i class="fa fa-window-close" aria-hidden="true"></i>
				</div>

				<div class="col-xs-offset-3 col-xs-6 formLabel">First Name</div>
				<div class="col-xs-offset-3 col-xs-6">
					<input type="text" name="petOwnerRegisterFirstName" id="petOwnerRegisterFirstName" class="formInput">
				</div>

				<div class="col-xs-offset-3 col-xs-6 formLabel">Last Name</div>
				<div class="col-xs-offset-3 col-xs-6">
					<input type="text" name="petOwnerRegisterLastName" id="petOwnerRegisterLastName" class="formInput">
				</div>						

				<div class="col-xs-offset-3 col-xs-6 formLabel">Email</div>
				<div class="col-xs-offset-3 col-xs-6">
					<input type="text" name="petOwnerRegisterEmail" id="petOwnerRegisterEmail" class="formInput">
				</div>							

				<div class="col-xs-offset-3 col-xs-6 formLabel">Address</div>
				<div class="col-xs-offset-3 col-xs-6">
					<input type="text" name="petOwnerRegisterAddress" id="petOwnerRegisterAddress" class="formInput">
				</div>						

				<div class="col-xs-offset-3 col-xs-6 formLabel">Phone Number</div>
				<div class="col-xs-offset-3 col-xs-6">
					<input type="text" name="petOwnerRegisterPhone" id="petOwnerRegisterPhone" class="formInput">
				</div>						

				<div class="col-xs-offset-3 col-xs-6 formLabel">Password</div>
				<div class="col-xs-offset-3 col-xs-6">
					<input type="password" name="petOwnerRegisterPassword" id="petOwnerRegisterPassword" class="formInput">
				</div>

<!-- 				<div class="col-xs-offset-3 col-xs-6 formLabel">Confirm Password</div>
				<div class="col-xs-offset-3 col-xs-6">
					<input type="password" name="petOwnerRegisterConfirmPassword" id="petOwnerRegisterConfirmPassword" class="formInput">
				</div> -->

				<div class="col-xs-offset-3 col-xs-6 formSubmit">
					<button type="submit" class="petOwnerLoginButton">Register</button>
				</div>

			</form>
		</div>
	</div>



	<!-- Vet Clinic Login Form -->
	<div class="vetClinicLoginForm" style="display: none;">
		<div class="col-xs-offset-2 col-xs-8 col-sm-offset-3 col-sm-6 formBackground">

		</div>
	</div>

	<!-- Vet Clinic Registration Form -->
	<div class="vetClinicRegisterForm" style="display: none;">
		<div class="col-xs-offset-2 col-xs-8 col-sm-offset-3 col-sm-6 formBackground">

		</div>
	</div>

@stop











