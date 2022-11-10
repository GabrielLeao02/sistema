function buscaPerfil() {
    id = $("#id").val();
    url = "/sistema/deshboard/perfil/busca_dados_perfil.php";
    $.ajax({
        type: "POST",
        url: url,
        data: {
            id: id
        },
        success: function (result) {
            console.log( JSON.parse(result)[1] )
        }
    });
}

function openModalPerfil(){
   
    if($("#modal-perfil-user").hasClass("modal-perfil-user")){
        $("#modal-perfil-user").removeClass("modal-perfil-user")
        $("#modal-perfil-user").addClass( "remove-modal-perfil-user" )
        $("#icon_perfil").removeClass("icon_perfil")
    }else{
        $("#modal-perfil-user").removeClass( "remove-modal-perfil-user" )
        $("#modal-perfil-user").addClass("modal-perfil-user")
        $("#icon_perfil").addClass("icon_perfil")
    }
}
