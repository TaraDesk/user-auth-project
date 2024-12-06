<?php 

require_once __DIR__ . '/../helpers/session.php';
require_once __DIR__ . '/../models/User.php';

$userController = new User();

$id = $_GET['id'];

if($id) {
	$result = $userController->delete($id);
	if ($result) {
		start_session();
    	session_destroy();
    	start_session();
		set_success_message("Your account has been deleted", "Success");
        header("location: ../../index.php");
        exit();
	} else {
		set_error_message("There has been an error in the database operation", "Error");
		header("location: ../../index.php");
		exit();
	}
} 

?>