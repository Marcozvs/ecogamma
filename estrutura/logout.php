<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecogamma | Feed</title>
    <?php include './base/linksGlobais.php' ?>
</head>

<body>
    <div class="fundo--alternativo">
        <video autoplay="autoplay" loop="true" muted>
            <source src="../videos/fundo.mp4" type="video/mp4">
        </video>
    </div>
    <main>
        <div class="container">
            <div class="container__logout">
                <?php
                include_once './administracao/sessao.php';
                if ($_SESSION['logado'] == 0) {
                    echo "<h1>Sua conta não está conectada!</h1>
                    <a href='login.php'><button class='botao__principal'>Login</button></a>";
                    // print_r($_SESSION);
                    exit();
                } else {
                    session_destroy();
                    include_once './administracao/sessao.php';
                    echo "
                    <h1>
                        Sua conta foi desconectada com sucesso!
                    </h1>
                    <a href='login.php'>
                        <button class='botao__principal'>
                            Login
                        </button>
                    </a>";
                    // print_r($_SESSION);
                    $_SESSION['logado'] = 0;
                    exit();
                };
                ?>
                ?>
            </div>
        </div>
    </main>
</body>

</html>