<?php include "header.php"; ?>

<?php
    session_start();

    if (!isset($_SESSION['user'])) {
        header("Location: index.php");
    }
?>
    <div class="section">
        <div class="jumbotron">
            <div class="row">
                <div class="col-md-12">
                    <center>
                        <h1 style="color: #fff">Welcome <?php echo $_SESSION['user']; ?>!</h1>
                    </center>
                </div>
            </div>
        </div>
        <div class="row">
           <div class="col-md-12">
               <center>
                   <a href='logout.php' class="btn btn-default" style="color: #fff; background-color: rgba(0,0,0,.12)">Log Out</a>
               </center>
            </div>
        </div>            
    </div>
<?php include "footer.php"; ?>