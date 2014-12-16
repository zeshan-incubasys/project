<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db_name = 'artica'; 

$dbconnect = mysql_connect($host, $user, $pass);
if($dbconnect){
	mysql_select_db($db_name, $dbconnect) or die("Could not select Database");
}else{
	echo 'Could not Connect to MySQL'.mysql_error();
}

?>