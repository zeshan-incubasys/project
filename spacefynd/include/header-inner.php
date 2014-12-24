<?php include('variables.php');?>
<?php include('head.php');?>
<body class="inner">
	<header>
		<div class="top-bar">
			<div class="logo-area">
				<strong class="logo"><a href="<?=BASE_URL?>">spacefynd</a></strong>
				<form class="loc-form" action="#">
					<fieldset>
						<input type="text" placeholder="Search for your venue">
					</fieldset>
				</form>
				<ul class="small-menu">
					<li>
						<a href="#">Browse</a>
						<div class="drop">
							<ul>
								<li><a href="#">Popular</a></li>
								<li><a href="#">Recent</a></li>
								<li><a href="#">Neighborhood</a></li>
							</ul>
						</div>
					</li>
				</ul>
			</div>
			<div class="right-area">
				<span class="pic"></span>
				<a href="#" class="profile">Abubakar</a>
				<a href="#" class="email">Email</a>
				<a href="#" class="help">Help</a>
				<a href="#" class="btn btn-sky">List Your Space</a>
			</div>
		</div>
		<div class="nav">
			<ul class="container">
				<li <?=(strpos($_SERVER['PHP_SELF'], 'about.php') != false)?'class="active"':'';?> > <a href="<?=BASE_URL?>about.php">About</a></li>
				<li <?=(strpos($_SERVER['PHP_SELF'], 'help.php') != false)?'class="active"':'';?> ><a href="<?=BASE_URL?>help.php">FAQ</a></li>
				<li><a href="<?=BASE_URL?>index.php#how-it-works">How It Works</a></li>
				<li <?=(strpos($_SERVER['PHP_SELF'], 'contact.php') != false)?'class="active"':'';?> ><a href="<?=BASE_URL?>contact.php">Contact</a></li>
			</ul>
		</div>
	</header>