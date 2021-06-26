<!DOCTYPE html>
<html>
<style>
.error {color: #FF0000;}
body{
        background-color:lavender;
      }
</style>
<body>
<?php
include 'header.php';
if (isset($_SESSION['uname'])) { 


}else{
  header("location:login.php");
}

  ?>
<form action="upload.php" method="post" enctype="multipart/form-data">
 <table border ="1" width="100%">
  <tr height="400px" >
      <td align="left"width="50px">
      <h3>Account</h3><hr>
      <ul>
      <li><a href="logged in dashboard.php">Dashboard</a></li>
      <li><a href="view profile.php">View Profile</a></li>
      <li><a href="edit profile.php">Edit Profile</a></li>
      <li><a href="file.php">Change Profile Picture</a></li>
      <li><a href="ChangePass.php">Change Password</a></li>
      <li><a href="logout.php">Logout</a></li></ul>
      </td>
      
      
      </td>
      <td colspan="2" align="left">
  
          <legend><b>PROFILE PICTURE</b></legend>
           <img src="uploads/images.png" alt="Image "><br>
           <br>
          <input type="file" name="fileToUpload" id="fileToUpload"><br>
          <br>
        <input type="submit" value="submit" name="submit">
    
</td>
</table>
</form>
<?php include 'footer.php'; ?> 

</body>
</html>