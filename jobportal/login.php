<?php include('include/variables.php');?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>MARINA RECREWTER</title>
    <link rel="stylesheet" href="<?php echo CSS_URL ?>bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo CSS_URL?>customize.css" media="all" type="text/css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script type="text/javascript">window.jQuery || document.write('<script src="<?php echo JS_URL?>jquery-1.11.1.min.js"><\/script>')</script>
    <script type="text/javascript" src="<?php echo JS_URL?>bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo JS_URL?>customize.js"></script>
	<script type="text/javascript">
		$(document).ready(function(e) {
			$('.login').height($(window).height() - 60);
		});
	</script>
</head>
<body>
	<div class="login">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-xs-12 pull-right">
					<strong class="logo"><a href="index.php">MARINA RECREWTER</a></strong>
					<form action="#" class="login-form" id="login">
						<fieldset>
							<input type="text" placeholder="Username">
							<input type="password" placeholder="Password">
							<div class="submit-area">
								<a href="#" class="forget" id="forget-btn">Forgot password?</a>
								<input type="submit" value="Log in" class="pull-right">
							</div>
						</fieldset>
					</form>
					<form action="#" class="login-form" id="forget">
						<fieldset>
							<input type="email" placeholder="Email" class="email">
							<div class="submit-area">
								<a href="#" class="forget" id="login-btn">Login</a>
								<input type="submit" value="Send" class="pull-right">
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>