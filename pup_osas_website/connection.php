<?php
//connect to the database
    $link = mysqli_connect('localhost','root','','db_registration');
    $location = "localhost";
    $name = "root";
    $password = "";
    $database = "db_registration";
    $conn = new mysqli($location, $name, $password, $database);

    if($conn->connect_error){
        echo "Connection Error";
    }
?>