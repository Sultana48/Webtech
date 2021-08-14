<?php
require_once '../model/model.php'; 

if (isset($_POST['findCustomer'])) {
	
		echo $_POST['user_name'];

    try {
    	
    	$allSearchedCustomers = searchCustomer($_POST['user_name']);
        
    	require_once '../showSearchedCustomer.php';

    } catch (Exception $ex) {
    	echo $ex->getMessage();
    }
}

