$(document).ready(function(){

	"use strict";

	$('.petOwnerLogin').click(function(){
		$('.petOwnerLoginForm').fadeToggle(500);

		$('.allContent').toggleClass('blur', 10000);
	});

	$('body > div.petOwnerLoginForm > div > form > div > i').click(function(){
		$('.allContent').toggleClass('blur', 10000);

		$('.petOwnerLoginForm').fadeToggle(500);
	})



	$('.petOwnerRegister').click(function(){
		$('.petOwnerRegisterForm').fadeToggle(500);

		$('.allContent').toggleClass('blur', 10000);
	});

	$('body > div.petOwnerRegisterForm > div > form > div.col-xs-12.closeButton > i').click(function(){
		$('.allContent').toggleClass('blur', 10000);

		$('.petOwnerRegisterForm').fadeToggle(500);
	})



	$('.vetClinicLogin').click(function(){
		$('.vetClinicLoginForm').fadeToggle(500);

		$('.allContent').toggleClass('blur', 10000);
	});



	$('.vetClinicRegister').click(function(){
		$('.vetClinicRegisterForm').fadeToggle(500);

		$('.allContent').toggleClass('blur', 10000);
	});









});