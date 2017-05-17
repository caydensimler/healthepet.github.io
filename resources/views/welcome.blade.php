
<div class="allContent">
@extends('layouts.master')


@section('content')
    @if (session()->has('loginErrorMessage'))
        <?php echo '<div class="invisible loginError"></div>'; ?>
    @elseif (session()->has('registerErrorMessage') || session()->has('passwordErrorMessage'))
        <?php echo '<div class="invisible registerError"></div>'; ?>
    @endif

    <!-- New Homepage -->
    <img src="/img/homeHeader.jpg" alt="dog in park" class="headerImage">

    <div class="col-xs-12 invisible fillerText" id="about"> filler text</div>

    <div class="aboutBody">

        <div class="col-xs-12 homeWhatIs">What can HealthEPet do for you?</div>

        <div class="col-xs-12 homeInfoBody">
            <div class="col-xs-offset-1 col-xs-10 col-md-offset-1 col-md-3">
                <img src="/img/dog-with-person.jpg" alt="dog with person" class="homeInfoPicture">
            </div>

            <div class="col-xs-12 col-md-7 homeWhatIsText">
                Pet Owners
                <br>
                <i class="fa fa-paw" aria-hidden="true"></i> Keep track of your pet's vaccination records all in one place.
                <br>
                <i class="fa fa-paw" aria-hidden="true"></i> Localized records from all clinic visits.
                <br>
                <i class="fa fa-paw" aria-hidden="true"></i> Customizable page for pet owners. 
                <br>
                <i class="fa fa-paw" aria-hidden="true"></i> Completely paperless.
            </div>
        </div>   

        <div class="col-xs-12 homeInfoBody homeInfoBottom">
            <div class="col-xs-offset-1 col-xs-10 col-md-offset-1 col-md-3">
                <img src="/img/cat-with-vet.jpg" alt="dog with person" class="homeInfoPicture">
            </div>

            <div class="col-xs-12 col-md-7 homeWhatIsText">
                Vet Clinics
                <br>
                <i class="fa fa-paw" aria-hidden="true"></i> Fully structured list of all patients in your personal directory.
                <br>
                <i class="fa fa-paw" aria-hidden="true"></i> Comprehensive table of all vaccinations to an animal.
                <br>
                <i class="fa fa-paw" aria-hidden="true"></i> Ability to search through pet records.
                <br>
                <i class="fa fa-paw" aria-hidden="true"></i> Completely paperless.
            </div>

        </div>

    </div>

    <div class="col-xs-12 contactBody">

        <div class="col-xs-12 contactCreators" id="contact">Questions? Contact Us Here!</div>
            
        <div class="col-xs-12 siteCreators">

            <div class="col-xs-12 col-md-4">
                <div class="col-xs-12 siteCreatorsName">Cayden Simler</div>

                <div class="col-xs-12">
                    <img src="/img/cayden.jpg" alt="Cayden Simler" class="siteCreatorsPicture">
                </div>

                <div class="col-xs-12 siteCreatorsLink">
                    <a href="https://github.com/caydensimler" target="_blank">
                        <i class="fa fa-github" aria-hidden="true"></i> Github
                    </a>
                    <br>
                    cayden.simler@hotmail.com
                </div>

            </div>

            <div class="col-xs-12 col-md-4">
                <div class="col-xs-12 siteCreatorsName">John Nichols</div>

                <div class="col-xs-12">
                    <img src="/img/john.jpg" alt="John Nichols" class="siteCreatorsPicture">
                </div>

                <div class="col-xs-12 siteCreatorsLink">
                    <a href="https://github.com/jtn0113" target="_blank">
                        <i class="fa fa-github" aria-hidden="true"></i> Github
                    </a>
                    <br>
                    jtn0113@yahoo.com
                </div>

            </div>

            <div class="col-xs-12 col-md-4">
                <div class="col-xs-12 siteCreatorsName">Thomas Hayes</div>

                <div class="col-xs-12">
                    <img src="/img/thomas.jpg" alt="Thomas Hayes" class="siteCreatorsPicture">
                </div>

                <div class="col-xs-12 siteCreatorsLink">
                    <a href="https://github.com/thomasehayes" target="_blank">
                        <i class="fa fa-github" aria-hidden="true"></i> Github
                    </a>
                    <br>
                    thomashayes7889@gmail.com
                </div>

            </div>
        </div>

    </div>  


</div>




<!-- Forms (not loaded by default) -->

    <!-- Login Form -->
    <div class="loginForm" style="display: none;">
        <div class="col-xs-offset-1 col-xs-10 col-md-offset-3 col-md-6 formBackground">
            <form action="{{action('Auth\AuthController@postLogin')}}" method="POST">
                {!! csrf_field() !!}
                <div class="col-xs-11 formHeader">
                    @if (session()->has('loginErrorMessage'))
                        <div class="error">Invalid username or password.</div>
                    @else
                        Login with an existing account
                    @endif
                </div>
                <div class="col-xs-1 closeButton">
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
            </form>
        </div>
    </div>


    <!-- Registration Form -->
    <div class="registerForm" style="display: none;">
        <div class="col-xs-offset-1 col-xs-10 col-md-offset-3 col-md-6 formBackground">
            <form action="{{action('Auth\AuthController@postRegister')}}" method="POST">
                {!! csrf_field() !!}
                 <div class="col-xs-11 formHeader">
                    @if (session()->has('registerErrorMessage'))
                        <div class="error">Email account already in use.</div>
                    @elseif (session()->has('passwordErrorMessage'))
                        <div class="error">Passwords do not match.</div>
                    @else
                        Register a new account
                    @endif
                </div>
                <div class="col-xs-1 closeButton">
                    <i class="fa fa-window-close" aria-hidden="true"></i>
                </div>

                <div class="col-xs-12">
                    <div class="col-xs-12 formLabel">Name</div>
                    <div class="col-xs-12">
                        <input type="text" name="name" id="name" class="formInput" value="{{ session()->get('name') }}"required>
                    </div>  
                </div>                  

                <div class="col-xs-6">
                    <div class="col-xs-12 formLabel">Email Address</div>
                    <div class="col-xs-12">
                        <input type="email" name="email" id="email" class="formInput"  value="{{ session()->get('email') }}" required>
                    </div>  
                </div>                      

                <div class="col-xs-6">
                    <div class="col-xs-12 formLabel">Phone Number</div>
                    <div class="col-xs-12">
                        <input type="text" name="phoneNumber" id="phoneNumber" class="formInput"  value="{{ session()->get('phoneNumber') }}" required>
                    </div>
                </div>  

                <div class="col-xs-12">
                    <div class="col-xs-12 formLabel">Physical Address</div>
                    <div class="col-xs-12">
                        <input type="text" name="address" id="address" placeholder="123 Pet St, Bark City, TX, 54321" class="formInput"  value="{{ session()->get('address') }} " required>
                    </div>  
                </div>  
                

                <div class="col-xs-12">
                    <div class="col-xs-12">
                        <div class="col-xs-12 radioForm">
                            <div class="col-xs-12">
                                <div class="col-xs-6 formRadioInput">
                                    <input type="radio" name="user_type" value="owner" class="formRadioInput" required> Pet Owner

                                </div>
                                <div class="col-xs-6 formRadioInput">
                                    <input type="radio" name="user_type" value="vet" class="formRadioInput"> Vet Clinic
                                </div>
                            </div>
                        </div>  
                    </div> 
                </div> 
                
                <div class="col-xs-12 col-md-6">
                    <div class="col-xs-12 formLabel">Password</div>
                    <div class="col-xs-12">
                        <input type="password" name="password" id="password" class="formInput" required>
                        @if ($errors->has('password'))
                            {{$errors->first('password')}}
                        @endif
                    </div>
                </div>
 
                <div class="col-xs-12 col-md-6">
                    <div class="col-xs-12 formLabel">Confirm Password</div>
                    <div class="col-xs-12">
                        <input type="password" name="password_confirmation" id="password_confirmation" class="formInput" required>
                        @if ($errors->has('password_confirmation'))
                            {{$errors->first('password_confirmation')}}
                        @endif
                    </div>
                </div>

                <div class="col-xs-12 loginRegisterButtonBody">
                    <button type="submit" class="petOwnerRegisterButton btn btn-default loginRegisterButton">Register</button>
                </div>

            </form>
        </div>
    </div>
    
@stop
