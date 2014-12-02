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
	<style type="text/css">
		.mCSB_scrollTools{ right:12px; }
	</style>
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
		<div id="main" class="inner">
			<div class="holder">
				<ul class="gallery cat">
					<?php
					$query = mysql_query("SELECT * FROM cat_images WHERE cat != 'retail'");
					$count = mysql_num_rows($query);
					$flag=0;
					if($count > 0){
						while($rows = mysql_fetch_array($query)){ 
							$id = $rows['id'];
							$image_url = $rows['image_url'];
							$cat = $rows['cat'];
						?>
					<li>
						<a href="projects.php?cat=<?php echo $cat ?>">
							<img src="<?php echo $image_url ?>" alt="">
							<span class="title"><?php echo $cat ?></span>
						</a>
					</li>
					<?php
					if($flag == 1){
						echo '<li class="logo-hold"><a><img src="images/logo.png" alt=""><span class="title"></span></a></li>';
					}
					$flag++;
						}
					}
				?>
				</ul>
			</div>
		</div>
		<nav id="nav">
			<ul>
				<li class="icon"><a href="index.php">home</a></li>
				<li><a href="about.php">about</a></li>
				<li><a href="services.php">services</a></li>
				<li><a href="listing.php">project list</a></li>
				<li class="active"><a href="projects-cat.php">projects</a></li>
				<li><a href="contact.php">contact</a></li>
			</ul>
		</nav>
		<!--<header id="header" class="inner again">
			<div class="content-area">
				<strong class="logo"><a href="index.php">Artica Interiors</a></strong>
				<div class="detail-area inner">
					<h1 class="projects">Pr<span>o</span>jects</h1>
					<div class="part">
						<ul class="gallery cat">
							<?php
							$query = mysql_query("SELECT * FROM cat_images");
							$count = mysql_num_rows($query);
							if($count > 0){
								while($rows = mysql_fetch_array($query)){ 
									$id = $rows['id'];
									$image_url = $rows['image_url'];
									$cat = $rows['cat'];
								?>
							<li>
								<a href="projects.php?cat=<?php echo $cat ?>">
									<img src="<?php echo $image_url ?>" alt="">
									<span class="title"><?php echo $cat ?></span>
								</a>
							</li>
							<?php
								}
							}
						?>
						</ul>
					</div>
				</div>
			</div>
			<nav id="nav">
				<ul>
					<li class="icon"><a href="index.php">&lsaquo;</a></li>
					<li><a href="about.php">about</a></li>
					<li><a href="services.php">services</a></li>
					<li><a href="listing.php">project list</a></li>
					<li class="active"><a href="projects-cat.php">projects</a></li>
					<li><a href="contact.php">contact</a></li>
				</ul>
			</nav>
		</header>-->
	</div>
	<footer id="footer">
		<span class="copy">All rights Reserved Copyright &copy; Artica <?=date('Y')?></span>
		<span class="by">Developed &amp; Designed by <a href="http://www.incubasys.com" target="_blank">Incubasys</a></span>
	</footer>
</body>
</html>
