<?php
	session_start();
	require("php/header.php");
	$id = $_SESSION["id"];
	$name = mysql_escape_string($_POST["first_name"]);
	$last_name = mysql_escape_string($_POST["last_name"]);
	$location = mysql_escape_string($_POST["location"]);
	$bio =mysql_escape_string($_POST["bio"]);

	$sql_query = mysql_query("UPDATE INTO `users` SET `name`='$name', `lname`='$last_name', `location`='$location', `bio`='$bio' WHERE `id`='$id'");





?>