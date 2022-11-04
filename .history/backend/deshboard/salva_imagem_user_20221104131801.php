<?php 
include "../conexao.php";

$id = $_POST['id'];
$name = $_FILES["file"]["name"];
$novo_nome = uniqid();

$tmp_name = $_FILES["file"]["tmp_name"];
$pasta = "imagens/";
$ok = move_uploaded_file($tmp_name, "imagens/$name");
$query = "UPDATE `user` SET `user_picture` = '{$name}' WHERE `user`.`user_id` = '{$id}';";
$resultado = mysqli_query($conn, $query);
 
if($ok){
   
    echo "imagens/$name";
}else{
    echo "erro";
}