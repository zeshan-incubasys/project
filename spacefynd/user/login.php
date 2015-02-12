<?php  include('../include/variables.php');?>
<?php  include('../include/head.php');?>
<body>
	<div id="main" class="login">
		<div class="holder">
			<ul class="tab-menu">
				<li class="active"><a href="#tab1">Venue Login</a></li>
				<li><a href="#tab2">Venue Sign Up</a></li>
			</ul>
			<div class="tab-content">
				<div class="tabs" id="tab1">
					<div class="tab-hold">
						<h1>Login To Your Account</h1>
						<form class="login-form" action="#">
							<fieldset>
								<input type="email" placeholder="Username / Email">
								<input type="password" placeholder="Password">
								<div class="row">
									<input type="checkbox" id="remember">
									<label class="label" for="remember">Remember Password</label>
								</div>
								<input type="submit" value="Login">
							</fieldset>
						</form>
					</div>
					<span class="bar">Not yet signed up? Sign up <a href="#" class="here">here</a></span>
				</div>
				<div class="tabs" id="tab2">
					<div class="tab-hold">
						<h1>Sign Up with Us</h1>
						<form class="signup-form" action="#">
							<fieldset>
								<input type="text" placeholder="First Name">
								<input type="text" placeholder="Last Name">
								<input type="email" placeholder="Email">
								<input type="password" placeholder="Password">
								<input type="password" placeholder="Confirm Password">
								<div class="row">
									<input type="checkbox" id="post">
									<label class="label" for="post">Keep me posted on Spacefynd news </label>
								</div>
								<input type="submit" value="Sign Up">
								<span class="label">By signing up, I agree to Spacefynd’s Terms &amp; Conditions</span>
							</fieldset>
						</form>
					</div>
					<span class="bar">Already signed up? Log in <a href="#" class="here">here</a></span>
				</div>
			</div>
		</div>
	</div>
</body>
</html>