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