$(document).ready(function() {

	$('#loginForm').submit(function() {
	    var data = $("#loginForm").serialize();
	 	var urlLogin = $("#loginForm").attr('action');

		$.ajax({
			url: urlLogin,
			type: 'post',
			data: data,
			cache: false,
			dataType: "json",
			success: function(data) {
				window.parent.location.href = data.redirect;
			},
			error: function(data) {
				var errors = eval("(" + data.responseText + ")");
				
				$('#login-error-c').html(errors.email);
				$('#login-error').toggle();
			}
		});

		return false;
	});
});