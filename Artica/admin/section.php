<?php
include_once('php/header.php');
$page_title = $_GET['page'];
?>
	<div id="main" class="section">
		<?php
			//Add home slider1 
			if(isset($_POST['home-submit1'])){
				$result = '';
				$image_name = $_FILES['home-image1']['name'];
				$image_size = $_FILES['home-image1']['size'];
				$image_type = $_FILES['home-image1']['type'];
				$image_tmp = $_FILES['home-image1']['tmp_name'];
				
				if(!empty($image_name)){
					
					if($image_size >= 512000){
						$result .= "<p>File size should be less than 500KBs</p>";
					}
					
					if(($image_type != 'image/jpg' && $image_type != 'image/pjpeg' && $image_type != "image/jpeg")){
						$result .= '<p>File should be in JPG format</p>';
					}
					if($result == ''){
						$query = mysql_query("SELECT * FROM home_slider1 ORDER BY id desc LIMIT 1");
						$count = mysql_num_rows($query);
						if ($count > 0){
							while($rows = mysql_fetch_array($query)){
								$id = $rows['id'];
							}
						}
						
						$id = $id + 1;
						$url = '../images/slider.1.'.$id.'.jpg';
						$up_url = 'images/slider.1.'.$id.'.jpg';
						$query = mysql_query("INSERT INTO home_slider1 (`image_url`) values('$up_url')")or die(mysql_error());
						
						if($query){
							move_uploaded_file($image_tmp, $url);
							echo '<div class="message-area">Page has been Edit Successfully !</div>';
						}
						
					}else{ 
						echo '<div class="message-area error">'.$result.'</div>';
					}
					
				}else{
					$result .= "<p>Please Select an Image</p>";
					echo '<div class="message-area error">'.$result.'</div>';
				}
			}
			if(isset($_POST['home-submit2'])){
				$result = '';
				$image_name = $_FILES['home-image2']['name'];
				$image_size = $_FILES['home-image2']['size'];
				$image_type = $_FILES['home-image2']['type'];
				$image_tmp = $_FILES['home-image2']['tmp_name'];
				
				if(!empty($image_name)){
					
					if($image_size >= 512000){
						$result .= "<p>File size should be less than 500KBs</p>";
					}
					
					if(($image_type != 'image/jpg' && $image_type != 'image/pjpeg' && $image_type != "image/jpeg")){
						$result .= '<p>File should be in JPG format</p>';
					}
					if($result == ''){
						$query = mysql_query("SELECT * FROM home_slider2 ORDER BY id desc LIMIT 1");
						$count = mysql_num_rows($query);
						if ($count > 0){
							while($rows = mysql_fetch_array($query)){
								$id = $rows['id'];
							}
						}
						
						$id = $id + 1;
						$url = '../images/slider.2.'.$id.'.jpg';
						$up_url = 'images/slider.2.'.$id.'.jpg';
						$query = mysql_query("INSERT INTO home_slider2 (`image_url`) values('$up_url')")or die(mysql_error());
						
						if($query){
							move_uploaded_file($image_tmp, $url);
							echo '<div class="message-area">Page has been Edit Successfully !</div>';
						}
						
					}else{ 
						echo '<div class="message-area error">'.$result.'</div>';
					}
					
				}else{
					$result .= "<p>Please Select an Image</p>";
					echo '<div class="message-area error">'.$result.'</div>';
				}
			}
			
			if(isset($_POST['about-submit'])){
				$result = '';
				$about_desc = mysql_real_escape_string(stripslashes($_POST['about-desc']));
				$more_desc = mysql_real_escape_string(stripslashes($_POST['more-desc']));
				
				if(!empty($about_desc)){
					
					if($result == ''){
						
						$query = mysql_query("UPDATE pages SET page_desc='$about_desc', more_desc='$more_desc' WHERE page_name='$page_title'");
						if($query){
							echo '<div class="message-area">Page has been Edit Successfully !</div>';
						}
						
					}else{ 
						echo '<div class="message-area error">'.$result.'</div>';
					}
					
				}else{
					$result .= "<p>Please fill in atleast ONE of the fields</p>";
					echo '<div class="message-area error">'.$result.'</div>';
				}
			}
			
			// Add new value for Space Section
			
			if(isset($_POST['new-submit'])){
				$result = '';
				$heading = mysql_real_escape_string($_POST['heading']);
				$title = mysql_real_escape_string($_POST['title']);
				$desc = mysql_real_escape_string($_POST['desc']);
				$id = mysql_real_escape_string($_POST['id']);
				$image_name = $_FILES['image']['name'];
				$image_size = $_FILES['image']['size'];
				$image_type = $_FILES['image']['type'];
				$image_tmp = $_FILES['image']['tmp_name'];
				$subimage_name = $_FILES['subimage']['name'];
				$subimage_size = $_FILES['subimage']['size'];
				$subimage_type = $_FILES['subimage']['type'];
				$subimage_tmp = $_FILES['subimage']['tmp_name'];
				
				if(isset($image_name) && isset($title) && isset($heading) && isset($desc)){
					
					if(isset($subimage_name)){
					
						if($image_size >= 512000 && !empty($image_name)){
							$result .= "<p>File size should be less than 500KBs</p>";
						}
						
						if(($image_type != 'image/jpg' && $image_type != 'image/pjpeg' && $image_type != "image/jpeg") && !empty($image_name)){
							$result .= '<p>File should be in JPG format</p>';
						}
						
						if($subimage_size >= 512000){
							$result .= "<p>Slider Image's size should be less than 500KBs</p>";
						}
						if($result == ''){
							$id++;
							$image_url = '../images/space'.$id.'.jpg';
							$up_url = str_replace('../', '', $image_url);
							$query = mysql_query("INSERT INTO space (`image-url`, heading, title, description) values('$up_url', '$heading', '$title', '$desc')")or die(mysql_error());
							if($query){
								move_uploaded_file($image_tmp, $image_url);
								$id = mysql_insert_id();
								
								$subimage_url = '../images/space'.$id.'.1.jpg';
								
								$query = mysql_query("INSERT INTO portfolio (`space_id`, subimage_url) values('$id', '$subimage_url')")or die(mysql_error());
								if($query){
									move_uploaded_file($subimage_tmp, $subimage_url);
									echo '<div class="message-area">New Item has Added Successfully.</div>';
								}
							}
							
						}else{ 
							echo '<div class="message-area error">'.$result.'</div>';
						}
					
					}else{
						$result .= "<p>Please select Image for Slider</p>";
						echo '<div class="message-area error">'.$result.'</div>';
					}
					
				}else{
					$result .= "<p>Please fill in ALL of the fields</p>";
					echo '<div class="message-area error">'.$result.'</div>';
				}
			}
			
			// Add new Items for Client Section
			
			if(isset($_POST['client-submit'])){
				$result = '';
				$link = mysql_real_escape_string($_POST['link']);
				$image_name = $_FILES['clientimage']['name'];
				$image_size = $_FILES['clientimage']['size'];
				$image_type = $_FILES['clientimage']['type'];
				$image_tmp = $_FILES['clientimage']['tmp_name'];
				
				if(isset($image_name) && isset($link)){
					
					if($image_size >= 512000 && !empty($image_name)){
						$result .= "<p>File size should be less than 500KBs</p>";
					}
					
					if(($image_type != 'image/png') && !empty($image_name)){
						$result .= '<p>File should be in PNG format</p>';
					}
					
					if($result == ''){
						
						$query = mysql_query("SELECT * FROM clients") or die(mysql_error());
						$count = mysql_num_rows($query);
						$count = $count + 1;
						
						$url = '../images/logo-'.$count.'.png';
						$up_url = str_replace('../', '', $url);
						$query = mysql_query("INSERT INTO clients (link, `image_url`) values('$link', '$up_url')")or die(mysql_error());
						if($query){
							move_uploaded_file($image_tmp, $url);
							echo '<div class="message-area">New LOGO has Added Successfully.</div>';
						}
					}else{ 
						echo '<div class="message-area error">'.$result.'</div>';
					}
					
				}else{
					$result .= "<p>Please fill in ALL of the fields</p>";
					echo '<div class="message-area error">'.$result.'</div>';
				}
			}
			
			// Add new Items for Team Section
			
			if(isset($_POST['team-submit'])){
				$result = '';
				$name = mysql_real_escape_string($_POST['name']);
				$desi = mysql_real_escape_string($_POST['desi']);
				$desc = mysql_real_escape_string($_POST['desc']);
				$thumb_image_name = $_FILES['thumbimage']['name'];
				$thumb_image_size = $_FILES['thumbimage']['size'];
				$thumb_image_type = $_FILES['thumbimage']['type'];
				$thumb_image_tmp = $_FILES['thumbimage']['tmp_name'];
				$image_name = $_FILES['teamimage']['name'];
				$image_size = $_FILES['teamimage']['size'];
				$image_type = $_FILES['teamimage']['type'];
				$image_tmp = $_FILES['teamimage']['tmp_name'];
				
				if(!empty($thumb_image_name) && !empty($name) && !empty($desi)){
					
					if($image_size >= 512000 && !empty($image_name)){
						$result .= "<p>Image File size should be less than 500KBs</p>";
					}
					
					if(($image_type != 'image/png') && !empty($image_name)){
						$result .= "<p>Image should be in PNG Format</p>";
					}
					
					if($thumb_image_size >= 512000 && !empty($thumb_image_name)){
						$result .= "<p>Thumbnail File size should be less than 500KBs</p>";
					}
					
					if($thumb_image_type != 'image/jpg' && $thumb_image_type != 'image/pjpeg' && $thumb_image_type != "image/jpeg"){
						$result .= "<p>Thumbnail Image should be in JPG Format</p>";
					}
					
					if($result == ''){
						
						$query = mysql_query("SELECT * FROM teams") or die(mysql_error());
						$count = mysql_num_rows($query);
						$count = $count + 1;
						
						$thumb_url = '../images/team'.$count.'.jpg';
						$thumb_up_url = str_replace('../', '', $thumb_url);
						$image_url = '../images/'.$name.'.png';
						$image_up_url = str_replace('../', '', $image_url);
						$query = mysql_query("INSERT INTO teams (name, designation, thumb_url, `image_url`, description) values('$name', '$desi', '$thumb_up_url', '$image_up_url', '$desc')")or die(mysql_error());
						if($query){
							move_uploaded_file($thumb_image_tmp, $thumb_url);
							move_uploaded_file($image_tmp, $image_url);
							echo '<div class="message-area">New TEAM MEMBER has been Added Successfully.</div>';
						}
					}else{ 
						echo '<div class="message-area error">'.$result.'</div>';
					}
					
				}else{
					$result .= "<p>Please fill in NAME DESIGNATION and TEAM THUMBNAIL IMAGE</p>";
					echo '<div class="message-area error">'.$result.'</div>';
				}
			}
			
			// Add new Items for Testimonial Section
			if(isset($_POST['testi-submit'])){
				$result = '';
				$author = mysql_real_escape_string(stripslashes($_POST['author']));
				$testi = mysql_real_escape_string(stripslashes($_POST['testi']));
				
				if(!empty($author) && !empty($testi)){
						
					$query = mysql_query("INSERT INTO testimonials (author, testimonial) values('$author', '$testi')")or die(mysql_error());
					if($query){
						echo '<div class="message-area">New Quote has been Added Successfully !</div>';
					}
					
				}else{
					$result .= "<p>Please fill in All the fields</p>";
					echo '<div class="message-area error">'.$result.'</div>';
				}
			}
		?>
		<?php if($page_title == 'home'){ ?>
		<h2>Left Slider Details</h2>
		<table width="100%" border="0" cellpadding="0" cellspacing="0">
			<tr>
				<th>Image Url</th>
				<th>Image</th>
				<th>Action</th>
			</tr>
		<?php
			$query = mysql_query("SELECT * FROM home_slider1");
			$count = mysql_num_rows($query);
		
			if($count > 0){
				while($rows = mysql_fetch_array($query)){
					$id = $rows['id'];
					$url = $rows['image_url'];
		?>
			<tr>
				<td><?php if(isset($url)){ echo $url; }else{ echo 'No Data Available'; } ?></td>
				<td><img src="../<?php if(isset($url)){ echo $url; } ?>" alt="" width="200" height="100"></td>
				<td><a href="delete.php?id=<?php echo $id ?>&table=home_slider1" class="btn">Delete</a></td>
			</tr>
		<?php 	}
			}?>
		</table>
		<div class="btn-area">
			<a href="#" class="btn edit">Add</a>
		</div>
		<form class="edit-form" action="<?php $_SERVER["PHP_SELF"] ?>" method="post" enctype="multipart/form-data">
			<fieldset>
				<div class="row">
					<label for="image1">Add New Image</label>
					<input type="file" name="home-image1" id="image1">
				</div>
				<input type="submit" value="Save" name="home-submit1">
			</fieldset>
		</form>
		<h2>Right Slider Details</h2>
		<table width="100%" border="0" cellpadding="0" cellspacing="0">
			<tr>
				<th>Image Url</th>
				<th>Image</th>
				<th>Action</th>
			</tr>
		<?php
			$query = mysql_query("SELECT * FROM home_slider2");
			$count = mysql_num_rows($query);
		
			if($count > 0){
				while($rows = mysql_fetch_array($query)){
					$id = $rows['id'];
					$url = $rows['image_url'];
		?>
			<tr>
				<td><?php if(isset($url)){ echo $url; }else{ echo 'No Data Available'; } ?></td>
				<td><img src="../<?php if(isset($url)){ echo $url; } ?>" alt="" width="200" height="100"></td>
				<td><a href="delete.php?id=<?php echo $id ?>&table=home_slider2" class="btn">Delete</a></td>
			</tr>
		<?php 	}
			}?>
		</table>
		<div class="btn-area">
			<a href="#" class="btn edit">Add</a>
		</div>
		<form class="edit-form" action="<?php $_SERVER["PHP_SELF"] ?>" method="post" enctype="multipart/form-data">
			<fieldset>
				<div class="row">
					<label for="image2">Add New Image</label>
					<input type="file" name="home-image2" id="image2">
				</div>
				<input type="submit" value="Save" name="home-submit2">
			</fieldset>
		</form>
		<?php } ?>
		<?php if($page_title == 'about'){
			$query_home = mysql_query("SELECT * FROM pages WHERE page_name = '$page_title'");
			$count = mysql_num_rows($query_home);
		
			if($count > 0){
				while($rows = mysql_fetch_array($query_home)){
					$id = $rows['id'];
					$page_name = $rows['page_name'];
					$page_desc = $rows['page_desc'];
					$more_desc = $rows['more_desc'];
				}
			}
		?>
		<table width="100%" border="0" cellpadding="0" cellspacing="0">
			<tr>
				<th>Page Description</th>
				<th>More Description</th>
			</tr>
			<tr>
				<td><textarea readonly><?php if(isset($page_desc)){ echo trim($page_desc); }else{ echo 'Doesn\'t have any Description'; }?></textarea></td>
				<td><textarea readonly><?php if(isset($more_desc)){ echo trim($more_desc); }else{ echo 'Doesn\'t have any Description'; }?></textarea></td>
			</tr>
		</table>
		<div class="btn-area">
			<a href="#" class="btn edit">Edit</a>
		</div>
		<form class="edit-form" action="<?php $_SERVER["PHP_SELF"] ?>" method="post">
			<fieldset>
				<div class="row">
					<label for="desc">Edit Description</label>
					<textarea cols="30" rows="5" id="desc" name="about-desc"><?php if(isset($page_desc)){ echo trim($page_desc); }?></textarea>
				</div>
				<div class="row">
					<label for="more-desc">Edit More Description</label>
					<textarea cols="30" rows="5" id="more-desc" name="more-desc"><?php if(isset($more_desc)){ echo trim($more_desc); }?></textarea>
				</div>
				<input type="submit" value="Save" name="about-submit">
			</fieldset>
		</form>
		<?php } ?>
		
		<?php if($page_title == 'space'){ 
			$query = mysql_query("SELECT * FROM space ORDER BY id desc LIMIT 1");
			$count = mysql_num_rows($query);
		
			if($count > 0){
				while($rows = mysql_fetch_array($query)){
					$id = $rows['id'];
				}
			}
		?>	
		<div class="btn-area">
			<a href="#" class="btn edit">Add New</a>
		</div>
		<form class="edit-form" action="<?php $_SERVER["PHP_SELF"] ?>" method="post" enctype="multipart/form-data">
			<fieldset>
				<div class="row">
					<label for="heading">Heading</label>
					<input type="text" name="heading" id="heading">
				</div>
				<div class="row">
					<label for="title">Title</label>
					<input type="text" name="title" id="title">
				</div>
				<div class="row">
					<label for="desc">Description</label>
					<textarea cols="5" name="desc" rows="10" id="desc"></textarea>
				</div>
				<div class="row">
					<label for="image">Image</label>
					<input type="file" name="image" id="image">
				</div>
				<input type="hidden" name="id" value="<?php echo $id ?>">
				<div class="row">
					<label for="subimage">SubImage</label>
					<input type="file" name="subimage" id="subimage">
				</div>
				<input type="submit" value="Add" name="new-submit">
			</fieldset>
		</form>
		<table width="100%" border="0" cellpadding="0" cellspacing="0">
			<tr>
				<th>Image Heading</th>
				<th>Image Title</th>
				<th>Image Description</th>
				<th>Image Url</th>
				<th>Image </th>
				<th>Edit</th>
			</tr>
		<?php 
			$query = mysql_query("SELECT * FROM space");
			$count = mysql_num_rows($query);
		
			if($count > 0){
				while($rows = mysql_fetch_array($query)){
					$id = $rows['id'];
					$image_url = $rows['image-url'];
					$heading = $rows['heading'];
					$title = $rows['title'];
					$desc = $rows['description'];
		?>	
			<tr>
				<td><?php if(isset($heading)){ echo trim($heading); }else{ echo 'Doesn\'t have any Heading'; }?></td>
				<td><?php if(isset($title)){ echo trim($title); }else{ echo 'Doesn\'t have any Title'; }?></td>
				<td width="130"><?php if(isset($desc)){ echo trim($desc); }else{ echo 'Doesn\'t have any Description'; }?></td>
				<td><?php if(isset($image_url)){ echo trim($image_url); }else{ echo 'Doesn\'t have any Image'; }?></td>
				<td width="90"><img src="../<?php if(isset($image_url)){ echo trim($image_url); } ?>" alt="" width="200" height="100"></td>
				<td>
					<a href="edit.php?space_id=<?php echo $id; ?>" class="btn">Edit</a>
				</td>
			</tr>
		<?php
				}
			}
		?>
		</table>
		<?php } ?>
		
		<?php if($page_title == 'client'){?>
		
		<div class="btn-area">
			<a href="#" class="btn edit">Add New</a>
		</div>
		<form class="edit-form" action="<?php $_SERVER["PHP_SELF"] ?>" method="post" enctype="multipart/form-data">
			<fieldset>
				<div class="row">
					<label for="link">Link</label>
					<input type="text" name="link" id="link">
				</div>
				<div class="row">
					<label for="clientimage">Client Logo</label>
					<input type="file" name="clientimage" id="clientimage">
				</div>
				<input type="submit" value="Add" name="client-submit">
			</fieldset>
		</form>
		<table width="100%" border="0" cellpadding="0" cellspacing="0">
			<tr>
				<th>Link for Image</th>
				<th>Image Url</th>
				<th>Image </th>
				<th>Edit</th>
			</tr>
		<?php 
			$query = mysql_query("SELECT * FROM clients");
			$count = mysql_num_rows($query);
		
			if($count > 0){
				while($rows = mysql_fetch_array($query)){
					$id = $rows['id'];
					$image_url = $rows['image_url'];
					$link = $rows['link'];
		?>	
			<tr>
				<td><?php if(isset($link)){ echo trim($link); }else{ echo 'Doesn\'t have any Link'; }?></td>
				<td><?php if(isset($image_url)){ echo trim($image_url); }else{ echo 'Doesn\'t have any Image'; }?></td>
				<td width="90"><img src="../<?php if(isset($image_url)){ echo trim($image_url); } ?>" alt=""></td>
				<td>
					<a href="edit.php?client_id=<?php echo $id; ?>" class="btn">Edit</a>
				</td>
			</tr>
		<?php
				}
			}
		?>
		</table>
		<?php
		} ?>
		
		
		<?php if($page_title == 'team'){?>
		
		<div class="btn-area">
			<a href="#" class="btn edit">Add New</a>
		</div>
		<form class="edit-form" action="<?php $_SERVER["PHP_SELF"] ?>" method="post" enctype="multipart/form-data">
			<fieldset>
				<div class="row">
					<label for="name">Name</label>
					<input type="text" name="name" id="name">
				</div>
				<div class="row">
					<label for="desi">Designation</label>
					<input type="text" name="desi" id="desi">
				</div>
				<div class="row">
					<label for="thumbimage">Team Thumb Image</label>
					<input type="file" name="thumbimage" id="thumbimage">
				</div>
				<div class="row">
					<label for="teamimage">Team Image</label>
					<input type="file" name="teamimage" id="teamimage">
				</div>
				<div class="row">
					<label for="desc">Description</label>
					<textarea cols="10" rows="5" id="desc" name="desc"></textarea>
				</div>
				<input type="submit" value="Add" name="team-submit">
			</fieldset>
		</form>
		<table width="100%" border="0" cellpadding="0" cellspacing="0">
			<tr>
				<th>Name</th>
				<th>Designation</th>
				<th>Thumb Url</th>
				<th>Thumb Image</th>
				<th>Image Url</th>
				<th>Image</th>
				<th>Description</th>
				<th>Edit</th>
			</tr>
		<?php 
			$query = mysql_query("SELECT * FROM teams");
			$count = mysql_num_rows($query);
		
			if($count > 0){
				while($rows = mysql_fetch_array($query)){
					$id = $rows['id'];
					$name = $rows['name'];
					$designation = $rows['designation'];
					$thumb_url = $rows['thumb_url'];
					$image_url = $rows['image_url'];
					$desc = $rows['description'];
		?>	
			<tr>
				<td><?php if(isset($name)){ echo trim($name); }else{ echo 'Doesn\'t have any Name'; }?></td>
				<td><?php if(isset($designation)){ echo trim($designation); }else{ echo 'Doesn\'t have any Name'; }?></td>
				<td><?php if(isset($thumb_url)){ echo trim($thumb_url); }else{ echo 'Doesn\'t have any Image'; }?></td>
				<td><img src="../<?php if(isset($thumb_url)){ echo trim($thumb_url); } ?>" alt="" width="100" height="100"></td>
				<td><?php if(isset($image_url)){ echo trim($image_url); }else{ echo 'Doesn\'t have any Image'; }?></td>
				<td><img src="../<?php if(isset($image_url)){ echo trim($image_url); } ?>" alt="" width="150" height="150"></td>
				<td width="300"><?php if(isset($desc)){ echo trim($desc); }else{ echo 'Doesn\'t have any Name'; }?></td>
				<td>
					<a href="edit.php?team_id=<?php echo $id; ?>" class="btn">Edit</a>
				</td>
			</tr>
		<?php
				}
			}
		?>
		</table>
		<?php
		} ?>
		
		<?php if($page_title == 'testimonial'){?>
		
		<div class="btn-area">
			<a href="#" class="btn edit">Add New</a>
		</div>
		<form class="edit-form" action="<?php $_SERVER["PHP_SELF"] ?>" method="post">
			<fieldset>
				<div class="row">
					<label for="author">Author</label>
					<input type="text" name="author" id="author">
				</div>
				<div class="row">
					<label for="testi">Quote</label>
					<textarea cols="10" rows="5" id="testi" name="testi"></textarea>
				</div>
				<input type="submit" value="Add" name="testi-submit">
			</fieldset>
		</form>
		<table width="100%" border="0" cellpadding="0" cellspacing="0">
			<tr>
				<th>Quotes</th>
				<th>Author</th>
				<th>Edit</th>
			</tr>
		<?php 
			$query = mysql_query("SELECT * FROM testimonials");
			$count = mysql_num_rows($query);
		
			if($count > 0){
				while($rows = mysql_fetch_array($query)){
					$id = $rows['id'];
					$testi = $rows['testimonial'];
					$author = $rows['author'];
		?>	
			<tr>
				<td><?php if(isset($testi)){ echo trim($testi); }else{ echo 'Doesn\'t have any Testimonials'; }?></td>
				<td><?php if(isset($author)){ echo trim($author); }else{ echo 'Doesn\'t have any Author'; }?></td>
				<td>
					<a href="edit.php?testi_id=<?php echo $id; ?>" class="btn">Edit</a>
				</td>
			</tr>
		<?php
				}
			}
		?>
		</table>
		<?php
		} ?>
	</div>
</body>
</html>