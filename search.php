<?php
	session_start();
	require("php/header.php");
	require("../databases/config_users.php");

	$k = $_GET['keys'];
	$terms = explode(" ", $k);
	$i = 0;
	$query = "SELECT * FROM `ideas` WHERE";
	foreach ($terms as $each){
		$i++;
		if($i == 1)
			$query .= "`keywords` LIKE '$each' ";
		else
			$query .= "OR`keywords` LIKE '$each'";

	}

	$query = mysql_query($query);
	echo $query;
	$numrows = mysql_num_rows($query);
	
	if($numrows > 0 ){
		echo "testing";
		while($row = mysql_fetch_assoc($query)){
			$title = $row['title'];
			$desc = $row['descrip'];
		}
		echo $title."<br>";


	}else{
		echo "No!";
	}



	
?>