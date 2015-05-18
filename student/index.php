<?php
	$netid = $_GET["netid"];
?>
<!doctype html>
<html lang="en" ng-app>
	<head>
		<link rel="stylesheet" href="../libraries/byutemplate/css/base.css">
		<link rel="stylesheet" href="../libraries/byutemplate/css/responsive.css">
		<script src="../libraries/byutemplate/js/modernizr.js"></script>
		<script src="../libraries/byutemplate/js/init.js"></script>
		<meta charset="UTF-8">
		<title>Welcome to the Student Side!</title>
		<script src="../libraries/angular/angular.js"></script>
	</head>
	<body>
		<header id="main-header">
			<div id="header-top" class="wrapper">
				<div id="logo">
					<h2>
						<a href="http://www.byu.edu/" class="byu">Brigham Young University</a>
					</h2>
				</div>
				<h1>
					<a id="site-name" href="#" title="Student side of DBLS">Student Side</a>
				</h1>
			</div>
		</header>
		<div id="content" role="main" class="wrapper clearfix one-sidebar">
			<input type="text" ng-model="name">
			<h2>Welcome {{name}}/<?php echo $netid; ?></h2>
		</div>

		<div class="nav-container">
			<nav id="primary-nav" role="navigation">
				
			</nav>
		</div>

		<footer id="page-footer">

		</footer>
	</body>
</html>