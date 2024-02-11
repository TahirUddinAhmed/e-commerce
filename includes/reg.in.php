<?php

 if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = $_POST['firstName'];
    $last_name = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $con_pass = $_POST['con_password'];

    // database 
    require_once '../config/database.php';
    require_once '../functions.php';

    if(validate($first_name, $last_name, $email, $password, $con_pass) !== false) {
        header("Location: ../registration.php?error=emptyinput");
        exit();
    }

    if(pwdMatch($password, $con_pass) !== false) {
        header("Location: ../registration.php?error=pwdnotmatch");
        exit();
    }

    if(emailExitst($conn, $email) !== false) {
        header("Location: ../registration.php?error=emailExits");
        exit();
    }

    // create account 
    $hashed_pwd = password_hash($password, PASSWORD_DEFAULT);

    $create = "INSERT INTO `users` (`first_name`, `last_name`, `email`, `password`, `phone`, `address`, `pincode`, `role`, `created_at`) VALUES ('$first_name', '$last_name', '$email', '$hashed_pwd', '', '', '', 'buyer', current_timestamp());";
    $result = mysqli_query($conn, $create);

    if(!$result) {
        die("SOMETHING WENT WRONG" . mysqli_error($conn));
    } else {
        header("Location: ../login.php?created");
    }

 } else {
    header("Location: ../registration.php");
 }