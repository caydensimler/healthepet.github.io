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

	////////////////////////////////
	// Authentication Error Messages
	////////////////////////////////

	if ($(".loginError").length > 0) {
		$('.loginForm').fadeToggle(500);

		$('.allContent').toggleClass('blur');
	}

	if ($(".registerError").length > 0) {
		$('.registerForm').fadeToggle(500);

		$('.allContent').toggleClass('blur');
	}


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
		});

		var rotatePetInfo1 = 0;
		$('.petInfoBody1').click(function(){
			console.log($(this).children('.petInfo'));
			$(this).children('.petInfo').slideToggle(600);

			if (rotatePetInfo1 === 0) {
				$(this).children('.expandInfoPet1').velocity({  rotateX: -180 }, 500);
				rotatePetInfo1 = 1;
			} else {
				$(this).children('.expandInfoPet1').velocity({  rotateX: -360 }, 500);
				rotatePetInfo1 = 0;
			}
			    
		});		

		var rotatePetInfo2 = 0;
		$('.petInfoBody2').click(function(){
			$(this).children('.petInfo').slideToggle(600);

			if (rotatePetInfo2 === 0) {
				$(this).children('.expandInfoPet2').velocity({  rotateX: -180 }, 500);
				rotatePetInfo2 = 1;
			} else {
				$(this).children('.expandInfoPet2').velocity({  rotateX: -360 }, 500);
				rotatePetInfo2 = 0;
			}
			    
		});		

		var rotatePetInfo3 = 0;
		$('.petInfoBody3').click(function(){
			$(this).children('.petInfo').slideToggle(600);

			if (rotatePetInfo3 === 0) {
				$(this).children('.expandInfoPet3').velocity({  rotateX: -180 }, 500);
				rotatePetInfo3 = 1;
			} else {
				$(this).children('.expandInfoPet3').velocity({  rotateX: -360 }, 500);
				rotatePetInfo3 = 0;
			}
			    
		});		

		var rotatePetInfo4 = 0;
		$('.petInfoBody4').click(function(){
			$(this).children('.petInfo').slideToggle(600);

			if (rotatePetInfo4 === 0) {
				$(this).children('.expandInfoPet4').velocity({  rotateX: -180	 }, 500);
				rotatePetInfo4 = 1;
			} else {
				$(this).children('.expandInfoPet4').velocity({  rotateX: -360 }, 500);
				rotatePetInfo4 = 0;
			}
			    
		});

		var rotateOwnerInfo1 = 0;
		$('.petOwnerInfo1').click(function(){
			$(this).children('.petOwnerInfo').slideToggle(600);

			if (rotateOwnerInfo1 === 0) {
				$(this).children('.expandInfoOwner1').velocity({  rotateX: -180 }, 500);
				rotateOwnerInfo1 = 1;
			} else {
				$(this).children('.expandInfoOwner1').velocity({  rotateX: -360 }, 500);
				rotateOwnerInfo1 = 0;
			}
		});		

		var rotateOwnerInfo2 = 0;
		$('.petOwnerInfo2').click(function(){
			$(this).children('.petOwnerInfo').slideToggle(600);

			if (rotateOwnerInfo2 === 0) {
				$(this).children('.expandInfoOwner2').velocity({  rotateX: -180 }, 500);
				rotateOwnerInfo2 = 1;
			} else {
				$(this).children('.expandInfoOwner2').velocity({  rotateX: -360 }, 500);
				rotateOwnerInfo2 = 0;
			}
		});		

		var rotateOwnerInfo3 = 0;
		$('.petOwnerInfo3').click(function(){
			$(this).children('.petOwnerInfo').slideToggle(600);

			if (rotateOwnerInfo3 === 0) {
				$(this).children('.expandInfoOwner3').velocity({  rotateX: -180 }, 500);
				rotateOwnerInfo3 = 1;
			} else {
				$(this).children('.expandInfoOwner3').velocity({  rotateX: -360 }, 500);
				rotateOwnerInfo3 = 0;
			}
		});		

		var rotateOwnerInfo4 = 0;
		$('.petOwnerInfo4').click(function(){
			$(this).children('.petOwnerInfo').slideToggle(600);

			if (rotateOwnerInfo4 === 0) {
				$(this).children('.expandInfoOwner4').velocity({  rotateX: -180 }, 500);
				rotateOwnerInfo4 = 1;
			} else {
				$(this).children('.expandInfoOwner4').velocity({  rotateX: -360 }, 500);
				rotateOwnerInfo4 = 0;
			}
		});

		$('.petInfo').each(function() {
  			$(this).height($(this).height()).hide();
		});		

		$('.petOwnerInfo').each(function() {
  			$(this).height($(this).height()).hide();
		});

	///////////////////
	// Smooth Scrolling
	///////////////////
  	$(document).on('click', '.homepageLink', function(event){
	    event.preventDefault();

	    $('html, body').animate({
	        scrollTop: $( $.attr(this, 'href') ).offset().top
	    }, 700);
	});


	///////////////////////////////////////////////////
	// Show value of hidden file input for image upload
	///////////////////////////////////////////////////
	 $("input.hiddenInputFileUpload").bind("change", function() {
       	var hiddenValue = $('input.hiddenInputFileUpload').val();
		$(this).parent().parent().next().children().html(hiddenValue); 
 	});

			
			








});