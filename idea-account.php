<?php
	session_start();
	require("../databases/config_users.php");
	require("php/header.php");
	if(isset($_GET['project'])){
		$project = $_GET['project'];
		
		$mysql_query = mysql_query("SELECT * FROM `ideas` WHERE `project` = '$project'");

		if(mysql_num_rows($mysql_query) > 0){
			while ($row = mysql_fetch_object($mysql_query)) {
				$title = $row->title;	
			}	
			echo $title . "<-";
		}	
	}
?>