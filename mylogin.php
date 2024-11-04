<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        body {
            background-color: greenyellow;
        }
    </style>
</head>
<body>
    <div class="container text-center mt-5">
        <a href="index.php"><img src="icon.png" alt="My logo" width="150" height="150" class="img-fluid"></a>
        <h2 class="mt-3">Login</h2>
        <form action="login.php" method="post" class="mt-4">
            <div class="form-group mb-3">
                <label for="username">Username or Email:</label>
                <input type="text" id="username" name="username" class="form-control" required placeholder="Ariho Mark or arihomark@gmail.com">
            </div>
            <div class="form-group mb-3">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>
            <input type="submit" value="Login" class="btn btn-primary">
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
