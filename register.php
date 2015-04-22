<?php
require_once 'core/init.php';

if(Input::exists()){
	if(Token::check(Input::get('token'))) {

		$validate = new Validate();
		$validation = $validate->check($_POST, array(
			'username' 		=> array(
				'required'		=> true,
				'min'			=> 3,
				'max'			=> 20,
				'unique'		=> 'users'
				),
			'password' 		=> array(
				'required'		=> true,
				'min'			=> 6,
				),
			'pass_again' 	=> array(
				'required'		=> true,
				'matches'		=> 'password'
				),
			'name' 			=> array(
				'required'		=> true,
				'min'			=> 3,
				'max'			=> 50
				)
			));
		if($validation->passed()) {
			$user = new User();

			$salt = Hash::salt(32);

			try {

				$user->create(array(
					'username'	=> Input::get('username'),
					'password'	=> Hash::make(Input::get('password'), $salt),
					'salt'		=> $salt,
					'name'		=> Input::get('name'),
					'joined'	=> date('Y-m-d H:i:s'),
					'group'		=> 1
				));

				Session::flash('home', 'You have been registered and can now log in!');
				Redirect::to('index.php');

			} catch(Exception $e) {
				die($e->getMessage());
			}
		} else {
			foreach($validation->errors() as $error) {
				echo $error, '<br>';
			}
		}
	}
}
?>
<form id="register" action="" method="post">
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