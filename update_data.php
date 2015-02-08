<?php
	session_start();
	require("../databases/config_users.php");
	function change_profile_image($user_id, $file_temp){
		$file_path = 'img/profile/'. substr(md5(time()), 0,10). '.png';
		move_uploaded_file($file_temp, $file_path);
	}

	$id = $_SESSION["id"];
	$name = mysql_escape_string($_POST["fname"]);
	$last_name = mysql_escape_string($_POST["lname"]);
	$location = mysql_escape_string($_POST["location"]);
	$bio =mysql_escape_string($_POST["bio"]);

	$sql_query = mysql_query("UPDATE `users` SET `name`='$name', `lname`='$last_name', `location`='$location', `bio`='$bio' WHERE `ID`='$id'");
	$file_name = $_FILES['profile']['name'];
	$file_temp = $_FILES['profile']['tmp_name'];
	change_profile_image($_SESSION['id'], $file_temp);
	$_SESSION["first_name"] = $name;
	$_SESSION["last_name"] = $last_name;
	$_SESSION["location"] = $location;
	$_SESSION["bio"] = $bio;

	echo "<h3>Saved!</h3>";




?>