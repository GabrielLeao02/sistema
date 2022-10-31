<?php

require_once '../backend/conexao.php';

$email = $_POST['email'];
$password = base64_encode($_POST['password']);

$query = "SELECT * FROM user WHERE  user_email = '{$email}' AND user_password= '{$password}'";
$resultado = mysqli_query($conn, $query);
$r = mysqli_num_rows($resultado);

if($r > 0){
    echo $r;
}else{
    echo "Erro ao efetuar login, verifique seus dados!";
}
