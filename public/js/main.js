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
		});

		var rotatePetInfo1 = 0;
		$('.expandInfoPet1').click(function(){
			$(this).parent().children('.petInfo').slideToggle(600);

			if (rotatePetInfo1 === 0) {
				$(this).velocity({  rotateX: -180 }, 500);
				rotatePetInfo1 = 1;
			} else {
				$(this).velocity({  rotateX: -360 }, 500);
				rotatePetInfo1 = 0;
			}
			    
		});		

		var rotatePetInfo2 = 0;
		$('.expandInfoPet2').click(function(){
			$(this).parent().children('.petInfo').slideToggle(600);

			if (rotatePetInfo2 === 0) {
				$(this).velocity({  rotateX: -180 }, 500);
				rotatePetInfo2 = 1;
			} else {
				$(this).velocity({  rotateX: -360 }, 500);
				rotatePetInfo2 = 0;
			}
			    
		});		

		var rotatePetInfo3 = 0;
		$('.expandInfoPet3').click(function(){
			$(this).parent().children('.petInfo').slideToggle(600);

			if (rotatePetInfo3 === 0) {
				$(this).velocity({  rotateX: -180 }, 500);
				rotatePetInfo3 = 1;
			} else {
				$(this).velocity({  rotateX: -360 }, 500);
				rotatePetInfo3 = 0;
			}
			    
		});		

		var rotatePetInfo4 = 0;
		$('.expandInfoPet4').click(function(){
			$(this).parent().children('.petInfo').slideToggle(600);

			if (rotatePetInfo4 === 0) {
				$(this).velocity({  rotateX: -180 }, 500);
				rotatePetInfo4 = 1;
			} else {
				$(this).velocity({  rotateX: -360 }, 500);
				rotatePetInfo4 = 0;
			}
			    
		});

		var rotateOwnerInfo1 = 0;
		$('.expandInfoOwner1').click(function(){
			$(this).parent().children('.petOwnerInfo').slideToggle(600);

			if (rotateOwnerInfo1 === 0) {
				$(this).velocity({  rotateX: -180 }, 500);
				rotateOwnerInfo1 = 1;
			} else {
				$(this).velocity({  rotateX: -360 }, 500);
				rotateOwnerInfo1 = 0;
			}
		});		

		var rotateOwnerInfo2 = 0;
		$('.expandInfoOwner2').click(function(){
			$(this).parent().children('.petOwnerInfo').slideToggle(600);

			if (rotateOwnerInfo2 === 0) {
				$(this).velocity({  rotateX: -180 }, 500);
				rotateOwnerInfo2 = 1;
			} else {
				$(this).velocity({  rotateX: -360 }, 500);
				rotateOwnerInfo2 = 0;
			}
		});		

		var rotateOwnerInfo3 = 0;
		$('.expandInfoOwner3').click(function(){
			$(this).parent().children('.petOwnerInfo').slideToggle(600);

			if (rotateOwnerInfo3 === 0) {
				$(this).velocity({  rotateX: -180 }, 500);
				rotateOwnerInfo3 = 1;
			} else {
				$(this).velocity({  rotateX: -360 }, 500);
				rotateOwnerInfo3 = 0;
			}
		});		

		var rotateOwnerInfo4 = 0;
		$('.expandInfoOwner4').click(function(){
			$(this).parent().children('.petOwnerInfo').slideToggle(600);

			if (rotateOwnerInfo4 === 0) {
				$(this).velocity({  rotateX: -180 }, 500);
				rotateOwnerInfo4 = 1;
			} else {
				$(this).velocity({  rotateX: -360 }, 500);
				rotateOwnerInfo4 = 0;
			}
		});

		$('.petInfo').each(function() {
  			$(this).height($(this).height()).hide();
		});		

		$('.petOwnerInfo').each(function() {
  			$(this).height($(this).height()).hide();
		});
			
			








});