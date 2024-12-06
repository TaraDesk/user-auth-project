<?php 

require_once __DIR__ . '/../helpers/session.php';
require_once __DIR__ . '/../models/User.php';
require_once __DIR__ . '/../views/message.php';

$userController = new User();
$id = $_GET['id'];

if(isset($_POST['submit'])) {
	$username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    $result = $userController->update($id, $username, $email);

    if($result) {
        set_success_message("Your profile has been edit", "Success");
        header("location: dashboard.php");
        exit();
    } else {
        set_error_message("There has been an error in the database operation", "Error");
        $message = get_error_message();
        display_errors($message["message"], $message["title"]);
    }
}

?>