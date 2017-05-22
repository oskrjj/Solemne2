<?php
include_once __DIR__."/GenericDAO.php";
include_once __DIR__."/../model/Persona.php";


class PersonaDAO implements GenericDAO{
    
    private $conexion;
    
     public function __construct($conexion) {
        $this->conexion = $conexion;
    }
    
    public function agregar($registro) {
        $query = "INSERT INTO persona (nombre,apellido,fecha_nacimiento, email) VALUES ( :nombre, :apellido, :fecha_nacimiento, :email) ";
        
        $sentencia = $this->conexion->prepare($query);
        
        $rut = $registro->getRut();
        $nombre = $registro->getNombre();
        $apellido = $registro->getApellido();
        $fechaNacimiento = $registro->getFechaNacimiento();
        $email = $registro->getEmail();
        
        $sentencia->bindParam(':rut' , $rut);
        $sentencia->bindParam(':nombre', $nombre);
        $sentencia->bindParam(':apellido', $apellido);
        $sentencia->bindParam(':fecha_nacimiento', $fechaNacimiento);
        $sentencia->bindParam(':email', $email);        
              
        return $sentencia->execute();
    }

    public function eliminar($idRegistro) {
        $query = "DELETE FROM persona where rut = :rut";
        
        $sentencia = $this->conexion->prepare($query);
        
        $sentencia->bindParam(':rut',$idRegistro);
        
        return $sentencia->execute();
    }

    public function listarTodos() {
        $listado = array();
        
        $registros = $this->conexion->query("SELECT * FROM persona");
        
        if($registros != null) {
            foreach($registros as $fila) {
                $persona = new Persona();
                $persona->setRut($fila["rut"]);
                $persona->setNombre($fila["nombre"]);
                $persona->setApellido($fila["apellido"]);
                $persona->setFechaNacimiento($fila["fecha_nacimiento"]);
                $persona->setEmail($fila["email"]);

                array_push($listado, $persona);
            }
        }
        
        return $listado;
    }

    public function modificar($registro) {
        $query = "UPDATE persona set nombre = :nombre,apellido = :apellido, fecha_nacimiento = :fecha_nacimiento, email = :email where id = :rut";
        
        $sentencia = $this->conexion->prepare($query);
        
        $rut = $registro->getRut();
        $nombre = $registro->getNombre();
        $apellido = $registro->getApellido();
        $fecha_nacimiento = $registro->getFecha_nacimiento();
        $email = $registro->getEmail();
        
        $sentencia->binParam(':nombre',$nombre);
        $sentencia->binParam(':apellido',$apellido);
        $sentencia->binParam(':fecha_nacimiento',$fecha_nacimiento);
        $sentencia->binParam(':email',$email);
        $sentencia->binParam(':rut',$rut);
        
        return $sentencia->execute();
    }

}
