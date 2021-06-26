<?php

include 'header.php';
            
?>

<!DOCTYPE html>
<html>
<head>
<style>
.error {color: #FF0000;}
body{
        background-color:lavender;
      }
</style>
</head>
<body>
	<fieldset >
    <form>
        <table border ="1" width="100%"  >
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
			
                <td colspan="2" 
				<td   
			 <form method= "post" action="" >
			 <fieldset >
			 <legend><b>PROFILE</b></legend>
			 <pre>Name   : Bob</pre><hr>
			 <pre>Email  : bob@aiub.edu</pre><hr>
			 <pre>Gender : Male</pre><hr>
			 <pre>Date of Birth : 19/09/1998</pre><hr>
			  <td>
                  <img src="uploads/90.png" alt="User" height="150px" width="150px"><br>
                   <a href="uploadImage.php">Change</a>
                            
               </td>
			 <a href="edit profile.php">Edit Profile</a>
			 
			 </fieldset >
            </tr>
        </table>
        <?php include 'footer.php' ?>
    </form>
</fieldset >
</body>
</html>