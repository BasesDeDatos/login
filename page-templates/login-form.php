<?php include "controller/login.php"; ?>
<?php include "controller/social-login.php"; ?>

<form class="login-form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">

    <div class="col-md-12">

        <div class="form-group">
            <h2 class="">Sign In.</h2>
        </div>

        <div class="form-group">
            <hr />
        </div>

        <?php if ( isset($errMSG) ) { ?>
        <div class="form-group">
            <div class="alert alert-<?php echo ($errTyp=="") ? "danger " : $errTyp; ?>">
                <span class="glyphicon glyphicon-info-sign"></span>
                <?php echo $errMSG; ?>
            </div>
        </div>
        <?php } ?>

        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                <input type="email" name="email" class="form-control" placeholder="Your Email" value="<?php echo $email; ?>" maxlength="40" />
            </div>
            <span class="text-danger"><?php echo $emailError; ?></span>
        </div>

        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                <input type="password" name="pass" class="form-control" placeholder="Your Password" maxlength="15" />
            </div>
            <span class="text-danger"><?php echo $passError; ?></span>
        </div>

        <div class="form-group">
            <hr />
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-block" name="btn-login">Sign In</button>
        </div>

        <div class="form-group">
            <center>or</center>
            <hr />
        </div>
        
        <a href="?provider=facebook" class="btn btn-block btn-social btn-facebook">
            <span class="fa fa-facebook"></span>
            Sign in with facebook
        </a>
        <a href="?provider=google" class="btn btn-block btn-social btn-google">
            <span class="fa fa-google"></span>
            Sign in with google
        </a>

        <div class="form-group">
            <p class="message">Not registered? <a href="#">Create an account</a>
            </p>
        </div>

    </div>

</form>