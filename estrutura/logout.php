<<<<<<< Updated upstream
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecogamma | Feed</title>
    <!--Aplicando reset CSS-->
    <link rel="stylesheet" href="../estilos/css/reset.css">
    <!--Aplicando CSS-->
    <link rel="stylesheet" href="../estilos/css/styles.css">
    <!--Aplicando ícone do Ecogamma-->
    <link rel="icon" type="imagem/png" href="../imagens/logos/logo-principal.png" />
    <!--Aplicando ícones e símbolos-->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <!--Aplicando fonte-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <main>
        <div class="container">
            <div class="container__logout">
            <?php
                include_once './administracao/sessao.php';
                if ($_SESSION['logado'] == 0) {
                    echo "<h1>Sua conta não está conectada!</h1>
                    <a href='login.php'><button class='botao__principal'>Login</button></a>";
                    print_r($_SESSION);
                    exit();
                } else {
                    session_destroy();
                    include_once './administracao/sessao.php';
                    echo "<h1>Sua conta foi desconectada com sucesso!</h1>
                    <a href='login.php'><button class='botao__principal'>Login</button></a>";
                    print_r($_SESSION);
                    $_SESSION['logado'] = 0;
                    exit();
                };
                ?>
                ?>
            </div>
        </div>
    </main>
</body>
=======
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecogamma | Feed</title>
    <!--Aplicando reset CSS-->
    <link rel="stylesheet" href="../estilos/css/reset.css">
    <!--Aplicando CSS-->
    <link rel="stylesheet" href="../estilos/css/styles.css">
    <!--Aplicando ícone do Ecogamma-->
    <link rel="icon" type="imagem/png" href="../imagens/logos/logo-principal.png" />
    <!--Aplicando ícones e símbolos-->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <!--Aplicando fonte-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <main>
        <div class="container">
            <div class="container__logout">
            <?php
                include_once './administracao/sessao.php';
                if ($_SESSION['logado'] == 0) {
                    echo "<h1>Sua conta não está conectada!</h1>
                    <a href='login.php'><button class='botao__principal'>Login</button></a>";
                    print_r($_SESSION);
                    exit();
                } else {
                    session_destroy();
                    include_once './administracao/sessao.php';
                    echo "<h1>Sua conta foi desconectada com sucesso!</h1>
                    <a href='login.php'><button class='botao__principal'>Login</button></a>";
                    print_r($_SESSION);
                    $_SESSION['logado'] = 0;
                    exit();
                };
                ?>
                ?>
            </div>
        </div>
    </main>
</body>
>>>>>>> Stashed changes
</html>