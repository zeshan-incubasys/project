<?php include('include/variables.php');?>
<?php  include('include/admin/header.php');?>

<div id="main">
	<?php  include('include/admin/sidebar.php');?>

	<div id="content">
		<div class="page-head">
			<span class="page-heading">registration</span>
			<a class="setting" href="#"></a>
		</div>
		<div id="form-wrap">
			<form>
				<fieldset>
					<div class="row">
						<div class="input-wrap">
							<input type="text" placeholder="user name">
						</div>
						<div class="input-wrap">
							<input type="text" placeholder="first name">
						</div>
					</div>
					<div class="row">
						<div class="input-wrap">
							<input type="text" placeholder="last name">
						</div>
						<div class="input-wrap">
							<input type="mail" placeholder="email">
						</div>
					</div>
					<div class="row">
						<div class="input-wrap">
							<input type="text" placeholder="phone number">
						</div>
						<div class="input-wrap">
							<input type="text" placeholder="country">
						</div>
					</div>
					<div class="row">
						<div class="input-wrap">
							<select value="kjhkjh">										
								<option>male</option>
								<option>female</option>
								
							</select>
						</div>
						<div class="input-wrap">
							<input id="datepicker" type="text" placeholder="date of birth">
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
<?php include('include/admin/footer.php');?>