Registration Form 
Version: 1.0
Author: Calin T. Tasca
Description: Simple register form that allows you to create a new user on your DB with a hashed password.

Setting Up:
    Step I:
        - create a database and table strucutre
        - database structure:
        	- https://www.screencast.com/t/VGdOqX2WLBE
        	- https://www.screencast.com/t/kTyJighCxIu
        - crate php script to connect the database: 
            - $connect = mysqli_connect('localhost', 'root', '', 'registration_1'); //Code used to connect your DB
        - create DB via SQL code:
            CREATE TABLE `users`(
                `id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                `username` VARCHAR(100) NOT NULL,
                `email` VARCHAR(100) NOT NULL,
                `password` VARCHAR(100) NOT NULL
            ) ENGINE = INNODB DEFAULT CHARSET = latin1;
        - manual import of my DB
        	- https://www.screencast.com/t/sojVj2swb0
        	- DB can be found in database folder

    Step II:
        - create simple HTML Form in index.php:
            <form action="register.php" method="post">
                <label>UserName :</label>
                <input id="name" name="username" type="text" required>
                <label>Password :</label>
                <input id="password" name="password" type="password" required>
                <input name="submit" class="submit" type="submit" value=" Register ">
            </form>
    Step III:
        - create a php script registration form(register.php)

    Step IV:
        - create two scripts that alert:
            - success, if the user was created
            - error, if the username is already in use