<?php

include_once '../modelo/Usuario.php';

$usuario = new Usuario();
session_start();
$user = $_POST["user"];
$pass = $_POST["pass"];

if ($_POST['funcion'] == 'buscar_usuario') {
    $json = array();
    $fecha_actual = new DateTime();
    $usuario->obtener_datos($_SESSION['id_usuario']);
    foreach ($usuario->objetos as $objeto) {
        $nacimiento = new DateTime($objeto->fecha_nacimiento);
        $edad = $nacimiento->diff($fecha_actual);
        $edad_years = $edad->y;
        $json[] = array(
            'usuario' => $objeto->usuario,
            'constrasena' => $objeto->apellidos_us,
            'edad' => $edad_years,
            'sexo' => $objeto->sexo,
            'foto' => '../img/' . $objeto->foto
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


