<?php
session_start();
if (isset($_SESSION["usuario"])) {
    header("location: ChatMundo.php");
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login or Register</title>
        <link href="../Css/Login.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body>
        <div id="center">
            <nav class="nav">
                Bienvenido a RedTori
            </nav>
            <form method="post" id="login">
                <p>Ingresar</p>
                <label>Ingresa tu Nick o ID:</label>
                <input type="text" placeholder="Ingresa tu nick o ID" id="Nick" name="nick"> 
                <br><br><br>
                <label>Ingresa tu contraseña:</label>
                <input type="password" id="pass" name="pass" placeholder="Ingresa tu contraseña">
                <br><br>
                <label>Recordar ususario</label>
                <input type="checkbox" name="rem_user" id="rem_user"><br>
                <input type="submit" value="Ingresar">
            </form>
        </div>
        <div id="register">
            <label>Eres nuevo? Registrate:</label>
            <form name="register" id="register1">
                <label>Ingresa tu Nombre(s):</label>
                <input type="text" placeholder="Ingresa tu nombre" id="nombre" name="name_register" class="txt_regist">
                <label>Ingresa tus Apellidos: </label>
                <input type="text" placeholder="Ingresa tus apellidos" id="apellido" name="ape_register" class="txt_regist">
                <br><br>
                <label>Ingresa la fecha de nacimiento:</label>
                <input type="date" name='date_nac' id="fecha" class="txt_regist">
                <br><br>
                <label>Ingresa tu Sexo:</label>
                <select id="sexo">
                    <option value="M" selected>M</option>
                    <option value="F">F</option>
                </select>
                <br><br>
                <label>Ingresa tu usuario:</label>
                <input type="text" placeholder="Ingresa un nick o un ID" id="nick" name="user_register" class="txt_regist">
                <br><br>
                <label>Ingresa tu password:</label>
                <input type="password" placeholder="Ingresa un password" id="contrasena" name="pass_register" class="txt_regist">
                <br>
                <br>
                <label id="mensaje" hidden style="color: red">Ingrese datos a todos los campos</label>
                <label id="mensaje1" hidden style="color: greenyellow">Usuario registrado con exito</label>
                <div id="br" hidden>
                    <br>
                </div>
                <input type="submit" value="Registrarse" width="10px" id="btn-register" name="btn_register">

            </form>
            <label id="error"></label>
        </div>

        <div id="M">
            <label>Version de prueba N°01</label><br>

        </div>

        <small class="pie">Created by:Eduardo Peña</small>
    </body>
    <script src="../Js/Index.js" type="text/javascript"></script>
</html>

