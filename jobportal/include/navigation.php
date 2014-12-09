<nav class="navbar navbar-default" role="navigation">
	  <div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
				  </button>
				  <a class="logo" href="index.php">Logo</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav navbar-right">
						<li class="active"><a href="<?php if (strpos($_SERVER['PHP_SELF'], 'index.php') != false) {
									echo '#header';
							  } else {
									echo 'index.php#header';
							  } ?>">home</a></li>
						<li><a href="<?php if (strpos($_SERVER['PHP_SELF'], 'index.php') != false) {
									echo '#about';
							  } else {
									echo 'index.php#about';
							  } ?>">about</a></li>
						<li><a href="why-marina.php">Why Marina</a></li>
						<li><a href="<?php if (strpos($_SERVER['PHP_SELF'], 'index.php') != false) {
									echo '#services';
							  } else {
									echo 'index.php#services';
							  } ?>">service</a></li>

						<!--<li><a href="#">register</a></li>-->
						<li class="dropdown">
							  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Register</a>
							  <ul class="dropdown-menu" role="menu">
									<li><a href="#">Action</a></li>
									<li class="divider"></li>
									<li><a href="#">Another action</a></li>
									<li class="divider"></li>
									<li><a href="#">Something else here</a></li>
									<li class="divider"></li>
									<li><a href="#">Action</a></li>
									<li class="divider"></li>
							  </ul>
						</li>
						<li><a href="<?php if (strpos($_SERVER['PHP_SELF'], 'index.php') != false) {
									echo '#contact';
							  } else {
									echo 'index.php#contact';
							  } ?>">contact</a></li>
				  </ul>
			</div>
			<!-- /.navbar-collapse -->
	  </div>
	  <!-- /.container-fluid -->
</nav>
