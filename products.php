<?php
include 'includes/header.php';
if($user->isLoggedIn()) {
?>
	<p>Hello <a href="#"><?php echo escape($user->data()->name); ?></a>!</p>
	<ul>
		<li><a href="logout.php">Log out</a></li>
	</ul>

	<h1>Products</h1>
<?php
} else {
	Session::flash('home', 'You must be loged in to see that content');
				Redirect::to('index.php');
}
?>