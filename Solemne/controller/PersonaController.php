<?php

include_once __DIR__."/../dao/ConexionDB.php";
include_once __DIR__."/../dao/PersonaDAO.php";

class PersonaController {
    
    public static function listarPersonasRegistradas(){
        $conexion = ConexionDB::getConexion();
        $daoPersona = new PersonaDAO($conexion);
        
        return $daoPersona->listarTodos();
    }
    
    public static function agregarPersona($rut,$nombre,$apellido,$fecha_nacimiento,$email){
        $persona = new Persona();
        $persona->setRut($rut);
        $persona->setNombre($nombre);
        $persona->setApellido($apellido);
        $persona->setFecha_nacimiento($fecha_nacimiento);
        $persona->setEmail($email);
        
        $conexion = ConexionDB::getConexion();
        $daoPersona = new PersonaDAO($conexion);
        
        return $daoPersona->agregar($registro);
    }
    
    public Static function eliminarPersona($rut){
        $conexion = ConexionDB::getConexion();
        $daoPersona = new PersonaDAO($conexion);
        
        return $daoPersona->eliminar($rut);
    }
    
    public static function modificarPersona($rut,$nombre,$apellido,$fecha_nacimiento,$email){
        $persona = new Persona();
        $persona->setRut($rut);
        $persona->setNombre($nombre);
        $persona->setApellido($apellido);
        $persona->setFecha_nacimiento($fecha_nacimiento);
        $persona->setEmail($email);
        
        $conexion = ConexionDB::getConexion();
        $daoPersona = new PersonaDAO($conexion);
        
        return $daoPersona->modificar($registro);
    }
}
