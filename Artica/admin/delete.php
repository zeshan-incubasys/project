<?php
error_reporting(0);
include_once('php/header.php');
//print_r($_SERVER);die('====');
if (isset($_GET['id']) && isset($_GET['table'])) {
	  $del_id = $_GET['id'];
	  $table_name = $_GET['table'];
	  $query = mysql_query("select image_url FROM $table_name WHERE id = $del_id");
	  $count = mysql_num_rows($query);
	  if ($count > 0) {
			$image_url="";
			while ($row = mysql_fetch_array($query)) {
				  $image_url = $row['image_url'];
			}
			echo "../".$image_url;
			if(unlink("../".$image_url))
			{
				  $query = mysql_query("DELETE FROM $table_name WHERE id = $del_id");

				  if ($query) {
						header('Location:' . $_SERVER["HTTP_REFERER"]);
						?>
						<div>
							  Operation Performed Successfully.
						</div>

				  <?php
				  }
			}

	  }
}?>


