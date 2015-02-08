<?php
	require("../databases/config_users.php");
	if(isset($_GET['u'])){
		$u = $_GET['u'];
		$sql_query = mysql_query("SELECT * FROM `users` WHERE `username`='u'");

	}

?>