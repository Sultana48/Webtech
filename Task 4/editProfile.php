<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php 
include 'header.php';

if (isset($_SESSION['uname'])) {
if(isset($_POST['submit'])) {
unset($_SESSION["name"]);
unset($_SESSION["email"]);

$_SESSION['name'] = $_POST['name'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['gender'] = $_POST['gender'];
$_SESSION['dob'] = $_POST['dob'];

 }
}else{
	header("location:login.php");
}


 ?>
 <form method="post">
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
      <td colspan="2" align="left">
<fieldset>
<legend><b>Edit Profile</b></legend>
<br>
Name:<input type="text" name="name" value="<?php echo $_SESSION['name'] ?>"><hr>
Email:<input type="text" name="email" value="<?php echo $_SESSION['email'] ?>"><hr>
	<input type="radio" id="male" name="gender" value="male" <?php if (isset($_SESSION['gender']) && $_SESSION['gender']=="male") echo "checked";?>>
    <label for="male">Male</label>                     
    <input type="radio" id="female" name="gender" value="female"  <?php if (isset($_SESSION['gender']) && $_SESSION['gender']=="female") echo "checked";?>>
    <label for="female">Female</label>
    <input type="radio" id="other" name="gender" value="other"  <?php if (isset($_SESSION['gender']) && $_SESSION['gender']=="other") echo "checked";?>>
    <label for="other">Other</label><hr>
 Date of Birth:<input type="date" name="dob" value="<?php echo $_SESSION['dob'] ?>"><hr>
 <input type="submit" name="submit" value="Change"><br>

<?php 
if(isset($_POST['submit']))
{
	echo "Updated name: ".$_SESSION['name'];
	echo "<br>";
	echo "Updated email: ".$_SESSION['email'];
	echo "<br>";
	echo "Updated gender: ".$_SESSION['gender'];
	echo "<br>";
	echo "Updated dob: ".$_SESSION['dob'];
}
 ?>
</fieldset>

</td>
</table>
</form>
<?php include 'footer.php'; ?>
</body>
</html>