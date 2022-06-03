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
                <div class="pontoDeColeta">
                    <h1>Pontos de Coleta</h1>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3660.4284950984234!2d-46.39856078461683!3d-23.445003384740712!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce628b6fcc65f9%3A0xa842aff251b82d67!2sRepapel%20Com%C3%A9rcio%20Pap%C3%A9is!5e0!3m2!1spt-BR!2sbr!4v1653596249933!5m2!1spt-BR!2sbr" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </main>
            <?php include './base/patrocinio.php';?>
            <?php include './base/eventosNoticias.php';?>
        </div>
        <script src="./javascript/menuLateral.js"></script>
    </body>
</html>