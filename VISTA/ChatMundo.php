<?php
  session_start();
  if(!isset($_SESSION["usuario"])){
  header("location: Login.php");
  }

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>RedT0ri-welcome</title>
        <link href="../Css/Front__RedTori_style.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>  
    <body>
        <div id="bar_up">
            <div id="user">
                <label>User: <?= $_SESSION["usuario"] ?></label>&nbsp;

            </div>

            <div id="chat_mundo">
                <section>
                    <label>Chat Mundo</label>
                </section>
            </div>
            <div id="fun_user">

            </div>

            <div id="config">
                <select id="configuracion">
                    <option value="">Configuraciones</option>
                    <option value="Perfil">Perfil</option>                    
                    <option value="About">Acerca de</option>
                    <option value="CerrarSesion">Cerrar sesion</option>                    
                </select>
            </div>
        </div>
        <div id="contenido" style="margin-top: 10px; margin-left: 100px; margin-right: 100px">
            <div id="bar_up">
                <p>asdasdaiydyuausgbduy aubduyauybduyas</p>
            </div>
        </div>
        </div>
    </body>
    <script src="../Js/ChatMundo.js" type="text/javascript"></script>
</html>

