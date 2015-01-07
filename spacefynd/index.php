<?php  include('include/header.php');?>
<section id="top-venue">
   <!-- <div class="heading">
        <h1>
            Top Venues
            <small>The best venues that will inspire you for any event.</small>
        </h1>
    </div>-->
	<div class="block-area">
		<div class="blocks">
			  <h2>WHY List Your Space?</h2>
			<div class="features">
				<div class="col">
					<div class="hold">
						<div class="block">
							<img src="<?php echo IMAGE_URL; ?>ico1.svg" alt="">
							<strong class="title">It's Free (Beta)</strong>
							<p>While in beta, listing a space on Spacefynd is completely free.</p>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="hold">
						<div class="block">
							<img src="<?php echo IMAGE_URL; ?>ico2.svg" alt="">
							<strong class="title">It's Quick</strong>
							<p>You can literally get your space listed in minutes.</p>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="hold">
						<div class="block">
							<img src="<?php echo IMAGE_URL; ?>ico3.svg" alt="">
							<strong class="title">It Brings New Business </strong>
							<p>Showcase your space to new customers looking for similar venues.</p>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="hold">
						<div class="block">
							<img src="<?php echo IMAGE_URL; ?>ico4.svg" alt="">
							<strong class="title">It Presents Your Space Beautifully</strong>
							<p>No other place will make your venue look that good. </p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="list-form">
			<h2>List your space</h2>
			<form action="#">
				<fieldset>
					<select class="location">
						  <option>What Type of Venue?</option>
						  <option>Hotels/Resorts</option>
						  <option>Villas/Private Residences</option>
						  <option>Boats</option>
						  <option>Warehouses/Galleries</option>
						  <option>Sports Venues</option>
						  <option>Malls</option>
						  <option>Desert Camps</option>
						  <option>Convention Centres</option>
						  <option>Outdoor Venues</option>
						  <option>Other/Exotic (islands)</option>
						  <option>Restaurants/Nightclubs/Lounges</option>
					</select>

					<select class="venue-capacity">
						<option>How many people can you accomodate?</option>
					</select>

					<select class="located">
						<option>Where is it located?</option>
					</select>



					<input type="submit" value="Continue" class="btn btn-sky">
				</fieldset>
			</form>
		</div>
	</div>
    <!--<div class="gallery">
        <div class="slide active">
            <div class="img"></div>
            <div class="description">
                <h2></h2>
                <p></p>
            </div>
        </div>
        <div class="slide"></div>
        <div class="slide"></div>
        <div class="slide"></div>
        <div class="slide"></div>
    </div>-->




</section>
<section id="how-it-works">
    <div class="heading">
        <h1>
            How it Works
           <!-- <small>Looking for some inspiration? We've created shortlists of the top venues.</small>-->
        </h1>
    </div>
    <div class="how-data">
        <div class="col-left">
            <div class="heading">
                <h2>How to Get a Space Hired</h2>
            </div>
            <div class="box-container">
                <div class="box">
                    <img src="<?=IMAGE_URL?>list-your-space.svg" alt=""/>
                    <div class="desc">
                        <h3>LIST YOUR SPACE</h3>
                        <p>Create a space profile on Spacefynd in minutes! Upload pictures, state your starting price, highlight what makes it special and make it visible to the exact people who are looking for similar spaces.</p>
                    </div>
                </div>
                <div class="box">
                    <img src="<?=IMAGE_URL?>answer-request.svg" alt=""/>
                    <div class="desc">
                        <h3>ANSWER REQUESTS</h3>
                        <p>People who like your space will contact you instantly from your space profile page. Messages will include contact information and some details or questions about what your potential customers are looking for so make sure you respond!</p>
                    </div>
                </div>
                <div class="box">
                    <img src="<?=IMAGE_URL?>get-it-hired.svg" alt=""/>
                    <div class="desc">
                        <h3>GET IT HIRED!</h3>
                        <p>We suggest that you meet individuals who express interest in hiring your space at the venue for a quick tour. Agree on the hire price and house rules, and voila! You just got your space hired.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-right">
            <div class="heading">
                <h2>How to Hire a Space</h2>
            </div>
            <div class="box-container">
                <div class="box">
                    <img src="<?=IMAGE_URL?>search-spaces.svg" alt=""/>
                    <div class="desc">
                        <h3>SEARCH SPACES</h3>
                        <p>Search our database of venues by selecting the event type, city, number of people you expect will show up and your budget, and we’ll suggest to you venues that best fit your requirements.</p>
                    </div>
                </div>
                <div class="box">
                    <img src="<?=IMAGE_URL?>make-contact.svg" alt=""/>
                    <div class="desc">
                        <h3>MAKE CONTACT</h3>
                        <p>Send a message to the venue manager from the venue profile page, provide some details about what you’re looking for and someone will get in touch with you to arrange a visit.</p>
                    </div>
                </div>
                <div class="box">
                    <img src="<?=IMAGE_URL?>host-event.svg" alt=""/>
                    <div class="desc">
                        <h3>Hire Space!</h3>
                        <p>Visit the venue and make sure it’s what you’re looking for. Once all details are agreed with the venue manager, shake hands and start planning your event!</p>
                    </div>
                </div>

            </div>
        </div>
        <img src="<?=IMAGE_URL?>rope-man.png" alt="" class="rope-man hide" />
    </div>
</section>
<section id="featured-venue">
    <div class="heading">
        <h1> Featured Venues</h1>
    </div>
    <div class="container">
        <div class="slider-venue">
            <div class="mask">
                <div class="slideset">
                    <div class="slide">
                        <img src="<?=IMAGE_URL?>client1.png" alt="slide1"/>
                    </div>

                     <div class="slide">
                        <img src="<?=IMAGE_URL?>client2.png" alt="slide1"/>
                    </div>

                     <div class="slide">
                        <img src="<?=IMAGE_URL?>client3.png" alt="slide1"/>
                    </div>

                     <div class="slide">
                        <img src="<?=IMAGE_URL?>client4.png" alt="slide1"/>
                    </div>

                     <div class="slide">
                        <img src="<?=IMAGE_URL?>client5.png" alt="slide1"/>
                    </div>

                    <div class="slide">
                        <img src="<?=IMAGE_URL?>client1.png" alt="slide1"/>
                    </div>

                     <div class="slide">
                        <img src="<?=IMAGE_URL?>client2.png" alt="slide1"/>
                    </div>

                     <div class="slide">
                        <img src="<?=IMAGE_URL?>client3.png" alt="slide1"/>
                    </div>

                     <div class="slide">
                        <img src="<?=IMAGE_URL?>client4.png" alt="slide1"/>
                    </div>

                     <div class="slide">
                        <img src="<?=IMAGE_URL?>client5.png" alt="slide1"/>
                    </div>



                </div>
            </div>
        </div>
    </div>
</section>
	  <div id="dialog" title="Basic dialog">
	  <p>This is an animated dialog which is useful for displaying information. The dialog window can be moved, resized and closed with the 'x' icon.</p>
	  </div>


  <?php include('include/footer.php');?>