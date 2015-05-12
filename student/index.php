<?php
	$netid = $_GET["netid"];
?>
<!doctype html>
<html lang="en" ng-app>
<head>
	<meta charset="UTF-8">
	<title>Welcome to the Student Side!</title>
	<script src="../libraries/angular/angular.js"></script>
</head>
<body>
	<input type="text" ng-model="name">
	<h2>Welcome {{name}}/<?php echo $netid; ?></h2>
</body>
</html>