
<!DOCTYPE html>
<html>
  <body>
<?php 
include 'header.php';
include "nav.php";

?>
    <!-- [SEARCH FORM] -->
    <form method="post" action="controller/findCustomer.php">
       <fieldset style="width: 550px";>
      <h1>SEARCH FOR CustomerS</h1>
      <input type="text" name="user_name" />
      <input type="submit" name="findCustomer" value="Search"/>
    </fieldset>

    </form>
    <br>


 
  </body>
</html>