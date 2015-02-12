<?php  include('../include/header-user.php');?>
<div id="main">
	<aside id="sidebar">
		<div class="side-menu">
			<a href="#" class="opener">Menu</a>
			<ul>
				<li class="active-menu"><a href="#basic-info">Basic Information<span>&rsaquo;</span></a></li>
				<li><a href="#event-types">Event Types<span>edit</span></a></li>				
				<li><a href="#photos">Photos<span>edit</span></a></li>
				<li><a href="#emenities">Emenities<span>edit</span></a></li>
				<li><a href="#pricing">Pricing<span>edit</span></a></li>
				<li><a href="#rules">Rules<span>edit</span></a></li>
				<li><a href="#manager">Manager<span>edit</span></a></li>
				<li><a href="#summary">Summary<span>edit</span></a></li>
				<li><a href="#address">Address<span>edit</span></a></li>
				<li><a href="#location">Location<span>edit</span></a></li>
				<li><a href="#category">Category<span>edit</span></a></li>
				<li><a href="#publish">Publish<span>edit</span></a></li>
			</ul>
		</div>
	</aside>
	<section id="content">
		<form action="#" class="tab-area">
			<fieldset>
				<div class="tabs" id="basic-info">
					<h1>Basic Info</h1>
					<strong class="title">A description of your space displayed on your public listing page.</strong>
					<div class="fields-area">
						<div class="row">
							<label>Title<span>*</span></label>
							<input type="text" placeholder="Write a title for your venue">
						</div>
						<div class="row">
							<label>Summary<span>*</span></label>
							<textarea class="textarea" placeholder="Write a summary in 250 characters or less"></textarea>
						</div>
						<div class="row">
							<label>Detailed Description</label>
							<textarea placeholder="Add a detailed description"></textarea>
						</div>
						<div class="row">
							<label>Availability</label>
							<input type="text" placeholder="Mention the months, days of week, and times of day when venue is available for hire">
						</div>
					</div>
				</div>
				<div class="tabs" id="location">
					<h1>Location</h1>
					<div class="fields-area">
						
					</div>
				</div>
				<div class="tabs" id="photos">
					<h1>Photos</h1>
					<!--<strong class="title">A description of your space displayed on your public listing page.</strong>-->
					<div class="fields-area">
						<div class="photo-area">
							<h1>Add a photo or two !</h1>
							<strong class="title">or three,or more ! Guests loves photos that highlight the features of your space.</strong>
							<span class="btn btn-sky"><input type="file" class="photo-file">Add Photos</span>
						</div>
					</div>
				</div>
				<div class="tabs" id="event-types">
					<h1>Event Types</h1>
					<strong class="title">A description of your space displayed on your public listing page.</strong>
					<div class="fields-area">
						<div class="row">
							<div class="col">
								<strong class="title">Social</strong>
								<div class="check-area">
									<input type="checkbox" >
									<label class="label">Wedding Celebration</label>
								</div>
								<div class="check-area">
									<input type="checkbox" >
									<label class="label">Engagement Party</label>
								</div>
								<div class="check-area">
									<input type="checkbox" >
									<label class="label">Birthday Party</label>
								</div>
								<div class="check-area">
									<input type="checkbox" >
									<label class="label">Group Lunch</label>
								</div>
								<div class="check-area">
									<input type="checkbox" >
									<label class="label">Group Dinner</label>
								</div>
							</div>
							<div class="col">
								<strong class="title">Kids</strong>
								<div class="check-area">
									<input type="checkbox" >
									<label class="label">Wedding Celebration</label>
								</div>
								<div class="check-area">
									<input type="checkbox" >
									<label class="label">Engagement Party</label>
								</div>
								<div class="check-area">
									<input type="checkbox" >
									<label class="label">Birthday Party</label>
								</div>
								<div class="check-area">
									<input type="checkbox" >
									<label class="label">Group Lunch</label>
								</div>
								<div class="check-area">
									<input type="checkbox" >
									<label class="label">Group Dinner</label>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<strong class="title">Sports</strong>
								<div class="check-area">
									<input type="checkbox" >
									<label class="label">Wedding Celebration</label>
								</div>
								<div class="check-area">
									<input type="checkbox" >
									<label class="label">Engagement Party</label>
								</div>
								<div class="check-area">
									<input type="checkbox" >
									<label class="label">Birthday Party</label>
								</div>
								<div class="check-area">
									<input type="checkbox" >
									<label class="label">Group Lunch</label>
								</div>
								<div class="check-area">
									<input type="checkbox" >
									<label class="label">Group Dinner</label>
								</div>
							</div>
							<div class="col">
								<strong class="title">Business</strong>
								<div class="check-area">
									<input type="checkbox" >
									<label class="label">Wedding Celebration</label>
								</div>
								<div class="check-area">
									<input type="checkbox" >
									<label class="label">Engagement Party</label>
								</div>
								<div class="check-area">
									<input type="checkbox" >
									<label class="label">Birthday Party</label>
								</div>
								<div class="check-area">
									<input type="checkbox" >
									<label class="label">Group Lunch</label>
								</div>
								<div class="check-area">
									<input type="checkbox" >
									<label class="label">Group Dinner</label>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<strong class="title">Art &amp; Design</strong>
								<div class="check-area">
									<input type="checkbox" >
									<label class="label">Wedding Celebration</label>
								</div>
								<div class="check-area">
									<input type="checkbox" >
									<label class="label">Engagement Party</label>
								</div>
								<div class="check-area">
									<input type="checkbox" >
									<label class="label">Birthday Party</label>
								</div>
								<div class="check-area">
									<input type="checkbox" >
									<label class="label">Group Lunch</label>
								</div>
								<div class="check-area">
									<input type="checkbox" >
									<label class="label">Group Dinner</label>
								</div>
							</div>
							<div class="col">
								<strong class="title">Filming &amp; Photoshoot</strong>
								<div class="check-area">
									<input type="checkbox" >
									<label class="label">Wedding Celebration</label>
								</div>
								<div class="check-area">
									<input type="checkbox" >
									<label class="label">Engagement Party</label>
								</div>
								<div class="check-area">
									<input type="checkbox" >
									<label class="label">Birthday Party</label>
								</div>
								<div class="check-area">
									<input type="checkbox" >
									<label class="label">Group Lunch</label>
								</div>
								<div class="check-area">
									<input type="checkbox" >
									<label class="label">Group Dinner</label>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tabs" id="emenities">
					<h1>Emenities</h1>
					<strong class="title">A description of your space displayed on your public listing page.</strong>
					<div class="fields-area">
						<div class="row">
							<div class="col">
								<input type="checkbox" >
								<label class="label">Furnished Rooms</label>
							</div>
							<div class="col">
								<input type="checkbox" >
								<label class="label">Furnished Rooms</label>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<input type="checkbox" >
								<label class="label">Furnished Rooms</label>
							</div>
							<div class="col">
								<input type="checkbox" >
								<label class="label">Furnished Rooms</label>
							</div>
						</div>
					</div>
				</div>
				<div class="tabs" id="pricing">
					<h1>Pricing</h1>
					<strong class="title">A description of your space displayed on your public listing page.</strong>
					<div class="fields-area">
						<div class="row">
							<label>Price<span>*</span></label>
							<input type="text" placeholder="Add Price">
						</div>
					</div>
				</div>
				<div class="tabs" id="rules">
					<h1>Rules</h1>
					<strong class="title">A description of your space displayed on your public listing page.</strong>
					<div class="fields-area">
						<div class="row">
							<label>Rules</label>
							<textarea placeholder="Add a detailed description"></textarea>
						</div>
					</div>
				</div>
				<div class="tabs" id="manager">
					<h1>Manager</h1>
					<strong class="title">A description of your space displayed on your public listing page.</strong>
					<div class="fields-area">
						<div class="row">
							<label>Manager<span>*</span></label>
							<select>
								<option>Manager</option>
								<option>Manager</option>
								<option>Manager</option>
							</select>
						</div>
					</div>
				</div>
				<div class="tabs" id="address">
					<h1>Address</h1>
					<strong class="title">A description of your space displayed on your public listing page.</strong>
					<div class="fields-area">
						<div class="row">
							<label>Floor Space<span>*</span></label>
							<input type="text" placeholder="Write a title for your venue">
						</div>
						<div class="row">
							<label>Height<span>*</span></label>
							<input type="text" placeholder="Write a title for your venue">
						</div>
						<div class="row">
							<label>Floor Space<span>*</span></label>
							<input type="text" placeholder="Write a title for your venue">
						</div>
						<div class="row">
							<label>Height<span>*</span></label>
							<input type="text" placeholder="Write a title for your venue">
						</div>
						<div class="row">
							<label>Floor Space<span>*</span></label>
							<input type="text" placeholder="Write a title for your venue">
						</div>
						<div class="row">
							<label>Height<span>*</span></label>
							<input type="text" placeholder="Write a title for your venue">
						</div>
					</div>
				</div>
				<div class="tabs" id="summary">
					<h1>Summary</h1>
					<strong class="title">A description of your space displayed on your public listing page.</strong>
					<div class="fields-area">
						<div class="row">
							<label>Summary<span>*</span></label>
							<textarea class="textarea" placeholder="Write a summary in 250 characters or less"></textarea>
						</div>
						<div class="row">
							<label>Availability</label>
							<textarea class="textarea" placeholder="Write a Availability in 250 characters or less"></textarea>
						</div>
						<div class="row">
							<label>Floor Space<span>*</span></label>
							<input type="text" placeholder="Write a title for your venue">
						</div>
						<div class="row">
							<label>Height<span>*</span></label>
							<input type="text" placeholder="Write a title for your venue">
						</div>
						<div class="row">
							<label>Floor Plan<span>*</span></label>
							<input type="file">
						</div>
					</div>
				</div>
				<div class="tabs" id="category">
					<h1>Category</h1>
					<strong class="title">A description of your space displayed on your public listing page.</strong>
					<div class="fields-area">
						<div class="row">
							<div class="col">
								<input type="checkbox" >
								<label class="label">Furnished Rooms</label>
							</div>
							<div class="col">
								<input type="checkbox" >
								<label class="label">Furnished Rooms</label>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<input type="checkbox" >
								<label class="label">Furnished Rooms</label>
							</div>
							<div class="col">
								<input type="checkbox" >
								<label class="label">Furnished Rooms</label>
							</div>
						</div>
						<div class="row">
							<label>Other<span>*</span></label>
							<input type="text" placeholder="Write a title for your venue">
						</div>
					</div>
				</div>
				<div class="tabs" id="publish">
					<h1>Publish</h1>
					<strong class="title">A description of your space displayed on your public listing page.</strong>
					<div class="fields-area">
						<a href="#" class="btn btn-sky">Publish</a>
					</div>
				</div>
			</fieldset>
		</form>
		
		<!--<div class="btn-area">
			<a href="#" class="btn btn-space">Add New Space</a>
		</div>-->
		<!--<div class="venue-list">
			<h2><a href="#">Published <span>+</span></a></h2>
			<ul>
				<li>
					<img src="<?php echo IMAGE_URL; ?>add-venue1.jpg" alt="">
					<div class="details">
						<strong class="title">Space Title 1</strong>
						<p>Space address will come here.</p>
						<div class="btn-block">
							<a href="#" class="btn btn-sky">Edit</a>
							<a href="#" class="btn btn-space">Remove</a>
						</div>
					</div>
				</li>
				<li>
					<img src="<?php echo IMAGE_URL; ?>add-venue2.jpg" alt="">
					<div class="details">
						<strong class="title">Space Title 1</strong>
						<p>Space address will come here.</p>
						<div class="btn-block">
							<a href="#" class="btn btn-sky">Edit</a>
							<a href="#" class="btn btn-space">Remove</a>
						</div>
					</div>
				</li>
				<li>
					<img src="<?php echo IMAGE_URL; ?>add-venue2.jpg" alt="">
					<div class="details">
						<strong class="title">Space Title 1</strong>
						<p>Space address will come here.</p>
						<div class="btn-block">
							<a href="#" class="btn btn-sky">Edit</a>
							<a href="#" class="btn btn-space">Remove</a>
						</div>
					</div>
				</li>
			</ul>
		</div>-->
	</section>
</div>
<?php include('../include/footer-user.php');?>