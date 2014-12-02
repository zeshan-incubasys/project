<?php
session_start();
if(isset($_SESSION['user'])){
	header("location: index.php");
	exit();
}
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Artica Cpanel</title>
	<link href="css/all.css" type="text/css" rel="stylesheet" media="all">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.main.js"></script>
</head>
<body>
	<div id="wrapper" class="login">
		<strong class="logo"><a href="#">Skylight Leasing</a></strong>
		<form class="form-login">
			<fieldset>
				<div class="head">
					<h1>Admin Area</h1>
					<strong class="title">Please LOGIN to MANAGE website</strong>
				</div>
				<div class="message-area"></div>
				<div class="form-area">
					<input type="text" placeholder="Username" class="user">
					<input type="password" placeholder="Password" class="pass">
					<input type="submit" value="Login" class="btn-login">
				</div>
			</fieldset>
		</form>
	</div>
</body>
</html>