<?php

include '../../backend/conexao.php';

$email = $_POST['email'];
$password = base64_encode($_POST['password']);

$query = "SELECT * FROM user WHERE  user_email = '{$email}' AND user_password= '{$password}'";
$resultado = mysqli_query($conn, $query);
$row = mysqli_fetch_array($resultado);
$r = mysqli_num_rows($resultado);
$user_id = $row["user_id"];
if($r > 0){
    echo $user_id ;
}else{
    echo "Erro ao efetuar login, verifique seus dados!";
}
