<?php
session_start();
if(isset($_SESSION["usuario"])){
    header("location: ChatMundo.php");
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login or Register</title>
        <link href="Login.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body>
        <div id="center">
            <nav class="nav">
                Bienvenido a RedTori
            </nav>
            <form action="" method="post" id="login">
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
            <form method="post" name="register">
                <label>Ingresa tu Nombre(s):</label>
                <input type="text" placeholder="Ingresa tu nombre" id="Name_user" name="name_register" class="txt_regist">
                <label>Ingresa tus Apellidos: </label>
                <input type="text" placeholder="Ingresa tus apellidos" id="Ape_user" name="ape_register" class="txt_regist">
                <br><br>
                <label>Ingresa la fecha de nacimiento:</label>
                <input type="date" name='date_nac' id='date_nac' class="txt_regist">
                <label>Ingresa tu usuario:</label>
                <input type="text" placeholder="Ingresa un nick o un ID" id="Nick_register" name="user_register" class="txt_regist">
                <br><br>
                <label>Ingresa tu password:</label>
                <input type="password" placeholder="Ingresa un password" id="Pass_register" name="pass_register" class="txt_regist">
                <br><br><br><br>
                &nbsp;<input type="submit" value="Registrarse" width="10px" id="listo_register" name="btn_register">

            </form>
            <label id="error"></label>
        </div>

        <div id="M">
            <label>Version de prueba N°01</label><br>

        </div>

        <small class="pie">Created by:Eduardo Peña</small>
    </body>
    <script src="Index.js" type="text/javascript"></script>
</html>

