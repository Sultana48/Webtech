<?php 

require_once ('model/model.php');

function fetchAllCustomers(){
	return showAllCustomers();

}
function fetchCustomer($id){
	return showCustomer($id);

}
