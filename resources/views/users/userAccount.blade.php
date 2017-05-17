@extends('layouts.master')

@section('content')

	<div class="col-xs-12 welcomeHeaderAccountPage">
		{{ $user->name }}'s Account Information
	</div>


	<div class="col-xs-offset-1 col-xs-10 col-md-offset-3 col-md-6 formBackgroundAccount">
		<form action="{{ action('UsersController@update', [$user->id]) }}" method="POST">
		{!! csrf_field() !!}

			<div class="col-xs-12 accountFormHeader">Edit Account Information</div>

			<div class="col-xs-12 col-md-6">
				<div class="col-xs-12 formLabelAccount">Name</div>
				<div class="col-xs-12">
					<input class="formInputAccount" type="text" name="name" value="{{ $user->name }}" placeholder="Name" required>
				</div>
			</div>		

			<div class="col-xs-12 col-md-6">
				<div class="col-xs-12 formLabelAccount">Phone Number</div>
				<div class="col-xs-12">
					<input class="formInputAccount" type="text" name="phoneNumber" value="{{ $user->phoneNumber }}" placeholder="Phone Number" required>
				</div>
			</div>

			<div class="col-xs-12">
				<div class="col-xs-12 formLabelAccount">Email Address</div>
				<div class="col-xs-12">
					<input class="formInputAccount" type="email" name="email" value="{{ $user->email }}" placeholder="Email Address" required>
				</div>
			</div>		

			<div class="col-xs-12">
				<div class="col-xs-12 formLabelAccount">Physical Address</div>
				<div class="col-xs-12">
					<input class="formInputAccount" type="text" name="address" value="{{ $user->address }}" placeholder="Physical Address" required>
				</div>
			</div>

			<div class="col-xs-12 col-md-6">
				<div class="col-xs-12 formLabelAccount">Password</div>
				<div class="col-xs-12">
					<input class="formInputAccount" type="password" name="password" placeholder="**************" required>
				</div>
			</div>		

			<div class="col-xs-12 col-md-6">
				<div class="col-xs-12 formLabelAccount">Confirm Password</div>
				<div class="col-xs-12">
					<input class="formInputAccount" type="password" name="confirmPassword" placeholder="**************" required>
				</div>
			</div>

			{{ method_field('PUT') }}
			<input type="hidden" name="id" value="{{Auth::id()}}">
			<div class="col-xs-12 loginRegisterButtonBody">
				<input type="submit" value="Update Account" class="btn btn-default loginRegisterButton">
			</div>

		</form>
    </div>
@stop