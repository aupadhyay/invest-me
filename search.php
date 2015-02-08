<?php
	session_start();
	require("php/header.php");
	require("../databases/config_users.php");

	$keys = $_GET['keys'];
	$terms = explode(" ", $keys);

	foreach($terms as $term){
		echo $term;
	}
	
?>