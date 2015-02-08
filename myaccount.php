<?php
	session_start();
	require("php/header.php");
?>

<html>
	<div class="container">
		<div class="jumbotron">
			<h1>My Account - <?php echo $_SESSION['first_name'];?></h1>

			<form action="update_data.php" method="POST">
				<div class="form-control">
					<label for="name">First Name</label>
					<input type="text" id="first_name" name= "first_name"placeholder=<?php echo $_SESSION['first_name']; ?>>
					<label for="last_name">Last Name</label>
					<input type="text" id="last_name" name= "last_name"placeholder=<?php echo $_SESSION['last_name']; ?>>
					<label for="location">Location</label>
					<input type="text" id="location" name= "location"placeholder=<?php echo $_SESSION['location']; ?>>
					<label for="phone">Phone</label>
					<input type="text" id="phone" name= "phone"placeholder=<?php echo $_SESSION['phone']; ?>>
					<label for="hours">Hours</label>
					<input type="text" id="hours" name= "hours"placeholder=<?php echo $_SESSION['hours']; ?>>
					<label for="bio">Bio</label>
					<input type="textarea" id="bio" name= "bio"placeholder=<?php echo $_SESSION['bio']; ?>>
				</div>
			</form>

		</div>
	</div>

</html>

