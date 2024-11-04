<?php
//include a database.php file to connect MySQL database
require_once 'database.php';
/*
$_SERVER['REQUEST_METHOD'] === 'POST': Checks if a form  was submitted using  post request.
*/
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Input Sanitization
    //filtering username and password incase they contain malicious sript using filter_input() function
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $password = $_POST['password'];

    // Password Hashing for security reasons to avoid attackers using password_hash function
    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    /*Storing user information in the users table in the data base uer_system
    $sql variable holds the SQL query, using place holders (?) for the actual values to be inserted.

    */
    $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);// prepares the SQL  statement for execution.
    $stmt->bind_param("sss", $username, $email, $password_hash);
    /*$stmt->bind_param("sss", $username, $email, $password_hash);-binds the actual values to the actual palceholders
    in the SQL query.This prevents SQL injection attacks, as the database interpretes them as data not executable code.
     */
    //After storing user information a user is redirected to login page 
    if ($stmt->execute()) {
        header("Location: mylogin.php?success=1"); // Redirect to mylogin psge on success
    } else {
        echo "Error during registration";
    }
/*closing the statement and the data connection
hence freeing up resouirces
*/
    $stmt->close();
    $conn->close();
}
?>
