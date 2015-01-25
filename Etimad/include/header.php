<?php include('variables.php');?>
<?php include('head.php');?>
<body>
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
											  <li><a href="#">Project Risk Management</a></li>
											  <li><a href="#">Fulfillment Management</a></li>
											  <li><a href="#">Compliance Monitoring</a></li>
											  <li><a href="#">Process Efficiencies</a></li>
											  <li><a href="#">Ceritifications</a></li>
											  <li><a href="#">Continuity Planning</a></li>
											  <li><a href="#">Project Risk Management</a></li>
										  </ul>
									  </li>
									  <li class="<?=(strpos($_SERVER['PHP_SELF'], 'our-companies.php') != false)?"active":""?>"><a href="<?=BASE_URL?>our-companies.php">Our companies</a></li>
									  <li class="">
										  <a href="#">solutions</a>
										  <ul class="dropdown">
											  <li><a href="#">Project Risk Management</a></li>
											  <li><a href="#">Fulfillment Management</a></li>
											  <li><a href="#">Compliance Monitoring</a></li>
											  <li><a href="#">Process Efficiencies</a></li>
											  <li><a href="#">Ceritifications</a></li>
											  <li><a href="#">Continuity Planning</a></li>
											  <li><a href="#">Project Risk Management</a></li>
										  </ul>
									  </li>
									  <li><a href="#">Partners</a></li>
									  <li><a href="#">Contact</a></li>
									  <li><a href="#">News</a></li>
								  </ul>
							  </div>
						  </div>
					</div>
					
				</div>
			</header>