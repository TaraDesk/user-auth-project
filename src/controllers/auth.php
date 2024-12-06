<?php
require_once __DIR__ . '/../helpers/session.php';
require_once __DIR__ . '/../models/User.php';
require_once __DIR__ . '/../views/message.php';

$userController = new User();

if (isset($_POST['register'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];
    $confirm_pass = $_POST['password_conf'];

    if ($password === $confirm_pass) {
        $result = $userController->create($username, $email, md5($password));
        if ($result) {
            set_success_message("Your account has been created", "Congratulations!");
            header("location: ../../index.php");
            exit();
        } else {
            set_error_message("There has been an error in the database operation", "Error");
            $message = get_error_message();
            display_errors($message["message"], $message["title"]);
        }
    } else {
        set_error_message("Your password does not match with your confirmation password", "Error");
        $message = get_error_message();
        display_errors($message["message"], $message["title"]);
    }
}

if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = md5($_POST['password']);

    $result = $userController->getByCredential($email, $password);

    if($result) {
        set_login_info($result["id"], $result["username"]);
        header("location: src/views/dashboard.php");
        exit();
    } else {
        set_error_message("Your email and password does not match with the database", "Error");
        $message = get_error_message();
        display_errors($message["message"], $message["title"]);
    }
}

?>
