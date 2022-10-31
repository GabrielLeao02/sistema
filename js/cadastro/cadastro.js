

function salvarCadastro() {
    nome = $("#name").val()
    email = $("#email").val()
    login = $("#login").val()
    password = $("#password").val()
    url = "/sistema/backend/cadastro/cadastro.php"
    $.ajax({
        type: "POST",
        url: url,
        data: {
            nome : nome,
            email : email,
            login : login,
            password : password
        },
        
        success: function (result) {
            $("#name").val('')
            $("#email").val('')
            $("#login").val('')
            $("#password").val('')
            $("#mensagem_retorno_cadastro").html(result).css({'color': 'green', 'margin-left': '10px' })
            setTimeout(function(){
                $("#mensagem_retorno_cadastro").html('')
                $(".cadastro-usuario").html('').css('background', 'transparent')
                window.location.href = 'login/login.html';
              }, 3000);
        }
    });
}
