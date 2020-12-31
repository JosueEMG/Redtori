<?php

include_once 'Conexion.php';

class Usuario {

    var $objetos;

    public function __construct() {
        $bd = new Conexion();
        $this->acceso = $bd->pdo;
    }

    function loguearse($usuario, $contrasena) {
        $sql = "SELECT * FROM usuario where usuario =:usuario1";
        $query = $this->acceso->prepare($sql);
        $query->execute(array(':usuario1' => $usuario));
        $objetos = $query->fetchall();
        foreach ($objetos as $objeto) {
            $contrasena_actual = $objeto->contrasena;
        }
        if ($contrasena == $contrasena_actual) {
            return "logueado";
        } else {
            return "nologueado";
        }
    }
    
    function obtener_datos_logueo($usuario){
        $sql="SELECT * FROM usuario where usuario=:usuario";
        $query = $this->acceso->prepare($sql);
        $query->execute(array(':usuario'=>$usuario));
        $this->objetos = $query->fetchall();
        return $this->objetos;       
    }
    
    function obtener_datos($id){
        $sql="SELECT * FROM usuario where id_usuario=:id";
        $query = $this->acceso->prepare($sql);
        $query->execute(array(':id'=>$id));
        $this->objetos = $query->fetchall();
        return $this->objetos;       
    }
    
    function registrar($nombre,$apellido,$fecha,$nick,$pass, $sexo){
        $sql="SELECT id_usuario FROM usuario where usuario=:usuario";
        $query = $this->acceso->prepare($sql);
        $query->execute(array(':usuario'=>$nick));
        $this->objetos=$query->fetchall();
        if(!empty($this->objetos)){
            echo 'noanadido';
        }
        else{
            $sql="INSERT INTO usuario(nombre, apellido, usuario, contrasena, fecha_nacimiento, sexo) values (:nombre, :apellido, :usuario, :contrasena, :fecha_nacimiento, :sexo)";
            $query = $this->acceso->prepare($sql);
            $query->execute(array(':nombre'=>$nombre,':apellido'=>$apellido,':usuario'=>$nick,':contrasena'=>$pass,':fecha_nacimiento'=>$fecha, ':sexo'=>$sexo));
            echo 'anadido';
        }
        
    }
} 