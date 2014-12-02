<?php
include_once('php/header.php');

if (!empty($_FILES)){

	$result = '';
	$title = $_POST['title'];
	$desc = $_POST['desc'];
	$cat = $_POST['cat'];
	$image_name = $_FILES['home-image1']['name'];
	$image_size = $_FILES['home-image1']['size'];
	$image_type = $_FILES['home-image1']['type'];
	$image_tmp = $_FILES['home-image1']['tmp_name'];

	
	if(!empty($image_name) && !empty($title) && !empty($desc) && $cat != 'select'){
		
		if($image_size >= 612000){
			$result .= "<p>File size should be less than 600KBs</p>";
		}
		
		if(($image_type != 'image/jpg' && $image_type != 'image/pjpeg' && $image_type != "image/jpeg")){
			$result .= '<p>File should be in JPG format</p>';
		}
		if($result == ''){
			$query = mysql_query("SELECT * FROM projects ORDER BY id desc LIMIT 1");
			$count = mysql_num_rows($query);
			if ($count > 0){
				while($rows = mysql_fetch_array($query)){
					$id = $rows['id'];
				}
				
				$id = $id + 1;
				$url = '../images/project'.$id.'.jpg';
				$up_url = 'images/project'.$id.'.jpg';
			}else{
				$url = '../images/project1.jpg';
				$up_url = 'images/project1.jpg';
			}
			
			$query = mysql_query("INSERT INTO projects (image_url, title, description, cat) values('$up_url', '$title', '$desc', '$cat')") or die(mysql_error());
			if($query){
				move_uploaded_file($image_tmp, $url);
				echo '<div class="message-area">Page has been Edit Successfully !</div>';
			}
			
		}else{ 
			echo '<div class="message-area error">'.$result.'</div>';
		}
		
	}else{echo '<div class="message-area error">Please Select All the Fields</div>';}
}
?>
<div id="main">
<form class="edit-form" action = "project.php" method="post" enctype="multipart/form-data">
		
 <fieldset>
	<div class="row">
		<label for="image1">Image (Preferable size is 200px x 300px)</label>
		<input type="file" name="home-image1" id="image1">
	</div>
	<div class="row">
		<label for="title">Title</label>
		<input type="text" id="title" name="title">
	</div>
	<div class="row">
		<label for="cat">Category</label>
		<select name="cat" id="cat">
			<option value="select">SELECT</option>
			<option value="residential">Residential</option>
			<option value="commercial">Commercial</option>
			<option value="hospitality">Hospitality</option>
			<option value="retail">Retail</option>
		</select>
	</div>
	<div class="row">
		<label for="desc">Description</label>
		<textarea cols="5" rows="10" id="desc" name="desc"></textarea>
	</div>
	<input type="submit" value="Add">
</fieldset>	
</form>
<table>
	<tr>
		<th>
			Image
		</th>
		<th>
			Title
		</th>
		<th>
			Description
		</th>
		<th>
			Category
		</th>
		<th>
			Action
		</th>
	</tr>

	<?php
		$query = mysql_query("SELECT * FROM projects");
			$count = mysql_num_rows($query);
			if ($count > 0){
				while($rows = mysql_fetch_array($query)){ ?>
				<tr>
						
					<td>
						<img src = "../<?= $rows['image_url']; ?>" alt = "image holder"/>
					</td>
					<td>
						<?= $rows['title']; ?>
					</td>
					<td width="250">
						<?= $rows['description']; ?>
					</td>
					<td>
						<?= $rows['cat']; ?>
					</td>
					<td>
						<a href="delete.php?id=<?= $rows['id'] ?>&table=projects">Delete</a><br><br>
						<a href="edit.php?id=<?= $rows['id'] ?>">Edit / Add Sub Images</a>
					</td>

				</tr>

	<?php }}?>

</table>
</div>