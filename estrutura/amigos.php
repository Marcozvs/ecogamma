<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ecogamma | Amigos</title>
  <?php include './base/linksGlobais.php' ?>
</head>

<body>
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
                    <li class="container__lista__item"><span class="material-symbols-outlined container__lista__item__icone  icone-alternativo">&#xe8b8;</span>Configurações</li>
                </a>
                <a href="./ecotrends.php">
                    <li class="container__lista__item"><span class="material-symbols-outlined container__lista__item__icone  icone-alternativo">&#xe80e;</span>Ecotrends</li>
                </a>
                <a href="./amigos.php">
                    <li class="container__lista__item-ativo"><span class="material-symbols-outlined container__lista__item__icone-ativo  icone-alternativo">&#xf8d9;</span>Amigos</li>
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
      <h1>Amigos</h1>
      <?php
            $selecionaLacos = "SELECT * FROM amigos WHERE id_UserAsk = $id AND pendente = 0";
            $resultLacos = mysqli_query($conn, $selecionaLacos);
            if (mysqli_num_rows($resultLacos) > 0) {
                while ($row = mysqli_fetch_assoc($resultLacos)) {
                    $id_UserAcc = $row['id_UserAcc'];

                    $selecionaAmigo = "SELECT * FROM usuarios WHERE id = '$id_UserAcc'";
                    $resultSelecionaAmigo = mysqli_query($conn, $selecionaAmigo);
                    if (mysqli_num_rows($resultSelecionaAmigo) > 0) {
                        while ($row = mysqli_fetch_assoc($resultSelecionaAmigo)) {
                            $nomeUser = $row["nome"];
                            $sobrenomeUser = $row["sobrenome"];
                            $fotoUser = $row["foto"];
                            $profissaoUser = $row["profissao"];

                            echo "<section class='container__post'>
                            <div class='container__post__perfil'>
                              <div class='container__post__perfil__foto'>
                                <img src='../imagens/" . $fotoUser . "' alt='Imagem do Perfil'>
                              </div>
                              <div class='container__post__perfil__dados'>
                                <p class='container__post__perfil__dados__nome nome__perfil'>" . $nomeUser . "" . $sobrenomeUser . "</p>
                                <p class='container__post__perfil__dados__cargo cargo__perfil'>" . $profissaoUser . "</p>
                              </div>
                            </div>
                          </section>";
                        }
                    }

                }
            }
            $selecionaLacos2 = "SELECT * FROM amigos WHERE id_UserAcc = $id AND pendente = 0";
            $resultLacos2 = mysqli_query($conn, $selecionaLacos2);
            if (mysqli_num_rows($resultLacos2) > 0) {
                while ($row = mysqli_fetch_assoc($resultLacos2)) {
                    $id_UserAsk = $row['id_UserAsk'];

                    $selecionaAmigo2 = "SELECT * FROM usuarios WHERE id = '$id_UserAsk'";
                    $resultSelecionaAmigo2 = mysqli_query($conn, $selecionaAmigo2);
                    if (mysqli_num_rows($resultSelecionaAmigo2) > 0) {
                        while ($row = mysqli_fetch_assoc($resultSelecionaAmigo2)) {

                            $nomeUser = $row["nome"];
                            $sobrenomeUser = $row["sobrenome"];
                            $fotoUser = $row["foto"];
                            $profissaoUser = $row["profissao"];

                            echo "<section class='container__post'>
                            <div class='container__post__perfil'>
                              <div class='container__post__perfil__foto'>
                                <img src='../imagens/" . $fotoUser . "' alt='Imagem do Perfil'>
                              </div>
                              <div class='container__post__perfil__dados'>
                                <p class='container__post__perfil__dados__nome nome__perfil'>" . $nomeUser . " " . $sobrenomeUser . "</p>
                                <p class='container__post__perfil__dados__cargo cargo__perfil'>" . $profissaoUser . "</p>
                              </div>
                            </div>
                          </section>";
                        }
                    }

                }
            }

      ?>
    </div>
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
  <script src="../manipulacao/modoEscuroClaro.js"></script>
</body>

</html>