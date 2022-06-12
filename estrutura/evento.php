<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ecogamma | Eventos</title>
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
        <a href="feed.php"><img src="../imagens/logos/logo-principal.png" alt="Logo Principal do Ecogamma" class="container__logo__imagem"></a>
      </div>
      <nav class="container__nav">
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
    <div class="container">
      <div class="container__menu" onclick="menuLateralInternoClose()">
        <span class="material-symbols-outlined container__menu__icone span--verde">&#xe5d2;</span>
      </div>
      <ul class="container__lista">
        <a href="./feed.php">
          <li class="container__lista__item"><span class="material-symbols-outlined container__lista__item__icone icone-alternativo container__lista__item__icone">&#xe761;</span>Feed</li>
        </a>
        <a href="./notificacao.php">
          <li class="container__lista__item"><span class="material-symbols-outlined container__lista__item__icone  icone-alternativo">&#xe7f4;</span>Notificação</li>
        </a>
        <a href="./salvos.php">
          <li class="container__lista__item"><span class="material-symbols-outlined container__lista__item__icone  icone-alternativo">&#xe865;</span>Salvos</li>
        </a>
        <a href="./evento.php">
          <li class="container__lista__item-ativo"><span class="material-symbols-outlined container__lista__item__icone-ativo  icone-alternativo">&#xe878;</span>Eventos</li>
        </a>
        <a href="./noticia.php">
          <li class="container__lista__item"><span class="material-symbols-outlined container__lista__item__icone  icone-alternativo">&#xeb81;</span>Notícias</li>
        </a>
        <a href="./dica.php">
          <li class="container__lista__item"><span class="material-symbols-outlined container__lista__item__icone  icone-alternativo">&#xe0f0;</span>Dicas</li>
        </a>
        <a href="./pontosColeta.php">
          <li class="container__lista__item"><span class="material-symbols-outlined container__lista__item__icone  icone-alternativo">&#xe55f;</span>Pontos de Coleta</li>
        </a>
        <a href="./configuracoes.php">
          <li class="container__lista__item"><span class="material-symbols-outlined container__lista__item__icone  icone-alternativo">&#xe8b8;</span>Configurações</li>
        </a>
        <a href="./ecotrends.php">
          <li class="container__lista__item"><span class="material-symbols-outlined container__lista__item__icone  icone-alternativo">&#xe80e;</span>Ecotrends</li>
        </a>
        <a href="./amigos.php">
          <li class="container__lista__item"><span class="material-symbols-outlined container__lista__item__icone  icone-alternativo">&#xf8d9;</span>Amigos</li>
        </a>
        <a href="./doacao.php">
          <li class="container__lista__item"><span class="material-symbols-outlined container__lista__item__icone  icone-alternativo">&#xea70;</span>Doação</li>
        </a>
        <a href="./sobreNos-interno.php">
          <li class="container__lista__item"><span class="material-symbols-outlined container__lista__item__icone-ativo icone-alternativo">&#xf06c;</span>Sobre Nós</li>
        </a>
      </ul>
    </div>
  </section>
  <main>
    <div class="container">
      <h1>Evento</h1>
      <section class="container__post">
        <h2>Título do Evento</h2>
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
      </section>
    </div>
  </main>
  <script src="../manipulacao/manuLateral.js"></script>
</body>

</html>