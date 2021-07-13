<?php
    // for Connection.php
    include 'connection.php';
    //pag sinubmit yung sa admin_signup.php
    if(isset($_POST['submit'])){
        $username = $_POST['userName'];
        $pass = $_POST['password'];
        $role = $_POST['role'];
        $firstname = $_POST['firstName'];
        $middlename = $_POST['middleName'];
        $lastname = $_POST['lastName'];
        $email = $_POST['email'];
        $contactnumber = $_POST['contactNumber'];
        //insert sa database
        $insert="INSERT INTO `tbl_login`(`admin_username`, `admin_password`, `admin_role`,
        `admin_first_name`, `admin_middle_name`, `admin_last_name`, `admin_email`, `admin_contact_number`)
        VALUES ('$username','$pass','$role','$firstname','$middlename','$lastname','$email','$contactnumber')";
        if($conn->query($insert)){
            header('location:admin_login.php');
            }
    }
?> 