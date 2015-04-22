<?php
require_once 'core/init.php';
?>
<form id="login" action="login-procces.php" method="post">
	<div>
		<label for="username">Username</label><br>
		<input type="text" name="username" id="username" placeholder="Enter your Username. . ." autocomplete="off"></input>
	</div>

	<div>
		<label for="password">Password</label><br>
		<input type="password" name="password" id="password" placeholder="Enter your Password. . ." autocomplete="off"></input>
	</div>

	<div>
		<label for="remember">
		<input type="checkbox" name="remember" id="remember">Remember me
		</label>
	</div>

	<input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
	<br>
	<div id="response"></div><br>
	<input type="submit" value="Log in">
</form>