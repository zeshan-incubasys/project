<?php include_once("include/header.php"); ?>
<div id="main">
	<section class="checkout-area">
		  <?php include("include/progress-bar.php");?>
		<div class="activity-area odd">
			<form class="billing-form" method="post" action="#">
				<fieldset>
					<div class="row">
						<span class="req">*</span>
						<select>
							<option>Country</option>
						</select>
					</div>
					<div class="row">
						<div class="col">
							<input type="text" placeholder="First Name">
							<span class="req">*</span>
						</div>
						<div class="col">
							<input type="text" placeholder="Last Name">
							<span class="req">*</span>
						</div>
					</div>
					<div class="row">
						<input type="text" placeholder="Company">
					</div>
					<div class="row">
						<div class="col">
							<input type="text" placeholder="Street address">
							<span class="req">*</span>
						</div>
						<div class="col">
							<input type="text" placeholder="Appartment, suit, unit etc">
							<span class="req">*</span>
						</div>
					</div>
					<div class="row">
						<input type="text" placeholder="Town / City">
						<span class="req">*</span>
					</div>
					<div class="row">
						<div class="col">
							<input type="text" placeholder="State / County">
						</div>
						<div class="col">
							<input type="text" placeholder="Postcode / Zip">
							<span class="req">*</span>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<input type="email" class="email" placeholder="Email address">
							<span class="req">*</span>
						</div>
						<div class="col">
							<input type="text" placeholder="Phone">
							<span class="req">*</span>
						</div>
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