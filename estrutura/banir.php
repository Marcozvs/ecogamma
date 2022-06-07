<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecogamma | Início</title>
    <?php include './base/linksGlobais.php' ?>
</head>
<?php
include './administracao/sessao.php';
    if ($_SESSION['logado'] == 1 && $) {
        echo "
        <main>
            <div class='container'>
                <div class='container__logout'><h1>Logado!</h1>
                    <a href='feed.php'>
                        <button class='botao__principal'>
                            Iniciar
                        </button>
                    </a>
                </div>
            </div>
        </main>";
        die();
        exit();
    };
?>
<body>
    <form action="./loginProcessa.php" class="container__formLogin__form" method="POST">
        <label for="email">Email</label>
        <input type="email" placeholder="Insira seu email..." maxlength="100" minlength="1" required id="email" name="email">
        <label for="senha">Senha</label>
        <input type="password" placeholder="Insira sua senha..." maxlength="100" minlength="1" required id="senha" name="senha">
        <input type="submit" value="Entrar" class="botao__principal">
    </form>
</body>

</html>