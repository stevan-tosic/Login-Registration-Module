<?php
require_once 'core/init.php';

if(Session::exists('home')) {
	echo '<p>' . Session::flash('home') . '</p>';
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Log/Reg modul</title>
	<script src="js/jquery-migrate-1.2.1.min.js"></script>
	<script src="js/jquery-1.11.2.min.js"></script>
	<script src="js/validation.js"></script>
</head>
<body>
	<ul>
		<li><a id="home" href="index.php">Home</a></li>
		<li><a id="intrst" href="#">Interesting thing</a></li>
		<li><a id="prod" href="#">Products</a></li>
		<li><a id="about" href="#">About us</a></li>
	</ul>
<?php
$user = new User();
if($user->isLoggedIn()) {
?>

	<p>Hello <a href="#"><?php echo escape($user->data()->username); ?></a>!</p>

	<ul>
		<li><a href="logout.php">Log out</a></li>
	</ul>
<?php
} else {
	echo 'Hello Guest!';
	echo '<p>If you want you can <a id="login" href="#">log in</a> or <a id="register" href="#">register</a></p>';
}
?>
<div id="smallWndw">
</div>
</body>
</html>

