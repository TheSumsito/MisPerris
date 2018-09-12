<?php
$Correo=$_POST["txtCorreo"];
$RutCliente=$_POST["txtRun"];
$NombreCompleto=$_POST["txtNombre"];
$FechaNaci=$_POST["dtFecha"];
$Telefono=$_POST["txtTelefono"];
$TipoVivienda=$_POST["cboTipoVivienda"];
$Comuna=$_POST["txtComuna"];
$Region=$_POST["txtRegion"];


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
$cli->setComuna($Comuna);


asdasd
$dao = new DaoControlador();
$resp=$dao->Create($cli);

if($resp > 0){
    echo "Grabo";
}
else{
    echo "No Grabo";
}
