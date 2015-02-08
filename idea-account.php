<?php
	session_start();
	require("../databases/config_users.php");
	require("php/header.php");
	if(isset($_GET['project'])){
		$project = $_GET['project'];
		
		$mysql_query = mysql_query("SELECT * FROM `ideas` WHERE `project` = '$project'");

		if(mysql_num_rows($mysql_query) > 0){
			while ($row = mysql_fetch_object($mysql_query)) {
				$title = $row->title;	
				$description = $row->descrip;
				$equity = $row->equity;
				$keywords = $row->keywords;
				$company = $row->company;
				$founder = $row->founder;
				$website = $row->website;
				$other = $row->other;
			}	
		}	
	}
?>


<html>
	<div class="container">
		<div class="jumbotron">
			<h1><?php echo $title?></h1>
			<p><?php echo $description?></p>
			<p><?php echo $keywords?></p>
			<p><?php echo $equity?></p>
			<p><?php echo $company?></p>
			<p><?php echo $founder?></p>
			<p><?php echo $website?></p>
			<p><?php echo $other?></p>
		</div>
	</div>
</html>