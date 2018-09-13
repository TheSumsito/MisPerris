<?php
include_once '../Controladores/Conexion.php';
include_once '../Modelo/Cliente.php';

class DaoControlador {
    private $cone;
    
    function __construct() {
        try {
            $this->cone = new Conexion();
        } catch (Exception $ex) {
            echo $ex->getTraceAsString();
        }
    }
    
    public function Create($Cliente){
        try {
            $sql="insert into cliente values ('@Correo','@RutCliente','@NombreCompleto', '@FechaNaci', '@Telefono', '@TipoVivienda', @region_IdRegion, @comuna_IdComuna)";
            $sql= str_replace("@Correo", $Cliente->getCorreo(), $sql);
            $sql= str_replace("@RutCliente", $Cliente->getRutCliente(), $sql);
            $sql= str_replace("@NombreCompleto", $Cliente->getNombreCompleto(), $sql);
            $sql= str_replace("@FechaNaci", $Cliente->getFechaNaci(), $sql);
            $sql= str_replace("@Telefono", $Cliente->getTelefono(), $sql);
            $sql= str_replace("@TipoVivienda", $Cliente->getTipoVivienda(), $sql);
            $sql= str_replace("@region_IdRegion", $Cliente->getRegion(), $sql);
            $sql= str_replace("@comuna_IdComuna", $Cliente->getComuna(), $sql);
            $filas_afectadas = $this->cone->SqlOperacion($sql);
            return $filas_afectadas;
            
        } catch (Exception $ex) {
            echo $ex->getTraceAsString();
        }
    }
    
    
    
    
    
    
    
    

}
