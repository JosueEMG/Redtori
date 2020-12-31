$(document).ready(function () {
    let funcion = "";
    
    $("#configuracion").on("change", (e) => {
        let configuracion = $("#configuracion").val();
        if (configuracion === "CerrarSesion") {
            funcion = "logout";
            $.post("../Controlador/UsuarioController.php", {funcion}, (response) => {
                window.location.reload();
            })
        }
    })
});



