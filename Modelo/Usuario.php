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
} 