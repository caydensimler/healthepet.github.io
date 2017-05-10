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


	///////////////
	// Registration
	///////////////
		$('.register').click(function(){
			HideAll();
			$('.registerForm').fadeToggle(500);

			$('.allContent').toggleClass('blur', 10000);
		});

		$('body > div.registerForm > div > form > div.col-xs-4.closeButton > i').click(function(){
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

		$(":checkbox").on('click', function(){

	            var dateAdminister = new Date();
	            var datetimeAdminister = 
	            	(dateAdminister.getMonth()+1) + 
	            	'/' +
	            	dateAdminister.getUTCDate() +
	            	'/' +
	            	(dateAdminister.getFullYear());


	            var dateRenewal = new Date();
	            var datetimeRenewal = 
	            	(dateRenewal.getMonth()+1) + 
	            	'/' +
	            	dateRenewal.getUTCDate() +
	            	'/' +
	            	(dateRenewal.getFullYear()+1);

			if ($(this).is(':checked')) {

	    		$(this).prev().prev().prev().prev().children().removeClass('fa-square-o').addClass('fa-check-square-o');
	    		$(this).prev().prev().prev().children().html(datetimeAdminister);
	    		$(this).prev().prev().children().html(datetimeRenewal);
		    	$(this).parent().toggleClass('shotRecordBodyChecked');
			} else {

	    		$(this).prev().prev().prev().prev().children().removeClass('fa-check-square-o').addClass('fa-square-o');
	    		$(this).prev().prev().prev().children().html('');
	    		$(this).prev().prev().children().html('');
				$(this).parent().toggleClass('shotRecordBodyChecked');
			}
		});







});