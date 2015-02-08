<?php
	require("../databases/config.php");
	mysql_select_db("invest");

	$query = "SELECT `name` FROM `users` WHERE `id`='1'";

	if(mysql_num_rows($query) > 0 ){
		echo "Abhi"

	}

?>