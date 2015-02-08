<?php
	session_start();
	require("../databases/config_users.php");

	$title = mysql_escape_string($_POST['title']);
	$desc = mysql_escape_string($_POST['desc']);
	$vid = mysql_escape_string($_POST['video_url']);
	$equity = mysql_escape_string($_POST['equity']);
	$keywords = mysql_escape_string($_POST['keywords']);
	$company = mysql_escape_string($_POST['company']);
	$founder = mysql_escape_string($_POST['founder']);
	$website = mysql_escape_string($_POST['website']);
	$other = mysql_escape_string($_POST['other']);

	$sql_query = mysql_query("INSERT INTO `ideas` (`title`, `descrip`, `video_url`, `equity`, `keywords`, `company`, `founder`, `website`, `other`) VALUES('$title','$desc','$video','$equity','$keywords','$company', '$founder', '$website', '$other')");
	echo "Yes!";
	$sql_id = mysql_query("SELECT * FROM `ideas` WHERE `title`='$title'");
	echo "Test";
	header("Location: idea-account.php"); /* Redirect browser */

?>