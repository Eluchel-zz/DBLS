<?php
require_once("../CAS.php");
phpCAS::client(CAS_VERSION_2_0, 'cas.byu.edu', 443, 'cas'); 
//phpCAS::setCasServerCACert("../CAS/cas_ca.pem");
phpCAS::setNoCasServerValidation();
phpCAS::setDebug("cas_error.txt");
phpCAS::forceAuthentication();
//require_once("/php/session.php");
require_once("/php/connection.php");

$query  = 'SELECT * FROM users WHERE netid="' . phpCAS::getUser() . '" LIMIT 1';
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
if($user = mysqli_fetch_assoc($result)) {
	switch ($user["clearance"]) {
		case 1:
			$url = "student/index.php?netid=" .  $user["netid"];
	header("Location:".$url);
			break;
		case 2:
			//header("Location: instructor?netid=" <?php echo $user["netid"] 
			break;
		case 3:
			header("Location: admin/");
			break;
		default:
			$message="You are not regestered on this site. If you are a student please contact your instructor, if you are a instructor please contact an administrator";
	}
}

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome</title>
</head>
<body>
	<div class="messages"> <?php if(!empty($message)) {echo $message;} ?> </div>
</body>
</html>

<?php 
mysqli_close($connection);
?>