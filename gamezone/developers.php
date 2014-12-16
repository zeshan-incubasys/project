<?php include('include/variables.php');?>
<?php  include('include/admin/header.php');?>

<div id="main">
	<?php  include('include/admin/sidebar.php');?>
	
	<div id="content">
		<div class="page-head">
			<span class="page-heading">developers</span>
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
									<th class="sorting">name</th>
									<th>country</th>
									<th class="hidden-480">$ earned</th>
									<th class="hidden-phone">downloads</th>
									<th class="hidden-480">popular game</th>
									<th class="hidden-480">signup date</th>
									<th class="hidden-480">games</th>
									<th class="hidden-480">status</th>
								</tr>
							</thead>

							<tbody>
								<tr>
									<td><a href="#">hussnain 123</a></td>
									<td>pakistan</td>
									<td class="hidden-480">2</td>
									<td class="hidden-phone">aabbcc</td>
									<td class="hidden-phone"><a href="#">temple run</a></td>
									<td>11</td>
									<td>22</td>
									<td>33</td>
								</tr>
								<tr>
									<td><a href="#">hussnain 123</a></td>
									<td>pakistan</td>
									<td class="hidden-480">2</td>
									<td class="hidden-phone">aabbcc</td>
									<td class="hidden-phone"><a href="#">temple run</a></td>
									<td>11</td>
									<td>22</td>
									<td>33</td>
								</tr>
								<tr>
									<td><a href="#">hussnain 123</a></td>
									<td>pakistan</td>
									<td class="hidden-480">2</td>
									<td class="hidden-phone">aabbcc</td>
									<td class="hidden-phone"><a href="#">temple run</a></td>
									<td>11</td>
									<td>22</td>
									<td>33</td>
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