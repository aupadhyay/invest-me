<?php
	session_start();
	session_unset();
	$_SESSION['loggedin'] = 0;

	header("Location: index.php"); /* Redirect browser */
?>