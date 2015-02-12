<?php include('include/variables.php');?>
<?php  include('include/admin/header.php');?>

<div id="main">
	<?php  include('include/admin/sidebar.php');?>

	<div id="content">
		<div class="page-head">
			<span class="page-heading">competitions</span>
			<a class="setting" href="#"></a>
		</div>
		<div class="info-wrapper">
			<div class="block">
				<div class="image-area">
					<div class="holder">
						<div class="image">
							<!-- <img src="<?php echo IMAGE_URL; ?>admin/img1.png" alt=""> -->
						</div>						
					</div>
				</div>
				<div class="text-area">
					<div class="head">
						<strong class="heading">the king <span class="game"><a href="#">temple run</a></span></strong>
						<span class="live">live</span>
					</div>
					<div class="text">
						<p>this is description of competittion. this is description of competittion. this is description of competittion. </p>
					</div>
				</div>
			</div>
			<div class="block">
				<div class="text-area detail">
					<div class="head">
						<strong class="heading">competition Details</strong>
						<span class="title">type <span>V$</span></span>
						<span class="title">total revenue <span>$950</span></span>

						<span class="title">total participants <span>50</span></span>
						<span class="title">start date time <span>10:00</span></span>
						<span class="title">time left <span>02:00 mins</span></span>
						<span class="title">winner <span><a href="#">raza</a></span></span>
					</div>
					<div class="btn-wrap">
						<a href="#">announce winner</a>
						<a href="#">camcel competition</a>
						<a href="#">send reminder to participants</a>
					</div>
				</div>
			</div>
		</div>
		<div class="table-wrapper">
			<div class="holder">
				<div class="block wide-view">
					<div class="heading leader">
						<span>leader board</span>
					</div>
					 <div class="row-fluid">
						<table id="sample-table-2" class="table table-striped table-bordered table-hover">
							<thead>
								<tr>
									<th class="sorting">position</th>
									<th>name</th>
									<th>country</th>
									<th>score</th>
									<th>rank</th>
									<th>time spent</th>
									<th>last activity</th>
									<th>winnings</th>
									<th>status</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td><a href="#">raza</a></td>
									<td>001</td>
									<td>001</td>
									<td>001</td>
									<td>001</td>
									<td>001</td>
									<td>001</td>
									<td>001</td>
								</tr>
								<tr>
									<td>1</td>
									<td><a href="#">raza</a></td>
									<td>001</td>
									<td>001</td>
									<td>001</td>
									<td>001</td>
									<td>001</td>
									<td>001</td>
									<td>001</td>
								</tr>
								<tr>
									<td>1</td>
									<td><a href="#">raza</a></td>
									<td>001</td>
									<td>001</td>
									<td>001</td>
									<td>001</td>
									<td>001</td>
									<td>001</td>
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