<?php  include('include/header-user.php');?>
<div id="main" class="search">
	<div class="map-area">
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d26081603.294420466!2d-95.677068!3d37.06250000000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1421135712130" width="100%" height="100%" frameborder="0" style="border:0"></iframe>
	</div>
	<div class="search-area">
		<form action="">
			<fieldset>
				<div class="row">
					<div class="col">
						<!--<select>
							<option>Select City</option>
						</select>-->
						<label>City</label>
						<input type="text" placeholder="Which City?">
					</div>
					<div class="col">
						<label>No. of People</label>
						<select>
							<option value="">No of People</option>
							<option value="1/10">1 - 10 people</option>
							<option value="10/30">10 - 30 people</option>
							<option value="30/50">30 - 50 people</option>
							<option value="50/100">50 - 100 people</option>
							<option value="100/200">100 - 200 people</option>
							<option value="200/350">200 - 350 people</option>
							<option value="350/500">350 - 500 people</option>
							<option value="500/2000">500 - 2000 people</option>
							<option value="2000">2000+</option>
						</select>
					</div>
				</div>
				<div class="row">
					<label>Budget Range</label>
					<div class="budget-slider">
					</div>
					<div id="amount"></div>
				</div>
				<div class="row">
					<div class="col">
						<label>Event</label>
						<input type="text" placeholder="Type of Event">
					</div>
					<div class="col">
						<ul class="check-list">
							<li>
								<input type="checkbox" >
								<label>Indoor</label>
							</li>
							<li>
								<input type="checkbox" >
								<label>Outdoor</label>
							</li>
							<li>
								<input type="checkbox" >
								<label>Both</label>
							</li>
						</ul>
					</div>
				</div>
			</fieldset>
		</form>
		<ul class="listing">
			<li>
				<img src="<?php echo IMAGE_URL; ?>listing.jpg" alt="">
				<a href="#" class="details">
					<span class="holder">
						<strong class="title">From AED 30,000</strong>
						<div class="f-details">
							<span class="price">Dubai Ballroom at Marriott Marquis</span>
							<span class="cap">20 people</span>
						</div>
					</span>
				</a>
			</li>
			<li>
				<img src="<?php echo IMAGE_URL; ?>listing.jpg" alt="">
				<a href="#" class="details">
					<span class="holder">
						<strong class="title">From AED 30,000</strong>
						<div class="f-details">
							<span class="price">Dubai Ballroom at Marriott Marquis</span>
							<span class="cap">20 people</span>
						</div>
					</span>
				</a>
			</li>
			<li>
				<img src="<?php echo IMAGE_URL; ?>listing.jpg" alt="">
				<a href="#" class="details">
					<span class="holder">
						<strong class="title">From AED 30,000</strong>
						<div class="f-details">
							<span class="price">Dubai Ballroom at Marriott Marquis</span>
							<span class="cap">20 people</span>
						</div>
					</span>
				</a>
			</li>
			<li>
				<img src="<?php echo IMAGE_URL; ?>listing.jpg" alt="">
				<a href="#" class="details">
					<span class="holder">
						<strong class="title">From AED 30,000</strong>
						<div class="f-details">
							<span class="price">Dubai Ballroom at Marriott Marquis</span>
							<span class="cap">20 people</span>
						</div>
					</span>
				</a>
			</li>
		</ul>
	</div>
</div>