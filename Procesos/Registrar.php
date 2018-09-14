<?php
$Correo=$_POST["txtCorreo"];
$RutCliente=$_POST["txtRun"];
$NombreCompleto=$_POST["txtNombre"];
$FechaNaci=$_POST["dtFecha"];
$Telefono=$_POST["txtTelefono"];
$TipoVivienda=$_POST["cboTipoVivienda"];
$Region=$_POST["cboRegion"];
$Ciudad=$_POST["cboCiudad"];


include_once '../Controladores/Conexion.php';
include_once '../Controladores/DaoControlador.php';
include_once '../Modelo/Cliente.php';

$cli = new Cliente();
$cli->setCorreo($Correo);
$cli->setRutCliente($RutCliente);
$cli->setNombreCompleto($NombreCompleto);
$cli->setFechaNaci($FechaNaci);
$cli->setTelefono($Telefono);
$cli->setTipoVivienda($TipoVivienda);
$cli->setRegion($Region);
$cli->setCiudad($Ciudad);

$dao = new DaoControlador();
$resp=$dao->Create($cli);

if($resp > 0){
    echo '<script> alert("Cliente Ingresado Correctamente"); document.location.href="../Vistas/index.php"</script>';
}
else{
    echo '<script> alert("Cliente No fue Ingresado"); document.location.href="../Vistas/index.php"</script>';
}
