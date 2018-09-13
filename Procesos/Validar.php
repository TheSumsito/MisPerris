<?php
    session_start();
    $User=$_POST["txtUser"];
    $Pass=$_POST["txtPass"];
    
    $Conexion = mysqli_connect("localhost", "root", "", "misperris");
    $sql="select * from login where User='$User' and Pass='$Pass'";
    $Resultado= mysqli_query($Conexion, $sql);
    $filas= mysqli_num_rows($Resultado);
    
    if($filas>0){
        $_SESSION["user"]=$User;
        header('location: ../Vistas/index.php');
    }
    else{
        echo '<script> alert("Usuario No Existe"); document.location.href="../Vistas/login.php"</script>';
    }