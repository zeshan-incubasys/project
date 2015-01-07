<?php include('include/variables.php');?>
<?php  include('include/admin/header.php');?>

<div id="main">
	<?php  include('include/admin/sidebar.php');?>

	<div id="content">
		<div class="page-head">
			<span class="page-heading">developer</span>
			<a class="setting" href="#"></a>
		</div>
		<div class="info-wrapper">
			<div class="block">
				<div class="image-area">
					<div class="holder">
						<img src="<?php echo IMAGE_URL; ?>admin/img1.png" alt="">
					</div>
				</div>
				<div class="text-area">
					<div class="head">
						<strong class="heading">AbuBakar Butt</strong>
						<span class="location">lahore, pakistan</span>
						<span class="mail">Email <a href="mailto:">abubakar@incubasys.com</a></span>
					</div>
					<!-- <div class="rank-area">
						<span class="value">Rank<span>58</span></span>
						<span class="value">v$<span>543</span></span>
						<span class="value">r$<span>1543</span></span>
					</div> -->
					<div class="game-area">
						<span class="value">balance<span><span>$</span>13</span></span>
						<span class="value">games<span>3</span></span>
					</div>
				</div>
			</div>
			<div class="block">
				<div class="text-area">
					<div class="head">
						<strong class="heading">Bank Details</strong>
						<span class="location">Bank <span>ABC Bank</span></span>
						<span class="mail">Account Number <span>072545282662</span></span>
					</div>
					<div class="btn-wrap">
						<a href="#">block Access</a>
						<a href="#">credit account</a>
						<a href="#">edit details</a>
					</div>
				</div>
			</div>
		</div>
		<div class="table-wrapper">
			<div class="holder">
				<div class="block">
					<div class="heading">
						<span>games</span>
					</div>
					 <div class="row-fluid">
						<table id="sample-table-2" class="table table-striped table-bordered table-hover">
							<thead>
								<tr>
									<th class="sorting">game</th>
									<th>download</th>
									<th class="hidden-480">$ earned</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><a href="#">racing fun</a></td>
									<td class="hidden-480">3,7777</td>
									<td>$45</td>
								</tr>
								<tr>
									<td><a href="#">cute temple</a></td>
									<td class="hidden-480">3,7777</td>
									<td>$45</td>
								</tr>
								<tr>
									<td><a href="#">racing fun</a></td>
									<td class="hidden-480">3,7777</td>
									<td>$45</td>
								</tr>
							</tbody>
						</table>
					</div> 
				</div>
				<div class="block">
					<div class="heading">
						<span>Comptetitions</span>
					</div>
					 <div class="row-fluid">
						<table id="sample-table-3" class="table table-striped table-bordered table-hover">
							<thead>
								<tr>
									<th class="sorting">game</th>
									<th>start date</th>
									<th class="hidden-480">competition title</th>
									<th class="hidden-phone">entry fee</th>
									<th class="hidden-480">prize money</th>
									<th class="hidden-480">participants</th>
									<th class="hidden-480">winner</th>
									<th class="hidden-480">dev share</th>
								</tr>
							</thead>
							<tbody>							
								<tr>
									<td><a href="#">game</a></td>
									<td>112222</td>
									<td><a href="#">112222</a></td>
									<td>112222</td>
									<td>112222</td>
									<td>112222</td>
									<td><a href="#">8888</a></td>
									<td>112222</td>
								</tr>
								<tr>
									<td><a href="#">game</a></td>
									<td>112222</td>
									<td><a href="#">112222</a></td>
									<td>112222</td>
									<td>112222</td>
									<td>112222</td>
									<td><a href="#">8888</a></td>
									<td>112222</td>
								</tr>
								<tr>
									<td><a href="#">game</a></td>
									<td>112222</td>
									<td><a href="#">112222</a></td>
									<td>112222</td>
									<td>112222</td>
									<td>112222</td>
									<td><a href="#">8888</a></td>
									<td>112222</td>
								</tr>
							</tbody>
						</table>
					</div> 

				</div>
			</div>
			<div class="holder even">
				<div class="block">
					<div class="heading">
						<span>checkout history</span>
					</div>
					 <div class="row-fluid">
						<table id="sample-table-4" class="table table-striped table-bordered table-hover">
							<thead>
								<tr>
									<th class="sorting">date</th>
									<th>amount</th>
									<th>source</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>3,7777</td>
									<td>Feb 12</td>
									<td>Feb 12</td>
								</tr>
							</tbody>
						</table>
					</div> 
				</div>
				<div class="block">
				</div>
			</div>
		</div>
	</div>
</div>

<?php include('include/admin/footer.php');?>