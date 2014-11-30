<?php include('variables.php');?>
<?php include('head.php');?>
<script type="text/javascript">
	$(document).ready(function(e) {
		$('.main').css({"min-height": $(window).height()- ($('header').height()) + "px"});
	});
</script>
<body>
	<div id="site-wrapper">
		<header>
			<div class="top-header">
				<span class="greet">Hello, <a href="#">admin</a></span>
				<?php include('navigation.php');?>
			</div>
		</header>