<?php  include('include/header.php');?>
<div id="main">
	<div class="product-details">
		<div class="gallery">
			<div class="mask">
				<div class="slideset">
					<div class="slide">
						<img src="<?php echo IMAGE_URL; ?>gallery1.jpg" alt="">
					</div>
					<div class="slide">
						<img src="<?php echo IMAGE_URL; ?>gallery1.jpg" alt="">
					</div>
					<div class="slide">
						<img src="<?php echo IMAGE_URL; ?>gallery1.jpg" alt="">
					</div>
					<div class="slide">
						<img src="<?php echo IMAGE_URL; ?>gallery1.jpg" alt="">
					</div>
					<div class="slide">
						<img src="<?php echo IMAGE_URL; ?>gallery1.jpg" alt="">
					</div>
					<div class="slide">
						<img src="<?php echo IMAGE_URL; ?>gallery1.jpg" alt="">
					</div>
					<div class="slide">
						<img src="<?php echo IMAGE_URL; ?>gallery1.jpg" alt="">
					</div>
					<div class="slide">
						<img src="<?php echo IMAGE_URL; ?>gallery1.jpg" alt="">
					</div>
				</div>
			</div>
			<ul class="pagination">
				<li><a href="#"><img src="<?php echo IMAGE_URL; ?>gallery-thumb1.jpg" alt=""></a></li>
				<li><a href="#"><img src="<?php echo IMAGE_URL; ?>gallery-thumb2.jpg" alt=""></a></li>
				<li><a href="#"><img src="<?php echo IMAGE_URL; ?>gallery-thumb3.jpg" alt=""></a></li>
				<li><a href="#"><img src="<?php echo IMAGE_URL; ?>gallery-thumb4.jpg" alt=""></a></li>
				<li><a href="#"><img src="<?php echo IMAGE_URL; ?>gallery-thumb1.jpg" alt=""></a></li>
				<li><a href="#"><img src="<?php echo IMAGE_URL; ?>gallery-thumb2.jpg" alt=""></a></li>
				<li><a href="#"><img src="<?php echo IMAGE_URL; ?>gallery-thumb3.jpg" alt=""></a></li>
				<li><a href="#"><img src="<?php echo IMAGE_URL; ?>gallery-thumb4.jpg" alt=""></a></li>
			</ul>
		</div>
		<div class="proddetail-area">
			<ul class="breadcrumbs">
				<li><a href="#">Home</a></li>
				<li><a href="#">Products</a></li>
				<li>Calenders</li>
			</ul>
			<div class="head">
				<!--<span class="review"><span>5</span> Reviews</span>-->
				<h1>The Complete Photobooth</h1>
			</div>
			<h2>Everything You Need To Make A Photobooth:</h2>
			<div class="check-area">
					<span class="total-price">$45</span>
					<div class="btn-area">
						 <!-- <a href="#" class="btn-view">View Cart</a>-->
						  <a href="#" class="btn-add">Add to Cart</a>
					</div>
			</div>
			<p>We are incredibly excited to offer your studio the Complete Photobooth Kit! This product provides photographers with all the tools they need to promote, sell, and create a fabulous photobooth for weddings and parties! With everything from a professionally written 8-page information and welcome guide to the actual props as printable downloads, this kit is a must-have for any photographer who would like to add something special to their offerings and boost add-on sales!</p>
			<p>We are incredibly excited to offer your studio the Complete Photobooth Kit! </p>
			<p>VIEW OUR VIDEO ON HOW TO ASSEMBLE YOUR BOOTH <br><a href="#">http://www.youtube.com/watch?v=sqq3GZ1VAjI</a></p>
			<div class="detail-list">
				<div class="detail-col">
					<h2>Compatibility:</h2>
					<ul>
						<li>Adobe Photoshop</li>
						<li>Adobe Photoshop Elements</li>
					</ul>
				</div>
				<div class="detail-col">
					<h2>Font List:</h2>
					<ul>
						<li>Filosofia</li>
						<li>Filosofia Bold</li>
						<li>Filosofia Italic</li>
						<li>Pompadour</li>
					</ul>
				</div>
			</div>
			<div class="detail-list">
				<div class="detail-col">
					<h2>Product Dimensions:</h2>
					<ul>
						<li>8.5" x 11" Folded</li>
					</ul>
				</div>
				<div class="detail-col">
					<h2>File Type:</h2>
					<ul>
						<li>.PSD</li>
					</ul>
				</div>
			</div>

			<div class="tags">
				<span>Tags:</span>
				<ul>
					<li><a href="#">Actions</a></li>
					<li><a href="#">Gallery Photos</a></li>
					<li><a href="#">Photoshop</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="add-info">
		<h2>Additional Information</h2>
		<ul>
			<li>"About Our Style" photographer process &amp; style information article</li>
			<li>2-page guide with description and details for a Senior Rep Program</li>
			<li>Packages &amp; Pricing information area with extra room for a la carte items</li>
			<li>A "Recommended Vendors" guide with contact information and coupons for clothing, hair and makeup, and other vendors you may work with</li>
			<li>Elegantly designed testimonials area</li>
			<li>"Get To Know You" fill-out worksheet for Seniors to input information on themselves and what they love to help you tailor their session specifically to who they are</li>
			<li>Photographer contact information</li>
		</ul>
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
			  <?php include("include/slider.php")?>
		</div>
	</div>
</div>
<?php include('include/footer.php');?>