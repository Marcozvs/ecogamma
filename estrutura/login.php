<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ecogamma | Feed</title>
        <!--Aplicando reset CSS-->
        <link rel="stylesheet" href="../estilos/css/reset.css">
        <!--Aplicando o CSS-->
        <link rel="stylesheet" href="../estilos/css/styles.css">
        <!--Aplicando ícones e símbolos-->
        <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
        <!--Aplicando a fonte-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    </head>
    <body>
    <?php
    include_once './administracao/sessao.php'; // isso iria iniciar a sessão tenho que mudar
    if ($_SESSION['logado'] != false) {
        die('Você está já está logado!');
    } // não dá para incluir uma variável que não existe :(
        ?>
        <section class="login">
            <form action="./loginProcessa.php" method="POST">
                <label for="email">Email</label>
                <input type="email" placeholder="Insira seu email..." maxlength="100" minlength="1" required  name="email" id="email">
                <label for="senha">Senha</label>
                <input type="password" placeholder="Insira sua senha..." maxlength="100" minlength="1" required name="senha" id="senha">
                <input type="submit">
            </form>
        </section>
        <?php
            
        ?>
    </body>
</html>