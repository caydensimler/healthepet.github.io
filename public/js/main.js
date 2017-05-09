$(document).ready(function(){

	"use strict";


	function HideAll(){
		$('.allContent').removeClass('blur');

		$('.loginForm').hide();
		$('.registerForm').hide();
	}


	//////////////////
	// Pet Owner Login
	//////////////////
		$('.login').click(function(){
			HideAll();
			$('.loginForm').fadeToggle(500);

			$('.allContent').toggleClass('blur', 10000);
		});

		$('body > div.loginForm > div > form > div > i').click(function(){
			$('.allContent').toggleClass('blur', 10000);

			$('.loginForm').fadeToggle(500);
		});


	/////////////////////////
	// Pet Owner Registration
	/////////////////////////
		$('.register').click(function(){
			HideAll();
			$('.registerForm').fadeToggle(500);

			$('.allContent').toggleClass('blur', 10000);
		});

		$('body > div.registerForm > div > form > div.col-xs-12.closeButton > i').click(function(){
			$('.allContent').toggleClass('blur', 10000);

			$('.registerForm').fadeToggle(500);
		});


	///////////////////////
	// Add New Pet -> Owner
	///////////////////////
		$('.addPetButton').click(function(){
			$('.addPetForm').fadeToggle(500);

			$('.allContent').toggleClass('blur', 10000);
		});

		$('body > div.addPetForm > div > form > div > i').click(function(){
			$('.allContent').toggleClass('blur', 10000);

			$('.addPetForm').fadeToggle(500);
		});







});