<?php include('include/header.php'); 
	if(isset($_GET['tab'])){
		$tab = $_GET['tab'];
	}else{
		$tab = '';
	}
?>

	  <div id="container">
			<div class="holder">
				  <div class="tabs-wrapper">
						<ul class="tabset">
							  <li <?php if($tab == 'fulfill'){ echo 'class="active"'; } ?>><a id="tab2-Href" href="#tab2">Fulfillment Management</a></li>
							  <li <?php if($tab == 'manage'){ echo 'class="active"'; } elseif(!isset($_GET['tab'])){ echo 'class="active"'; }?>><a id="tab1-Href" href="#tab1">Project risk management</a></li>
                              <li <?php if($tab == 'monitor'){ echo 'class="active"'; } ?>><a id="tab3-Href" href="#tab3">Compliance Monitoring</a></li>
							  <li <?php if($tab == 'process'){ echo 'class="active"'; } ?>><a id="tab4-Href" href="#tab4">Process efficiency monitoring</a></li>
                               <li <?php if($tab == 'performance'){ echo 'class="active"'; } ?>><a id="tab7-Href" href="#tab7">Performance Monitoring</a></li>
							  <li <?php if($tab == 'certificate'){ echo 'class="active"'; } ?>><a id="tab5-Href" href="#tab5">Certification</a></li>
							  <li <?php if($tab == 'planning'){ echo 'class="active"'; } ?>><a id="tab6-Href" href="#tab6">Continuity planning</a></li>
							 

						</ul>
						<div class="tab-content">
							  <div id="tab1"><?php include("include/governance-tabs/tab-data1.php"); ?></div>
							  <div id="tab2"><?php include("include/governance-tabs/tab-data2.php"); ?></div>
							  <div id="tab3"><?php include("include/governance-tabs/tab-data3.php"); ?></div>
							  <div id="tab4"><?php include("include/governance-tabs/tab-data4.php"); ?></div>
							  <div id="tab5"><?php include("include/governance-tabs/tab-data5.php"); ?></div>
							  <div id="tab6"><?php include("include/governance-tabs/tab-data6.php"); ?></div>
							  <div id="tab7"><?php include("include/governance-tabs/tab-data7.php"); ?></div>
						</div>
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