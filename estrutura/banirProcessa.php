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
    $idDel = $_POST['id'];
    $sql = "DELETE FROM usuarios WHERE id = '$idDel'";
    $sql2 = "DELETE FROM posts WHERE id = '$idDel'";

    if (mysqli_query($conn, $sql)) {
        echo "O Usuário foi banido do site!<br>";
    } else {
        echo "Erro 1: " . mysqli_error($conn);
        echo "<br><a href='banir.php'>Voltar</a>";
    }

    if (mysqli_query($conn, $sql2)) {
        echo "Todos os posts dele foram deletados!<br><a href='banir.php'>Voltar</a>";
    } else {
        echo "Erro 2: " . mysqli_error($conn);
        echo "<br><a href='banir.php'>Voltar</a>";
    }
    ?>
    </form>
</body>

</html>