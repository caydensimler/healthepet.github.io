



    <div class="allContent">
@extends('layouts.master')

@section('content')

		<div class="welcomeHeaderAccountPage">
			Welcome to your pets page, {{ Auth::user()->name }}.
		</div>
        
        @if(session()->has('alert-success'))
            <div class="alert-success">{{ session()->get('alert-success') }}</div>
        @endif

        @if(session()->has('alert-danger'))
            <div class="alert-danger">{{ session()->get('alert-danger') }}</div>
        @endif

        @if(\Auth::User()->user_type == 'vet')

		@endif
        
		@foreach($pets as $pet)


			<div class="col-xs-12 col-sm-6 petInformation">

                <div class="col-xs-offset-1 col-xs-3">
                    <img class="petHeaderPicture" src="/img/{{ $pet->img == null ? 'sampleDogPicture.jpg' : $pet->img }}" alt="dog/cat picture">
                    <form action="{{ action('PetsController@image', $pet->id) }}" method="post" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                        Edit Image:
                        <input type="hidden" name="pet_id" value="{{ $pet->id }}">
                        <input type="file" name="fileToUpload" id="fileToUpload">
                        <input type="submit" value="Upload Image" name="submit">
                    </form>
                </div>

				<div class="col-xs-offset-1 col-xs-8 petDescriptionBody">

                    <!-- <div class="col-xs-12 petNameHeader"> -->
                        <div class="col-xs-5 petNameVet">{{ $pet->petName }}</div>
                        <div class="col-xs-7 recordsLink">
                            <a href="/pets/{{ $pet->id }}">Click here to view {{ $pet->petName }}'s records. <i class="fa fa-file-text-o" aria-hidden="true"></i></a>
                        </div>
                    <!-- </div> -->

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

				<div class="col-xs-offset-2 col-xs-5 petDescriptionBody">

                    <div class="col-xs-12 petNameVet">{{ $pet->name }}</div>

					<div class="col-xs-12 petSubHeader">
						Species: {{ ucfirst($pet->species) }}					
                        <br>
						Breed: {{ $pet->breed }}					
                        <br>
						Sex: {{ ucfirst($pet->sex) }}
                        <br>
						Weight: {{ $pet->weight }} pounds
                        <br>					
						Color(s): {{ $pet->color }}		
                        <br>			
						Age: {{ (date('Y') - $pet->age) }} years
                        <br>
                    </div>

                    <div class="col-xs-6">
					</div>
				</div>
			</div>
		@endforeach
        </div>

    {!! $pets->render() !!}

@stop
