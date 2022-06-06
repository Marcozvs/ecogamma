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
        <div class="container">
            <?php include './base/cabecalho.php';?>
            <?php include './base/menuLateral.php';?>
            <?php include './base/menuDesktop.php';?>
            <main class="principal">
                <div class="noticias">
                    <h1>Eventodcsacsadcs</h1>
                    <h2>Título exemplo do evento</h2>
                    <img src="./imagens/evento.png" alt="">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores, delectus. Quae quidem dolorum consequuntur possimus deleniti alias, ipsam aliquid impedit sunt ipsum minus nobis doloribus sint voluptates, voluptas quasi in.</p>
                </div>
            </main>
            <?php include './base/patrocinio.php';?>
            <?php include './base/eventosNoticias.php';?>
        </div>
        <script src="./javascript/menuLateral.js"></script>
    </body>
</html>