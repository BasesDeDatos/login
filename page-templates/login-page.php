<?php
    session_start();

    if (isset($_SESSION['user']) != "") {
        header("Location: home.php");
    }
?>

<div class="login-page">
    <div class="jumbotron">
        <div class="row">
            <div class="col-md-12">
                <center>
                    <h1 style="color: #fff">Welcome</h1>
                </center>
            </div>
        </div>
    </div>
    <div class="form">
        <div class="row">
            <?php include "login-form.php"; ?>
        </div>
        <div class="row">
            <?php include "register-form.php"; ?>
        </div>
    </div>
</div>