<?php
	$dbhost = "localhost";
	$dbuser = "dblsu";
	$dbpass = "Fun@BYU";
	$dbname = "dbls";
	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	if(mysqli_connect_errno()) {
		die("Database connection failed: " . mysqli_connect_error() . " ( " . mysqli_connect_errno() . ")"
		);
	}
?>