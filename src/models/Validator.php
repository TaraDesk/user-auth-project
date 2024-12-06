<?php

// Validate if email is correctly formatted
function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// Validate if password meets strength requirements
function validatePassword($password) {
    // Must contain at least one uppercase, one lowercase, and one digit
    return preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/", $password);
}

// Validate if username is valid (no special characters)
function validateUsername($username) {
    return preg_match("/^[a-zA-Z0-9_]{3,20}$/", $username); // Allow alphanumeric and underscores
}

// Generic error handling for validation
function validateForm($data) {
    $errors = [];

    if (!validateEmail($data['email'])) {
        $errors[] = "Invalid email address.";
    }

    if (!validatePassword($data['password'])) {
        $errors[] = "Password must be at least 8 characters long and contain one uppercase letter, one lowercase letter, and one number.";
    }

    if (!validateUsername($data['username'])) {
        $errors[] = "Username can only contain alphanumeric characters and underscores.";
    }

    return $errors;
}
?>
