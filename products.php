<?php
require_once 'core/init.php';
$user = new User();
if($user->isLoggedIn()) {
echo "products";
} else {
	Session::flash('home', 'You must be loged in to see that content');
				Redirect::to('index.php');
}
?>