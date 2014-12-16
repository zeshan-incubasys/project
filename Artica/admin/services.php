<?php
include_once('php/header.php');

if (!empty($_POST)){
	$text = mysql_real_escape_string(stripslashes($_POST['content']));
	$dbid = $_POST['id'];

	$result = '';
	/*$image_name = $_FILES['home-image1']['name'];
	$image_size = $_FILES['home-image1']['size'];
	$image_type = $_FILES['home-image1']['type'];
	$image_tmp = $_FILES['home-image1']['tmp_name'];*/

	
	if(/*!empty($image_name) ||*/ !empty($text)){
		
		/*if($image_size >= 512000 && !empty($image_name)){
			$result .= "<p>File size should be less than 500KBs</p>";
		}
		
		if(($image_type != 'image/jpg' && $image_type != 'image/pjpeg' && $image_type != "image/jpeg") && !empty($image_name)){
			$result .= '<p>File should be in JPG format</p>';
		}*/
		if($result == ''){
			
			/*$url = '../images/service.jpg';
			$up_url = 'images/service.jpg';*/
			$query = mysql_query("UPDATE services SET description = '$text' WHERE id = '$dbid'")or die(mysql_error());
			
			if($query){
				/*move_uploaded_file($image_tmp, $url);*/
				echo '<div class="message-area">Page has been Edit Successfully !</div>';
			}
			
		}else{ 
			echo '<div class="message-area error">'.$result.'</div>';
		}
		
	}
}
?>
<div id="main">
<table>
	<tr>
		<!--<th>
			Image
		</th>-->
		<th>
			description
		</th>
	</tr>

	<?php
$query = mysql_query("SELECT * FROM services");
	$count = mysql_num_rows($query);
	if($count > 0){
		while($rows = mysql_fetch_array($query)){ 
			$id = $rows['id'];
			$image_url = $rows['image_url'];
			$description = $rows['description'];
		?>
		<tr>
			<!--<td>
				<img src = "../<?= $image_url ?>" alt = "section image"/>
			</td>-->
			<td>
				<?= $description ?>
			</td>
		</tr>

<?php		}
	}
?>
</table>
	<form class="edit-form" action = "services.php" method="post" enctype="multipart/form-data">
		<fieldset>
			<div class="row">
				<label for="image2">Edit Details</label>
				<!--<input type="file" name="home-image1" id="image1">-->
				<textarea name = "content" rows = "20" cols = "50"><?php if(isset($description)){ echo $description; }?></textarea>
				<input type="hidden" name = "id" value = "<?php if(isset($id)){ echo $id; } ?>">		
				<input type="submit" value = "Save">		
			</div>
		</fieldset>
	</form>
</div>