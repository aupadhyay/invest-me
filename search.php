<?php
	session_start();
	require("php/header.php");

	if(isset($_GET['key'])){
		$keyword = $_GET['key'];
		echo $keyword;
	}
?>