<?php
include_once("php/connection.php");
session_start();
if(!isset($_SESSION['user'])){
	header("location: login.php");
	exit();
}
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Artica Cpanel</title>
	<link href="css/all.css" type="text/css" rel="stylesheet" media="all">
	<script src="http://tinymce.cachefly.net/4.1/tinymce.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.main.js"></script>
</head>
<body>
	<header id="header">
		<div class="holder">
			<nav id="nav">
				<ul>
					<li><a href="section.php?page=home">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="services.php">Services</a></li>
					<li><a href="project.php">Projects</a></li>
					<li><a href="listing.php">Project Listings</a></li>
					<li><a href="category.php">Category Images</a></li>
				</ul>
			</nav>
			<nav class="add-nav">
				<ul>
					<li><a href="../admin/">Dashboard</a></li>
					<li><a href="logout.php">Logout</a></li>
					<li><a href="../" target="_blank">Live View</a></li>
				</ul>
			</nav>
		</div>
	</header>