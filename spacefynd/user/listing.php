<?php  include('../include/header-inner.php');?>
<div id="main" class="inner">
	<div class="venue-list">
		<form class="filter-form">
			<select>
				<option>All</option>
			</select>
			<a href="#" class="btn btn-sky">Add Venue</a>
		</form>
		<ul>
			<li>
				<div class="title-area">
					<img src="<?php echo IMAGE_URL; ?>list-img1.jpg" alt="">
					<div class="title-wrap">
						<strong class="title">Venue Name</strong>
						<span class="cat">Manage Listing</span>
					</div>
				</div>
				<div class="action-area">
					<a href="#" class="btn-del">Delete Listing</a>
					<a href="#" class="btn-toggle">listed</a>
				</div>
				<span class="status">Under review</span>
			</li>
			<li>
				<div class="title-area">
					<img src="<?php echo IMAGE_URL; ?>list-img1.jpg" alt="">
					<div class="title-wrap">
						<strong class="title">Venue Name</strong>
						<span class="cat">Manage Listing</span>
					</div>
				</div>
				<div class="action-area">
					<a href="#" class="btn-del">Delete Listing</a>
					<a href="#" class="btn-toggle unlisted">listed</a>
				</div>
			</li>
			<li>
				<div class="title-area">
					<img src="<?php echo IMAGE_URL; ?>list-img1.jpg" alt="">
					<div class="title-wrap">
						<strong class="title">Venue Name</strong>
						<span class="cat">Manage Listing</span>
					</div>
				</div>
				<div class="action-area">
					<a href="#" class="btn-del">Delete Listing</a>
					<a href="#" class="btn-toggle listed">listed</a>
				</div>
			</li>
			<li>
				<div class="title-area">
					<img src="<?php echo IMAGE_URL; ?>list-img1.jpg" alt="">
					<div class="title-wrap">
						<strong class="title">Venue Name</strong>
						<span class="cat">Manage Listing</span>
					</div>
				</div>
				<div class="action-area">
					<a href="#" class="btn-del">Delete Listing</a>
					<a href="#" class="btn-toggle">listed</a>
				</div>
				<span class="status">Under review</span>
			</li>
		</ul>
	</div>
</div>
<?php include('../include/footer.php');?>