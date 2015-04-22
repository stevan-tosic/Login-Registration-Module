<?php
include 'includes/header.php';
if($user->isLoggedIn()) {
?>
	<p>Hello <a href="#"><?php echo escape($user->data()->name); ?></a>!</p>
	<ul>
		<li><a href="logout.php">Log out</a></li>
	</ul>
<?php
} else {
	echo 'Hello Guest!';
	echo '<p>If you want you can <a id="login" href="#">log in</a> or <a id="register" href="#register.php">register</a></p>';
		echo '<h1>Home</h1>';
}
?>
<div id="smallWndw">
<?php
include 'includes/footer.php';
?>

