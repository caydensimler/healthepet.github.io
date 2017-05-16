<div class="allContent">
@extends('layouts.master')

@section('content')

	<div class="col-xs-12 welcomeHeaderAccountPage">
		{{ Auth::user()->name }}'s Records
	</div>

	<div class="col-xs-offset-5 col-xs-2 loginRegisterButtonBody">
		<div class="addPetButton"><i class="fa fa-plus-square" aria-hidden="true"></i> Add New Pet</div>
	</div>

    <?php $i = 1; ?>
	<div class="col-xs-12 petInfoHolder">
		@foreach($pets as $pet)
			<div class="col-xs-offset-1 col-xs-10 col-md-offset-2 col-md-8 petBody">
				<div class="col-xs-5 petNameVet">{{ $pet->petName }}</div>
				<div class="col-xs-7 vetRecordsLink">
					<a href="/pets/{{ $pet->id }}">Click here to add a new vaccination. <i class="fa fa-file-text-o" aria-hidden="true"></i></a>
				</div>

				<div class="col-xs-12 petInformationBody petInfoBody<?= $i ?>">

					<div class="col-xs-10 petInformationHeader">Pet Information</div>  
                    <div class="col-xs-2 expandInfo expandInfoPet<?= $i ?>">
                        <i class="fa fa-caret-down" aria-hidden="true"></i>
                    </div>

                    <div class="petInfo" style="display: none;">
    					<div class="col-xs-6 petRecordInformation">
    						<div class="col-xs-4 subHeader">Species:</div>
    						<div class="col-xs-8">{{ ucfirst($pet->species) }}</div>
    					</div>					

    					<div class="col-xs-6 petRecordInformation">
    						<div class="col-xs-4 subHeader">Breed:</div>
    						<div class="col-xs-8">{{ $pet->breed }}</div>
    					</div>					

    					<div class="col-xs-6 petRecordInformation">
    						<div class="col-xs-4 subHeader">Sex:</div>
    						<div class="col-xs-8">{{ ucfirst($pet->sex) }}</div>
    					</div>					

    					<div class="col-xs-6 petRecordInformation">
    						<div class="col-xs-4 subHeader">Weight:</div>
    						<div class="col-xs-8">{{ $pet->weight }} pounds</div>
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

				</div>
			

				<div class="col-xs-12 petInformationBody petOwnerInfo<?= $i ?>">

					<div class="col-xs-10 petInformationHeader">Owner Information</div>
                    <div class="col-xs-2 expandInfo expandInfoOwner<?= $i ?>"><i class="fa fa-caret-down" aria-hidden="true"></i></div>

                    <div class="petOwnerInfo" style="display: none;">
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

			</div> 

            <?php $i++; ?>
		@endforeach
	</div>

        <div class="col-xs-12 paginationHolder">
		  {!! $pets->render() !!}
        </div>

</div>

	<div class="addPetForm" style="display: none;">
        <div class="col-xs-offset-2 col-xs-8 col-sm-offset-3 col-sm-6 formBackground">
            <form action="{{ action('PetsController@store') }}" method="POST">
            {!! csrf_field() !!}

                <div class="col-xs-12 closeButton">
                    <div class="col-xs-8">Add a new pet.</div>
                    <i class="fa fa-window-close" aria-hidden="true"></i>
                </div>

                <div class="col-xs-12 col-sm-4">
                    <div class="col-xs-12 formLabel">Name</div>
                    <div class="col-xs-12">
                        <input type="text" name="petName" id="petName" class="formInput" required>
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
                        <select name="age" id="age" class="birthYearDropDown" required>
                        	<option value=""></option>
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
                    <div class="col-xs-12 formLabel">Owner's Name</div>
                    <div class="col-xs-12">
                        <input type="text" name="name" id="name" class="formInput" placeholder="Bob Bobberson" required>
                    </div>
                </div>

                <div class="col-xs-6">
                    <div class="col-xs-12 formLabel">Owner's Phone Number</div>
                    <div class="col-xs-12">
                        <input type="text" name="phoneNumber" id="phoneNumber" class="formInput" placeholder="2105559999" required>
                    </div>
                </div>    

                <div class="col-xs-6">
                    <div class="col-xs-12 formLabel">Owner's Email</div>
                    <div class="col-xs-12">
                        <input type="text" name="email" id="email" class="formInput" placeholder="petlover@gmail.com" required>
                    </div>

                </div>     


                <div class="col-xs-12 loginRegisterButtonBody">
                    <button type="submit" class="petOwnerRegisterButton btn btn-default loginRegisterButton">Add Pet</button>
                </div>      

            </form>
        </div>
    </div>

@stop