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

<table>
	<tr>
		<th>Name</th>
		<th>Surname</th>
		<th>Username</th>
		<th>Password</th>
		<th>Image</th>
	</tr>
	<tr>
		<td><a href="showCustomer.php?id=<?php echo $customer['ID'] ?>"><?php echo $customer['Name'] ?></a></td>
		<td><?php echo $customer['Surname'] ?></td>
		<td><?php echo $customer['Username'] ?></td>
		<td><?php echo $customer['Password'] ?></td>
		<td><img width="100px" src="uploads/<?php echo $customer['image'] ?>" alt="<?php echo $customer['Name'] ?>"></td>
	</tr>

</table>


</body>
</html>