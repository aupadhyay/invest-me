<?php
	require("../databases/config_users.php");
	if(isset($_POST['email'])){
		$name = mysql_escape_string($_POST['name']);
		$lname = mysql_escape_string($_POST['lname']);
		$type = mysql_escape_string($_POST['type']);
		$location = mysql_escape_string($_POST['location']);
		$email = mysql_escape_string($_POST['email']);
		$pass = mysql_escape_string($_POST['password']);
		$phone = mysql_escape_string($_POST['phone']);
		$hours = mysql_escape_string($_POST['hours']);
		$check_email = mysql_query("SELECT * `users` WHERE `email`='$email'");
		if(mysql_num_rows($check_email) = 0){}	
			$insert_sql = mysql_query("INSERT INTO `users` (`name`, `lname`, `type`, `location`, `email`, `pass`, `phone`, `hours`) VALUES ('$name', '$lname', '$type', '$location', '$email', '$pass', '$phone', '$hours')");
		}else{
			echo "User already exists!";
		}
	}
	else{
		echo "not set";
	}

?>