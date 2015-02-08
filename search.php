<?php
	session_start();
	require("php/header.php");

	$k = $_GET['keys'];

	$terms = explode(" ", $k);
	$i = 0;
	$query = "SELECT * FROM `ideas` WHERE"
	foreach ($terms as $each){
		$i++;
		if($i == 1)
			$query .= "`keywords` LIKE '$each' ";
		else
			$query .= "OR`keywords` LIKE '$each'";

	}

	echo $query;

	
?>