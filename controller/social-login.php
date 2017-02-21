<?php

$error = false;

if (isset($_REQUEST["provider"])) {

    require 'vendor/autoload.php';
    $hybridauth = new Hybrid_Auth( 'config.php' );
    
    try{
        $Profile = $hybridauth->authenticate( "Facebook" );
        
        $user_profile = $Profile->getUserProfile();
        
        $_SESSION['user'] = $user_profile->displayName;
        
        header("Location: home.php");
    }
    catch( Exception $e ){
        $error = "Ooophs, we got an error: " . $e->getMessage();
    }
    
    // if (!$error) {

    //     $password = hash('sha256', $pass); // password hashing using SHA256

    //     $res = mysqli_query($mysqli, "SELECT userId, userName, userPass FROM users WHERE userEmail='$email'");
    //     $row = mysqli_fetch_array($res);
    //     $count = mysqli_num_rows($res); // if uname/pass correct it returns must be 1 row
    //     if ($count == 1 && $row['userPass'] == $password) {
    //         $_SESSION['user'] = $row['userId'];
    //         header("Location: home.php");
    //     } else {
    //         $errMSG = "Incorrect Credentials, Try again...";
    //     }

    // }

}