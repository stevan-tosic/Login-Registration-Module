<?php
require_once 'core/init.php';
?>
<form id="register" action="register-proccess.php" method="post">
	<div class="field">
		<label for="username">Username</label><br>
		<input type="text" name="username" id="username" placeholder="Enter your Username. . ." value="<?php echo escape(Input::get('username')); ?>"></input>
	</div>

	<div class="field">
		<label for="password">Enter password</label><br>
		<input type="password" name="password" id="password" placeholder="Enter your Password. . ." ></input>
	</div>

	<div class="field">
		<label for="password">Enter your password again</label><br>
		<input type="password" name="pass_again" id="pass_again" placeholder="Retype password again. . ." ></input>
	</div>

	<div class="field">
		<label for="name">Enter your name</label><br>
		<input type="text" name="name" id="name" placeholder="Enter your name. . ." value="<?php echo escape(Input::get('name')); ?>"></input>
	</div>
	<input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
	<br>
	<div id="response"></div><br>
	<input type="submit" value="Register">
</form>