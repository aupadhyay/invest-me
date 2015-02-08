<?php
	require("../databases/config_users.php");
	if(isset($_POST['email_reg'])){
		$name = mysql_escape_string($_POST['name']);
		$lname = mysql_escape_string($_POST['lname']);
		$type = mysql_escape_string($_POST['type']);
		$location = mysql_escape_string($_POST['location']);
		$email = mysql_escape_string($_POST['email_reg']);
		$pass = mysql_escape_string($_POST['pass_reg']);
		$phone = mysql_escape_string($_POST['phone']);
		$hours = mysql_escape_string($_POST['hours']);
	}
	else{
		echo "not set";
	}

?>