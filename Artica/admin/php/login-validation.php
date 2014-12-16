<?php
include_once("connection.php");
session_start();

sleep(5);

$user =  mysql_real_escape_string($_POST['user']);
$pass =  mysql_real_escape_string($_POST['pass']);

$query = mysql_query("SELECT * FROM users WHERE username = '$user' AND password = '$pass'");
$count = mysql_num_rows($query);

if($count > 0){
	while($rows = mysql_fetch_array($query)){
		$id = $rows['id'];
		$username = $rows['username'];
		$password = $rows['password'];
		
		$_SESSION['user'] = $username;
		echo '0';
	}
}else{
	echo 'Username and Password doesn\'t match';
}
?>