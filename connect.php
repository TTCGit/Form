<?php
    $connect = mysqli_connect('localhost', 'root', '', 'registration_1');

    if(!$connect) {
        echo 'Error';
        die(mysqli_connect_error());
    }
?>  