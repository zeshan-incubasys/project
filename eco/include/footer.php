		<footer id="footer">
			<span class="copyright">Copyright © 2015 ECO ALL RIGHTS RESERVED</span>
			<span class="by">Designed &amp; Developed by <a target="_blank" href="http://www.incubasys.com">Incubasys</a></span>
		</footer>
	</div>
</body>


<script type="text/javascript" src="<?=JS_URL?>owl.carousel.js"></script>
  <script>
    $(document).ready(function() {
      $("#owl-demo").owlCarousel({

      navigation : true,
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem : true,
	  autoPlay : 3000,

      // "singleItem:true" is a shortcut for:
      // items : 1, 
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false

      });
    });
    </script>
	<script type="text/javascript" src="<?=JS_URL?>bootstrap-transition.js"></script>
</html>