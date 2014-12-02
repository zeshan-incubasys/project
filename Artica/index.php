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
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.main.js"></script>
	<script type="text/javascript" src="js/jquery.mCustomScrollbar.concat.min.js"></script>
</head>
<body>
	<div class="overlay">
		<span class="loading">Loading ...</span>
	</div>
	<div id="wrapper">
		<img src="images/bg.jpg" alt="" class="bg">
		<header id="header" class="header-home">
			<div id="main" class="inner2">
				<div class="container">
				<div class="outer r4x3">
					<div class="inner">
						<div class="little-box img1">
							<div class="slideset">
								<?php 
								$query = mysql_query("SELECT * FROM home_slider1");
								$count = mysql_num_rows($query);
								if($count > 0){
									while($rows = mysql_fetch_array($query)){
										$image_url = $rows['image_url'];
								?>
										<div class="slide" style="background:url(<?php echo $image_url; ?>) no-repeat">
										</div>
								<?php }
			
								}?>
							</div>
						</div>
						<div class="little-box"><strong class="logo"><a href="index.php">Artica Interiors</a></strong></div>
						<div class="little-box img2">
							<div class="slideset">
								<?php 
								$query = mysql_query("SELECT * FROM home_slider2");
								$count = mysql_num_rows($query);
								if($count > 0){
									while($rows = mysql_fetch_array($query)){
										$image_url = $rows['image_url'];
								?>
										<div class="slide" style="background:url(<?php echo $image_url; ?>) no-repeat">
											
										</div>
								<?php }
			
								}?>
							</div>
						</div>

					</div>
				</div>
			</div>
				<nav id="nav">
					<ul>
						<li><a href="about.php">about</a></li>
						<li><a href="services.php">services</a></li>
						<li><a href="listing.php">project list</a></li>
						<li><a href="projects-cat.php">projects</a></li>
						<li><a href="contact.php">contact</a></li>
					</ul>
				</nav>
			</div>
		</header>
	</div>
	<footer id="footer">
		<span class="copy">All rights Reserved Copyright &copy; Artica <?=date('Y')?></span>
		<span class="by">Developed &amp; Designed by <a href="http://www.incubasys.com" target="_blank">Incubasys</a></span>
	</footer>
</body>
</html>
