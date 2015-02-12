<?php include('variables.php');?>
<?php include('head.php');
    if(isset($_GET['tab'])){
        $tab = $_GET['tab'];
    }else{
        $tab = '';
    }

    if(isset($_GET['sol'])){
        $sol = $_GET['sol'];
    }else{
        $sol = '';
    }
?>
<body>
<div id="site-wrapper">
	<div id="w1">
		<div id="w2">
			<header id="header">
				<div class="holder">
					  <div class="text-holder">
						  <strong class="logo"><a href="<?=BASE_URL?>">etimad</a></strong>
						  <div class="open-close">
							  <a class="opener" href="#"></a>
							  <div id="navigation">
								  <ul>
									  <li class="<?=(strpos($_SERVER['PHP_SELF'], 'index.php') != false)?"active":""?>"><a href="<?=BASE_URL?>">home</a></li>
									  <li class="<?=(strpos($_SERVER['PHP_SELF'], 'etimad-governance.php') != false)?"active":""?>">
										  <a href="etimad-governance.php">Etimad Governance</a>
										  <ul class="dropdown">
	                                          <li <?php if($tab == 'fulfill'){ echo 'class="active"'; } ?>><a href="etimad-governance.php?tab=fulfill">Fulfillment Management</a></li>
											  <li <?php if($tab == 'manage'){ echo 'class="active"'; } ?>><a href="etimad-governance.php?tab=manage">Project Risk Management</a></li>
											  <li <?php if($tab == 'monitor'){ echo 'class="active"'; } ?>><a href="etimad-governance.php?tab=monitor">Compliance Monitoring</a></li>
											  <li <?php if($tab == 'process'){ echo 'class="active"'; } ?>><a href="etimad-governance.php?tab=process">Process Efficiencies</a></li>
                                              <li <?php if($tab == 'performance'){ echo 'class="active"'; } ?>><a href="etimad-governance.php?tab=performance">Performance Monitoring</a></li>
											  <li <?php if($tab == 'certificate'){ echo 'class="active"'; } ?>><a href="etimad-governance.php?tab=certificate">Ceritifications</a></li>
											  <li <?php if($tab == 'planning'){ echo 'class="active"'; } ?>><a href="etimad-governance.php?tab=planning">Continuity Planning</a></li>
										  </ul>
									  </li>
									  <li class="<?=(strpos($_SERVER['PHP_SELF'], 'our-companies.php') != false)?"active":""?>">
                                      	<a href="<?=BASE_URL?>our-companies.php">Our companies</a>
                                         <ul class="dropdown">
											  <li <?php if($sol == 'recruit'){ echo 'class="active"'; } ?>><a href="solutions.php?sol=recruit">Al Masar Recruitment Services </a></li>
											  <li <?php if($sol == 'electric'){ echo 'class="active"'; } ?>><a href="solutions.php?sol=electric">Al Fahad Electrical Systems</a></li>
											  <li <?php if($sol == 'network'){ echo 'class="active"'; } ?>><a href="solutions.php?sol=network">Al Fahad Communication & Networking Systems</a></li>
											  <li <?php if($sol == 'eng'){ echo 'class="active"'; } ?>><a href="solutions.php?sol=eng">House Engineering Contracting</a></li>
											  <li <?php if($sol == 'security'){ echo 'class="active"'; } ?>><a href="solutions.php?sol=security">Al Fahad Security Systems</a></li>
										  </ul>
                                      </li>
									  <li class="">
										  <a href="solutions.php">solutions</a>
										  <ul class="dropdown">
											  <li <?php if($sol == 'recruit'){ echo 'class="active"'; } ?>><a href="solutions.php?sol=recruit">Recruitment Services</a></li>
											  <li <?php if($sol == 'electric'){ echo 'class="active"'; } ?>><a href="solutions.php?sol=electric">Electrical Systems</a></li>
											  <li <?php if($sol == 'network'){ echo 'class="active"'; } ?>><a href="solutions.php?sol=network">Communication &amp; Networking Systems</a></li>
											  <li <?php if($sol == 'eng'){ echo 'class="active"'; } ?>><a href="solutions.php?sol=eng">House of Engineering</a></li>
											  <li <?php if($sol == 'security'){ echo 'class="active"'; } ?>><a href="solutions.php?sol=security">Security Systems</a></li>
										  </ul>
									  </li>
									  <li><a href="#">Partners</a></li>
									  <li><a href="contact-us.php">Contact</a></li>
									  <li><a href="news.php">News</a></li>
								  </ul>
							  </div>
						  </div>
					</div>
					
				</div>
			</header>