<?php 
include "../../backend/conexao.php";
$query = "SELECT *  FROM `user`";
$resultado = $conn->query($query);
$count = 0;
