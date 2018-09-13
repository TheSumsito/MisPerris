<?php

class Cliente {
    private $Correo;
    private $RutCliente;
    private $NombreCompleto;
    private $FechaNaci;
    private $Telefono;
    private $Ciudad;
    private $Region;
    private $TipoVivienda;
    
    function __construct() {
        
    }

    function getCorreo() {
        return $this->Correo;
    }

    function getRutCliente() {
        return $this->RutCliente;
    }

    function getNombreCompleto() {
        return $this->NombreCompleto;
    }

    function getFechaNaci() {
        return $this->FechaNaci;
    }

    function getTelefono() {
        return $this->Telefono;
    }

    function getCiudad() {
        return $this->Ciudad;
    }

    function getRegion() {
        return $this->Region;
    }

    function getTipoVivienda() {
        return $this->TipoVivienda;
    }

    function setCorreo($Correo) {
        $this->Correo = $Correo;
    }

    function setRutCliente($RutCliente) {
        $this->RutCliente = $RutCliente;
    }

    function setNombreCompleto($NombreCompleto) {
        $this->NombreCompleto = $NombreCompleto;
    }

    function setFechaNaci($FechaNaci) {
        $this->FechaNaci = $FechaNaci;
    }

    function setTelefono($Telefono) {
        $this->Telefono = $Telefono;
    }

    function setCiudad($Ciudad) {
        $this->Ciudad = $Ciudad;
    }

    function setRegion($Region) {
        $this->Region = $Region;
    }

    function setTipoVivienda($TipoVivienda) {
        $this->TipoVivienda = $TipoVivienda;
    }


    



}
