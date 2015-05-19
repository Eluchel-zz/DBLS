<?php
require_once("../php/session.php");
require_once("../php/core_functions.php");
if(!check_auth())
{
	header("Location: ../index.php");
}
else
	$netid = phpCAS::getUser();
?>
<!doctype html>
<html lang="en" ng-app>
	<head>
		<meta charset="UTF-8">
		<title>Welcome to the Student Side!</title>
		<script src="../libraries/angular/angular.js"></script>
	</head>
	<body>
		<header>
			
		</header>
		<div>
			<input type="text" ng-model="name">
			<h2>Welcome {{name}}/<?php echo $netid; ?></h2>
		</div>

		<footer>

		</footer>
	</body>
</html>