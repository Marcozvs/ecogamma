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
                
                <!--Conectando ao banco de dados-->
            
                <?php include './administracao/conexao.php'?>

                <?php 
                    $sql = "SELECT titulo, data_noticia, texto, foto FROM MyGuests";
                    $result = mysqli_query($conn, $sql);
                    
                    if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                        
                        echo 
                        
                        "
                            <h1>" . $row['titulo'] . "</h1>
                            
                            <br>" . $row['data_noticia'] . "<br>

                            <p>" . $row['texto'] . "</p>

                            <br>

                            <img src=\"" . $row['titulo'] . "\">

                            <br>

                        ";
                    }
                    } else {
                    echo "0 results";
                    }
                    
                    mysqli_close($conn);
                ?>

                <div class="noticias">
                    <h1>Notícias</h1>
                    <h2>Título exemplo da notícia</h2>
                    <img src="./imagens/noticia.png" alt="">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores, delectus. Quae quidem dolorum consequuntur possimus deleniti alias, ipsam aliquid impedit sunt ipsum minus nobis doloribus sint voluptates, voluptas quasi in.</p>
                </div>
            </main>
            <?php include './base/patrocinio.php';?>
            <?php include './base/eventosNoticias.php';?>
        </div>
        <script src="./javascript/menuLateral.js"></script>
    </body>
</html>