<?php
include_once('php/header.php');
if(isset($_GET['id'])){
	$id = $_GET['id'];
	$pid = $id; 
	$query = mysql_query("SELECT * FROM projects WHERE id = $id");
	$count = mysql_num_rows($query);
	if ($count > 0){
		while($rows = mysql_fetch_array($query)){ 
			$image_url = $rows['image_url'];
			$desc = $rows['description'];
			$title = $rows['title'];
			$cat = $rows['cat'];
		}
	}
			
if (isset($_POST['project-edit'])){

	$result = '';
	$title = $_POST['title'];
	$desc = mysql_real_escape_string(stripslashes($_POST['desc']));
	$cat = mysql_real_escape_string(stripslashes($_POST['cat']));
	$image_name = $_FILES['home-image1']['name'];
	$image_size = $_FILES['home-image1']['size'];
	$image_type = $_FILES['home-image1']['type'];
	$image_tmp = $_FILES['home-image1']['tmp_name'];

	
	if(!empty($image_name) || !empty($title) || !empty($desc) || $cat != 'select'){
		
		/*if(!empty($image_name)){
			if($image_size >= 612000 ){
				$result .= "<p>File size should be less than 600KBs</p>";
			}
			
			if(($image_type != 'image/jpg' || $image_type != 'image/pjpeg' || $image_type != "image/jpeg")){
				$result .= '<p>File should be in JPG format</p>';
			}
		}*/
		if($result == ''){
			
			$url = '../images/project'.$pid.'.jpg';
			$up_url = 'images/project'.$pid.'.jpg';
			$query = "UPDATE projects SET title = '$title', description = '$desc', image_url = '$up_url', cat = '$cat' WHERE id = '$pid'";
			$update_result = mysql_query($query)or die(mysql_error());
			if($update_result){
				if(!empty($image_name)){
					move_uploaded_file($image_tmp, $url);
				}
				echo '<div class="message-area">Page has been Edit Successfully !</div>';
			}
			
		}else{ 
			echo '<div class="message-area error">'.$result.'</div>';
		}
		
	}
}

if (isset($_POST['subimage'])){

	$result = '';
	$id = $_POST['id'];
	$image_name = $_FILES['image2']['name'];
	$image_size = $_FILES['image2']['size'];
	$image_type = $_FILES['image2']['type'];
	$image_tmp = $_FILES['image2']['tmp_name'];
	print_r($_FILES['image2']);
	if(!empty($image_name)){
		
		/*if($image_size >= 612000){
			$result .= "<p>File size should be less than 600KBs</p>";
		}
		
		if(($image_type != 'image/jpg' || $image_type != 'image/pjpeg' || $image_type != "image/jpeg")){
			$result .= '<p>File should be in JPG format</p>';
		}*/
		
		if($result == ''){
			$query = mysql_query("SELECT * FROM project_subimages WHERE project_id = $id ORDER BY id DESC LIMIT 1");
			  $count = mysql_num_rows($query);
			 $name=array();
			   if ($count > 0){
			  while($row = mysql_fetch_array($query)){
					$name=explode('.',$row['image_url']);
			 }
			}
			$count = $name[1] + 1;
			$url = '../images/project'.$id.'.'.$count.'.jpg';
			$up_url = 'images/project'.$id.'.'.$count.'.jpg';


			$query = mysql_query("INSERT INTO project_subimages (image_url, project_id) values('$up_url', '$id')") or die(mysql_error());
			  $query=0;
			  if($query){
				move_uploaded_file($image_tmp, $url);
				echo '<div class="message-area">Image Has been Added Successfully !</div>';
			}
		}else{echo '<div class="message-area error">'.$result.'</div>';}
	}else{
		echo '<div class="message-area error"> Please Select an Image </div>';
	}
}
?>
<div id="main">
<form class="edit-form" action="<?php $_SERVER["PHP_SELF"] ?>" method="post" enctype="multipart/form-data">
		
 <fieldset>
	<div class="row">
		<label for="image1">Edit Image (Preferable size is 200px x 300px)</label>
		<input type="file" name="home-image1" id="image1">
	</div>
	<div class="row">
		<label for="title">Edit Title</label>
		<input type="text" id="title" name="title" value="<?php echo $title ?>">
	</div>
	<div class="row">
		<label for="title">Edit Category</label>
		<p>Selected Category is: <strong><?php if(!empty($cat)){ echo $cat; }else{ echo 'No Category Selected'; } ?></strong></p>
		<select name="cat" id="cat">
			<option value="select">SELECT</option>
			<option <?php if ($cat == 'residential'){ echo 'selected'; }else{ echo ''; } ?> value="residential">Residential</option>
			<option <?php if ($cat == 'commercial'){ echo 'selected'; } ?> value="commercial">Commercial</option>
			<option <?php if ($cat == 'hospitality'){ echo 'selected'; } ?> value="hospitality">Hospitality</option>
			<option <?php if ($cat == 'retail'){ echo 'selected'; } ?> value="retail">Retail</option>
		</select>
	</div>
	<div class="row">
		<label for="desc">Edit Description</label>
		<textarea cols="5" rows="10" id="desc" name="desc"><?php echo $desc ?></textarea>
	</div>
	<input type="submit" value="Save" name="project-edit">
</fieldset>	
</form>

<form class="edit-form" action="<?php $_SERVER["PHP_SELF"] ?>" method="post" enctype="multipart/form-data">
		
<fieldset>
	<div class="row">
		<label for="image2">Add Sub Image (Preferable size is 200px x 300px)</label>
		<input type="file" name="image2" id="image2">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
	</div>
	<input type="submit" value="Add" name="subimage">
</fieldset>	
</form>
<table>
	<tr>
		<th>
			Sub Image
		</th>
		<th>
			Action<?= $id ?>
		</th>
	</tr>

	<?php
		$query = mysql_query("SELECT * FROM project_subimages WHERE project_id = $id");
			$count = mysql_num_rows($query);
			if ($count > 0){
				while($rows = mysql_fetch_array($query)){ ?>
				<tr>
						
					<td>
						<img src = "../<?= $rows['image_url']; ?>" alt = "image holder"/>
					</td>
					<td>
						<a href="delete.php?id=<?= $rows['id'] ?>&table=project_subimages">Delete</a>
					</td>

				</tr>

	<?php }}?>

</table>
</div>
<?php	
}else{
	echo 'ID Not Set';
}
?>





