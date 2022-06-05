<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecogamma | Chat</title>
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
    <header class="header__interno">
      <div class="container">
          <div class="container__logo">
            <a href="inicio.php"><img src="../imagens/logos/logo-principal.png" alt="Logo Principal do Ecogamma" class="container__logo__imagem"></a>
          </div>
          <div class="container__perfil">
            <span class="material-symbols-outlined container__menu__icone span--azul">&#xe853;</span>
          </div>
          <div class="container__chat">
            <span class="material-symbols-outlined container__menu__icone span--azul">&#xe8af;</span>
          </div>
          <a href="logout.php"><div class="container__logout">
            <span class="material-symbols-outlined container__menu__icone span--azul">&#xeffd;</span></a>
          </div>
          <div id="container__menu" onclick="menuLateralInternoOpen()">
            <span class="material-symbols-outlined container__menu__icone span--azul">&#xe5d2;</span>
          </div>
      </div>
    </header>
    <section id="menuLateral__interno">
      <div class="menuLateral__container">
        <div class="container__menu" onclick="menuLateralInternoClose()">
          <span class="material-symbols-outlined container__menu__icone icone-alternativo">&#xe5d2;</span>
        </div>
        <ul class="menuLateral__container__lista">
          <a href="./inicio.php"><li class="menuLateral__container__lista__item"><span class="material-symbols-outlined container__menu__icone icone-alternativo">&#xe761;</span>Feed</li></a>
          <a href="./sobreNos.php"><li class="menuLateral__container__lista__item"><span class="material-symbols-outlined container__menu__icone  icone-alternativo">&#xe7f4;</span>Notificação</li></a>
          <a href="./comunidade.php"><li class="menuLateral__container__lista__item"><span class="material-symbols-outlined container__menu__icone  icone-alternativo">&#xe865;</span>Salvos</li></a>
          <a href="./comunidade.php"><li class="menuLateral__container__lista__item"><span class="material-symbols-outlined container__menu__icone  icone-alternativo">&#xe878;</span>Eventos</li></a>
          <a href="./comunidade.php"><li class="menuLateral__container__lista__item"><span class="material-symbols-outlined container__menu__icone  icone-alternativo">&#xeb81;</span>Notícias</li></a>
          <a href="./comunidade.php"><li class="menuLateral__container__lista__item"><span class="material-symbols-outlined container__menu__icone  icone-alternativo">&#xe0f0;</span>Dicas</li></a>
          <a href="./comunidade.php"><li class="menuLateral__container__lista__item"><span class="material-symbols-outlined container__menu__icone  icone-alternativo">&#xe55f;</span>Pontos de Coleta</li></a>
          <a href="./comunidade.php"><li class="menuLateral__container__lista__item"><span class="material-symbols-outlined container__menu__icone  icone-alternativo">&#xe8b8;</span>Configurações</li></a>
          <a href="./comunidade.php"><li class="menuLateral__container__lista__item"><span class="material-symbols-outlined container__menu__icone  icone-alternativo">&#xe80e;</span>Ecotrends</li></a>
          <a href="./comunidade.php"><li class="menuLateral__container__lista__item"><span class="material-symbols-outlined container__menu__icone  icone-alternativo">&#xf8d9;</span>Amigos</li></a>
          <a href="./comunidade.php"><li class="menuLateral__container__lista__item"><span class="material-symbols-outlined container__menu__icone  icone-alternativo">&#xea70;</span>Doação</li></a>
          <a href="./comunidade.php"><li class="menuLateral__container__lista__item"><span class="material-symbols-outlined container__menu__icone  icone-alternativo">&#xf06c;</span>Bot de Ajuda</li></a>
        </ul>
      </div>
    </section>
    <main>
        <div class="container">
            <h1>Amigos</h1>
            <section class="container__post">
                <div class="container__post__perfil">
                    <div class="container__post__perfil__foto">
                        <img src="../imagens/leandro.jpg" alt="Imagem do Perfil">
                    </div>
                    <div class="container__post__perfil__dados">
                        <p class="container__post__perfil__dados__nome nome__perfil">Leandro</p>
                        <p class="container__post__perfil__dados__cargo cargo__perfil">Engenheiro de Software</p>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <script src="../manipulacao/manuLateral.js"></script>
</body>
</html>