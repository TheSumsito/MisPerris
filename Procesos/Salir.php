<?php
    session_start();
    unset($_SESSION["user"]);
    header("Location: ../Vistas/login.php");