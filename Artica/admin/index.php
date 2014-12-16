<?php
include_once('php/header.php');
?>
<div id="main">
	<?php
		if(isset($_POST['change-submit'])){
			$result = '';
			$old_user = mysql_real_escape_string(stripslashes($_POST['old-user']));
			$new_user = mysql_real_escape_string(stripslashes($_POST['new-user']));
			$old_pass = mysql_real_escape_string(stripslashes($_POST['old-pass']));
			$new_pass = mysql_real_escape_string(stripslashes($_POST['new-pass']));
			
			if(!empty($old_user) && !empty($new_user) && !empty($old_pass) && !empty($new_pass)){
				$query = mysql_query("SELECT * FROM users WHERE username = '$old_user' AND password = '$old_pass'");
				$count = mysql_num_rows($query);
				if($count > 0){
					while($rows = mysql_fetch_array($query)){
						$id = $rows['id'];
					}
					$query = mysql_query("UPDATE users SET username = '$new_user', password = '$new_pass' WHERE id = '$id'")or die(mysql_error());
					
					if($query){
						echo '<div class="message-area">Username or Password Change Successfully</div>';
					}
				}else{
					$result .= "<p>Wrong Username or Password</p>";
					echo '<div class="message-area error">'.$result.'</div>';
				}
				
			}else{
				$result .= "<p>Please fill in All the fields</p>";
				echo '<div class="message-area error">'.$result.'</div>';
			}
		}
	?>
	<form class="edit-form" action="<?php $_SERVER["PHP_SELF"] ?>" method="post">
		<fieldset>
			<div class="head">
				<h1>Account Settings</h1>
				<strong class="title">Change Username Or Password</strong>
			</div>
			<div class="form-area">
				<div class="row">
					<label for="old-user">Old Username</label>
					<input type="text" name="old-user" id="old-user">
				</div>
				<div class="row">
					<label for="new-user">New Username</label>
					<input type="text" name="new-user" id="new-user">
				</div>
				<div class="row">
					<label for="old-pass">Old Password</label>
					<input type="password" name="old-pass" id="old-pass">
				</div>
				<div class="row">
					<label for="new-pass">New Password</label>
					<input type="password" name="new-pass" id="new-pass">
				</div>
				<input type="submit" value="Change" name="change-submit">
			</div>
		</fieldset>
	</form>
</div>
</body>
</html>