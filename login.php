<?php
	require("../databases/config_users.php");
	$_POST['email'] = "abhi.upadhyay01@gmail.com";
	$_POST['pass'] = "janoneseven2";
	if(isset($_POST['email'])){
		w30 $username = mysql_escape_string($_POST['email']);
		$pass = mysql_escape_string($_POST['pass']);
		$query = mysql_query("SELECT * FROM `users` WHERE `email`='$username' AND `pass`='$pass'");

		if(mysql_num_rows($query) > 0 ){
			echo "Logged In!";

		}
	}
	else{
		echo "not set";
	}

?>