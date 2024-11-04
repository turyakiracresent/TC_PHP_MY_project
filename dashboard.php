<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location:mylogin.php"); // Redirect if not logged in
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<style>
        body{
            background-color:greenyellow;
            color:black;
        }
    </style>
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
    <p>You Have Successfully Registered. Congratulations,<?php echo $_SESSION['username']; ?>! </p>
    <p>This is a secure page accessible only to logged-in users.</p>
    <p> Or You Can  now <a href="logout.php"> Logout. </a></P>
</body>
</html>
