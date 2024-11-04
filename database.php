<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_system";
$conn = "";
// Creating a database connection
try{
    $conn = mysqli_connect($servername, $username, $password, $dbname);
}
catch(mysqli_sql_exception){
    echo "Could not connect to the database";

}
if($conn){
    echo "You Have Sucessfully Logined In. Congratulations!<br>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Home Page</title>
    <style>
        body {
            background-color: greenyellow;
        }
    </style>
</head>
<body>
    <div class="container text-center">
        <a href="index.php"><img src="icon.png" alt="My logo" width="150" height="150" class="img-fluid"></a><br>
        <a href="index.php" class="btn btn-primary mt-3">Or Press Here To Go Back To The Home Page</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
