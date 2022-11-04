<?php include "./busca_alunos.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="../../imagens/haltere.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alunos</title>
</head>

<body>
    <div class="title-lista-alunos">
        <h1>Lista de Alunos</h1>
    </div>
    <?php while ($row_linhas = mysqli_fetch_array($resultado)) { ?>

        <div id="nome<?= $count; ?>" class="user" onmouseover="setaCssICon()" onclick="teste('<?= $count; ?>')">Nome: <?= $row_linhas["user_name"] ?>
            <span class="material-symbols-outlined material-symbols-outlined-icon">
                expand_more
            </span>
        </div>
        <div id="email<?= $count; ?>" class="linha-user-email">Email: <?= $row_linhas["user_email"] ?> </div>

        <?php $count++; ?>
    <?php  } ?>
</body>

</html>
<script>
    function teste(count) {
        count_delete = '<?php echo $count; ?>';
        if ($("#email" + count).hasClass("linha-user-email")) {
            $("#email" + count).removeClass("linha-user-email");
            $("#email" + count).addClass("linha-user-email-block");
            $("#nome" + count).remove("user");
            $("#nome" + count).addClass("user-selected");
            do {
                count++;
                $("#nome" + count).css("display", "none")
            } while (count <= count_delete);
        } else {
            $("#email" + count).removeClass("linha-user-email-block");
            $("#email" + count).addClass("linha-user-email");
            $("#nome" + count).addClass("user")
            $("#nome" + count).removeClass("user-selected")
            do {
                count++;
                $("#nome" + count).css("display", "block")
            } while (count <= count_delete);
        }
    }

    function setaCssICon() {
        $(".material-symbols-outlined-icon").css("color", "#8cb291")
    }
</script>