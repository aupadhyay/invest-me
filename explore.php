<?php
	session_start();
	require("php/header.php");
?>

<html>
	<div class="container">
		<div class="jumbotron">
			<h1>Explore</h1>
			<form action="search.php" method="get" id="searchForm">
				<input type="text" name="keys"class="form-control" value=<?php echo $_GET['keys'];?> id ="search" name="search" placeholder="Search...">
			</form>
		</div>
	</div>

</html>