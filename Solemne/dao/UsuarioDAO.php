<?php

include_once __DIR__."/GenericDAO.php";
include_once __DIR__."/../model/Usuario.php";


class UsuarioDAO implements GenericDAO{
    //put your code here
    private $conexion;
    
    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    public function agregar($registro) {
        $query = "INSERT INTO usuario (email, password) values (:email, :password)";
        
        $sentencia =  $this->conexion->prepare($query);
        
        $email = $registro->getEmail();
        $password = $registro->getPassword();
        
        $sentencia->binParam(':email', $email);
        $sentencia->binParam('password', $password);
        
        return $sentencia->execute();
    }

    public function eliminar($idRegistro) {
        $query = "DELETE FROM usuario where email = :email";
        
        $sentencia = $this->conexion->prepare($query);
        
        $sentencia->binParam(':email', $idRegistro);
        
        return $sentencia->execute();
    }

    public function listarTodos() {
        
    }

    public function validarUsuario($idRegistro){
        /*@var $usuario Usuario */
        $usuario = null;
        
        $sentencia = $this->conexion->prepare("SELECT email, clave FROM usuario WHERE email = :email");
        
        $email = $idRegistro;
        $sentencia->bindParam(':email', $email);
        
        $sentencia->execute();
        
        while($registro = $sentencia->fetch()) {            
            $usuario = new Usuario();
            $usuario->setClave($registro["clave"]);
            $usuario->setEmail($registro["email"]);
        }
        
        return $usuario;
    }
    public function modificar($registro) {
        
        $query = "UPDATE usuario set password = :password where email = :email";
        
        $sentencia = $this->conexion->prepare($query);
        
        $password = $registro->getPassword();
        $email = $registro->getEmail();
        
        $sentencia->binParam(':password',$password);
        $sentencia->binParam(':email',$email);
        
        return $sentencia->execute();
        
    }

}
