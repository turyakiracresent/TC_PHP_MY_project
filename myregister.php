<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Registration Page</title>
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
        <h2 class="mt-3">Please Register With Us First.</h2>
        <form action="register.php" method="post" class="mt-4">
            <div class="form-group mb-3">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" class="form-control" required placeholder="Ariho Mark">
            </div>
            <div class="form-group mb-3">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" class="form-control" required placeholder="arihomark@gmail.com">
            </div>
            <div class="form-group mb-3">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" class="form-control" required placeholder="xvzhhhjdudis" pattern=".{8,}" title="Eight or more characters">
            </div>
            <div class="form-group mb-3">
                <label for="confirm_password">Confirm Password:</label>
                <input type="password" id="confirm_password" name="confirm_password" class="form-control" required placeholder="xvzhhhjdudis">
            </div>
            <input type="submit" value="Register" class="btn btn-primary">
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        document.getElementById("password").onchange = validatePassword;
        document.getElementById("confirm_password").onkeyup = validatePassword;

        function validatePassword() {
            var pass2 = document.getElementById("confirm_password").value;
            var pass1 = document.getElementById("password").value;
            if (pass1 !== pass2)
                document.getElementById("confirm_password").setCustomValidity("Passwords Don't Match");
            else
                document.getElementById("confirm_password").setCustomValidity('');
        }
    </script>
</body>
</html>
