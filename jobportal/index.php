<?php  include('include/header.php');?>


	  	<div class="slider-gallery">
        <div id="myCarousel" class="carousel slide" data-interval="4000" data-ride="carousel">
      <!-- Carousel indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>   
       <!-- Carousel items -->
        <div class="carousel-inner">
            <div class="active item">
               <a href=""><img src="<?php echo IMAGE_URL; ?>/slider/img1.jpg" alt=""></a>
                <!-- <div class="carousel-caption">
                  <h3>First slide label</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div> -->
            </div>

             <div class="item">
               <a href=""><img src="<?php echo IMAGE_URL; ?>/slider/img1.jpg" alt=""></a>
                <!-- <div class="carousel-caption">
                  <h3>First slide label</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div> -->
            </div>


        </div>
        <!-- Carousel nav -->
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
  	</div>

    <section class="what-do">
        <div class="container head">
          <h2><span>what we do</span></h2>
          <p>Decades of maritime experience on commercial and private ships make us an ideal choice for management agencies, captains &
           recruiters looking for certified and professional crew. Candidates love the fact that we speak their language. Experience that is ‘Truly Different’.</p>
        </div>
        <div class="holder">
          <div class="block">
              <div class="col-md-4 col-md-offset-2 text-area">
                  <div class="text">
                    <p>A young & effective agency with a vast network, Marina ReCrewter, is strives to provide a personal and reliable service. Our mission, besides finding the best qualified Candidates, is to coach new and experienced talents in order to meet & exceed your expectations.</p>
                    <p>Ideally located in the Emirates, a developing maritime hot spot, with easy access to an expanding regional market, we aim to become a key partner to our Clients as a local recruitment agency.</p>
                    <p>Our active maritime background will benefit our Clients. We are well versed in maritime law - paramount, in an industry with ever changing safety and legal requirements. As Captains, having been “at the other side of the table”, facing the same challenges in building a strong team, offers great insights into knowing what a Client will be looking for and makes an all important difference.  </p>
                  </div>
              </div>
              <div class="col-md-6 image-area">
                  <div class="image one"></div>
              </div>
          </div>
        </div>
    </section>

  <?php include('include/footer.php');?>