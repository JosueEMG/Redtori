
<html>
    <head>
        <meta charset="UTF-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="Index.js" type="text/javascript"></script>
        <title>Login or Register</title>
        <link href="Login.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="register" style="margin-left: 200">
            <label>Eres nuevo? Registrate:</label>
            <form action="../Modelo/Register.php" method="post" name="register">
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
    </body>
</html>
