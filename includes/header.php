<?php
require_once 'core/init.php';
if(Session::exists('home')) {
	echo '<p>' . Session::flash('home') . '</p>';
}
$user = new User();
?>
<!DOCTYPE html>
<html>
<head>
	<!--
	<title>Log/Reg modul</title>
	<script src="js/jquery-migrate-1.2.1.min.js"></script>
	<script src="js/jquery-1.11.2.min.js"></script>
	<script src="js/validation.js"></script>
		-->
</head>
<body>
	<ul>
		<li><a id="home" href="index.php">Home</a></li>
		<li><a id="intrst" href="interesting.php">Interesting thing</a></li>
		<li><a id="prod" href="products.php">Products</a></li>
		<li><a id="about" href="about.php">About us</a></li>
	</ul>