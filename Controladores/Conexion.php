<?php

class Conexion {
    private $Server = "localhost";
    private $User = "root";
    private $Pass = "";
    private $NombreBaseDatos = "misperris";
    
    private $cone;
    
    //Conexion
    function __construct() {
        try {
            $this->cone = mysqli_connect($this->Server, $this->User, $this->Pass, $this->NombreBaseDatos);
        } catch (Exception $ex) {
            echo $ex->getTraceAsString();
        }
    }
    
    //Insert, Delete, Update
    public function SqlOperacion($sql){
        try {
            $resp = mysqli_query($this->cone,$sql);
            return mysqli_affected_rows($this->cone);
        } catch (Exception $ex) {
            echo $ex->getTraceAsString();
        }
    }
    
    //Select
    public function SqlSeleccion($sql){
        try {
            $resp = mysqli_query($this->cone, $sql);
            return $resp;
        } catch (Exception $ex) {
            echo $ex->getTraceAsString(); 
        }
    }
    

    
    
    
}
