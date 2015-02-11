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
				$owner = $row->owner;
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
			<h1>Title: <?php echo $title?></h1>
			<p>Description: <?php echo $description?></p>
			<p>Valuation: <?php echo $equity?></p>
			<p>Company: <?php echo $company?></p>
			<p>Founder: <?php echo '<a href = "profile.php?u='.$owner.'">'.$owner.'</a>'; ?></p>
			<p>Website: <?php echo $website?></p>
			<p>Other?: <?php echo $other?></p>
		</div>
	</div>
</html>