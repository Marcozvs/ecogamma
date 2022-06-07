<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecogamma | Feed</title>
    <?php include './base/linksGlobais.php' ?>
</head>

<body>
    <header class="header__interno">
        <div class="container">
            <div class="container__logo">
                <a href="login.php"><img src="../imagens/logos/logo-principal.png" alt="Logo Principal do Ecogamma" class="container__logo__imagem"></a>
            </div>
            <div class="container__perfil">
                <span class="material-symbols-outlined container__menu__icone span--azul">&#xe853;</span>
            </div>
            <div class="container__chat">
                <span class="material-symbols-outlined container__menu__icone span--azul">&#xe8af;</span>
            </div>
            <a href="logout.php">
                <div class="container__logout">
                    <span class="material-symbols-outlined container__menu__icone span--azul">&#xeffd;</span>
            </a>
        </div>
        <nav>
            <a href="perfil.php">
                <span class="material-symbols-outlined container__menu__icone span--azul">&#xe853;</span>
            </a>
            <a href="chat.php">
                <span class="material-symbols-outlined container__menu__icone span--azul">&#xe8af;</span>
            </a>
            <a href="logout.php">
                <span class="material-symbols-outlined container__menu__icone span--azul">&#xeffd;</span>
            </a>
        </nav>
        <div id="container__menu" onclick="menuLateralInternoOpen()">
            <span class="material-symbols-outlined container__menu__icone span--azul">&#xe5d2;</span>
        </div>
        </div>
    </header>
    <section id="menuLateral__interno">
        <div class="menuLateral__container">
            <div class="container__menu" onclick="menuLateralInternoClose()">
                <span class="material-symbols-outlined container__menu__icone icone-alternativo">&#xe5d2;</span>
            </div>
            <ul class="menuLateral__container__lista">
                <a href="./login.php">
                    <li class="menuLateral__container__lista__item"><span class="material-symbols-outlined container__menu__icone icone-alternativo">&#xe761;</span>Feed</li>
                </a>
                <a href="./sobreNos.php">
                    <li class="menuLateral__container__lista__item"><span class="material-symbols-outlined container__menu__icone  icone-alternativo">&#xe7f4;</span>Notificação</li>
                </a>
                <a href="./comunidade.php">
                    <li class="menuLateral__container__lista__item"><span class="material-symbols-outlined container__menu__icone  icone-alternativo">&#xe865;</span>Salvos</li>
                </a>
                <a href="./comunidade.php">
                    <li class="menuLateral__container__lista__item"><span class="material-symbols-outlined container__menu__icone  icone-alternativo">&#xe878;</span>Eventos</li>
                </a>
                <a href="./comunidade.php">
                    <li class="menuLateral__container__lista__item"><span class="material-symbols-outlined container__menu__icone  icone-alternativo">&#xeb81;</span>Notícias</li>
                </a>
                <a href="./comunidade.php">
                    <li class="menuLateral__container__lista__item"><span class="material-symbols-outlined container__menu__icone  icone-alternativo">&#xe0f0;</span>Dicas</li>
                </a>
                <a href="./comunidade.php">
                    <li class="menuLateral__container__lista__item"><span class="material-symbols-outlined container__menu__icone  icone-alternativo">&#xe55f;</span>Pontos de Coleta</li>
                </a>
                <a href="./comunidade.php">
                    <li class="menuLateral__container__lista__item"><span class="material-symbols-outlined container__menu__icone  icone-alternativo">&#xe8b8;</span>Configurações</li>
                </a>
                <a href="./comunidade.php">
                    <li class="menuLateral__container__lista__item"><span class="material-symbols-outlined container__menu__icone  icone-alternativo">&#xe80e;</span>Ecotrends</li>
                </a>
                <a href="./comunidade.php">
                    <li class="menuLateral__container__lista__item"><span class="material-symbols-outlined container__menu__icone  icone-alternativo">&#xf8d9;</span>Amigos</li>
                </a>
                <a href="./comunidade.php">
                    <li class="menuLateral__container__lista__item"><span class="material-symbols-outlined container__menu__icone  icone-alternativo">&#xea70;</span>Doação</li>
                </a>
                <a href="./comunidade.php">
                    <li class="menuLateral__container__lista__item"><span class="material-symbols-outlined container__menu__icone  icone-alternativo">&#xf06c;</span>Bot de Ajuda</li>
                </a>
            </ul>
        </div>
    </section>
    <main>
        <div class="container">
            <h1>Postagem</h1>
            <section class="container__postagem">
                <form action="#" class="container__postagem__formulario">
                    <textarea cols="15" rows="4" placeholder="Escreva seu post aqui..." maxlength="200" minlength="1"></textarea>
                    <div class="container__postagem__formulario__botoes">
                        <label for="imagem" class="container__postagem__formulario__botoes__label label-botao">Enviar imagem</label>
                        <input type="file" accept="image/*" id="imagem" class="container__postagem__formulario__botoes__input">
                        <input type="submit" value="Postar" class="botao__principal">
                    </div>
                </form>
                <hr>
            </section>
            <section class="container__post">
                <div class="container__post__perfil">
                    <div class="container__post__perfil__foto">
                        <img src="../imagens/leandro.jpg" alt="Imagem do Perfil">
                    </div>
                    <div class="container__post__perfil__dados">
                        <p class="container__post__perfil__dados__nome nome__perfil">Leandro</p>
                        <p class="container__post__perfil__dados__cargo cargo__perfil">Engenheiro de Software</p>
                    </div>
                </div>
                <div class="container__post__conteudo">
                    <p class="container__post__conteudo__texto">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos dolor ab qui temporibus, cupiditate animi nesciunt praesentium dolorum soluta quas nihil vitae ullam facilis ut iusto pariatur perspiciatis at explicabo?</p>
                    <img src="../imagens/feed_imagem.jpg" alt="imagem do conteúdo" class="container__post__conteudo__imagem">
                </div>
                <div class="container__post__interacoes">
                    <ul class="container__post__interacoes__lista">
                        <li class="container__post__interacoes__lista__item">
                            <span class="material-symbols-outlined container__menu__icone span--azul">&#xe87d;</span>
                            <p>32</p>
                        </li>
                        <li class="container__post__interacoes__lista__item">
                            <span class="material-symbols-outlined container__menu__icone span--azul">&#xe0b9;</span>
                            <p>32</p>
                        </li>
                        <li class="container__post__interacoes__lista__item">
                            <span class="material-symbols-outlined container__menu__icone span--azul">&#xe163;</span>
                            <p>32</p>
                        </li>
                    </ul>
                </div>
                <div class="container__post__comentarios">
                    <h2>Comentários</h2>
                    <div class="container__post__perfil">
                        <div class="container__post__perfil__foto">
                            <img src="../imagens/leandro.jpg" alt="Imagem do Perfil">
                        </div>
                        <div class="container__post__perfil__dados">
                            <p class="container__post__perfil__dados__nome nome__perfil">Leandro</p>
                            <p class="container__post__perfil__dados__cargo cargo__perfil">Engenheiro de Software</p>
                        </div>
                    </div>
                    <div class="container__post__conteudo">
                        <p class="container__post__conteudo__texto">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos dolor ab qui temporibus, cupiditate animi nesciunt praesentium dolorum soluta quas nihil vitae ullam facilis ut iusto pariatur perspiciatis at explicabo?</p>
                        <img src="../imagens/feed_imagem.jpg" alt="imagem do conteúdo" class="container__post__conteudo__imagem">
                    </div>
                    <div class="container__post__interacoes">
                        <ul class="container__post__interacoes__lista">
                            <li class="container__post__interacoes__lista__item">
                                <span class="material-symbols-outlined container__menu__icone span--azul">&#xe87d;</span>
                                <p>32</p>
                            </li>
                            <li class="container__post__interacoes__lista__item">
                                <span class="material-symbols-outlined container__menu__icone span--azul">&#xe0b9;</span>
                                <p>32</p>
                            </li>
                            <li class="container__post__interacoes__lista__item">
                                <span class="material-symbols-outlined container__menu__icone span--azul">&#xe163;</span>
                                <p>32</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <script src="../manipulacao/manuLateral.js"></script>
</body>

</html>