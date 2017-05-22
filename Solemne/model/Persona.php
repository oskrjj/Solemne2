<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Persona
 *
 * @author CETECOM
 */
class Persona {
    private $rut;
    private $nombre;
    private $apellido;
    private $fecha_nacimiento;
    private $email;
    
    
    function __construct() {
        
    }

    function getRut() {
        return $this->rut;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getApellido() {
        return $this->apellido;
    }

    function getFecha_nacimiento() {
        return $this->fecha_nacimiento;
    }

    function getEmail() {
        return $this->email;
    }

    function setRut($rut) {
        $this->rut = $rut;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    function setFecha_nacimiento($fecha_nacimiento) {
        $this->fecha_nacimiento = $fecha_nacimiento;
    }

    function setEmail($email) {
        $this->email = $email;
    }



}
