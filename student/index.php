<?php
require_once("../php/session.php");
require_once("../php/core_functions.php");
if(!check_auth())
{
	header("Location: ../index.php");
}
else
{
	$netid = phpCAS::getUser();
}
?>
<!doctype html>
<html lang="en" ng-app="myApp">
	<head>
		<meta charset="UTF-8">
		<title>Decision Based Learning</title>
		<link rel="stylesheet" media="all" href="../libraries/dbls-template/css/base.css">
	</head>
	<body id="body">
		<header>
			<div>
				<h2>Welcome <?php echo $_SESSION[phpCAS::getUser()]["fullname"]; ?></h2>
				</div>
		</header>
		
		<nav id="tab-course" class="tabbar">
			<a href="/dbls/student">Home</a>
		</nav>
		
		<aside id="sidebar" class="sidebar" >
			<p>Placeholder</p>
		</aside>
		
		<div id="main" ng-view></div>

		<footer>

		</footer>
		<script src="../libraries/angular/angular.js"></script>
		<script src="../libraries/angular/angular-route.min.js"></script>
		<script src="app/app.module.js"></script>
		<script src="app/app.routes.js"></script>
	</body>
</html>