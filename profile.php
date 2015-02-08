<?php
	session_start();
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
			$sql_projects = mysql_query("SELECT * FROM `ideas` WHERE `owner`='$u'");
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
		}else{
			echo "No user with that name!";
		}

	}

	

?>


<html>
	<div class="container">
		<div class="jumbotron">
			<h1><?php echo $first_name." ".$last_name; ?></h1>
			<p><?php echo $email; ?></p>
			<p><?php echo $location; ?></p>
			<p><?php echo $bio; ?></p>
		</div>

		<h2>Projects</h2>
			<div class="row">
			<?php for ($j=0; $j < sizeof($title) ; $j++) { ?>
			<br><div class="col-sm-6">
			<p>Title:<?php echo $title[$j];?></p>
			<p>Description:<?php echo $descrip[$j];?></p>
			<p>Equity:<?php echo $equity[$j];?></p>
			<p>Company:<?php echo $company[$j];?></p>
			</div>
			<div class="col-sm-3">
				<img src="http://placehold.it/30x30" alt="A">
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


</html>

