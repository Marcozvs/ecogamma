<!DOCTYPE html>
<html lang="pt-br" id="html">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ecogamma | Configurações</title>
  <?php include './base/linksGlobais.php' ?>
</head>

<body id="body">
  <?php
  include './administracao/sessao.php';
  if ($_SESSION['logado'] == 0) {
    include 'naoLogado.php';
    die();
  };
  ?>
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
            </div>
            <div>
                <button id="botao__noite" onclick="modoEscuro()">
                    <span class="material-symbols-outlined container__menu__icone span--azul">&#xf159;</span>
                </button>
                <button id="botao__dia" onclick="modoClaro()">
                    <span class="material-symbols-outlined container__menu__icone span--azul">&#xe518;</span>
                </button>
            </div>
            <div id="container__menu" onclick="menuLateralInternoOpen()">
                <span class="material-symbols-outlined container__menu__icone span--azul">&#xe5d2;</span>
            </div>
        </div>
    </header>
  <section id="menuLateral__interno">
        <div class="container">
            <div class="container__menu" onclick="menuLateralInternoClose()">
                <span class="material-symbols-outlined container__menu__icone icone-alternativo">&#xe5d2;</span>
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
                    <li class="container__lista__item-ativo"><span class="material-symbols-outlined container__lista__item__icone-ativo  icone-alternativo">&#xe8b8;</span>Configurações</li>
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
    <div class="container">
      <h1>Configurações</h1>
      <select name="modoTela" id="modoTela" onclick="modoTela()">
            <option value="claro">Claro</option>
            <option value="escuro">Escuro</option>
      </select>    
  </main>
  <div id="menuFixo">
        <ul class="container__lista" id="menuFixo__lista">
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
  <script src="../manipulacao/manuLateral.js"></script>
  <script src="../manipulacao/modoNoturno.js"></script>
  <script src="../manipulacao/modoEscuroClaro.js"></script>
</body>

</html>