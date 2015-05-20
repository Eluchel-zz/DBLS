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
<html lang="en" ng-app>
	<head>
		<meta charset="UTF-8">
		<title>Decision Based Learning</title>
		<script src="../libraries/angular/angular.js"></script>
	</head>
	<body>
		<header>
			<div>
				<h2>Welcome <?php echo $_SESSION[phpCAS::getUser()]["fullname"]; ?></h2>
				</div>
		</header>
		<div>
			
		</div>

		<footer>

		</footer>
	</body>
</html>