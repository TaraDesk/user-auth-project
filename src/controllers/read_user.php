<?php 
require_once __DIR__ . '/../models/User.php';

$userController = new User();

function read_user_info($id) {
	global $userController;
	$user_info = $userController->getById($id);
	if($user_info) {
		return $user_info;
	} else {
		return null;
	}
}
?>