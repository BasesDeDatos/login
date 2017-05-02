<?php

$error = false;

if (!mysqli_connect_errno() && isset($_POST['btn-login'])) {

    $email = trim($_POST['email']);
    $email = strip_tags($email);
    $email = htmlspecialchars($email);

    $pass = trim($_POST['pass']);
    $pass = strip_tags($pass);
    $pass = htmlspecialchars($pass);
    // prevent sql injections / clear user invalid inputs

    if (empty($email)) {
        $error = true;
        $emailError = "Please enter your email address.";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = true;
        $emailError = "Please enter valid email address.";
    }

    if (empty($pass)) {
        $error = true;
        $passError = "Please enter your password.";
    }

    // if there's no error, continue to login
    if (!$error) {

        // $password = hash('sha256', $pass); // password hashing using SHA256

        $res = mysqli_query($mysqli, "SELECT id, username, password FROM usuario WHERE username='$email'");
        $row = mysqli_fetch_array($res);
        $count = mysqli_num_rows($res); // if uname/pass correct it returns must be 1 row
        if ($count == 1 && $row['userPass'] == $password) {
            $_SESSION['user'] = $row['username'];
            header("Location: home.php");
        } else {
            $errMSG = "Incorrect Credentials, Try again...";
        }

    }

}