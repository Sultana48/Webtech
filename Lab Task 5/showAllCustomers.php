<?php  
require_once 'controller/customerInfo.php';

$customers = fetchAllCustomers();

include 'header.php';
    include "nav.php";



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 <fieldset style="width: 550px";>
<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>Surname</th>
			<th>Username</th>
			<th>Password</th>
			<th>Image</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($customers as $i => $customer): ?>
			<tr>
				<td><a href="showCustomer.php?id=<?php echo $customer['ID'] ?>"><?php echo $customer['Name'] ?></a></td><br>
				<td><?php echo $customer['Surname'] ?></td>
				<td><?php echo $customer['Username'] ?></td>
				<td><?php echo $customer['Password'] ?></td>
				<td><img width="100px" src="uploads/<?php echo $customer['image'] ?>" alt="<?php echo $customer['Name'] ?>"></td>
				<td><a href="editCustomer.php?id=<?php echo $customer['ID'] ?>">Edit</a>&nbsp<a href="controller/deleteCustomer.php?id=<?php echo $customer['ID'] ?>" onclick="return confirm('Are you sure want to delete this ?')">Delete</a></td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>
</fieldset>


</body>
</html>