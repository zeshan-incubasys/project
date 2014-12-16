
<?php  include('include/header.php');?>

<div id="main">

	<?php  include('include/sidebar.php');?>	

	<div id="content">
		<div class="header">
			<div class="user-area">
				<div class="numbers">
					<span class="block"><span>vs</span>1000</span>
					<span class="block"><span>rs</span>13000</span>
				</div>
				<div class="user-details">
					<div class="image">
						<img src="<?php echo IMAGE_URL; ?>/img-dp.png" alt="">
					</div>
					<div class="details">
						<h1>AbuBakar Butt</h1>
						<span>Lahore, Pakistan, Punjab</span>
					</div>
				</div>
			</div>
			<div class="info-area">
				<div class="links-area">
					<span class="active"><a href="javascript:void(0)">All Games</a></span>
					<span><a href="javascript:void(0)">Installed Games</a></span>
				</div>
				<div class="info">
					<span>22 Games Played</span>
					<span>12 Active Competitions</span>
				</div>
			</div>
		</div>
		<div class="content-heading">
			<h2>reset password</h2>
		</div>
		<div id="form-wrap">
			<form>
				<fieldset>
					<div class="row">
						<div class="input-wrap">
							<input type="password" placeholder="old password">
						</div>
						<div class="input-wrap">
							<input type="password" placeholder="new password">
						</div>
					</div>
					<div class="row">
						<div class="input-wrap">
							<input type="password" placeholder="confirm password">
						</div>
					</div>
					<div class="row">
						<input type="submit" value="submit">
					</div>
				</fieldset>
			</form>
		</div>
	</div>
</div>
<?php include('include/footer.php');?>