<?php 

require_once '../conexao.php';

$login = $_POST['login'];
$password = base64_encode($_POST['password']) ;

$query = "SELECT * FROM user WHERE ";
$resultado = mysqli_query($conn, $query);

if($conn->insert_id){
    echo 'Usuário adicionado com sucesso!';
}



