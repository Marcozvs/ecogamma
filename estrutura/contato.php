<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ecogamma | Início</title>
  <?php include './base/linksGlobais.php' ?>
</head>

<body>
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
  <section id="menuLateral">
    <div class="menuLateral__container">
      <div class="container__menu" onclick="menuLateralClose()">
        <span class="material-symbols-outlined container__menu__icone icone-alternativo">&#xe5d2;</span>
      </div>
      <ul class="menuLateral__container__lista">
        <a href="./login.php">
          <li class="menuLateral__container__lista__item"><span class="material-symbols-outlined container__menu__icone icone-alternativo">&#xe9ba;</span>Login</li>
        </a>
        <a href="./cadastro.php">
          <li class="menuLateral__container__lista__item"><span class="material-symbols-outlined container__menu__icone  icone-alternativo  icone-alternativo">&#xe145;</span>Cadastre-se</li>
        </a>
        <a href="./contato.php">
          <li class="menuLateral__container__lista__item"><span class="material-symbols-outlined container__menu__icone  icone-alternativo">&#xf223;</span>Contato</li>
        </a>
        <a href="./sobreNos.php">
          <li class="menuLateral__container__lista__item"><span class="material-symbols-outlined container__menu__icone  icone-alternativo">&#xf8d7;</span>Sobre nós</li>
        </a>
        <a href="./comunidade.php">
          <li class="menuLateral__container__lista__item"><span class="material-symbols-outlined container__menu__icone  icone-alternativo">&#xf8d8;</span>Comunidade</li>
        </a>
      </ul>
    </div>
  </section>
  <main>
    <div class="container">
      <h1 class="h1--alternativo">Sustentabilidade.</h1>
      <p>Para entrar em contato com a gente preencha o formulário abaixo</p>
      <div class="container__formLogin">
        <h2>Contato</h2>
        <form action="" class="container__formLogin__form">
          <label for="nome">Nome</label>
          <input type="text" placeholder="Insira seu nome..." maxlength="150" minlength="1" required>
          <label for="sobreno">Sobrenome</label>
          <input type="text" placeholder="Insira seu sobrenome..." maxlength="150" minlength="1" required>
          <label for="email">Email</label>
          <input type="email" placeholder="Insira seu email..." maxlength="150" minlength="1" required>
          <label for="telefone">Telefone</label>
          <input type="tel" placeholder="Insira seu telefone..." maxlength="50" minlength="1" required>
          <input type="submit" value="Enviar" class="botao__principal">
        </form>
        <a href="cadastro.php">Cadastre-se</a>
        <br>
        <a href="email.php">Esqueci meu email</a>
      </div>
    </div>
  </main>
  <script src="../manipulacao/manuLateral.js"></script>
</body>

</html>