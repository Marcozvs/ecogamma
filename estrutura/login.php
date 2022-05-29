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

        //Criando Classe Login

        
        
        $senha = $email = "";

        // aplicando segurança

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = test_input($_POST["senha"]);
            $email = test_input($_POST["email"]);
            }

            function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
            }
        ?>
        <section class="login">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                <label for="email">Email</label>
                <input type="mail" placeholder="Insira seu email..." maxlength="100" minlength="1" required  name="email" id="email">
                <label for="senha">Senha</label>
                <input type="password" placeholder="Insira sua senha..." maxlength="100" minlength="1" required name="senha" id="senha">
                <input type="submit">
            </form>
        </section>
        <?php
            
        ?>
    </body>
</html>