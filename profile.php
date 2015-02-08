<?php
	require("../databases/config_users.php");
	require ("php/header.php");
	if(isset($_GET['u'])){
		$u = mysql_escape_string($_GET['u']);
		$sql_query = mysql_query("SELECT * FROM `users` WHERE `username`='$u'");

		if(mysql_num_rows($sql_query) > 0){
			while ($row = mysql_fetch_object($sql_query)){
				$first_name = $row->name;
				$last_name= $row->lname;
				$email = $row->email;
				$location = $row->location;
				$bio = $row->bio;
			}
		}else{
			echo "No user with that name!";
		}

	}

?>


<html>
	<div class="container">
		<div class="jumbotron">
			<h1><?php echo $first_name; ?></h1>
		</div>
	</div>


</html>

