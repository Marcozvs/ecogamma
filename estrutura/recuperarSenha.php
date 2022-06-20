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
                    <li class="container__lista__item"><span class="material-symbols-outlined container__lista__item__icone icone-alternativo container__lista__item__icone-ativo">&#xea77;</span>Login</li>
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
                    <li class="container__lista__item-ativo"><span class="material-symbols-outlined container__lista__item__icone-ativo  icone-alternativo">&#xe898;</span>Recuperar a Senha</li>
                </a>
            </ul>
        </div>
    </section>
<main>
  <h1 class="titulo-sombra">Reperar a Senha</h1>
  <p class="paragrafo-sombra p--subtitulo">Insira seu email abaixo para recuperar a senha</p>
  <form action="recuperarSenhaProcessa">
    <label for="email">Email</label>
      <div class="input-icones">
        <span class="material-symbols-outlined container__lista__item__icone  icone-alternativo">&#xe158;</span>
        <input type="email" placeholder="Insira seu email..." maxlength="100" minlength="1" required id="email" name="email">
      </div>
    <input type="submit" value="Enviar" class="botao__principal">
  </form>
</main>
<footer class="footer-recuperarSenha">
    <h1>Contato</h1>
    <ul class="footer__lista">
      <li class="footer__lista__item">
        <a href="malito:ecogamma.company@gmail.com"><span class="material-symbols-outlined container__menu__icone span">&#xe158;</span>ecogamma.company@gmail.com</a>
      </li>
      <hr>
      <li class="footer__lista__item">
        <a href="tel:(11)97503-0589"><span class="material-symbols-outlined container__menu__icone span">&#xe61d;</span>(11)97503-0589</a>
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