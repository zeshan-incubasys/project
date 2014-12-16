<?php include('include/variables.php');?>
<?php  include('include/admin/header.php');?>

<div id="main">
	<?php  include('include/admin/sidebar.php');?>
	
	<div id="content">
		<div class="page-head">
			<span class="page-heading">games list</span>
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
										<option>search by</option>
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
									<th class="sorting">game name</th>
									<th>developer</th>
									<th class="hidden-480">download</th>
									<th class="hidden-phone">competition</th>
									<th class="hidden-480">$revenue</th>
									<th class="hidden-480">active users</th>
									<th class="hidden-480">status</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><a href="#">new game 2</a></td>
									<td><a href="#">212</a></td>
									<td class="hidden-480">1</td>
									<td class="hidden-phone"><a href="#">454</a></td>
									<td class="hidden-phone">jkjkj</td>
									<td class="hidden-phone">kjkjkj</td>
									<td class="hidden-phone">abcdefg</td>
								</tr>
								<tr>
									<td><a href="#">new game 2</a></td>
									<td><a href="#">212</a></td>
									<td class="hidden-480">1</td>
									<td class="hidden-phone"><a href="#">454</a></td>
									<td class="hidden-phone">jkjkj</td>
									<td class="hidden-phone">kjkjkj</td>
									<td class="hidden-phone">abcdefg</td>
								</tr>
								<tr>
									<td><a href="#">new game 2</a></td>
									<td><a href="#">212</a></td>
									<td class="hidden-480">1</td>
									<td class="hidden-phone"><a href="#">454</a></td>
									<td class="hidden-phone">jkjkj</td>
									<td class="hidden-phone">kjkjkj</td>
									<td class="hidden-phone">abcdefg</td>
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