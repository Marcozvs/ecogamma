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
        <a href="perfil.php">
          <span class="material-symbols-outlined container__menu__icone span--verde">&#xe853;</span>
        </a>
      </div>
      <div class="container__chat">
        <a href="chat.php">
            <span class="material-symbols-outlined container__menu__icone span--azul">&#xe8af;</span>
        </a>
      </div>
      <div class="container__chat">
        <a href="logout.php">
            <span class="material-symbols-outlined container__menu__icone span--azul">&#xeffd;</span>
        </a>
      </div>
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
                    <li class="container__lista__item"><span class="material-symbols-outlined container__lista__item__icone  icone-alternativo">&#xe878;</span>Eventos</li>
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
                <a href="./bot.php">
                    <li class="container__lista__item"><span class="material-symbols-outlined container__lista__item__icone  icone-alternativo">&#xf06c;</span>Bot de Ajuda</li>
                </a>
            </ul>
        </div>
    </section>
    <main>
    <div class="container">
      <div class="container__perfil">
        <div class="container__perfil__capa">
          <img src="../imagens/rio_de_janeiro.jpg" alt="Fundo do perfil" class="container__perfil__capa__imagem">
        </div>
        <div class="container__perfil__foto">
          <img src="../imagens/perfil_default.svg" alt="Fundo do perfil" class="container__perfil__foto__imagem">
        </div>
        <div class="container__perfil__dados">
          <ul class="container__perfil__dados__lista">
            <li class="container__perfil__dados__lista__item">
              <p>Nome:</p>
              <p>Fulano</p>
            </li>
            <li class="container__perfil__dados__lista__item">
              <p>Cargo:</p>
              <p>Cargo Exemplo</p>
            </li>
            <li class="container__perfil__dados__lista__item">
              <p>Descrição:</p>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio unde voluptatibus laborum iusto, quibusdam, illo temporibus nobis similique expedita sapiente natus nemo fuga perspiciatis amet reiciendis voluptates incidunt perferendis in!</p>
            </li>
            <li class="container__perfil__dados__lista__item">
              <p>Amigos:</p>
              <p>32</p>
            </li>
          </ul>
        </div>
      </div>
    <section class='container__post'>
        <div class='container__post__perfil'>
            <div class='container__post__perfil__foto'>
                <img src='../imagens/perfil_default.svg' alt='Imagem do Perfil'>
            </div>
            <div class='container__post__perfil__dados'>
                <p class='container__post__perfil__dados__nome nome__perfil'>" . $nomeP . " " . $sobrenomeP . "</p>
                <p class='container__post__perfil__dados__cargo cargo__perfil'>" . $profissaoP . "</p>
            </div>
        </div>
        <div class='container__post__conteudo'>
            <p class='container__post__conteudo__texto'>" . $data_Post . "</p>
            <p class='container__post__conteudo__texto'>" . $texto_Post . "</p>
            <img src='../imagens/" . $imagem_Post . "' alt='imagem do conteúdo' class='container__post__conteudo__imagem'>
        </div>
        <div class='container__post__interacoes'>
            <ul class='container__post__interacoes__lista'>
                <li class='container__post__interacoes__lista__item'>
                    <span class='material-symbols-outlined container__menu__icone span--azul'>&#xe87d;</span>
                    <p>32</p>
                </li>
                <li class='container__post__interacoes__lista__item'>
                    <span class='material-symbols-outlined container__menu__icone span--azul'>&#xe0b9;</span>
                    <p>32</p>
                </li>
                <li class='container__post__interacoes__lista__item'>
                    <span class='material-symbols-outlined container__menu__icone span--azul'>&#xe163;</span>
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