<?php
if (isset($error_message)) { 
    echo "<p style='color:red;'>$error_message</p>";
}
require_once 'database.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve and sanitize user input
    $username_email = $_POST['username'];
    $password = $_POST['password'];

    // Prepared statement to prevent SQL Injection
    $sql = "SELECT id, username, password FROM users WHERE username = ? OR email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username_email, $username_email);
    $stmt->execute();
    $result = $stmt->get_result();

    // Checking if the user exists and verifying password
    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {
            // Successful login
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            header("Location: dashboard.php");
            exit();
        } else {
            $error_message = "Incorrect password. Please try again with the correct password.";
        }
    } else {
        $error_message = "Username or email not found. Please register now or try again.";
    }

    $stmt->close();
    $conn->close();
}
?>


