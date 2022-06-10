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
          <span class="material-symbols-outlined container__menu__icone span--azul">&#xe853;</span>
        </a>
      </div>
      <div class="container__chat">
        <a href="chat.php">
            <span class="material-symbols-outlined container__menu__icone span--verde">&#xe8af;</span>
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
      <h1>Fernanda</h1>
      <section class="container__post">
        <div class="container__post__perfil">
          <div class="container__post__perfil__foto">
            <img src="../imagens/perfil_default.svg" alt="Imagem do Perfil">
          </div>
          <div class="container__post__perfil__dados">
            <p class="container__post__perfil__dados__nome nome__perfil">Fulano</p>
          </div>
        </div>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laborum dolorem laudantium consectetur obcaecati doloribus voluptatum laboriosam, fugit officiis atque praesentium magnam vero aut totam cum nesciunt sunt dolore labore dignissimos!</p>
      </section>
      <section class="container__post">
        <div class="container__post__perfil">
          <div class="container__post__perfil__foto">
            <img src="../imagens/perfil_default.svg" alt="Imagem do Perfil">
          </div>
          <div class="container__post__perfil__dados">
            <p class="container__post__perfil__dados__nome nome__perfil">Fulano</p>
          </div>
        </div>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laborum dolorem laudantium consectetur obcaecati doloribus voluptatum laboriosam, fugit officiis atque praesentium magnam vero aut totam cum nesciunt sunt dolore labore dignissimos!</p>
      </section>
      <section class="container__post">
        <div class="container__post__perfil">
          <div class="container__post__perfil__foto">
            <img src="../imagens/perfil_default.svg" alt="Imagem do Perfil">
          </div>
          <div class="container__post__perfil__dados">
            <p class="container__post__perfil__dados__nome nome__perfil">Fulano</p>
          </div>
        </div>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laborum dolorem laudantium consectetur obcaecati doloribus voluptatum laboriosam, fugit officiis atque praesentium magnam vero aut totam cum nesciunt sunt dolore labore dignissimos!</p>
      </section>
      <form action="#" class="container__form__chat">
        <textarea name="mensagem" id="mensagem" cols="30" rows="10" placeholder="Escreva sua mensagem aqui..."></textarea>
        <input type="submit" value="Enviar" class="botao__principal form__chat__enviar">
      </form>
    </div>
  </main>
  <script src="../manipulacao/manuLateral.js"></script>
</body>

</html>