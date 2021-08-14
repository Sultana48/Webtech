<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <?php 
    include 'header.php';
        include "nav.php";

     ?>
   

 <form action="controller/createCustomer.php" method="POST" enctype="multipart/form-data">
    <fieldset style="width: 550px";>
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name"><br>
  <label for="surname">Surname:</label><br>
  <input type="text" id="surname" name="surname"><br>
  <label for="username">User Name:</label><br>
  <input type="text" id="username" name="username"><br>
  <label for="password">Password:</label><br>
  <input type="password" id="password" name="password"><br>
  <input type="file" name="image"><br><br>
  <input type="submit" name = "createCustomer" value="Create">
  <input type="reset"> 
</fieldset>
</form> 

</body>
</html>

