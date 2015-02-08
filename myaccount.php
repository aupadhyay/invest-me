<?php
	session_start();
	require("../databases/config.php");
	require("php/header.php");
	$id = $_SESSION["id"];
	$data_sql = mysql_query("SELECT * FROM `users` WHERE `ID`='$id'");
	

	if(mysql_num_rows($data_sql) > 0 ){
		while ($row = mysql_fetch_object($data_sql)){
				$ida = $row->ID;
				$first_namea = $row->name;
				$last_namea = $row->lname;
				$emaila = $row->email;
				$locationa = $row->location;
				$bioa = $row->bio;
				$typea = $row->type;
				$hoursa = $row->hours;
				$phonea= $row->phone;
		}

	}
?>

<html>
	<div class="container">
		<div class="jumbotron">
			<h1>My Account - <?php echo $_SESSION['first_name'];?></h1>

			<form action="update_data.php" method="POST">
				<div class="form-control">
					<label for="name">First Name</label>
					<input type="text" id="first_name" name= "first_name"value=<?php echo $first_namea; ?>>
					<label for="last_name">Last Name</label>
					<input type="text" id="last_name" name= "last_name"value=<?php echo $_SESSION["last_name"]; ?>>
					<label for="location">Location</label>
					<input type="text" id="location" name= "location"value=<?php echo $location; ?>>
					<label for="phone">Phone</label>
					<input type="text" id="phone" name= "phone"value=<?php echo $_SESSION["phone"]; ?>>
					<label for="hours">Hours</label>
					<input type="text" id="hours" name= "hours"value=<?php echo $_SESSION["hours"]; ?>>
					<label for="bio">Bio</label>
					<input type="textarea" id="bio" name= "bio"value=<?php echo $_SESSION["bio"]; ?>>
				</div>
			</form>

		</div>
	</div>

</html>

