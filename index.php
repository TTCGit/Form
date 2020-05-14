<?php
    require 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>Registration Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div id="login" class="form-reg">
        <h2>Registration Form</h2>
        <form action="register.php" method="POST" class="ajax">
            <label>UserName :</label>
            <input id="name" name="username" type="text" required>
            <label>Password :</label>
            <input id="password" name="password" type="password" required>
            <input name="submit" class="submit" type="submit" value=" Register ">
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="main.js"></script>

</body>
</html>