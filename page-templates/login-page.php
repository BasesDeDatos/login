<?php
    session_start();

    if (isset($_SESSION['user']) != "") {
        header("Location: home.php");
    }
?>
<div class="login-page">
    <div class="form">
        <div class="row">
            <?php include "login-form.php"; ?>
        </div>
        <div class="row">
            <?php include "register-form.php"; ?>
        </div>
    </div>
</div>