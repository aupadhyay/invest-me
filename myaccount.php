<?php
	session_start();
	require ("../databases/config_users.php");
	require("php/header.php");
	$id = $_SESSION["id"];
	$data_sql = mysql_query("SELECT * FROM `users` WHERE `ID`='$id'");
	

	if(mysql_num_rows($data_sql) > 0 ){
		while ($row = mysql_fetch_object($data_sql)){
			$first_namea = $row->name;
			$last_namea = $row->lname;
			$emaila = $row->email;
			$locationa = $row->location;
			$bioa = $row->bio;
		}

	}
?>
<html>
	<!--JUMBOTRON BEGINNING -->

	<div id="error_div"></div>
		<div class="container">
			<div class="jumbotron">
				<h1 class="h1" id ="welcome">My Account - 
				<?php if($_SESSION['loggedin'] == 1){
						echo $first_namea." ".$last_namea."<br/>";
					}else{ ?>
						<li style="list-style-type:none;">
							<a href="#login" data-toggle="modal"> Log In</a>
						</li> 
						or 
						<li style="list-style-type:none;">
							<a href="#register" data-toggle="modal">Register</a>
						</li>
					<?php } ?>
				</h1>
				<form action="update_data.php" method="POST" id="saveForm">
					<label>First Name:
						<input class="form-control"  id = "fname"name="fname" type="text" value=<?php echo $first_namea;?>>
					</label><br/>
					
					<label>Last Name:
						<input class= "form-control"id = "lname"name="lname"type="text" value=<?php echo $last_namea;?>>
					</label><br/>

					<label>Location(optional):
						<textarea type="textarea" id = "location"name="location"class= "form-control" style="overflow:auto;resize:none !important;" rows="1" cols="40"><?php echo $locationa; ?></textarea>
					</label><br/>

					<label>Bio:
						<textarea type="textarea" id = "bio"name="bio"class= "form-control" style="overflow:auto;resize:none !important;" rows="5" cols="40"><?php echo $bioa; ?></textarea>
					</label><br/>
					
					<button type="submit" id = "saveSubmit" name="saveSubmit" class="btn btn-success">Save</button>
				</form>
			</div>
		</div>
</html>