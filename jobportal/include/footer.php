	<footer id="footer">
			<div class="container">
				<strong class="logo hidden-xs">
					<a href="index.php"></a>
				</strong>
				<nav class="navigation">
					<ol class="social">
						<li><a target="_blank" href="http://www.facebook.com">fb</a></li>
						<li class="linkedin"><a target="_blank" href="http://www.linkedin.com">linkedin</a></li>
						<li class="twitter"><a target="_blank" href="http://www.twitter.com">twitter</a></li>
					</ol>
					<ul class="hidden-xs">
						<li class="active"><a href="<?php if(strpos($_SERVER['PHP_SELF'], 'index.php')!=false){ echo '#header'; }else{echo 'index.php#header';}?>">home</a></li>
						<li><a href="<?php if(strpos($_SERVER['PHP_SELF'], 'index.php')!=false){ echo '#about'; }else{echo 'index.php#about';}?>">about</a></li>
						<li><a href="<?php if(strpos($_SERVER['PHP_SELF'], 'index.php')!=false){ echo '#services'; }else{echo 'index.php#services';}?>">service</a></li>
						<li><a href="why-marina.php">Why Marina</a></li>
						<li><a href="#">register</a></li>
						<li><a href="<?php if(strpos($_SERVER['PHP_SELF'], 'index.php')!=false){ echo '#contact'; }else{echo 'index.php#contact';}?>">contact</a></li>
					</ul>
					<span class="by">Design &amp; Developed by <a target="_blank" href="http://www.incubasys.com">Incubasys</a></span>
				</nav>
			</div>
	</footer>
	<!--<script type="text/javascript" src="<?php echo JS_URL; ?>wowslider.js"></script>
	<script type="text/javascript" src="<?php echo JS_URL; ?>script.js"></script>-->
	<script type="text/javascript" src="<?php echo JS_URL; ?>viewportchecker.js"></script>
	<script type="text/javascript">
		  jQuery(document).ready(function() {
				jQuery('section').addClass("hidepopup").viewportChecker({
					  classToAdd: 'showpopup animated fadeInUp',
					  offset:50
				});
		  });
	</script>
</div>
</body>
</html>