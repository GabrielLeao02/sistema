<script src="../node_modules/jquery/dist/jquery.js"> </script>
<script type="text/javascript" src="/sistema/js/dashboard/deshboard.js"></script>
<?php
include '../backend/conexao.php';
include '../deshboard/perfil/busca_dados_perfil.php';
?>
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
                <a onclick="buscaAlunos()" href="#">Alunos</a>
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
            <?php if (empty($row['user_picture']) || $row['user_picture'] == null) { ?>
                <div class="picture-perfil-none"></div>
            <?php } else { ?>
                <img class="picture-perfil" src="../backend/deshboard/imagens/<?= $picture ?>" alt="<?= $picture ?>">
            <?php } ?>
        </div>

        <div class="container-picture-perfil-button">
            <input type="hidden" name="id" id="id" value="<?= $id ?>">
            <label id="label_imagem_perfil" for="imagem_perfil">Inserir Imagem</label>
            <input type="file" name="upload" id="imagem_perfil" />

        </div>
        <div class="container-informacoes-perfil">
            Perfil: <?= $perfil; ?>
        </div>
        <div class="container-informacoes-perfil">
            Nome: <?= $name; ?>
        </div>
        
    </div>
    <div id="retorno_alunos" class="container-alunos"></div>
</body>

</html>
<script>
    $("#imagem_perfil").on("change", function(e) {
        var arquivo = e.target.files[0];
        var formdata = new FormData();
        var id = $("#id").val();
        formdata.append("id", id);
        formdata.append("file", arquivo);
        $.ajax({
            type: "POST",
            url: "/sistema/backend/deshboard/salva_imagem_user.php",
            data: formdata,
            contentType: false,
            processData: false,
            success: function(result) {
                $(".container-picture-perfil").html(`<img class=\"picture-perfil\" src='../backend/deshboard/${result}' alt=''>`)
            }
        });
    })
    function buscaAlunos(){
        $.ajax({
            type: "POST",
            url: "/sistema/deshboard/alunos/alunos.php",
            success: function(result) {
                $("#retorno_alunos").html(result)
            }
        });
    }

</script>