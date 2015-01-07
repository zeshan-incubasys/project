<?php include('variables.php');?>
<?php include('head.php');?>
<body>
<header>
	  <?php  include('include/slider.php');?>
	  <div class="top-header">
			<?php include('navigation.php');?>
	  </div>
	  <div class="header-form " id="">
			<div class="container">
				  <form action="" method="post">
						<input type="text" name="" value="" placeholder="What type of event?">
						<select>
							  <option>How many people?</option>
							  <option></option>
							  <option></option>
						</select>
						<select>
							  <option>Which city?</option>
							  <option></option>
							  <option></option>
						</select>

						<input type="submit" class="btn btn-sky" value="Search Now"/>
				  </form>
			</div>

	  </div>
	  <div class="header-form" id="update-me">
			<div class="container">
				  <h2>Venue Search is Coming Soon!
						<small>We're working hard to bring you the best spaces for hire in Dubai so hang tight!</small></h2>
				  <form  method="post" id="email-us">
						<input type="text" name="email" id="email" value="" placeholder="Email">
						<input type="submit" class="btn btn-sky" value="Keep me Posted!"/>
				  </form>
			</div>

	  </div>
</header>