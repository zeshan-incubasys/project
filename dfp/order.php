<?php include_once("include/header.php"); ?>
<div id="main">
	<section class="checkout-area">
		<h2>Checkout Progress</h2>
		<div class="tabs-area">
			<span class="line"></span>
			<ul class="tab-items">
				<li>Login</li>
				<li>Billing Address</li>
				<li>Payment Method</li>
				<li class="active">Order Review</li>
			</ul>
		</div>
		<table class="file-details top">
			<thead>
				<tr>
					<th>Product</th>
					<th>Included</th>
					<th>Total</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td title="Product"><span>13-289</span></td>
					<td title="Included"><span>1543</span></td>
					<td title="Total"><span>$ 50</span></td>
				</tr>
				<tr>
					<td title="Product"><span>13-289</span></td>
					<td title="Included"><span>1543</span></td>
					<td title="Total"><span>$ 50</span></td>
				</tr>
				<tr>
					<td title="Product"><span>13-289</span></td>
					<td title="Included"><span>1543</span></td>
					<td title="Total"><span>$ 50</span></td>
				</tr>
				<tr>
					<td title="Product"><span>13-289</span></td>
					<td title="Included"><span>1543</span></td>
					<td title="Total"><span>$ 50</span></td>
				</tr>
			</tbody>
		</table>
		<div class="activity-area odd">
			<div class="row">
				<span class="cart-title">CART SUBTOTAL:</span>
				<span class="cart-val">$315</span>
			</div>
			<div class="row">
				<span class="cart-title">Discount:</span>
				<span class="cart-val">10%</span>
			</div>
			<div class="row total">
				<span class="cart-title">ORDER TOTAL:</span>
				<span class="cart-val">$283.5</span>
			</div>
			<input type="submit" value="place order">
		</div>
	</section>
	  <?php include("include/products.php")?>
</div>
<?php include_once("include/footer.php"); ?>