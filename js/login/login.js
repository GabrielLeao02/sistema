
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
            if(result == '1'){window.location.href = '../deshboard/dashboard.php';}
        }
    });
}
