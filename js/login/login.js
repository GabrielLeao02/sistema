
function loginUsuario() {

    email = $("#email").val()
    password = $("#password").val()
    url = '/sistema/backend/login/login.php';
    $.ajax({
        type: "POST",
        url: url,
        data: {
            email: email,
            password: password
        },
        success: function (result) {
            alert(result)
            if (result != 'Erro ao efetuar login, verifique seus dados!') {
                console.log(result)
                window.location.href = `/sistema/pages/dashboard/dashboard.php?id=${result}`;
            } else {
                alert("Erro ao efetuar login")
                $("#mensagem_retorno_cadastro").html(result).css({ "color": "red" });
                setTimeout(function () {
                    $("#mensagem_retorno_cadastro").html("").css({ "color": "red" });
                }, 4000)
            }

        }
    });
}
