<?php
$id = $_GET["id"];
$query = "SELECT * FROM  user WHERE user_id = '{$id}'";
$resultado = mysqli_query($conn, $query);
$row = mysqli_fetch_array($resultado);
