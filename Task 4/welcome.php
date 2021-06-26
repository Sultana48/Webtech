<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php
include 'header.php';
include 'logged in dashboard.php';

if (isset($_SESSION['uname'])) {
	echo "<h1> Welcome to our company !</h1>";

}
else{
		header("location:login.php");
	}
include 'footer.php';

?>
</body>
</html>