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
        <link href="Front__RedTori_style.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body>
        <div id="bar_up">
            <div id="user">
                <label>User: <?= $_SESSION["usuario"]?></label>&nbsp;

            </div>


            <div id="chat_mundo">
                <section>
                    <label>Chat Mundo</label>
                </section>
            </div>
            <div id="fun_user">

            </div>
        </div>
    </body>
</html>

