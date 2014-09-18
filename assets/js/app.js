/*
author: besingamk
date: 9/17/2014
*/

// global variables
var base_url = $('meta[name=base_url]').attr('content');

$(document).ready(function() {

	/*
	login page, validating
	*/
	$('#loginform').submit(function(e) {
		
		var action = $(this).attr('action');
		var formData = $(this).serializeArray();
		//console.log(formData);

		$.post(action, formData, 
			function(data) {
				if (data.success == true) {
					alert("login success!!");
					window.location.href = base_url;
				} else {
					$('.error').show().fadeIn();
					$('.error').append(data.msg);
					setTimeout(function() {
						$('.error').hide();
						$('.error > p').remove();
					}, 3000);
				}
			}
		);
		e.preventDefault();
	});

	/*
	creating new user
	*/
	$("#create_newuser").submit(function(e) {
		var action = $(this).attr('action');
		var formData = $(this).serializeArray();
		
		$.post(action, formData, function(data) {
			//console.log(data.msg);

			if (data.success == true) {
				alert("Successfuly save!!!! Thanks..");
				window.location.href = base_url;	
			}else {
				$('.error').show().fadeIn();
				$('.error').append(data.msg);

				setTimeout(function() {
					$('.error').hide();
					$('.error > p').remove();
				}, 3000);
			}			
		});
		e.preventDefault();
	});

});

