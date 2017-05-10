
<div class="allContent">
@extends('layouts.master')


@section('content')

    <!-- Welcome Header -->
    <div class="col-xs-12 welcomeHeader">
        <div class="col-xs-7">What can HealthEPet do for you?</div>
        <div class="col-xs-5">
            <div class="col-xs-12 loginRegisterButtonHeader">
                <div class="col-xs-6">
                    <button class="btn btn-default loginRegisterButton login">Login</button>
                </div>

                <div class="col-xs-6">
                    <button class="btn btn-default loginRegisterButton register">Register</button>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xs-12 invisible invisibleOne">filler text for space</div>
    
    <!-- Pet Owner Introduction -->

    <div class="col-xs-12 introductionContent">

        <div class="col-xs-offset-3 col-xs-6 col-sm-offset-1 col-sm-4 introductionPicture petOwnerPicture"></div>

        <div class="col-xs-offset-2 col-xs-8 col-sm-offset-1 col-sm-5">
            <div class="col-xs-12 introductionHeader">
                <i class="fa fa-user" aria-hidden="true"></i> Pet Owners</div>
            <div class="col-xs-12 introductionList">
                <i class="fa fa-paw" aria-hidden="true"></i> Localized records from all clinic visits.
                <br>
                <i class="fa fa-paw" aria-hidden="true"></i> Keep track of all your pet's shot records all in one place.
                <br>
                <i class="fa fa-paw" aria-hidden="true"></i> No hastle of keeping physical copies of all treatments to your pet(s).
                <br>
                <i class="fa fa-paw" aria-hidden="true"></i> Completely paperless.
            </div>
        </div>

    </div>


    <!-- Vet Clinic Introduction -->
    <div class="col-xs-12 introductionContent">

        <div class="col-xs-offset-2 col-xs-8 col-sm-offset-1 col-sm-5">
            <div class="col-xs-12 introductionHeader">
                <i class="fa fa-user-md" aria-hidden="true"></i> Vet Clinics
            </div>
                <div class="col-xs-12 introductionList">
                    <i class="fa fa-paw" aria-hidden="true"></i> Ability to pull in new patient's records from other clinics.
                    <br>
                    <i class="fa fa-paw" aria-hidden="true"></i> Fully structured list of all patients in your personal directory.
                    <br>
                    <i class="fa fa-paw" aria-hidden="true"></i> Backed up files stored in our database.
                    <br>
                    <i class="fa fa-paw" aria-hidden="true"></i> Completely paperless.
                </div>
        </div>

        <div class="col-xs-offset-3 col-xs-6 col-sm-offset-1 col-sm-4 introductionPicture vetClinicPicture"></div>

    </div>

    <div class="col-xs-12 invisible invisibleOne">filler text for space</div>

    </div>




<!-- Forms (not loaded by default) -->

    <!-- Login Form -->
    <div class="loginForm" style="display: none;">
        <div class="col-xs-offset-2 col-xs-8 col-sm-offset-3 col-sm-6 formBackground">
            <form action="{{action('Auth\AuthController@postLogin')}}" method="POST">
                {!! csrf_field() !!}
                <div class="col-xs-8 formHeader">Login with an existing account.</div>
                <div class="col-xs-4 closeButton">
                    <i class="fa fa-window-close" aria-hidden="true"></i>
                </div>

                <div class="col-xs-12">
                    <div class="col-xs-offset-1 col-xs-10 formLabel">Email</div>
                    <div class="col-xs-offset-1 col-xs-10">
                        <input type="text" name="email" id="email" class="formInput" required>
                    </div>
                </div>              

                <div class="col-xs-12">
                    <div class="col-xs-offset-1 col-xs-10 formLabel">Password</div>
                    <div class="col-xs-offset-1 col-xs-10">
                        <input type="password" name="password" id="password" class="formInput" required>
                    </div>
                </div>

                <div class="col-xs-12 rememberMeCheckbox">
                    <div class="col-xs-12">
                        <input type="checkbox" checked> Remember Me
                    </div>
                </div>

                <div class="col-xs-12 loginRegisterButtonBody">
                    <button type="submit" class="petOwnerLoginButton btn btn-default loginRegisterButton">Login</button>
                </div>

                <div class="col-xs-12 forgotPassword">
                    Forgot your password?
                </div>

            </form>
        </div>
    </div>


    <!-- Registration Form -->
    <div class="registerForm" style="display: none;">
        <div class="col-xs-offset-2 col-xs-8 col-sm-offset-3 col-sm-6 formBackground">
            <form action="{{action('Auth\AuthController@postRegister')}}" method="POST">
                {!! csrf_field() !!}
                <div class="col-xs-8 formHeader">Register a new account.</div>
                <div class="col-xs-4 closeButton">
                    <i class="fa fa-window-close" aria-hidden="true"></i>
                </div>

                <div class="col-xs-12">
                    <div class="col-xs-12 formLabel">Name</div>
                    <div class="col-xs-12">
                        <input type="text" name="name" id="name" class="formInput" required>
                    </div>  
                </div>                  

                <div class="col-xs-6">
                    <div class="col-xs-12 formLabel">Email Address</div>
                    <div class="col-xs-12">
                        <input type="text" name="email" id="email" class="formInput" required>
                    </div>  
                </div>                      

                <div class="col-xs-6">
                    <div class="col-xs-12 formLabel">Phone Number</div>
                    <div class="col-xs-12">
                        <input type="text" name="phoneNumber" id="phoneNumber" class="formInput" required>
                    </div>
                </div>  

                <div class="col-xs-12">
                    <div class="col-xs-12 formLabel">Physical Address</div>
                    <div class="col-xs-12">
                        <input type="text" name="address" id="address" placeholder="123 Pet St, Bark City, Meow, 54321" class="formInput" required>
                    </div>  
                </div>  
                

                <div class="col-xs-12">
                    <div class="col-xs-12 radioForm">
                        <div class="col-xs-12">
                            <div class="col-xs-6 formRadioInput">
                                <input type="radio" name="user_type" value="owner" class="formRadioInput" required> I am a pet owner.

                            </div>
                            <div class="col-xs-6 formRadioInput">
                                <input type="radio" name="user_type" value="vet" class="formRadioInput"> I am a vet clinic.
                            </div>
                        </div>
                    </div>  
                </div>  
                
                <div class="col-xs-6">
                    <div class="col-xs-12 formLabel">Password</div>
                    <div class="col-xs-12">
                        <input type="password" name="password" id="password" class="formInput">
                    </div>
                </div>
 
                <div class="col-xs-6">
                    <div class="col-xs-12 formLabel">Confirm Password</div>
                    <div class="col-xs-12">
                        <input type="password" name="password_confirmation" id="password_confirmation" class="formInput" required>
                    </div>
                </div>

                <div class="col-xs-12 loginRegisterButtonBody">
                    <button type="submit" class="petOwnerRegisterButton btn btn-default loginRegisterButton">Register</button>
                </div>

            </form>
        </div>
    </div>
    </div>

@stop











