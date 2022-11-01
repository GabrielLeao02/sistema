
function loginUsuario() {

    email = $("#email").val()
    password = $("#password").val()
    url = '/sistema/login/login.php';
    $.ajax({
        type: "POST",
        url: url,
        data: {
            email: email,
            password: password
        },
        success: function (result) {
            if (result != 'Erro ao efetuar login, verifique seus dados!') {
                console.log(result)
                window.location.href = `../deshboard/dashboard.php?id=${result}`;
            } else {
                $("#mensagem_retorno_cadastro").html(result).css({ "color": "red" });
                setTimeout(function () {
                    $("#mensagem_retorno_cadastro").html("").css({ "color": "red" });
                }, 4000)
            }

        }
    });
}
