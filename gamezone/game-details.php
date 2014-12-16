<?php include('include/variables.php');?>
<?php  include('include/admin/header.php');?>

<div id="main">
	<?php  include('include/admin/sidebar.php');?>

	<div id="content">
		<div class="page-head">
			<span class="page-heading">game detail</span>
			<a class="setting" href="#"></a>
		</div>
		<div class="info-wrapper">
			<div class="block">
				<div class="dp-area">
					<div class="holder">
						<img src="<?php echo IMAGE_URL; ?>admin/img1.png" alt="">
					</div>
				</div>
				<div class="text-area">
					<div class="head">
						<strong class="heading"><a href="#">game name</a></strong>
						<!-- <span class="live">live</span> -->
					</div>
					<div class="text">
						<p>this is description of competittion. this is description of competittion. this is description of competittion. </p>
					</div>
				</div>
			</div>
			<div class="block">
				<div class="text-area detail">
					<div class="head">
						<strong class="heading">game Details</strong>
						<span class="title">developed by <span><a href="#">raza</a></span></span>
						<span class="title">revenue <span>$950</span></span>
						<span class="title">competitions <span>2</span></span>
					</div>
					<div class="btn-wrap">
						<a href="#">add competition</a>
						<a href="#">edit detail</a>
						<a href="#">block game</a>
					</div>
				</div>
			</div>
		</div>
		<div class="chart-wrapper">
			<div class="block">
				<img alt="" src="http://localhost/project/gamezone/images/admin/img2.png">
			</div>
			<div class="block">
				<img alt="" src="http://localhost/project/gamezone/images/admin/img2.png">
			</div>
		</div>
		<div class="table-wrapper">
			<div class="holder">
				<div class="block wide-view">
					<div class="heading">
						<span>competitions</span>
					</div>
					 <div class="row-fluid">
						<table id="sample-table-2" class="table table-striped table-bordered table-hover">
							<thead>
								<tr>
									<th class="sorting">start date</th>
									<th>competition title</th>
									<th>entry fee</th>
									<th>prize money</th>
									<th>participants</th>
									<th>winner</th>
									<th>dev share</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td><a href="#">raza</a></td>
									<td>001</td>
									<td>001</td>
									<td>001</td>
									<td><a href="">raza</a></td>
									<td>001</td>
								</tr>
								<tr>
									<td>1</td>
									<td><a href="#">raza</a></td>
									<td>001</td>
									<td>001</td>
									<td>001</td>
									<td><a href="">raza</a></td>
									<td>001</td>
								</tr>
								<tr>
									<td>1</td>
									<td><a href="#">raza</a></td>
									<td>001</td>
									<td>001</td>
									<td>001</td>
									<td><a href="">raza</a></td>
									<td>001</td>
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