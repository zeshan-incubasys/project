<?php
include_once('admin/php/connection.php');
if(isset($_GET['cat'])){
	$cat = $_GET['cat'];
}
else{
	echo 'No Category Selected';
	die();
}
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

	<script type="text/javascript">
$(document).bind("mobileinit", function () {
    $.mobile.ajaxEnabled = false;
});
</script>
	<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
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
				<div class="log"></div>
				<div class="part">
					<?php 
					$query = mysql_query("SELECT * FROM projects WHERE cat = '$cat'");
					$count = mysql_num_rows($query);
					$id_array = array();
					if($count > 0){ ?>
						<ul class="gallery">
					<?php while($rows = mysql_fetch_array($query)){ $id = $rows['id'];  array_push($id_array,array('id' => $id, 'description' => $rows['description']));?>
						<li>
							<a class="lightbox" href="#popup<?php echo $id; ?>">
								<span class="mask"><img src="<?= $rows['image_url'];?>" alt="">
								<span class="hover">
									<span>View More</span>
								</span></span>
							</a>
							<span class="title"><?= $rows['title'];?></span>
						</li>
					<?php 
							} ?>
						</ul>
					<?php }
					?>
					</div>
			</div>
		</div>
		<nav id="nav">
			<!--<a href="projects-cat.php" class="back">back</a>-->
			<ul>
				<li class="icon"><a href="index.php">home</a></li>
				<li><a href="about.php">about</a></li>
				<li><a href="services.php">services</a></li>
				<li><a href="listing.php">project list</a></li>
				<li class="active"><a href="projects-cat.php">projects</a></li>
				<li><a href="contact.php">contact</a></li>
			</ul>
		</nav>
	</div>
	<!--<script src="js/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
	<script src="js/jquery.mousewheel.min.js" type="text/javascript"></script>
	<script src="js/jquery.kinetic.min.js" type="text/javascript"></script>
	<script src="js/jquery.smoothdivscroll-1.3-min.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$("#main .part .gallery").smoothDivScroll({
				mousewheelScrolling: "allDirections",
				manualContinuousScrolling: true,
				autoScrollingMode: "onStart"
			});
		});
	</script>-->
</body>
</html>
<footer id="footer">
		<span class="copy">All rights Reserved Copyright &copy; Artica <?=date('Y')?></span>
		<span class="by">Developed &amp; Designed by <a href="http://www.incubasys.com" target="_blank">Incubasys</a></span>
	</footer>
<?php  
	for($i=0; $i < count($id_array) ; $i++){
		$id = $id_array[$i]['id'];
		$description = $id_array[$i]['description'];
		$query = mysql_query("SELECT * FROM project_subimages where project_id = $id");
		$count = mysql_num_rows($query); 
		$thumb_images = array();
		if($count > 0){
	?>
	<div class="popup-holder">
		<div id="popup<?php echo $id;?>" class="box">
			<div class="content">
				<div class="slideshow">
					<div class="mask">
						<div class="slideset">
							<?php while($rows = mysql_fetch_array($query)){ array_push($thumb_images,$rows['image_url']); ?>
							<div class="slide">
								<span class="helper"></span><img src="<?= $rows['image_url'];?>" alt="">
							</div>
							<?php } ?>
						</div>
					</div>
					<div class="pag-holder">
						<ul class="pagination">
							<?php foreach($thumb_images as $key => $value){ ?>
							<li><a href="#"><img src="<?php echo $value; ?>" alt=""></a></li>
							<?php } ?>
						</ul>
					</div>
				</div>
				<div class="text-area">
					<?php echo $description; ?>
				</div>
			</div>
			<div class="links">
			<?php 
				$query = mysql_query("SELECT * FROM projects WHERE id > $id AND cat = '$cat' LIMIT 1");
				$count = mysql_num_rows($query);
				if($count > 0){
					while($rows = mysql_fetch_array($query)){
						$next_id = $rows['id'];
			?>
				<a class="lightbox" href="#popup<?php echo $next_id; ?>">next</a>
			<?php 	} 
				} ?>
				<a class="close" href="#">projects</a>
			<?php
				$query = mysql_query("SELECT * FROM projects WHERE id < $id AND cat = '$cat' ORDER BY id DESC LIMIT 1");
				$count = mysql_num_rows($query);
				if($count > 0){
					while($rows = mysql_fetch_array($query)){
						$back_id = $rows['id'];
			?>
				<a class="lightbox" href="#popup<?php echo $back_id; ?>">previous</a>
			<?php 	} 
				}
			?>
			</div>
			<strong class="logo inner"><a href="index.php">Artica</a></strong>
		</div>
	</div>
	<?php }
	}
	?>
