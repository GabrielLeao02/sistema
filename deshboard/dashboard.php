<?php
include '../backend/conexao.php';
include '../deshboard/perfil/busca_dados_perfil.php';
?>
<script type="text/javascript" src="../js/dashboard/deshboard.js"></script>
<script src="../node_modules/jquery/dist/jquery.js"> </script>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css">

    <title>Document</title>
</head>

<body class="body-dashboard">
    <div class="app-bar">
        <div class="container-perfil-left">
            <div>
                <a href="#">Inicio</a>
                <a href="#">Alunos</a>
                <a href="#">Meus Treinos</a>
            </div>
        </div>
        <h1>DeshBoard</h1>
        <div class="container-perfil-right">
            <div>
                <a href="#">Configurações</a>
                <a id="icon_perfil" href="#" onclick="openModalPerfil()">Perfil</a>
            </div>
        </div>
    </div>
    <div id="modal-perfil-user" class="remove-modal-perfil-user">
        <div class="container-picture-perfil">
            <div class="picture-perfil">
            </div>
        </div>
        <div class="container-picture-perfil-button">
            <label id="label_imagem_perfil" for="imagem_perfil">Inserir Imagem</label>
            <input name="imagem_perfil" id="imagem_perfil" type="file" />
        </div>
        <div class="container-informacoes-perfil">
            Perfil: <?= $perfil; ?>
        </div>
        <div class="container-informacoes-perfil">
            Nome: <?= $name; ?>
        </div>
    </div>
</body>

</html>