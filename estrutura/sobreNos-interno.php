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
      <video autoplay="autoplay" loop="true" muted>
        <source src="../videos/fundo.mp4" type="video/mp4">
      </video>
  </div>
  <header class="header__interno" id="header__interno">
    <div class="container">
      <div class="container__logo">
        <a href="feed.php"><img src="../imagens/logos/logo-principal.png" alt="Logo Principal do Ecogamma" class="container__logo__imagem"></a>
      </div>
      <div class="container__perfil">
        <a href="perfil.php">
          <span class="material-symbols-outlined container__menu__icone span--azul">&#xe853;</span>
        </a>
      </div>
      <div class="container__chat">
        <a href="chat.php">
            <span class="material-symbols-outlined container__menu__icone span--azul">&#xe8af;</span>
        </a>
      </div>
      <div class="container__logout">
        <a href="logout.php">
            <span class="material-symbols-outlined container__menu__icone span--azul">&#xeffd;</span>
        </a>
      </div class="botao__diaNoite">
        <button onclick="modoNoite()" id="botao__noite"><span class="material-symbols-outlined container__menu__icone span--azul">&#xf03d;</span></button>
        <button onclick="modoDia()" id="botao__dia"><span class="material-symbols-outlined container__menu__icone span--azul">&#xe518;</span></button>
      <div id="container__menu" onclick="menuLateralInternoOpen()">
        <span class="material-symbols-outlined container__menu__icone span--azul">&#xe5d2;</span>
      </div>
    </div>
</header>
<section id="menuLateral__interno">
        <div class="container" id="menuLateral__InternoNoturno">
            <div class="container__menu" onclick="menuLateralInternoClose()">
                <span class="material-symbols-outlined container__menu__icone span--verde">&#xe5d2;</span>
            </div>
            <ul class="container__lista">
                <a href="./feed.php">
                    <li class="container__lista__item-ativo"><span class="material-symbols-outlined container__lista__item__icone icone-alternativo container__lista__item__icone-ativo">&#xe761;</span>Feed</li>
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
                <a href="./sobreNos-interno.php">
                    <li class="container__lista__item"><span class="material-symbols-outlined container__lista__item__icone-ativo icone-alternativo">&#xf8d8;</span>Sobre Nós</li>
                </a>
            </ul>
        </div>
    </section>
  <main>

<body>
    <div class="container">
        <section class="container__post">
            <div class="container__post__perfil">
                <div class="container__post__perfil__foto">
                    <span class="material-symbols-outlined container__menu__icone span--azul chat__robo__icone">&#xf06c;</span>
                </div>
                <div class="container__post__perfil__dados">
                    <p class="container__post__perfil__dados__nome nome__perfil">Ecobot</p>
                </div>
            </div>
            <div id="chat">
                <p class="robo">Prazer em conhecê-lo, meu nome é <strong>Ecobot</strong>! Sou o responsável por ajudar os amigos da natureza a se encontrarem dentro do nosso website de forma amigável e intuitiva! ♥</p>
                <p class="robo">Tire suas dúvidas comigo! Tente digitar <strong>olá</strong> no meu chat!</p>
            </div>
            <div class="chat__form">
                <input type="text" name="" id="escrever" autocomplete="off" placeholder="Dica: Pressione ENTER para enviar uma mensagem já escrita">
                <button type="button" onclick="conversar()" id="enviar" class="botao__principal">Enviar</button>
            </div>
        </section>
    </div>
    <script src = "../manipulacao/bot.js"></script>
  </main>
  <script src="../manipulacao/manuLateral.js"></script>
</body>

</html>