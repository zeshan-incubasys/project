<?php include('include/header.php');
    if(isset($_GET['sol'])){
        $sol = $_GET['sol'];
    }else{
        $sol = '';
    }
?>
	  <div id="container">
			<div class="holder">
				  <div class="tabs-wrapper">
						<ul class="tabset" id="tabset">
							  <li <?php if($sol == 'recruit'){ echo 'class="active"'; } elseif(!isset($_GET['sol'])){ echo 'class="active"'; }?>><a id="tab1-Href" href="#tab1">Recruitment Services</a></li>
							  <li <?php if($sol == 'electric'){ echo 'class="active"'; } ?>><a id="tab2-Href" href="#tab2">Electrical Systems</a></li>
							  <li <?php if($sol == 'network'){ echo 'class="active"'; } ?>><a id="tab3-Href" href="#tab3">Communication &amp; Networking</a></li>
							  <li <?php if($sol == 'eng'){ echo 'class="active"'; } ?>><a id="tab4-Href" href="#tab4">House of Engineering</a></li>
							  <li <?php if($sol == 'security'){ echo 'class="active"'; } ?>><a id="tab5-Href" href="#tab5">Security Systems</a></li>

						</ul>
						<div class="tab-content">
							  <div id="tab1">
							  		<div class="image-slide-wrap">
                          				<img src="<?php echo IMAGE_URL; ?>/a24.jpg" alt="">
                                    </div>
                                    <div class="text">
                                          <h2>Certified skill-solutions, Contracting services</h2>
                                          <p>Human resourcing</p>
                                            <p>Outsourced-Skill management</p>
                                            <p>Operational contracting</p>
                                    </div>
                              </div>
                              <div id="tab2">
							  		<div class="image-slide-wrap">
                                    	<img src="<?php echo IMAGE_URL; ?>/a25.jpg" alt="">             
                                    </div>
                                    <div class="text">
                                          <h2>Security Power solutions and services</h2>
                                          <p>Design of tactical power solutions</p>
                                          <p>Health and safety solutions</p>
                                          <p>Monitoring and Alarm solutions</p>
                                          <div class="tech-service-wrap">
                                         	 <div class="list-area">
                                                <span class="heading">Solution technologies</span>
                                                <ul>
                                                      <li>Universal power supplies</li>
                                                      <li>Energy Distribution</li>
                                                      <li>solar energy</li>
                                                      <li>power conversion</li>
                                                      <li>energy banks and alert systems</li>
                                                </ul>
                                          </div>
                                         	 <div class="list-area">
                                                <span class="heading">services</span>
                                                <ul>
                                                      <li>Design and analysis</li>
                                                      <li>installation</li>
                                                      <li>testing and commissioning</li>
                                                      <li>project management</li>
                                                      <li>maintenance and support</li>
                                                </ul>
                                          </div>
                                         </div>
                                         
                                    </div>
                              </div>
                              
                              <div id="tab3">
							  		<div class="image-slide-wrap">
                          				<img src="<?php echo IMAGE_URL; ?>/a26.jpg" alt="">
                                    </div>
                                    <div class="text">
                                          <h2>Communications and Networking solutions and services</h2>
                                          <p>IP, voice and satellite networking and communications infrastructure security</p>
                                          <div class="tech-service-wrap">
	                                          <div class="list-area">
                                                <span class="heading">Solution technologies</span>
                                                <ul>
                                                      <li>Fiber optic cablings</li>
                                                      <li>Switches</li>
                                                      <li>Hardware</li>
                                                      <li>Software</li>
                                                      <li>Servers </li>
                                                      <li>Storage </li>
                                                      <li>Micorwave solutions </li>
                                                      <li>LAN, WAN and MAN </li>
                                                      <li>protective solutions</li>
                                                </ul>
                                          </div>
    	                                      <div class="list-area">
                                                <span class="heading">services</span>
                                                <ul>
                                                      <li>Analysis and design</li>
                                                      <li>System integrations</li>
                                                      <li>Systems integration</li>
                                                      <li>Installation</li>
                                                      <li>Commissioning</li>
                                                      <li>Project management, </li>
                                                      <li>Maintenance and support</li>
                                                </ul>
                                          </div>
                                          </div>
                                    </div>
                              </div>
                              <div id="tab4">
							  		<div class="image-slide-wrap">
                          				<img src="<?php echo IMAGE_URL; ?>/a27.jpg" alt="">
                                    </div>
                                    <div class="text">
                                          <h2>Civil works and Engineering for Critical Security Infrastructure</h2>
                                          <p>Engineering services of critical security infrastructures</p>
                                            <p>Construction services of critical security infrastructures</p>
                                    </div>
                              </div>
                              <div id="tab5">
							  		<div class="image-slide-wrap">
                                      	<img src="<?php echo IMAGE_URL; ?>/a28.jpg" alt="">           
                                    </div>
                                    <div class="text">
                                          <h2>Security solutions and services</h2>
                                          <p>Systems Integration of Asset Monitoring Solutions, Specialization of CCTV and Access Control solutions;  Project fulfillment and execution</p>
                                          <div class="tech-service-wrap">
	                                          <div class="list-area">
                                                <span class="heading">Solution technologies</span>
                                                <ul>
                                                      <li>Security and detection sensors  technologies</li>
                                                      <li>Monitoring, signaling manipulation</li>
                                                      <li>Covert equipment</li>
                                                      <li>In-land and off-shore radar systems</li>
                                                      <li>Cyber security and intelligence</li>
                                                      <li>Protective solutions</li>
                                                </ul>
                                          </div>
	                                          <div class="list-area">
                                                <span class="heading">services</span>
                                                <ul>
                                                      <li>Consulting</li>
                                                      <li>Design</li>
                                                      <li>Systems integration</li>
                                                      <li>Installation</li>
                                                      <li>Commissioning</li>
                                                      <li>Project management</li>
                                                      <li>Maintenance and support</li>
                                                </ul>
                                          </div>
                                          </div>
                                    </div>
                              </div>
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