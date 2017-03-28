$(function() {

	$('#password_error_message').hide();
	$('#retype_password_error_message').hide();


	var error_password = false;
	var error_retype_password = false;

	$('#form_password').on('focusout', function(){
		check_password();
	});

	$('#form_retype_password').on('focusout', function(){
		check_retype_password();
	});

	function check_password () {
		var password = $('#form_password').val();

		if(password.length < 6 ) {
			$('#password_error_message').html("Password must not be less than 6 characters");
			$('#password_error_message').show();
		} else {
			$('#password_error_message').hide();
		}
	}


	function check_retype_password () {
		var password = $('#form_password').val();
		var retype_password = $('#form_retype_password').val();

		if(password !== retype_password) {
			$('#retype_password_error_message').html("Password does't Match");
			$('#retype_password_error_message').show();
		}else{
			$('#retype_password_error_message').hide();
		}
	}

	$('#registration_form').on('submit', function(){
		error_password = false;
		error_retype_password = false;

		check_password();
		check_retype_password();

		if(error_password === false && error_retype_password === false) {
			return true;
		}else{
			return false;
		}
	});
});