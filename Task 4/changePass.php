<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Change Password</title>
</head>
<body>
<?php

include 'header.php';

$newPass = "";
$newPassErr = $retPassErr = "";
if (isset($_SESSION['uname'])) { 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if($_SESSION['password'] == $_POST['currPass'])
  {
  	if($_SESSION['password'] == $_POST['newPass'])
  	{
  		$newPassErr = "New Password can not be same as current password.";
  		$newPass = "";
  	} else {
  	$newPass = $_POST["newPass"];
  	if(strlen($newPass)<8){
  		$newPassErr = "Password must not be less than eight (8) characters";
  		$newPass = "";
  	}
  	if (!preg_match("/\W/", $newPass)) {
    $newPassErr = "Password should contain at least one special character";
    $newPass = "";
 	}
 	if($_POST["retPass"]!==$newPass)
 	{
 	$retPassErr="Retyped Password does not match with current Password";
 	$newPass="";
 	}
  }
  }
}
}
else{
  header("location:login.php");
}

 ?>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
<table border ="1" width="100%">
  <tr height="400px" >
      <td align="left"width="50px">
      <h3>Account</h3><hr>
      <ul>
      <li><a href="logged in dashboard.php">Dashboard</a></li>
      <li><a href="view profile.php">View Profile</a></li>
      <li><a href="editProfile.php">Edit Profile</a></li>
      <li><a href="uploadImage.php">Change Profile Picture</a></li>
      <li><a href="ChangePass.php">Change Password</a></li>
      <li><a href="logout.php">Logout</a></li></ul>
      </td>
      
      
      </td>
      <td colspan="2" align="middle">
<p><?php echo $newPassErr; ?></p>
<p><?php echo $retPassErr; ?></p>
Current Password :<input type="text" name="currPass"><br>
<br>
New Password :<input type="text" name="newPass"><br>
<br>
Retype New Passeord :<input type="text" name="retPass"><hr>
<input type="submit" name="submit"><br><br>
<?php 
if(isset($_POST['submit']))
{
echo "Password changed to: ".$newPass;
}
 ?>
 </td>
</table>
</form>
<?php include 'footer.php'; ?> 

</body>
</html>