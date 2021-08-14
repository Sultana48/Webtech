<?php 
 include 'header.php';

if(!empty($_POST["remember"])) {
	setcookie ("username",$_POST["uname"],time()+ (86400*30));
	setcookie ("password",$_POST["pass"],time()+ (86400*30));
	echo $_COOKIE['username'];
} else {
	setcookie("username","");
	setcookie("password","");
}
$username = $password = "admin";

 if (isset($_POST['submit'])) 
 {               
   if($_POST['uname']==$username && $_POST['pass'] == $password)
 	{
 		$_SESSION['uname'] = $username;
 		$_SESSION['password'] = $password;
 		
		header("location:logged in dashboard.php");
 	}
 	else{
		$msg="username or password invalid";
	}
 } 
 
 ?>
 <!DOCTYPE html>
<html>
<head>
<style>
body{
        background-color:lavender;
      }
</style>
</head>
<body>
	<br>
	<fieldset >
		 
  <br><br>
	
	<form action=" " method="post">

		<fieldset style="width: 550px";>
			
		<tr>
			<legend><b>LOGIN</b></legend>
		</tr>
		<?php if(isset($msg)){?>
		    <tr>
		      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
		    </tr>
    	<?php } ?>

		<tr>
			<td>Username:</td>
			<td><input type="text" name="uname" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>"></td>
		</tr><br>
		<br>
		<tr>
			<td>Password:</td>
			<td><input type="password" name="pass" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>"></td>
		</tr><br>
		<br>
		<tr>
			<td ><input type="checkbox" name="remember">Remember Me<br><br></td>
		</tr><br>
		<br>
		<td ><input type="submit" name="submit" value="Submit"> </td>
		</tr>
    		<br>
			<p align="right"> <a href="forgotPass.php"> Forgot Password | </a>
				
		</fieldset>
		<br>
		
	</form>
</fieldset >
<br>
<?php include 'footer.php' ?>
</body>
</html>