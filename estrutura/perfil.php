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
                <div class="perfil">
                    <section class="perfil__dados">
                        <div class="perfil__dados__capaDeFundo">
                            <img src="./imagens/capaPerfil.jpg" alt="Capa de fundo do perfil">
                        </div>
                        <div class="perfil__dados__fotoPerfil">
                            <img src="./imagens/Roberto.jpg" alt="Foto do perfil">
                        </div>
                        <div class="perfil__dados__informacoesPerfil">
                            <ul>
                                <div class=".informacoesPerfil__colunaUm">
                                    <li>Nome: <p>FERNANDO</p></li>
                                    <li>Descrição: <p>Amo natureza</p></li>
                                    <li>Idade: <p>28 anos</p></li>
                                    <li>Relacionamento: <p>Solteiro</p></li>
                                </div>
                                <div class=".informacoesPerfil__colunaDois">
                                    <li>Ofício: <p>Engenheiro Ambiental</p></li>
                                    <li>Amigos: <p>462 amigos</p></li>
                                    <li>Ver mais informações</li>
                                </div>
                            </ul>
                        </div>
                        <hr>
                    </section>
                    <section class="principal__postagem">
                        <h1>Postagem</h1>
                        <form action="#" class="principal__postagem__formulario">
                            <textarea cols="15" rows="4" placeholder="Escreva seu post aqui..." maxlength="200" minlength="1"></textarea>
                            <div class="principal__postagem__formulario__botoes">
                                <label for="imagem" class="postagem__formulario__botoes__labelArquivo">Enviar imagem</label>
                                <input type="file" accept="image/*" id="imagem" class="postagem__formulario__botoes__inputArquivo">
                                <input type="submit" value="Postar">
                            </div>
                        </form>
                    </section>
                    <section class="post">
                        <div class="post__perfil">
                            <div class="post__perfil__foto">
                                <img src="./imagens/Roberto.jpg" alt="Imagem do Perfil">
                            </div>
                            <div class="post__perfil__dados">
                                <p class="post__perfil__dados__nome">Roberto</p>
                                <p class="post__perfil__dados__cargo">Engenheiro Ambiental</p>
                            </div>
                        </div>
                        <div class="post__conteudo">
                            <p class="post__conteudo__texto">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos dolor ab qui temporibus, cupiditate animi nesciunt praesentium dolorum soluta quas nihil vitae ullam facilis ut iusto pariatur perspiciatis at explicabo?</p>
                            <img src="./imagens/policiaFederal.png" alt="imagem do conteúdo">
                        </div>
                        <div class="post__interacoes">
                            <ul>
                                <li id="botaoCurtir" onclick="curtir()"><span class="material-symbols-outlined">
                                    favorite
                                    </span>36</li>
                                <li id="botaoComentar" onclick="comentar()"><span class="material-symbols-outlined">
                                    forum
                                    </span>3</li>
                                <li><span class="material-symbols-outlined">
                                    send
                                    </span></li>
                            </ul>
                        </div>
                        <hr>
                        <div class="post__comentarios">
                            <h2>Comentários</h2>
                            <div class="post__perfil">
                                <div class="post__perfil__foto post__perfil__foto-comentario">
                                    <img src="./imagens/Roberto.jpg" alt="Imagem do Perfil">
                                </div>
                                <div class="post__perfil__dados">
                                    <p class="post__perfil__dados__nome">Roberto</p>
                                    <p class="post__perfil__dados__cargo">Engenheiro Ambiental</p>
                                </div>
                            </div>
                            <div class="post__conteudo">
                                <p class="post__conteudo__texto">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos dolor ab qui temporibus, cupiditate animi nesciunt praesentium dolorum soluta quas nihil vitae ullam facilis ut iusto pariatur perspiciatis at explicabo?</p>
                                <img src="./imagens/policiaFederal.png" alt="imagem do conteúdo">
                            </div>
                            <div class="post__interacoes">
                                <ul>
                                    <li><span class="material-symbols-outlined">
                                        favorite
                                        </span>36</li>
                                    <li><span class="material-symbols-outlined">
                                        forum
                                        </span>3</li>
                                    <li><span class="material-symbols-outlined">
                                        send
                                        </span></li>
                                </ul>
                            </div>
                            <hr>
                        </div>
                    </section>
                </div>
            </main>
            <?php include './base/patrocinio.php';?>
            <?php include './base/eventosNoticias.php';?>
        </div>
        <script src="./javascript/menuLateral.js"></script>
    </body>
</html>