<?php
include_once('php/header.php');

if (isset($_POST['about'])){
	$text = mysql_real_escape_string(stripslashes($_POST['content']));
	$dbid = $_POST['id'];

	$result = '';
	/*$image_name = $_FILES['home-image1']['name'];
	$image_size = $_FILES['home-image1']['size'];
	$image_type = $_FILES['home-image1']['type'];
	$image_tmp = $_FILES['home-image1']['tmp_name'];*/

	
	if(/*!empty($image_name) || */!empty($text)){
		
		/*if($image_size >= 512000 && !empty($image_name)){
			$result .= "<p>File size should be less than 500KBs</p>";
		}
		
		if(($image_type != 'image/jpg' && $image_type != 'image/pjpeg' && $image_type != "image/jpeg") && !empty($image_name)){
			$result .= '<p>File should be in JPG format</p>';
		}*/
		if($result == ''){
			
			/*$url = '../images/about.jpg';
			$up_url = 'images/about.jpg';*/
			$query = mysql_query("UPDATE about_us SET content = '$text' WHERE id = $dbid")or die(mysql_error());
			
			if($query){
				/*move_uploaded_file($image_tmp, $url);*/
				echo '<div class="message-area">Page has been Edit Successfully !</div>';
			}
			
		}else{ 
			echo '<div class="message-area error">'.$result.'</div>';
		}
		
	}else{ echo '<div class="message-area error">Please fill in atleast 1 Field</div>'; }
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
$query = mysql_query("SELECT * FROM about_us");
	$count = mysql_num_rows($query);
	if($count > 0){
		while($rows = mysql_fetch_array($query)){
			$id = $rows['id'];
			$image_url = $rows['image_url'];
			$content = $rows['content']
		?>
		<tr>
			<!--<td>
				<img src = "../<?= $image_url ?>" alt = "section image"/>
			</td>-->
			<td>
				<?= $content ?>
			</td>
		</tr>

<?php		}
	}else{
		echo 'No content to display';
	}
?>
</table>
<form class="edit-form" action = "about.php" method="post" enctype="multipart/form-data">
		<fieldset>
			<div class="row">
				<label for="image2">Edit Details</label>
				<!--<input type="file" name="home-image1" id="image2">-->
				<textarea name = "content" rows = "20" cols = "50"><?= $content ?></textarea>
				<input type="hidden" name = "id" value = "<?= $id ?>">
				<input type="submit" value = "Save" name="about">	
			</div>
		</fieldset>	
		</form>
</div>

