<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logar</title>
    <?php include './base/linksGlobais.php' ?>
</head>
<body>
    <div class="fundo--alternativo">
        <video autoplay="autoplay" loop="true" muted>
            <source src="../videos/fundo.mp4" type="video/mp4">
        </video>
    </div>
    <main>
        <div class='container'>
        <div class='container__logout'>
            <h1>Você não está logado!</h1><br>
                <form action="./loginProcessa.php" class="container__formLogin__form" method="POST">
                    <label for="email">Email</label>
                    <input type="email" placeholder="Insira seu email..." maxlength="100" minlength="1" required id="email" name="email">
                    <label for="senha">Senha</label>
                    <input type="password" placeholder="Insira sua senha..." maxlength="100" minlength="1" required id="senha" name="senha">
                    <input type="submit" value="Entrar" class="botao__principal">
                </form>
                <a href="cadastro.php">Cadastre-se</a>
                <br>
                <a href="email.php">Esqueci a senha</a>
            </div>
        </a>
    </div>
</div>
</main>
</body>

</html>