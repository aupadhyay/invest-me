<?php
	require("../databases/config_users.php");
	if(isset($_GET['u'])){
		$u = mysql_escape_string($_GET['u']);
		echo $u;
		$sql_query = mysql_query("SELECT * FROM `users` WHERE `username`='u'");

		if(mysql_num_rows($sql_query) > 0){
			while ($row = mysql_fetch_object($sql_query)){
				$first_name = $row->name;
				$last_name= $row->lname;
				$email = $row->email;
				$location = $row->location;
				$bio = $row->bio;
			}
			echo $first_name;
		}else{
			echo "No user with that name!";
		}

	}

?>