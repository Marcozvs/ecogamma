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
    <?php
    include './administracao/sessao.php';
    if ($_SESSION['logado'] == 0) {
        include 'naoLogado.php';
        die();
    };
    ?>
    <header class="header__interno">
        <div class="container">
            <div class="container__logo">
                <a href="login.php"><img src="../imagens/logos/logo-principal.png" alt="Logo Principal do Ecogamma" class="container__logo__imagem"></a>
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
                <a href="./feed.php">
                    <li class="menuLateral__container__lista__item"><span class="material-symbols-outlined container__menu__icone icone-alternativo">&#xe761;</span>Feed</li>
                </a>
                <a href="./notificacao.php">
                    <li class="menuLateral__container__lista__item"><span class="material-symbols-outlined container__menu__icone  icone-alternativo">&#xe7f4;</span>Notificação</li>
                </a>
                <a href="./salvos.php">
                    <li class="menuLateral__container__lista__item"><span class="material-symbols-outlined container__menu__icone  icone-alternativo">&#xe865;</span>Salvos</li>
                </a>
                <a href="./evento.php">
                    <li class="menuLateral__container__lista__item"><span class="material-symbols-outlined container__menu__icone  icone-alternativo">&#xe878;</span>Eventos</li>
                </a>
                <a href="./noticia.php">
                    <li class="menuLateral__container__lista__item"><span class="material-symbols-outlined container__menu__icone  icone-alternativo">&#xeb81;</span>Notícias</li>
                </a>
                <a href="./dica.php">
                    <li class="menuLateral__container__lista__item"><span class="material-symbols-outlined container__menu__icone  icone-alternativo">&#xe0f0;</span>Dicas</li>
                </a>
                <a href="./pontosColeta.php">
                    <li class="menuLateral__container__lista__item"><span class="material-symbols-outlined container__menu__icone  icone-alternativo">&#xe55f;</span>Pontos de Coleta</li>
                </a>
                <a href="./configuracoes.php">
                    <li class="menuLateral__container__lista__item"><span class="material-symbols-outlined container__menu__icone  icone-alternativo">&#xe8b8;</span>Configurações</li>
                </a>
                <a href="./ecotrends.php">
                    <li class="menuLateral__container__lista__item"><span class="material-symbols-outlined container__menu__icone  icone-alternativo">&#xe80e;</span>Ecotrends</li>
                </a>
                <a href="./amigos.php">
                    <li class="menuLateral__container__lista__item"><span class="material-symbols-outlined container__menu__icone  icone-alternativo">&#xf8d9;</span>Amigos</li>
                </a>
                <a href="./doacao.php">
                    <li class="menuLateral__container__lista__item"><span class="material-symbols-outlined container__menu__icone  icone-alternativo">&#xea70;</span>Doação</li>
                </a>
                <a href="./bot.php">
                    <li class="menuLateral__container__lista__item"><span class="material-symbols-outlined container__menu__icone  icone-alternativo">&#xf06c;</span>Bot de Ajuda</li>
                </a>
            </ul>
        </div>
    </section>
    <main>
        <div class="container">
            <h1>Postagem</h1>
            <section class="container__postagem">
                <form action="./feedPost.php" class="container__postagem__formulario">
                    <textarea cols="15" rows="4" placeholder="Escreva seu post aqui..." maxlength="200" minlength="1" id="texto"></textarea>
                    <div class="container__postagem__formulario__botoes">
                        <label for="imagem" class="container__postagem__formulario__botoes__label label-botao">Enviar imagem</label>
                        <input type="file" accept="image/*" id="imagem" class="container__postagem__formulario__botoes__input">
                        <input type="submit" value="Postar" class="botao__principal" name="submit" id="submit">
                    </div>
                </form>
                <hr>
            </section>

        </div>
    </main>
    <script src="../manipulacao/manuLateral.js"></script>
</body>

</html>
            