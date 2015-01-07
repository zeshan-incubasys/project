
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
			<h2>view all games</h2>
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
									<th class="sorting">title</th>
									<th>type</th>
									<th class="hidden-480">feature</th>
									<th class="hidden-phone">status</th>
									<th class="hidden-480">details</th>
									<th class="hidden-480">download</th>
									<th class="hidden-480">create tournament</th>
								</tr>
							</thead>

							<tbody>
								<tr>
									<td><a href="#">new game 1</a></td>
									<td>free</td>
									<td class="hidden-480">1</td>
									<td class="hidden-phone">1</td>
									<td class="hidden-phone"><a href="#">view details</a></td>
									<td class="hidden-phone"><a href="#">download</a></td>
									<td class="hidden-phone"><a href="#">create tournament</a></td>
								</tr>
								<tr>
									<td><a href="#">new game 1</a></td>
									<td>free</td>
									<td class="hidden-480">1</td>
									<td class="hidden-phone">1</td>
									<td class="hidden-phone"><a href="#">view details</a></td>
									<td class="hidden-phone"><a href="#">download</a></td>
									<td class="hidden-phone"><a href="#">create tournament</a></td>
								</tr>								
							</tbody>
						</table>
					</div> 
				</div>
			</div>
		</div>
	</div>
</div>
<?php include('include/footer.php');?>