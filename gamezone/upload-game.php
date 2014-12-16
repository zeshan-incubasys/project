<?php include('include/variables.php');?>
<?php  include('include/admin/header.php');?>

<div id="main">
	<?php  include('include/admin/sidebar.php');?>
	<div id="content">
		<div class="page-head">
			<span class="page-heading">upload game</span>
			<a class="setting" href="#"></a>
		</div>
		<div id="form-wrap">
			<form>
				<fieldset>
					<div class="row">
						<div class="input-wrap">
							<input type="text" placeholder="title">
						</div>
						<div class="input-wrap file">
							<input type="file" data-jcf='{"buttonText": "browse", "placeholderText": "choose icon"}'>
						</div>
					</div>
					<div class="row">
						<div class="input-wrap file">
							<input type="file" data-jcf='{"buttonText": "browse", "placeholderText": "choose image"}'>
						</div>
						<div class="input-wrap file">
							<input type="file" data-jcf='{"buttonText": "browse", "placeholderText": "choose game file"}'>
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