<?php
	require("../databases/config.php");

	$query = mysql_query("SELECT `name` FROM `users` WHERE `id`='1'");

	if(mysql_num_rows($query) > 0 ){
		echo "Abhi";

	}

?>