<?php include('include/variables.php');?>
<?php  include('include/admin/header.php');?>

<div id="main">
	<?php  include('include/admin/sidebar.php');?>
	<div id="content">
		<div class="page-head">
			<span class="page-heading">add competition</span>
			<a class="setting" href="#"></a>
		</div>
		<div id="form-wrap">
			<form>
				<fieldset>
					<div class="row">
						<div class="input-wrap">
							<input type="text" placeholder="title">
						</div>
						<div class="input-wrap">
							<input type="text" placeholder="prize money">
						</div>
					</div>	
					<div class="row">
						<div class="input-wrap">
							<select placeholder="select game">										
								<option>select game type</option>
								<option>item 1</option>
								<option>item 2</option>
								<option>item 3</option>
							</select>
						</div>
						<div class="input-wrap">
							<select value="">										
								<option>select game</option>
								<option>item 1</option>
								<option>item 2</option>
								<option>item 3</option>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="input-wrap">
							<input id="datepicker" type="text" placeholder="start date">
						</div>
						<div class="input-wrap">
							<input id="datepicker1" type="text" placeholder="end date">
						</div>
					</div>
					<div class="row">
						<div class="input-wrap">
							<input type="text" placeholder="entry fee">
						</div>
						<div class="input-wrap">
							<input type="text" placeholder="virtual entry fee">
						</div>
					</div>
					<div class="row">
						<textarea placeholder="description"></textarea>
						</textarea>
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