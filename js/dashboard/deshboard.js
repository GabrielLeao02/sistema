function buscaPerfil() {
    alert($("#id").val())
    $.ajax({
        type: "POST",
        url: url,
        data: {
            nome: nome,
            email: email,
            login: login,
            password: password
        },

        success: function (result) {
           
        }
    });
}