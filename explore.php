<?php
	session_start();
	require("php/header.php");
?>

<html>
	<div class="container">
		<div class="jumbotron">
			<h1>Explore</h1>
			<form action="search.php" method="POST" id="searchForm">
				<input type="text" class="form-control" id ="search" name="search" placeholder="Search...">
			</form>
		</div>
	</div>

</html>