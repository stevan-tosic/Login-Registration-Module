<?php
require_once 'core/init.php';

if(Input::exists()) {
	if(Token::check(Input::get('token'))) {

		$validate = new Validate();
		$validation = $validate->check($_POST, array(
			'username'	=> array('required' => true),
			'password'	=> array('required'	=> true)
			));

		if($validation->passed()) {
			$user = new User();

			$remember = (Input::get('remember') === 'on') ? true : false;
			$login = $user->login(Input::get('username'), Input::get('password'), $remember);

			if($login) {
				Redirect::to('index.php');
			} else {
				echo '<p>Sorry, logging in failed.</p>';
			}

		} else {
			foreach($validation->errors() as $error) {
				echo $error, '<br>';
			}
		}
	}
}
?>

<form id="login" action="" method="post">
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