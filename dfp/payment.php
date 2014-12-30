<?php include_once("include/header.php"); ?>
<div id="main">
	<section class="checkout-area">
		<h2>Checkout Progress</h2>
		<div class="tabs-area">
			<span class="line"></span>
			<ul class="tab-items">
				<li>Login</li>
				<li>Billing Address</li>
				<li class="active">Payment Method</li>
				<li>Order Review</li>
			</ul>
		</div>
		<div class="activity-area odd">
			<form class="account-form" method="post" action="#">
				<fieldset>
					<div class="row">
						<input type="radio" name="member" id="member1">
						<label for="member1">Credit Card / Debit Card <span>(Alert pay)</span></label>
					</div>
					<div class="row">
						<input type="radio" name="member" id="member2">
						<label for="member2">Credit Card / Debit Card <span>(Authorize.net)</span></label>
					</div>
					<div class="row">
						<input type="radio" name="member" id="member3">
						<label for="member3">Paypal</label>
					</div>
					<input type="submit" value="Continue" name="file-submit">
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