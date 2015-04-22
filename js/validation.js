$(document).ready(function(){
	$('#login').click(function(){
		$('#smallWndw').load('login.php', function(){
			$('form#login').on('submit', function(){

				var form    = $(this),
		            url     = form.attr('action'),
		            method  = form.attr('method'),
		            data    = {};

				form.find('[name]').each(function(index, value) {
		        var form    = $(this),
		            name    = form.attr('name'),
		            value   = form.val();

		        data[name]  = value;
		        });

		        var val_err = $('#response').css("color", "red");
		        var error   = false;

		        if (data['username'].length < 4) {
					val_err.html('Username must be at least 4 character');
					error = true;
		        }
		        if (data['username'] === '') {
					val_err.html('You must enter username!');
					error = true;
		        }
		        if(error === true) {
		        val_err.stop().fadeIn(400).delay(1400).fadeOut(800);
		        return false;
		        }
			});
		});
	});

	$('#register').click(function(){
		$('#smallWndw').load('register.php', function(){
			$('form#register').on('submit', function(){
				var form    = $(this),
		            url     = form.attr('action'),
		            method  = form.attr('method'),
		            data    = {};

				form.find('[name]').each(function(index, value) {
		        var form    = $(this),
		            name    = form.attr('name'),
		            value   = form.val();

		        data[name]  = value;
		        });

				var val_err = $('#response').css('color', 'red');
		        var error   = false;

		        if (data['name'].length < 3) {
					val_err.html('Check your name ');
					error = true;
				}
		       	if (data['password'] !== data['pass_again']) {
					val_err.html('Your password are not matched!');
					error = true;
				}
				if (data['password'].length < 6) {
					val_err.html('Password is too weak, it must contain at least 6 character');
					error = true;
				}
				if (data['username'].length < 4) {
					val_err.html('Username must be at least 4 character');
					error = true;
				}
				if (data['username'] === '') {
					val_err.html('You must enter username');
					error = true;
				}
				if(error === true) {
					val_err.stop().fadeIn(400).delay(1400).fadeOut(800);
					return false;
		        }
			});		
		});
	});
});