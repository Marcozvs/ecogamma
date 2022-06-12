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
  <?php
    include './administracao/sessao.php';
    if ($_SESSION['logado'] == 1) {
            include 'jaLogado.php';
            die();
        };
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
                <a href="sobreNos-interno.php">
                    <li class="container__lista__item-ativo"><span class="material-symbols-outlined container__lista__item__icone-ativo  icone-alternativo">&#xf8d8;</span>Sobre Nós</li>
                </a>
                <a href="recuperarSenha.php">
                    <li class="container__lista__item"><span class="material-symbols-outlined container__lista__item__icone  icone-alternativo">&#xe898;</span>Recuperar a Senha</li>
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