<?php include "controller/register.php"; ?>

<form class="register-form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">

    <div class="col-md-12">

        <div class="form-group">
            <h2 class="">Sign Up.</h2>
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
                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                <input type="text" name="name" class="form-control" placeholder="Enter Name" maxlength="50" value="<?php echo $name ?>" />
            </div>
            <span class="text-danger"><?php echo $nameError; ?></span>
        </div>

        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                <input type="email" name="email" class="form-control" placeholder="Enter Your Email" maxlength="40" value="<?php echo $email ?>" />
            </div>
            <span class="text-danger"><?php echo $emailError; ?></span>
        </div>

        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                <input type="password" name="pass" class="form-control" placeholder="Enter Password" maxlength="15" />
            </div>
            <span class="text-danger"><?php echo $passError; ?></span>
        </div>

        <div class="form-group">
            <hr />
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-block" name="btn-signup">Sign Up</button>
        </div>

        <div class="form-group">
            <center>or</center>
            <hr />
        </div>
        
        <button class="btn btn-link social" type="submit" name="btn-facebook">
            <a class="btn btn-block btn-social btn-facebook">
                <span class="fa fa-facebook"></span>
                Sign up with facebook
            </a>
        </button>

        <div class="form-group">
            <p class="message">Already registered? <a href="#">Sign In</a>
            </p>
        </div>

    </div>

</form>