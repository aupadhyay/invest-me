<?php
	session_start();
	require("../databases/config_users.php");

	$id = $_SESSION["id"];
	$name = mysql_escape_string($_POST["fname"]);
	$last_name = mysql_escape_string($_POST["lname"]);
	$location = mysql_escape_string($_POST["location"]);
	$bio =mysql_escape_string($_POST["bio"]);

	$sql_query = mysql_query("UPDATE `users` SET `name`='$name', `lname`='$last_name', `location`='$location', `bio`='$bio' WHERE `ID`='$id'");
	$_SESSION["first_name"] = $name;
	$_SESSION["last_name"] = $last_name;
	$_SESSION["location"] = $location;
	$_SESSION["bio"] = $bio;

	echo "<h3>Saved!</h3>";




?>