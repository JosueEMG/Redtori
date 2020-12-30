<?php

include_once '../modelo/Usuario.php';

$usuario = new Usuario();
session_start();
$user = $_POST["user"];
$pass = $_POST["pass"];

if ($_POST['funcion'] == 'buscar_usuario') {
    $json = array();
    $fecha_actual = new DateTime();
    $usuario->obtener_datos($_POST['dato']);
    foreach ($usuario->objetos as $objeto) {
        $nacimiento = new DateTime($objeto->edad);
        $edad = $nacimiento->diff($fecha_actual);
        $edad_years = $edad->y;
        $json[] = array(
            'nombre' => $objeto->nombre_us,
            'apellidos' => $objeto->apellidos_us,
            'edad' => $edad_years,
            'dni' => $objeto->dni_us,
            'tipo' => $objeto->nombre_tipo,
            'telefono' => $objeto->telefono_us,
            'residencia' => $objeto->residencia_us,
            'correo' => $objeto->correo_us,
            'sexo' => $objeto->sexo_us,
            'adicional' => $objeto->adicional_us,
            'avatar' => '../img/' . $objeto->avatar
        );
    }
    $jsonstring = json_encode($json[0]);
    echo $jsonstring;
}

if ($_POST['funcion'] == "logueo") {
    $estado = $usuario->loguearse($user, $pass);
    if (!empty($estado == "logueado")) {
        $usuario->obtener_datos_logueo($user);
        foreach ($usuario->objetos as $objeto) {
            $_SESSION['id_usuario'] = $objeto->id_usuario;
            $_SESSION['usuario'] = $objeto->usuario;
        }
        echo $estado;
    } else {
        echo $estado;
    }
}


