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
                    <form action="noticiasAdm-processamento.php" class="principal__postagem__formulario">
                        <textarea cols="15" rows="4" placeholder="Escreva seu post aqui..." maxlength="200" minlength="1"></textarea>
                        <div class="principal__postagem__formulario__botoes">
                            <label for="imagem" class="postagem__formulario__botoes__labelArquivo">Enviar imagem</label>
                            <input type="file" accept="image/*" id="imagem" class="postagem__formulario__botoes__inputArquivo">
                            <input type="submit" value="Postar">
                        </div>
                    </form>
                </section>
            </main>
        </div>
    </body>
</html>