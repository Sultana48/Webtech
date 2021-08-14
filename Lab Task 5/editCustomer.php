<?php 

require_once 'controller/customerInfo.php';
$customer = fetchCustomer($_GET['id']);

include 'header.php';
 include "nav.php";



 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

 <form action="controller/updateCustomer.php" method="POST" enctype="multipart/form-data">
     <fieldset style="width: 550px";>
  <label for="name">Name:</label><br>
  <input value="<?php echo $customer['Name'] ?>" type="text" id="name" name="name"><br>
  <label for="surname">Surname:</label><br>
  <input value="<?php echo $customer['Surname'] ?>" type="text" id="surname" name="surname"><br>
  <label for="username">User Name:</label><br>
  <input value="<?php echo $customer['Username'] ?>" type="text" id="username" name="username"><br>
  <input type="file" name="image"><br><br>
  <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
  <input type="submit" name = "updateCustomer" value="Update">
  <input type="button" name="reset" value="Reset" onclick="this.form.reset();">
</fieldset>
</form> 

</body>
</html>

