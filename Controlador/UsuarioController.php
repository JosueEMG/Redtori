<?php

include_once '../modelo/Usuario.php';

$usuario = new Usuario();
session_start();

if ($_POST['funcion'] == 'buscar_usuario') {
    $json = array();
    $fecha_actual = new DateTime();
    $usuario->obtener_datos($_SESSION['id_usuario']);
    foreach ($usuario->objetos as $objeto) {
        $nacimiento = new DateTime($objeto->fecha_nacimiento);
        $edad = $nacimiento->diff($fecha_actual);
        $edad_years = $edad->y;
        $json[] = array(
            "nombre" => $objeto->nombre,
            "apellido" => $objeto->apellido,
            'usuario' => $objeto->usuario,
            'constrasena' => $objeto->contrasena,
            'edad' => $edad_years,
            'sexo' => $objeto->sexo,
            'foto' => '../img/' . $objeto->foto
        );
    }
    $jsonstring = json_encode($json[0]);
    echo $jsonstring;
}

if ($_POST['funcion'] == "logueo") {
    $estado = $usuario->loguearse($_POST["user"], $_POST["pass"]);
    if (!empty($estado == "logueado")) {
        $usuario->obtener_datos_logueo($_POST["user"]);
        foreach ($usuario->objetos as $objeto) {
            $_SESSION['id_usuario'] = $objeto->id_usuario;
            $_SESSION['usuario'] = $objeto->usuario;
        }
        echo $estado;
    } else {
        echo $estado;
    }
}

if ($_POST['funcion'] == "registrar") {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $fecha = $_POST["fecha"];
    $nick = $_POST["nick"];
    $contrasena = $_POST["contrasena"];
    $sexo = $_POST["sexo"];
    $usuario->registrar($nombre, $apellido, $fecha, $nick, $contrasena, $sexo);
}

if ($_POST['funcion'] == "logout") {
    session_destroy();
}


