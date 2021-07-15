<?php
session_start();
//error message
$error = "Username or Password is incorrect. Please try again";
//This is the connection process, referencing to connection.php
include 'connection.php';
//When the submit button in Login form is clicked
if(isset($_POST['submit'])){
    //giving variable to password and username
    $pass = $_POST['pass'];
    $username = $_POST['uName'];
    // fetching the data from the database
    $sql_fetch = "SELECT * from tbl_login";
    //giving the result to the system
    $result = $conn->query($sql_fetch);
    //checking if the password and username is matching the database
        while($row = $result->fetch_array()){
            //if the pass and username is correct, display this
            if($row['admin_password'] == $pass && $row['admin_username'] == $username){
                header('location:admin_index.php');
            //if the pass and username is INCORRECT, display this
            }else{
                $_SESSION["error"] = $error;
                header("location: admin_login.php");
            }
        }

}



?>