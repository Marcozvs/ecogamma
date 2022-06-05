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
    <!--Aplicando ícone do Ecogamma-->
    <link rel="icon" type="imagem/png" href="../imagens/logos/logo-principal.png" />
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
            <a href="inicio.php"><img src="../imagens/logos/logo-principal.png" alt="Logo Principal do Ecogamma" class="container__logo__imagem"></a>
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
          <li class="menuLateral__container__lista__item"><span class="material-symbols-outlined container__menu__icone icone-alternativo">&#xe9ba;</span>Login</li>
          <li class="menuLateral__container__lista__item"><span class="material-symbols-outlined container__menu__icone  icone-alternativo  icone-alternativo">&#xe145;</span>Cadastre-se</li>
          <li class="menuLateral__container__lista__item"><span class="material-symbols-outlined container__menu__icone  icone-alternativo">&#xf223;</span>Contato</li>
          <li class="menuLateral__container__lista__item"><span class="material-symbols-outlined container__menu__icone  icone-alternativo">&#xf8d7;</span>Sobre nós</li>
          <li class="menuLateral__container__lista__item"><span class="material-symbols-outlined container__menu__icone  icone-alternativo">&#xf8d8;</span>Comunidade</li>
        </ul>
      </div>
    </section>
    <main>
        <div class="container">
            <h1>Comunidade</h1>
            <p>Nossa comunidade é impulsionada por pessoas motivadas em preservar o meio ambiente</p>
            <div class="container__cartao">
                <div class="container__cartao__foto">
                    <img src="../imagens/marcos.jpg" alt="foto de perfil">
                </div>
                <div class="container__cartao__dados">
                    <p class="container__cartao__dados__nome">Marcos Vinícius da Silva</p>
                    <p class="container__cartao__dados__cargo">Engenheiro da Computação</p>
                    <p class="container__cartao__dados__texto">Parabéns pessoal, atitudes como está tem que ser aplaudida!</p>
                </div>
            </div>
        </div>
    </main>
    <script src="../manipulacao/manuLateral.js"></script>
</body>
</html>