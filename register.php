<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="success">

<?php
    require 'connect.php';
    
    if(isset($_POST['username']) && isset($_POST['username'])) {
        $user  = $_POST["username"];
        $pass  = $_POST['password'];
        $salt = 'salt_';
        $hash_pass = md5($salt.$pass);
        $query = mysqli_query($connect, "SELECT * FROM users WHERE username= '$user'");

        if(mysqli_num_rows($query) > 0) { //check if there is already an entry for that username
            echo"
                <div class='error'>
                    <h1>Error, username already in use!</h1>
                    <a href='index.php'>Go back</a>
                </div>
            ";
        } else {
            $sql    = "INSERT INTO users(username, password) VALUES ('$user', '$hash_pass')";
            $result = mysqli_query($connect, $sql);
            
            echo"
                <div class='success'>
                    <h1> $user, registration successful!</h1>
                    <a href='index.php'>Go back</a>
                </div>
            ";
        }
    }
?>


</body>
</html>