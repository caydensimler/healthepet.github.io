$(document).ready(function(){

	"use strict";


	function HideAllHomepage(){
		$('.allContent').removeClass('blur');

		$('.loginForm').hide();
		$('.registerForm').hide();
	}


	//////////////////
	// Pet Owner Login
	//////////////////
		$('.login').click(function(){
			HideAllHomepage();
			$('.loginForm').fadeToggle(500);

			$('.allContent').toggleClass('blur');
		});

		$('body > div.loginForm > div > form > div > i').click(function(){
			$('.allContent').toggleClass('blur');

			$('.loginForm').fadeToggle(500);
		});


	///////////////
	// Registration
	///////////////
		$('.register').click(function(){
			HideAllHomepage();
			$('.registerForm').fadeToggle(500);

			$('.allContent').toggleClass('blur');
		});

		$('body > div.registerForm > div > form > div.col-xs-4.closeButton > i').click(function(){
			$('.allContent').toggleClass('blur');

			$('.registerForm').fadeToggle(500);
		});


	///////////////////////
	// Add New Pet -> Owner
	///////////////////////
		$('.addPetButton').click(function(){
			$('.addPetForm').fadeToggle(500);

			$('.allContent').toggleClass('blur');
		});

		$('body > div.addPetForm > div > form > div > i').click(function(){
			$('.allContent').toggleClass('blur');

			$('.addPetForm').fadeToggle(500);
		});


	///////////////
	// Shot Records
	///////////////

		$('.shotButton').click(function(){
			$('.shotsForm').fadeToggle(500);

			$('.allContent').toggleClass('blur');
		});	

		$('body > div.shotsForm > form > div > div.col-xs-4.closeButton > i').click(function(){
			$('.allContent').toggleClass('blur');

			$('.shotsForm').fadeToggle(500);
		})








});