$(document).ready(function () {
    $("#br").hide();
    let funcion = "";
    $("#login").submit((e)=> {
        let user = $("#Nick").val();
        let pass = $("#pass").val();
        funcion = "logueo";
        $.post("../Controlador/UsuarioController.php", {user, pass, funcion}, (response) => {
            console.log(response);
            window.location = "../VISTA/ChatMundo.php";
        })
        e.preventDefault();
    })
    
    $("#register1").submit((e)=>{
        let nombre = $("#nombre").val();
        let apellido = $("#apellido").val();
        let fecha = $("#fecha").val();
        let nick = $("#nick").val();
        let contrasena = $("#contrasena").val();
        let sexo = $("#sexo").val();
        funcion = "registrar";
        if (nombre == "" || apellido == "" || fecha == "" || nick == "" || contrasena == "") {
            $("#mensaje").show();
            $("#br").show();
        }
        else {
            $.post("../Controlador/UsuarioController.php", {nombre, apellido, fecha, nick, contrasena, sexo, funcion}, (response) => {
                if (response === "anadido") {
                    $("#mensaje1").show();
                }
            })
        }
        e.preventDefault();
    })
    
    
});


