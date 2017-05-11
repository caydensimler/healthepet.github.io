



    <div class="allContent">
@extends('layouts.master')

@section('content')

		<div class="welcomeHeaderAccountPage">
			Welcome to your account page, {{ Auth::user()->name }}.
		</div>
        
        @if(\Auth::User()->user_type == 'vet')

		@endif
        
		@foreach($pets as $pet)

			<div class="col-xs-12 petInformation">

				<div class="col-xs-3"><img class="petHeaderPicture" src="/img/{{ $pet->img }}" alt="dog"></div>

				<div class="col-xs-offset-1 col-xs-8 petDescriptionBody">

					<div class="col-xs-12">
						<span class="petName">{{ $pet->name }}</span>
					</div>

					<div class="col-xs-6">
						<div class="col-xs-12 petSubHeader">
							Species: {{ $pet->species }}
						</div>					

						<div class="col-xs-12 petSubHeader">
							Breed: {{ $pet->breed }}
						</div>					

						<div class="col-xs-12 petSubHeader">
							Gender: {{ $pet->sex }}
						</div>
					</div>

					<div class="col-xs-6">
						<div class="col-xs-12 petSubHeader">
							Weight: {{ $pet->weight }}
						</div>					

						<div class="col-xs-12 petSubHeader">
							Color(s): {{ $pet->color }}
						</div>					

						<div class="col-xs-12 petSubHeader">
							Age: {{ $pet->age }}
						</div>
					</div>

					<div class="col-xs-12 viewRecordsLink">
						<i class="fa fa-file-text-o" aria-hidden="true"></i><a href="{{ action('PetsController@show', $pet->id)}}">Click here to view {{ $pet->name}} records.</a>
					</div>

				</div>

			</div>
		@endforeach

    </div>
    <div class="addPetForm" style="display: none;">
        <div class="col-xs-offset-2 col-xs-8 col-sm-offset-3 col-sm-6 formBackground">
            <form action="" method="POST">
            {!! csrf_field() !!}

                <div class="col-xs-12 closeButton">
                    <div class="col-xs-8">Add a new pet.</div>
                    <i class="fa fa-window-close" aria-hidden="true"></i>
                </div>

                <div class="col-xs-12 col-sm-4">
                    <div class="col-xs-12 formLabel">Name</div>
                    <div class="col-xs-12">
                        <input type="text" name="name" id="name" class="formInput" required>
                    </div>
                </div>              

                <div class="col-xs-6 col-sm-4">
                    <div class="col-xs-12 formLabel">Weight</div>
                    <div class="col-xs-12">
                        <input type="text" name="weight" id="weight" class="formInput" placeholder="pounds" required>
                    </div>
                </div>              

                <div class="col-xs-6 col-sm-4">
                    <div class="col-xs-12 formLabel">Color(s)</div>
                    <div class="col-xs-12">
                        <input type="text" name="color" id="color" class="formInput" required placeholder="Black/White">
                    </div>
                </div>

                <div class="col-xs-6 radioForm">
                    <div class="col-xs-12 formLabel">Species</div>
                    <div class="col-xs-12">
                        <div class="col-xs-6 formRadioInput">
                            <input type="radio" name="species" value="dog" class="formRadioInput" required> Dog
                        </div>
                        <div class="col-xs-6 formRadioInput">
                            <input type="radio" name="species" value="cat" class="formRadioInput"> Cat
                        </div>
                    </div>
                </div>                      

                <div class="col-xs-6 radioForm">
                    <div class="col-xs-12 formLabel">Sex</div>
                    <div class="col-xs-12">
                        <div class="col-xs-6 formRadioInput">
                            <input type="radio" name="sex" value="male" class="formRadioInput" required> M
                        </div>
                        <div class="col-xs-6 formRadioInput">
                            <input type="radio" name="sex" value="female" class="formRadioInput"> F
                        </div>
                    </div>
                </div>  

                <div class="col-xs-6">
                    <div class="col-xs-12 formLabel">Breed</div>
                    <div class="col-xs-12">
                        <input type="text" name="breed" id="breed" class="formInput" placeholder="Black Lab/Great Dane" required>
                    </div>
                </div>                      

                <div class="col-xs-6">
                    <div class="col-xs-12 formLabel">Birth Year</div>
                    <div class="col-xs-12">
                        <!-- <input type="text" name="birthYear" id="birthYear" class="formInput" required> -->
                        <select name="birthYear" id="birthYear" class="birthYearDropDown">
                            <option value="2000">2000</option>
                            <option value="2001">2001</option>
                            <option value="2002">2002</option>
                            <option value="2003">2003</option>
                            <option value="2004">2004</option>
                            <option value="2005">2005</option>
                            <option value="2006">2006</option>
                            <option value="2007">2007</option>
                            <option value="2008">2008</option>
                            <option value="2009">2009</option>
                            <option value="2010">2010</option>
                            <option value="2011">2011</option>
                            <option value="2012">2012</option>
                            <option value="2013">2013</option>
                            <option value="2014">2014</option>
                            <option value="2015">2015</option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                        </select>
                    </div>
                </div>                      

                <div class="col-xs-12">
                    <div class="col-xs-12 formLabel imageUpload">
                        Upload an image of your pet!
                        <button class="petOwnerRegisterButton btn btn-default loginRegisterButton addPetImageButton">Choose File</button>
                    </div>
                </div>  

                <div class="col-xs-12 loginRegisterButtonBody">
                    <button type="submit" class="petOwnerRegisterButton btn btn-default loginRegisterButton">Add Pet</button>
                </div>      

            </form>
        </div>
    </div>

    {!! $pets->render() !!}


@stop