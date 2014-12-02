<?php
include_once('php/header.php');
if(isset($_GET['id']) && isset($_GET['table'])){
	$del_id = $_GET['id'];
	$table_name = $_GET['table'];
	$query = mysql_query("DELETE FROM $table_name WHERE id = $del_id");
	
	if ($query){ ?>
	<div>
		Operation Performed Successfully.
	</div>

<?php	}
}?>


