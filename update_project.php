<?php
	require("../databases/config_users.php");
	if(isset($_GET['project'])){
		$project = $_GET['project'];
	}
	$title = mysql_escape_string($_POST['title']);
	$founder = mysql_escape_string($_POST['founder']);
	$equity = mysql_escape_string($_POST['equity']);
	$descrip = mysql_escape_string($_POST['desc']);

	$sql = mysql_query("UPDATE `ideas` SET `title`='$title', `founder`='$founder', `equity`='$equity', `descrip`='$descrip' WHERE `project`='$projecy'");

?>