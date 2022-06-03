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
                    <?php
                    
                    //Conectando ao banco de dados

                    include './administracao/conexao.php';

                    //Puxando dados do banco

                        $sql = "SELECT id, titulo, data_noticia, texto, foto FROM noticia";
                        $result = mysqli_query($conn, $sql);
                    
                        if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "<h1>" . $row['titulo'] . "</h1>";
                            echo $row['data_noticia'];
                            echo "<p>" . $row['texto'] . "</p>";
                            echo "<img src=\"".$row['foto']."\">";
                        }
                        } else {
                        echo "0 results";
                        }
                        
                        mysqli_close($conn);
                    ?>               
                </div>
            </main>
            <?php include './base/patrocinio.php';?>
            <?php include './base/eventosNoticias.php';?>
        </div>
        <script src="./javascript/menuLateral.js"></script>
    </body>
</html>