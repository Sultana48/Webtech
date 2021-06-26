<?php

session_start();
/*$name = $_COOKIE['name']; */  

?>


<!DOCTYPE html>
<html>
<head>
    <title>X Company</title>
</head>
<style>
.error {color: #FF0000;}
body{
        background-color:lavender;
      }
</style>
<body>
    <form>
        <table border ="1" width="100%"  >
            <tr>
                <td width="150px" width="150px" ><img width="150px" height="100px" src="uploads/31.png"></td>
		<td colspan="2" align="right">
                Logged in as <a href="bob.php">Bob</a> |
                <a href="login.php">Logout</a> 
        </td>
            </tr>
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
				<h3><b>Welcome Bob!</b></h3></td>
            </tr>
		
        </table>
        <br>
        <?php include 'footer.php' ?>
    </form>
</body>
</html>