<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banir</title>
    <?php include './base/linksGlobais.php' ?>
</head>
<body>
<?php
include './administracao/sessao.php';
if ($_SESSION['logado'] == 0) {
        include 'naoLogado.php';
        die();
    } elseif ($token == 0) {
        echo "
        <main>
            <div class='container'>
                <div class='container__logout'><h1>Sem permissão!</h1>
                    <a href='feed.php'>
                        <button class='botao__principal'>
                            Inicio
                        </button>
                    </a>
                </div>
            </div>
        </main>";
        die();
        exit();
    }
    include './administracao/conexao.php';
    $emailDel = $_POST['email'];
    $sql = "DELETE FROM usuarios WHERE email = '$emailDel'";

    if (mysqli_query($conn, $sql)) {
    echo "Usuário foi banido!<br><a href='banir.php'>Voltar</a>";

    } else {
    echo "Erro: " . mysqli_error($conn);
    echo "<br><a href='banir.php'>Voltar</a>";
    }
    ?>
</form>
</body>

</html>