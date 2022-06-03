<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ecogamma | Feed</title>
        <!--Aplicando reset CSS-->
        <link rel="stylesheet" href="../../estilos/css/reset.css">
        <!--Aplicando o CSS-->
        <link rel="stylesheet" href="../../estilos/css/styles.css">
        <!--Aplicando ícones e símbolos-->
        <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
        <!--Aplicando a fonte-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <main class="principal">
                <section class="principal__postagem">
                    <h1>Inserindo Notícia</h1>
                    <p>Preencha o formulário abaixo para publicar uma notícia</p>

                    <!--Conectando com o banco de dados-->

                    <?php include 'conexao.php'?>

                    <!--Trabalhando com dados do formulário-->

                    <?php

                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        if (empty($_POST["noticia__titulo"])) {
                        $tituloErro = "É preciso inserir o título da notícia";
                        } else {
                        $titulo = test_input($_POST["noticia__titulo"]);
                        }
                        if (empty($_POST["noticia__texto"])) {
                        $textoErro = "É preciso inserir o texto da notícia";
                        } else {
                        $texto = test_input($_POST["noticia__texto"]);
                        }
                        $imagem = $_FILES["noticia__imagem"];
                        $target_dir = "uploads/";
                        $target_file = $target_dir . basename($_FILES["noticia__imagem"]["name"]);
                        $uploadOk = 1;
                        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                    }
                    
                    $dataPost = date('Y-m-d');
                    
                    function test_input($data) {
                        $data = trim($data);
                        $data = stripslashes($data);
                        $data = htmlspecialchars($data);
                        return $data;
                    }
                    
                    ?>

                    <!--Inserindo dados no formulário-->

                    <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $sql = "INSERT INTO noticia (id, titulo, data_noticia, texto, foto)
                            VALUES ('', '$titulo', '$dataPost', '$texto', '$imagem')";
    
                            if (mysqli_query($conn, $sql)) {
                            echo "New record created successfully";
                            } else {
                            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                            }
    
                            mysqli_close($conn);
                        }
                    ?>

                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="principal__postagem__formulario" method="post" enctype="multipart/form-data">
                        <input type="text" placeholder="Escreva o título da notícia aqui..."  name="noticia__titulo" id="noticia__titulo">
                        <textarea cols="15" rows="4" placeholder="Escreva o texto da notícia aqui..." maxlength="200" minlength="1" name="noticia__texto" id="noticia__texto"></textarea>
                        <div class="principal__postagem__formulario__botoes">
                            <label for="noticia__imagem" class="postagem__formulario__botoes__labelArquivo">Enviar imagem</label>
                            <input type="file" accept="image/*"  name="noticia__imagem" id="noticia__imagem" class="postagem__formulario__botoes__inputArquivo">
                            <input type="submit" value="Postar">
                        </div>
                    </form>


                </section>
            </main>
        </div>
    </body>
</html>