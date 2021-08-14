<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		table,td,th{
			border:1px solid black;
		}
	</style>
</head>
<body>

<?php 
include 'header.php';
include "nav.php";

?>

<table>
	<thead>
		<tr>
			<th>User_id</th>
			<th>User_name</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($allSearchedCustomers as $i => $customer): ?>
			<tr>
				<td><a href="../showCustomer.php?id=<?php echo $customer['ID'] ?>"><?php echo $customer['ID'] ?></a></td>
				<td><?php echo $customer['Username'] ?></td>
				<td><a href="../editCustomer.php?id=<?php echo $customer['ID'] ?>">Edit</a>&nbsp<a href="deleteCustomer.php?id=<?php echo $customer['ID'] ?>">Delete</a></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
	

</table>


</body>
</html>