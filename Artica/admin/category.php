<?php
include_once('php/header.php');

if (!empty($_POST)){
	
	$cat = $_POST['cat'];
	$result = '';
	$image_name = $_FILES['home-image1']['name'];
	$image_size = $_FILES['home-image1']['size'];
	$image_type = $_FILES['home-image1']['type'];
	$image_tmp = $_FILES['home-image1']['tmp_name'];

	
	if(!empty($image_name) && $cat != 'select'){
		
		if($image_size >= 512000 && !empty($image_name)){
			$result .= "<p>File size should be less than 500KBs</p>";
		}
		
		if(($image_type != 'image/jpg' && $image_type != 'image/pjpeg' && $image_type != "image/jpeg") && !empty($image_name)){
			$result .= '<p>File should be in JPG format</p>';
		}
		if($result == ''){
			
			$url = '../images/'.$cat.'.jpg';
			$up_url = 'images/'.$cat.'.jpg';
			$query = mysql_query("UPDATE cat_images SET image_url = '$up_url' WHERE cat = '$cat'")or die(mysql_error());
			
			if($query){
				move_uploaded_file($image_tmp, $url);
				echo '<div class="message-area">Page has been Edit Successfully !</div>';
			}
			
		}else{ 
			echo '<div class="message-area error">'.$result.'</div>';
		}
		
	}else{ echo '<div class="message-area error">Please Select all Fields</div>'; }
}
?>
<div id="main">
<table>
	<tr>
		<th>
			Image
		</th>
		<th>
			Category
		</th>
	</tr>

	<?php
	$query = mysql_query("SELECT * FROM cat_images");
	$count = mysql_num_rows($query);
	if($count > 0){
		while($rows = mysql_fetch_array($query)){ 
			$id = $rows['id'];
			$image_url = $rows['image_url'];
			$cat = $rows['cat'];
		?>
		<tr>
			<td>
				<img src = "../<?= $image_url ?>" alt = "section image"/>
			</td>
			<td>
				
				<?= $cat ?>
				
			</td>
		</tr>

<?php		}
	}
?>
</table>
	<form class="edit-form" action = "category.php" method="post" enctype="multipart/form-data">
		<fieldset>
			<div class="row">
				<label for="image2">Edit Details (Preferable size is 200px x 300px)</label>
				<input type="file" name="home-image1" id="image1">
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
				<input type="hidden" name = "id" value = "<?php if(isset($id)){ echo $id; } ?>">
				<input type="submit" value = "Save">
			</div>
		</fieldset>
	</form>
</div>