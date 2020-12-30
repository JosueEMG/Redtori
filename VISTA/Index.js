$(document).ready(function () {
    let funcion = "";
    $("#login").submit((e)=> {
        let user = $("#Nick").val();
        let pass = $("#pass").val();
        funcion = "logueo";
        $.post("../Controlador/UsuarioController.php", {user, pass, funcion}, (response) => {
            window.location = "../VISTA/ChatMundo.php";
        })
        e.preventDefault();
    })
});


