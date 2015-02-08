<?php
	session_start();
	require("../databases/config_users.php");
	if(isset($_POST['email'])){
		$username = mysql_escape_string($_POST['email']);
		$pass = mysql_escape_string($_POST['pass']);
		$query = mysql_query("SELECT * FROM `users` WHERE `email`='$username' AND `pass`='$pass'");

		if(mysql_num_rows($query) > 0 ){
			echo "Logged In!";
			while($row = $query->fetch_assoc()) {
        			//echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["lname"]. "<br>";
    				echo "Test";
    			}
		}
	}
	else{
		echo "not set";
	}

?>