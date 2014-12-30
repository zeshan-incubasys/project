 <?php include_once("include/header.php"); ?>
<div id="main">
	<section class="checkout-area">
		<?php include("include/progress-bar.php");?>

		<section class="activity-area">
			<strong class="title">New <span>Customers</span></strong>
			<form class="account-form" method="post" action="#">
				<fieldset>
					<div class="row">
						<input type="radio" name="member" id="member1">
						<label for="member1"><span>Checkout as Guest</span></label>
					</div>
					<div class="row">
						<input type="radio" name="member" id="member2">
						<label for="member2"><span>Create an Account with Us</span></label>
					</div>
					<input type="submit" value="Continue" name="file-submit" class="no-border">
				</fieldset>
			</form>
		</section>
		<div class="activity-area odd">
			<strong class="title">Returning <span>Customers</span></strong>
			<form class="login-form">
				<fieldset>
					<input type="text" placeholder="Username or email">
					<input type="password" placeholder="Password">
					<a href="#" class="forgot">Forgot your password?</a>
					<input type="submit" value="Login" name="login-submit">
				</fieldset>
			</form>
		</div>
		<!--<div class="btn-area">
			<a href="#" class="next">Proceed to Next Step</a>
			<a href="#" class="back">Back</a>
		</div>-->
	</section>
		<?php include("include/products.php")?>
</div>
<?php include_once("include/footer.php"); ?>