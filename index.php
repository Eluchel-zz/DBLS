<?php
require_once("/php/session.php");
require_once("/php/connection.php");
require_once("/php/core_functions.php");
if (isset($_REQUEST['login'])) 
{
	force_login();
		
	$query  = 'SELECT * FROM users WHERE netid="' . phpCAS::getUser() . '" LIMIT 1';
	$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
	if($user = mysqli_fetch_assoc($result)) {
		switch ($user["clearance"]) {
			case 1:
				header("Location: student/");
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
	<div>
		<a href="?login" class="login_button">Click to log in</a>
	</div>
</body>
</html>

<?php 
mysqli_close($connection);
?>