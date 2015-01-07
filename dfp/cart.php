<?php  include('include/header.php');?>
<div id="main">
	<h2 class="cart-heading">Shopping Cart <span>3 items</span></h2>
	<div class="cart-section">
		<div class="cart-items-area">
			<ul class="cart-list">
				<li>
					<a href="#" class="btn-del">del</a>
					<div class="holder">
						<div class="details">
							<div class="thumb-area">
								<img src="<?php echo IMAGE_URL; ?>img-prod.jpg" alt="">
								<span class="thumb-detail">Color: Brown</span>
								<span class="thumb-detail">Material: Leather</span>
							</div>
							<div class="prod-detail">
								<strong class="title">Chairs</strong>
								<span class="by">by Filicio Ernrim</span>
								<span class="quant">$380</span>
							</div>
						</div>
						<div class="more-details">
							<a href="#" class="btn">.Psd Files + FONTS </a>
							<span class="total"><span>Total:</span> $750</span>
						</div>
					</div>
				</li>
				<li>
					<a href="#" class="btn-del">del</a>
					<div class="holder">
						<div class="details">
							<div class="thumb-area">
								<img src="<?php echo IMAGE_URL; ?>img-prod.jpg" alt="">
								<span class="thumb-detail">Color: Brown</span>
								<span class="thumb-detail">Material: Leather</span>
							</div>
							<div class="prod-detail">
								<strong class="title">Chairs</strong>
								<span class="by">by Filicio Ernrim</span>
								<span class="quant">$380</span>
							</div>
						</div>
						<div class="more-details">
							<a href="#" class="btn">.Psd Files + FONTS </a>
							<span class="total"><span>Total:</span> $750</span>
						</div>
					</div>
				</li>
			</ul>
		</div>
		<div class="cart-edit">
			<form class="coupon-form" action="#">
				<fieldset>
					<input type="text" placeholder="Enter the coupon code">
					<input type="submit" value="Ok">
				</fieldset>
			</form>
			<span class="total-price">$3000</span>
			<a href="#" class="ico-update">Update cart</a>
			<a href="#" class="btn-check">Proceed to checkout</a>
		</div>
	</div>
	<div class="products">
		<div class="head">
			<h2>recomendations</h2>
			<div class="paged">
				<div class="pages">
					<span class="cur-num"></span>
					<span>/</span>
					<span class="all-num"></span>
				</div>
				<div class="btns">
					<a class="btn-prev" href="#">Previous</a>
					<a class="btn-next" href="#">Next</a>
				</div>
			</div>
			<div class="pagination">
			</div>
		</div>
		<div class="mask">
			<div class="slideset">
				<div class="slide">
					<img src="<?=IMAGE_URL?>img2.jpg" alt="">
					<div class="details">
						<div class="title-area">
							<strong class="title">Chairs</strong>
							<span class="by">by Filicio Ernrim</span>
						</div>
						<a href="#" class="ico-cart">Add<br>to cart</a>
					</div>
				</div>
				<div class="slide">
					<img src="<?=IMAGE_URL?>img3.png" alt="">
					<div class="details">
						<div class="title-area">
							<strong class="title">Chairs</strong>
							<span class="by">by Filicio Ernrim</span>
						</div>
						<a href="#" class="ico-cart">Add<br>to cart</a>
					</div>
				</div>
				<div class="slide">
					<img src="<?=IMAGE_URL?>img4.png" alt="">
					<div class="details">
						<div class="title-area">
							<strong class="title">Chairs</strong>
							<span class="by">by Filicio Ernrim</span>
						</div>
						<a href="#" class="ico-cart">Add<br>to cart</a>
					</div>
				</div>
				<div class="slide">
					<img src="<?=IMAGE_URL?>img5.jpg" alt="">
					<div class="details">
						<div class="title-area">
							<strong class="title">Chairs</strong>
							<span class="by">by Filicio Ernrim</span>
						</div>
						<a href="#" class="ico-cart">Add<br>to cart</a>
					</div>
				</div>
				<div class="slide">
					<img src="<?=IMAGE_URL?>img6.png" alt="">
					<div class="details">
						<div class="title-area">
							<strong class="title">Chairs</strong>
							<span class="by">by Filicio Ernrim</span>
						</div>
						<a href="#" class="ico-cart">Add<br>to cart</a>
					</div>
				</div>
				<div class="slide">
					<img src="<?=IMAGE_URL?>img7.jpg" alt="">
					<div class="details">
						<div class="title-area">
							<strong class="title">Chairs</strong>
							<span class="by">by Filicio Ernrim</span>
						</div>
						<a href="#" class="ico-cart">Add<br>to cart</a>
					</div>
				</div>
				<div class="slide">
					<img src="<?=IMAGE_URL?>img8.jpg" alt="">
					<div class="details">
						<div class="title-area">
							<strong class="title">Chairs</strong>
							<span class="by">by Filicio Ernrim</span>
						</div>
						<a href="#" class="ico-cart">Add<br>to cart</a>
					</div>
				</div>
				<div class="slide">
					<img src="<?=IMAGE_URL?>img9.jpg" alt="">
					<div class="details">
						<div class="title-area">
							<strong class="title">Chairs</strong>
							<span class="by">by Filicio Ernrim</span>
						</div>
						<a href="#" class="ico-cart">Add<br>to cart</a>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>
<?php include('include/footer.php');?>