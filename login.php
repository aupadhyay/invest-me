<?php
	require("../databases/config_users.php");

	$query = mysql_query("SELECT `name` FROM `users` WHERE `id`='1'");

	if(mysql_num_rows($query) > 0 ){
		echo "Abhi";

	}

?>