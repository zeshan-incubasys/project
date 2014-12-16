<?php include('include/variables.php');?>
<?php  include('include/admin/header.php');?>

<div id="main">
	<?php  include('include/admin/sidebar-dev.php');?>

	<div id="content">
		<div class="page-head">
			<span class="page-heading">competitions</span>
			<a class="setting" href="#"></a>
		</div>
		<div class="top-form-area">
			<div class="main-holder">
				<form>
					<fieldset>
						<div class="block">
							<div class="row">
								<div class="input-wrap">
									<select value="">										
										<option>name</option>
										<option>item 1</option>
										<option>item 1</option>
										<option>item 1</option>										
									</select>
								</div>
								<div class="input-wrap">
									<input type="text" placeholder="aaa">
								</div>
							</div>
						</div>
							<input type="submit" value="submit">
					</fieldset>
				</form>
			</div>
		</div>
		<div class="table-wrapper">
			<div class="holder">
				<div class="block wide-view">
					 <div class="row-fluid">
						<table id="sample-table-2" class="table table-striped table-bordered table-hover">
							<thead>
								<tr>
									<th class="sorting">competition title</th>
									<th>type</th>
									<th>start date</th>
									<th>game</th>
									<th>entry fee</th>
									<th>prize money</th>
									<th>participants</th>
									<th>winner</th>
									<th>dev share</th>
									<th>status</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><a href="#">hussnain</a></td>
									<td>pakistan</td>
									<td class="hidden-480">2</td>
									<td class="hidden-phone"><a href="#">temple run </a></td>
									<td class="hidden-phone">whoz there</td>
									<td>11</td>
									<td>fff</td>
									<td><a href="#">raza</a></td>
									<td>1</td>
									<td>3</td>
								</tr>
							</tbody>
						</table>
					</div> 

				</div>
			</div>

		</div>
	</div>
</div>
<?php include('include/admin/footer.php');?>