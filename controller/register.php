<?php

$error = false;

if (!mysqli_connect_errno() && isset($_POST['btn-signup'])) {

    // clean user inputs to prevent sql injections
    $email = trim($_POST['email']);
    $email = strip_tags($email);
    $email = htmlspecialchars($email);

    $pass = trim($_POST['pass']);
    $pass = strip_tags($pass);
    $pass = htmlspecialchars($pass);

    // basic name validation
    // if (empty($name)) {
    //     $error = true;
    //     $nameError = "Please enter your full name.";
    // } else if (strlen($name) < 3) {
    //     $error = true;
    //     $nameError = "Name must have atleat 3 characters.";
    // } else if (!preg_match("/^[a-zA-Z ]+$/", $name)) {
    //     $error = true;
    //     $nameError = "Name must contain alphabets and space.";
    // }

    //basic email validation
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = true;
        $emailError = "Please enter valid email address.";
    } else {
        // check email exist or not
        $query = "SELECT username FROM usuario WHERE username='$email'";
        $result = mysqli_query($mysqli, $query);
        $count = mysqli_num_rows($result);
        if ($count != 0) {
            $error = true;
            $emailError = "Provided Email is already in use.";
        }
    }
    
    // password validation
    if (empty($pass)) {
        $error = true;
        $passError = "Please enter password.";
    } else if (strlen($pass) < 6) {
        $error = true;
        $passError = "Password must have atleast 6 characters.";
    }

    // password encrypt using SHA256();
    $password = hash('sha256', $pass);

    // if there's no error, continue to signup
    if (!$error) {

        $query = "INSERT INTO usuario(username,password) VALUES('$email','$pass')";
        $res = mysqli_query($mysqli, $query);
        if ($res) {
            $errTyp = "success";
            $errMSG = "Successfully registered, you may login now";
            unset($name);
            unset($pass);
        } else {
            $errTyp = "danger";
            $errMSG = "Something went wrong, try again later...";
        }

    }

}