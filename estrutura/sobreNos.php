<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ecogamma | Sobre Nós</title>
  <?php include './base/linksGlobais.php' ?>
</head>

<body>
  <div class="fundo">
    <img src="../imagens/banner_comunidade_mobile.png" alt="Fundo da página" class="fundo__inicio">
  </div>
  <header>
    <div class="container">
      <div class="container__logo">
        <a href="login.php"><img src="../imagens/logos/logo-principal.png" alt="Logo Principal do Ecogamma" class="container__logo__imagem"></a>
      </div>
      <div id="container__menu" onclick="menuLateralOpen()">
        <span class="material-symbols-outlined container__menu__icone">&#xe5d2;</span>
      </div>
    </div>
  </header>
  <!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ecogamma | Chat</title>
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
      <div class="container__perfil">
        <div class="container__perfil__fotoDeFundo">
          <img src="../imagens/rio_de_janeiro.jpg" alt="Foto de fundo do perfil" class="container__perfil__fotoDeFundo__imagem">
        </div>
        <div class="container__perfil__foto">
          <img src="../imagens/leandro.jpg" alt="Foto de perfil" class="container__perfil__foto__imagem">
        </div>
        <div class="container__perfil__dados">
          <p class="container__perfil__dados__nome">Leandro</p>
          <p class="container__perfil__dados__cargo">Engenheiro de Software</p>
          <p class="container__perfil__dados__descricao">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur asperiores, consequuntur ratione qui voluptatem minus! Eum laudantium neque, quo sunt quibusdam fugiat accusantium soluta maxime, nesciunt velit illo laboriosam cupiditate.</p>
        </div>
      </div>
    </div>
  </main>
  <script src="../manipulacao/manuLateral.js"></script>
</body>

</html>
  <main>
    <div class="container">
      <h1>Sobre Nós</h1>
    </div>
  </main>
  <script src="../manipulacao/manuLateral.js"></script>
</body>

</html>