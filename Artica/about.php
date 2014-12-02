<?php
include_once('admin/php/connection.php');
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<title>Artica</title>
	<link href="css/all.css" type="text/css" rel="stylesheet" media="all">
	<link href="css/jquery.mCustomScrollbar.css" type="text/css" rel="stylesheet" media="all">
</head>
<body>
	<div class="overlay">
		<span class="loading">Loading ...</span>
	</div>
	<div id="wrapper">
		<img src="images/bg.jpg" alt="" class="bg">
		<header id="header">
			<strong class="logo inner"><a href="index.php">Artica</a></strong>
			<ul class="social-networks">
				<li><a href="https://www.facebook.com/pages/Artica-Interiors/738323836215593?fref=ts" target="_blank"><span>facebook</span></a></li>
				<li class="twitter"><a href="https://www.twitter.com" target="_blank"><span>twitter</span></a></li>
				<li class="linkedin"><a href="https://www.linkedin.com/company/artica-interiors" target="_blank"><span>linkedin</span></a></li>
			</ul>
		</header>
		<div id="main">
			<div class="holder">
				<div class="textarea">
					<?php 
					$query = mysql_query("SELECT * FROM about_us");
					$count = mysql_num_rows($query);
					if($count > 0){
						while($rows = mysql_fetch_array($query)){ ?>
							<?= $rows['content']?>
					<?php }
					}?>
				</div>
				<h2>about</h2>
			</div>
		</div>
		<nav id="nav">
			<ul>
				<li class="icon"><a href="index.php">home</a></li>
				<li class="active"><a href="about.php">about</a></li>
				<li><a href="services.php">services</a></li>
				<li><a href="listing.php">project list</a></li>
				<li><a href="projects-cat.php">projects</a></li>
				<li><a href="contact.php">contact</a></li>
			</ul>
		</nav>
	</div>
	<footer id="footer">
		<span class="copy">All rights Reserved Copyright &copy; Artica <?=date('Y')?></span>
		<span class="by">Developed &amp; Designed by <a href="http://www.incubasys.com" target="_blank">Incubasys</a></span>
	</footer>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.main.js"></script>
	<script type="text/javascript" src="js/jquery.mCustomScrollbar.concat.min.js"></script>
</body>
</html>
