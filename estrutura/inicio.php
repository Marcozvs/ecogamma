<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecogamma | Início</title>
    <!--Aplicando reset CSS-->
    <link rel="stylesheet" href="../estilos/css/reset.css">
    <!--Aplicando CSS-->
    <link rel="stylesheet" href="../estilos/css/styles.css">
    <!--Aplicando ícones e símbolos-->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <!--Aplicando fonte-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="fundo">
      <img src="../imagens/banner_inicio_mobile.png" alt="Fundo da página" class="fundo__inicio"> 
    </div>
    <header>
      <div class="container">
          <div class="container__logo">
            <img src="../imagens/logos/logo-principal.png" alt="Logo Principal do Ecogamma" class="container__logo__imagem">
          </div>
          <div class="container__menu">
            <span class="material-symbols-outlined container__menu__icone">&#xe5d2;</span>
          </div>
      </div>
    </header>
    <main>
      <div class="container">
        <h1>Sustentabilidade</h1>
        <p>Venha fazer parte da comunidade e nos ajudar a cuidar do nosso lar, o planeta!</p>
        <div class="container__formLogin">
          <h2>Login</h2>
          <form action="" class="container__formLogin__form">
              <label for="email">Email</label>
              <input type="email" placeholder="Insira seu email..." maxlength="100" minlength="1" required id="email" name="email">
              <label for="senha">Senha</label>
              <input type="senha" placeholder="Insira sua senha..." maxlength="100" minlength="1" required id="senha" name="senha">
              <input type="submit" value="Entrar" class="botao__principal">
          </form>
          <a href="cadastro.php">Cadastre-se</a>
          <br>
          <a href="email.php">Esqueci meu email</a>
        </div>
      </div>
    </main>
</body>
</html>