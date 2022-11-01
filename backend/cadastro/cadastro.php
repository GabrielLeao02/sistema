<?php 

include '../conexao.php';
$nome = $_POST['nome'];
$email = $_POST['email'];
$login = $_POST['login'];
$password = base64_encode($_POST['password']) ;

$query = "INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_login`, `user_password`) VALUES (NULL, '$nome', '$email', '$login', '$password');";
$resultado = mysqli_query($conn, $query);

if($conn->insert_id){
    echo 'Usuário adicionado com sucesso!';
}



