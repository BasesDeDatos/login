<?php //error_reporting(E_ERROR); 
    require 'vendor/autoload.php';

    try{
        $hybridauth = new Hybrid_Auth( 'config.php' );
        
        $twitter = $hybridauth->authenticate( "Facebook" );
        
        $user_profile = $twitter->getUserProfile();
        
        echo "Hi there! " . $user_profile->displayName;
    }
    catch( Exception $e ){
        echo "Ooophs, we got an error: " . $e->getMessage();
    }
?>

<?php include "header.php"; ?>

    <?php include "page-templates/login-page.php"; ?>

<?php include "footer.php"; ?>

