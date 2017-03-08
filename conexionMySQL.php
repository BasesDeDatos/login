<?php
	$mysqli = mysqli_connect("www.db4free.net", "yzx9gy", "0EbxhCchraAryfvlWIMF",  "yzx9gy2");
	if ($mysqli->connect_errno) {
        //printf("Falló la conexión: %s\n", $mysqli->connect_error);
        $errMSG = $mysqli->connect_error;
        $errTyp = "danger";
        //exit();
    }