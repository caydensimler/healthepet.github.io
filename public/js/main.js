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

	            var weekday = new Array(7);
					weekday[0] =  "Sunday";
					weekday[1] = "Monday";
					weekday[2] = "Tuesday";
					weekday[3] = "Wednesday";
					weekday[4] = "Thursday";
					weekday[5] = "Friday";
					weekday[6] = "Saturday";

				var month = new Array(12);
					month[0] = "January";
					month[1] = "February";
					month[2] = "March";
					month[3] = "April";
					month[4] = "May";
					month[5] = "June";
					month[6] = "July";
					month[7] = "August";
					month[8] = "September";
					month[9] = "October";
					month[10] = "November";
					month[11] = "December";

				var day = new Array(31);
					day[0] = "1st";
					day[1] = "2nd";
					day[2] = "3rd";
					day[3] = "4th";
					day[4] = "5th";
					day[5] = "6th";
					day[6] = "7th";
					day[7] = "8th";
					day[8] = "9th";
					day[9] = "10th";
					day[10] = "11th";
					day[11] = "12th";
					day[12] = "13th";
					day[13] = "14th";
					day[14] = "15th";
					day[15] = "16th";
					day[16] = "17th";
					day[17] = "18th";
					day[18] = "19th";
					day[19] = "20th";
					day[20] = "21st";
					day[21] = "22nd";
					day[22] = "23rd";
					day[23] = "24th";
					day[24] = "25th";
					day[25] = "26th";
					day[26] = "27th";
					day[27] = "28th";
					day[28] = "29th";
					day[29] = "30th";
					day[30] = "31st";

				var dateAdminister = new Date();
	            var datetimeAdminister = 
	            	weekday[dateAdminister.getDay()] + 
		            ', ' +
		            month[dateAdminister.getMonth()] + 
		            ' ' +
		            day[dateAdminister.getUTCDate()] +
		            ', ' +
		            dateAdminister.getFullYear();


	            var dateRenewal = new Date();
	            var datetimeRenewal = 
	            	weekday[dateRenewal.getDay()] + 
	            	', ' +
	            	month[dateRenewal.getMonth()] + 
	            	' ' +
	            	day[dateRenewal.getUTCDate()] +
	            	', ' +
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