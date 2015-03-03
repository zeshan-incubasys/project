<?php include('include/header.php');
	if(isset($_GET['tab'])){
		$tab = $_GET['tab'];
	}else{
		$tab = 'multimedia';
	}
	if(isset($_GET['main'])){
		$main = $_GET['main'];
	}else{
		$main = 'eitmaad-holding';
	}


?>

	  <div id="container">
			<div class="holder">
				  <div class="tabs-wrapper">
						<?php if($main=='eitmaad-holding'):?>
							  <ul class="tabset">
									<li <?php if($tab == 'multimedia'){ echo 'class="active"'; }?>><a id="tab1-Href" href="#tab1">Multimedia monitoring</a></li>
									<li <?php if($tab == 'information'){ echo 'class="active"'; } ?>><a id="tab2-Href" href="#tab2">Information security and intelligence</a></li>
									<li <?php if($tab == 'perimeter-security'){ echo 'class="active"'; } ?>><a id="tab3-Href" href="#tab3">External perimeter security</a></li>
							  </ul>
							  <div class="tab-content">
									<div id="tab1"><?php include("include/tab-data.php"); ?></div>
									<div id="tab2"><?php include("include/tab-data1.php"); ?></div>
									<div id="tab3"><?php include("include/tab-data.php"); ?></div>
							  </div>
	  					<?php elseif($main="al-masar-travel"):?>
							  <ul class="tabset">
									<li <?php if($tab == 'multimedia'){ echo 'class="active"'; }?>><a id="tab1-Href" href="#tab1">Multimedia monitoring</a></li>
									<li <?php if($tab == 'information'){ echo 'class="active"'; } ?>><a id="tab2-Href" href="#tab2">Information security and intelligence</a></li>
									<li <?php if($tab == 'perimeter-security'){ echo 'class="active"'; } ?>><a id="tab3-Href" href="#tab3">External perimeter security</a></li>
							  </ul>
							  <div class="tab-content">
									<div id="tab1"><?php include("include/tab-data.php"); ?></div>
									<div id="tab2"><?php include("include/tab-data1.php"); ?></div>
									<div id="tab3"><?php include("include/tab-data.php"); ?></div>
							  </div>
	  					<?php endif;?>
				  </div>
			</div>
			<!--<div id="etmad-slider" class="slide-wrapper">
				  <div class="carousel">
						<div class="mask">
							  <div class="slideset">
									<div class='slide'>
										  <a href="#">
												<div class="image-wrap">
													  <div class="holder">
															<img src="<?php /*echo IMAGE_URL; */?>/img2.jpg" alt="">
													  </div>
												</div>
												<span class="title">Project risk management</span>
										  </a>
									</div>
									<div class='slide'>
										  <a href="#">
												<div class="image-wrap">
													  <div class="holder">
															<img src="<?php /*echo IMAGE_URL; */?>/img3.jpg" alt="">
													  </div>
												</div>
												<span class="title">Fulfillment Management</span>
										  </a>
									</div>
									<div class='slide'>
										  <a href="#">
												<div class="image-wrap">
													  <div class="holder">
															<img src="<?php /*echo IMAGE_URL; */?>/img4.jpg" alt="">
													  </div>
												</div>
												<span class="title">Compliance Monitoring</span>
										  </a>
									</div>
									<div class='slide'>
										  <a href="#">
												<div class="image-wrap">
													  <div class="holder">
															<img src="<?php /*echo IMAGE_URL; */?>/img5.jpg" alt="">
													  </div>
												</div>
												<span class="title">Process efficiency monitoring</span>
										  </a>
									</div>
									<div class='slide'>
										  <a href="#">
												<div class="image-wrap">
													  <div class="holder">
															<img src="<?php /*echo IMAGE_URL; */?>/img6.jpg" alt="">
													  </div>
												</div>
												<span class="title">Ceritifications</span>
										  </a>
									</div>
									<div class='slide'>
										  <a href="#">
												<div class="image-wrap">
													  <div class="holder">
															<img src="<?php /*echo IMAGE_URL; */?>/img3.jpg" alt="">
													  </div>
												</div>
												<span class="title">Continuity Planning</span>
										  </a>
									</div>
									<div class='slide'>
										  <a href="#">
												<div class="image-wrap">
													  <div class="holder">
															<img src="<?php /*echo IMAGE_URL; */?>/img5.jpg" alt="">
													  </div>
												</div>
												<span class="title">Performance Monitoring</span>
										  </a>
									</div>

							  </div>
						</div>
				  </div>
			</div>-->
	  </div>

<?php include('include/footer.php'); ?>