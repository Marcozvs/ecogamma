<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ecogamma | Início</title>
  <?php include './base/linksGlobais.php' ?>
</head>
<?php
include './administracao/sessao.php';
if ($_SESSION['logado'] == 1) {
        include 'jaLogado.php';
        die();
    };
?>

<body>
  <?php 
  //alerta em caso de errar as informações da conta
  $message = "Email ou senha inválidos";
if (isset($_GET["msg"]) && $_GET["msg"] == 'falha') {
  echo "<script type='text/javascript'>alert('$message');</script>";
}
  ?>
  <div class="fundo">
    <img src="../imagens/banner_inicio_mobile.png" alt="Fundo da página" class="fundo__inicio">
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
      <h1 class="h1--alternativo">Sustentabilidade.</h1>
      <p>Venha fazer parte da comunidade e nos ajudar a cuidar do nosso lar, o planeta!</p>
      <div class="container__formLogin">
        <h2>Login</h2>
        <form action="./loginProcessa.php" class="container__formLogin__form" method="POST">
          <label for="email">Email</label>
          <input type="email" placeholder="Insira seu email..." maxlength="100" minlength="1" required id="email" name="email">
          <label for="senha">Senha</label>
          <input type="password" placeholder="Insira sua senha..." maxlength="100" minlength="1" required id="senha" name="senha">
          <input type="submit" value="Entrar" class="botao__principal">
        </form>
        <a href="cadastro.php">Cadastre-se</a>
        <br>
        <a href="email.php">Esqueci a senha</a>
      </div>
    </div>
  </main>
  <script src="../manipulacao/manuLateral.js"></script>
</body>

</html>