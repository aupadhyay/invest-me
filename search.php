<?php
	session_start();
	require("php/header.php");
	require("../databases/config_users.php");

	$keys = $_GET['keys'];
	$terms = explode(" ", $keys);
	$i = 0;
	$query = "SELECT *  FROM `ideas` WHERE ";
	foreach($terms as $term){
		$i++;
		if($i == 1){
			$query .= "`keywords` LIKE '%$term%'";
		}else{
			$query .= " OR `keywords` LIKE '%$term%'";
		}
	}
	$query = mysql_query($query);
	$title = array();
	$descrip = array();
	$company = array();
	$project = array();
	$equity = array();
	$j = 0;
	while ($row = mysql_fetch_object($query)) {
		$title[$j] = $row->title;
		$descrip[$j] = $row->descrip;
		$company[$j] = $row->company;
		$project[$j] = $row->project;
		$equity[$j] = $row->equity;
		$j = $j + 1;
	}
	
?>

<html>
	<div class="container">
	<div class="jumbotron">
	<h1>Search</h1>
	<form action="search.php" method="get" id="searchForm">
		<input type="text" name="keys"class="form-control" id ="search" name="search" placeholder="Search...">
		<button class="btn btn-info" type="submit" name="searchSubmit" id="searchSubmit">Submit</button>
	</form>
	<?php for($k=0;$k < sizeof($title);$k++){?>
		<p>Title: <?php echo $title[$k]; ?></p>
		<p>Description: <?php echo $descrip[$k]; ?></p>
		<p>Company: <?php echo $company[$k]; ?></p>
		<p>URL: <?php echo '<a href = "idea-account.php?project='.$project[$k].'">'.$project[$k].'</a>'; ?></p>
		<p>Equity: <?php echo $equity[$k]; ?></p>
		<hr><br>
	<?php }?>
	</div>
	</div>

</html>