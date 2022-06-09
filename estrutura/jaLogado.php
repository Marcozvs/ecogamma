<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logar</title>
    <?php include './base/linksGlobais.php' ?>
</head>
<?php
include './administracao/sessao.php';
if ($_SESSION['logado'] == 1) {
        include 'jaLogado.php';
        die();
    };
?>
<body>
    <main>
        <div class='container'>
        <div class='container__logout'>
            <h1>Você já está logado!</h1><br>
            <a href='feed.php'>
                        <button class='botao__principal'>
                            Início
                        </button>
            </a>
            <a href='logout.php'>
                        <button class='botao__principal'>
                            Logout
                        </button>
            </a>
            </div>
        </a>
    </div>
</div>
</main>
</body>

</html>