$(document).ready(function(){

	"use strict";


	function HideAll(){
		$('.allContent').removeClass('blur');

		$('.petOwnerLoginForm').hide();
		$('.petOwnerRegisterForm').hide();
		$('.vetClinicLoginForm').hide();
		$('.vetClinicRegisterForm').hide();
	}

	$('.petOwnerLogin').click(function(){
		HideAll();
		$('.petOwnerLoginForm').fadeToggle(500);

		$('.allContent').toggleClass('blur', 10000);
	});

	$('body > div.petOwnerLoginForm > div > form > div > i').click(function(){
		$('.allContent').toggleClass('blur', 10000);

		$('.petOwnerLoginForm').fadeToggle(500);
	})



	$('.petOwnerRegister').click(function(){
		HideAll();
		$('.petOwnerRegisterForm').fadeToggle(500);

		$('.allContent').toggleClass('blur', 10000);
	});

	$('body > div.petOwnerRegisterForm > div > form > div.col-xs-12.closeButton > i').click(function(){
		$('.allContent').toggleClass('blur', 10000);

		$('.petOwnerRegisterForm').fadeToggle(500);
	})



	$('.vetClinicLogin').click(function(){
		HideAll();
		$('.vetClinicLoginForm').fadeToggle(500);

		$('.allContent').toggleClass('blur', 10000);
	});

	$('body > div.vetClinicLoginForm > div > form > div.col-xs-12.closeButton > i').click(function(){
		$('.allContent').toggleClass('blur', 10000);

		$('.vetClinicLoginForm').fadeToggle(500);
	})


	$('.vetClinicRegister').click(function(){
		HideAll();
		$('.vetClinicRegisterForm').fadeToggle(500);

		$('.allContent').toggleClass('blur', 10000);
	});

	$('body > div.vetClinicRegisterForm > div > form > div.col-xs-12.closeButton > i').click(function(){
		$('.allContent').toggleClass('blur', 10000);

		$('.vetClinicRegisterForm').fadeToggle(500);
	})








});