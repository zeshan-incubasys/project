<?php include('variables.php');?>
<?php include('head.php');?>
<script type="text/javascript">
	$(document).ready(function(e) {
		$('.main').css({"min-height": $(window).height()- ($('header').height() + $('footer').height()) + "px"});
	});
</script>
<body>
	<div id="site-wrapper">
		<header id="#header">
			<div class="top-header">
				<div class="container">
					<?php include('navigation.php');?>
				</div>
			</div>
		</header>