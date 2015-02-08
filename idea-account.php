<?php
	session_start();
	require("../databases/config_users.php");
	require("php/header.php");
	if(isset($_GET['project'])){
		$project = $_GET['project'];
		
		$mysql_query = mysql_query("SELECT * FROM `ideas` WHERE `project` = '$project'");	
	}
?>