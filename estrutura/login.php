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
include_once './administracao/sessao.php';
if ($_SESSION['logado'] == 1) {
        include 'jaLogado.php';
        die();
    };
?>

<body>
  <div class="fundo">
      <video autoplay="autoplay" loop="true" muted>
        <source src="../videos/fundo.mp4" type="video/mp4">
      </video>
  </div>
  <?php 
  //alerta em caso de errar as informações da conta
  $message = "Email ou senha inválidos";
if (isset($_GET["msg"]) && $_GET["msg"] == 'falha') {
  echo "<script type='text/javascript'>alert('$message');</script>";
}
  ?>
  <header class="header">
    <div class="container">
      <div class="container__logo">
        <a href="login.php"><img src="../imagens/logos/logo-principal.png" alt="Logo Principal do Ecogamma" class="container__logo__imagem"></a>
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
                <a href="login.php">
                    <li class="container__lista__item-ativo"><span class="material-symbols-outlined container__lista__item__icone-ativo icone-alternativo container__lista__item__icone-ativo">&#xea77;</span>Login</li>
                </a>
                <a href="cadastro.php">
                    <li class="container__lista__item"><span class="material-symbols-outlined container__lista__item__icone  icone-alternativo">&#xe145;</span>Cadastro</li>
                </a>
                <a href="contato.php">
                    <li class="container__lista__item"><span class="material-symbols-outlined container__lista__item__icone  icone-alternativo">&#xe0b0;</span>Contato</li>
                </a>
                <a href="comunidade.php">
                    <li class="container__lista__item"><span class="material-symbols-outlined container__lista__item__icone  icone-alternativo">&#xf8d7;</span>Comunidade</li>
                </a>
                <a href="sobreNos.php">
                    <li class="container__lista__item"><span class="material-symbols-outlined container__lista__item__icone  icone-alternativo">&#xf8d8;</span>Sobre Nós</li>
                </a>
                <a href="recuperarSenha.php">
                    <li class="container__lista__item"><span class="material-symbols-outlined container__lista__item__icone  icone-alternativo">&#xe898;</span>Recuperar a Senha</li>
                </a>
            </ul>
        </div>
    </section>
    <main>
    <div class="container">
      <h1 class="titulo-sombra">Login</h1>
      <p class="paragrafo-sombra p--subtitulo">Venha fazer parte da comunidade e nos ajudar a cuidar do nosso lar, o planeta!</p>
      <div class="container__formLogin">
        <form action="./loginProcessa.php" class="container__formLogin__form" method="POST">
          <label for="email">Email</label>
          <div class="input-icones">
            <span class="material-symbols-outlined container__lista__item__icone  icone-alternativo">&#xe158;</span>
            <input type="email" placeholder="Insira seu email..." maxlength="100" minlength="1" required id="email" name="email">
          </div>
          <label for="senha">Senha</label>
          <div class="input-icones">
            <span class="material-symbols-outlined container__lista__item__icone  icone-alternativo">&#xe73c;</span>
            <input type="password" placeholder="Insira sua senha..." maxlength="100" minlength="1" required id="senha" name="senha">
          </div>
          <input type="submit" value="Entrar" class="botao__principal">
        </form>
        <a href="cadastro.php">Cadastre-se</a>
        <br>
        <a href="recuperarSenha.php">Esqueci a senha</a>
      </div>
    </div>
  </main>
  <footer class="footer-login">
    <h1>Contato</h1>
    <ul class="footer__lista">
      <li class="footer__lista__item">
        <a href="malito:ecogamma@gmail.com"><span class="material-symbols-outlined container__menu__icone span">&#xe158;</span>ecogamma@gmail.com</a>
      </li>
      <hr>
      <li class="footer__lista__item">
        <a href="tel:(00)0000-0000"><span class="material-symbols-outlined container__menu__icone span">&#xe61d;</span>(00)00000000</a>
      </li>
      <hr>
    </ul>
    <div class="footer__copyright">
      <span class="material-symbols-outlined container__menu__icone span">&#xe90c;</span>
      <p>Copyright - Ecogamma 2022</p>
    </div>
</footer>
  <script src="../manipulacao/manuLateral.js"></script>
</body>

</html>