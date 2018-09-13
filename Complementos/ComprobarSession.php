<?php
    session_start();
    if (isset($_SESSION["user"])) {
        $user=$_SESSION["user"];
    }else{
        header('location: ../Vistas/login.php');
    }