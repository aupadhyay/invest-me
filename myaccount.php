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

		$_SESSION['username'] = $first_namea . "." . $last_namea . $id;
		$username = $_SESSION['username'];
		mysql_query("UPDATE `users` SET `username`='$username' WHERE `ID`='$id'");
		$sql_projects = mysql_query("SELECT * FROM `ideas` WHERE `owner`='$username'");
		if(mysql_num_rows($sql_projects) > 0 ){
			$title = array();
			$descrip = array();
			$equity = array();
			$company = array();
			$i = 0;
			while ($row = mysql_fetch_object($sql_projects)){
				$title[$i] = $row->title;
				$descrip[$i] = $row->descrip;
				$equity[$i] = $row->equity;
				$company[$i] = $row->company;
				$i = $i + 1;
			}

		}
?>
<html>
	<!--JUMBOTRON BEGINNING -->


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
				<p>Profile Page: <?php echo '<a href = "profile.php?u='.$username.'">'.$username.'</a>'; ?></p>
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
					
					<label>Profile Picture:</label>
					<input type="file" name="profile">
					<button type="submit" id = "saveSubmit" name="saveSubmit" class="btn btn-success">Save</button>
				</form>
				<div id="error_div"></div>
			</div>
		</div>
	
		<div class="container">
			<h2>My Projects</h2>
			<div class="row">
			<?php for ($j=0; $j < sizeof($title) ; $j++) { ?>
			<br><div class="col-sm-6">
			<p>Title:<?php echo $title[$j];?></p>
			<p>Description:<?php echo $descrip[$j];?></p>
			<p>Equity:<?php echo $equity[$j];?></p>
			<p>Company:<?php echo $company[$j];?></p>
			</div>
			<div class="col-sm-3">
				<img src="img/pencil.png" width="84px" height="84px" alt="A">
			</div>
			<div class="col-sm-3">
				<img src="img/trash.jpg" width="84px" height="96px" alt="A">
			</div>
			<div class="col-sm-12">
				<hr>
			</div>
			<?php }?>
			</div>
		</div>


		<script type="text/javascript" src  = "js/Login-AJAX.js"></script>
</html>