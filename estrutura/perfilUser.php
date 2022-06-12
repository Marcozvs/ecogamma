<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ecogamma | Perfil</title>
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
  <header class="header__interno">
    <div class="container">
      <div class="container__logo">
        <a href="login.php"><img src="../imagens/logos/logo-principal.png" alt="Logo Principal do Ecogamma" class="container__logo__imagem"></a>
      </div>
      <div class="container__perfil">
        <a href="perfil.php">
          <span class="material-symbols-outlined container__menu__icone span--verde">&#xe853;</span>
        </a>
      </div>
      <div class="container__chat">
        <a href="chat.php">
          <span class="material-symbols-outlined container__menu__icone span--azul">&#xe8af;</span>
        </a>
      </div>
      <div class="container__chat">
        <a href="logout.php">
          <span class="material-symbols-outlined container__menu__icone span--azul">&#xeffd;</span>
        </a>
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
          <li class="container__lista__item"><span class="material-symbols-outlined container__lista__item__icone  icone-alternativo">&#xf8d9;</span>Amigos</li>
        </a>
        <a href="./doacao.php">
          <li class="container__lista__item"><span class="material-symbols-outlined container__lista__item__icone  icone-alternativo">&#xea70;</span>Doação</li>
        </a>
        <a href="./sobreNos.php">
          <li class="container__lista__item"><span class="material-symbols-outlined container__lista__item__icone-ativo icone-alternativo">&#xf06c;</span>Sobre Nós</li>
        </a>
      </ul>
    </div>
  </section>
  <main>
    <?php
    $idUser = $_GET['user'];

    $sql = "SELECT token, nome, sobrenome, email, dataN, genero, numero, estado, cidade, profissao,
    foto, descricao, amigos FROM usuarios WHERE id = '$idUser'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
      // output data of each row
      while ($row = mysqli_fetch_assoc($result)) {
        $tokenUser = $row["token"];
        $nomeUser = $row["nome"];
        $sobrenomeUser = $row["sobrenome"];
        $emailUser = $row["email"];
        $dataNUser = $row["dataN"];
        $generoUser = $row["genero"];
        $numeroUser = $row["numero"];
        $estadoUser = $row["estado"];
        $cidadeUser = $row["cidade"];
        $fotoUser = $row["foto"];
        $profissaoUser = $row["profissao"];
        if (empty($fotoUser)) {
          $fotoUser = 'perfil_default.svg';
        }
        $descricaoUser = $row["descricao"];
        if (empty($descricaoUser)) {
          $descricaoUser = 'Eco é agro, Eco é tec, Eco é tudo!';
        }
        $amigosUser = $row["amigos"];
      }
    } else {
      echo "0 results";
    }


    if ($estadoUser == 'ac') {
      $fundoUser = '';
    } elseif ($estadoUser == 'al') {
      $fundoUser = '';
    } elseif ($estadoUser == 'am') {
      $fundoUser = '';
    } elseif ($estadoUser == 'ap') {
      $fundoUser = '';
    } elseif ($estadoUser == 'ba') {
      $fundoUser = '';
    } elseif ($estadoUser == 'ce') {
      $fundoUser = '';
    } elseif ($estadoUser == 'df') {
      $fundoUser = '';
    } elseif ($estadoUser == 'es') {
      $fundoUser = '';
    } elseif ($estadoUser == 'go') {
      $fundoUser = '';
    } elseif ($estadoUser == 'ma') {
      $fundoUser = '';
    } elseif ($estadoUser == 'mt') {
      $fundoUser = '';
    } elseif ($estadoUser == 'ms') {
      $fundoUser = '';
    } elseif ($estadoUser == 'mg') {
      $fundoUser = '';
    } elseif ($estadoUser == 'pa') {
      $fundoUser = '';
    } elseif ($estadoUser == 'pb') {
      $fundoUser = '';
    } elseif ($estadoUser == 'pr') {
      $fundoUser = '';
    } elseif ($estadoUser == 'pe') {
      $fundoUser = '';
    } elseif ($estadoUser == 'pi') {
      $fundoUser = '';
    } elseif ($estadoUser == 'rj') {
      $fundoUser = 'rio_de_janeiro.jpg';
    } elseif ($estadoUser == 'rn') {
      $fundoUser = '';
    } elseif ($estadoUser == 'ro') {
      $fundoUser = '';
    } elseif ($estadoUser == 'rs') {
      $fundoUser = '';
    } elseif ($estadoUser == 'rr') {
      $fundoUser = '';
    } elseif ($estadoUser == 'sc') {
      $fundoUser = '';
    } elseif ($estadoUser == 'se') {
      $fundoUser = '';
    } elseif ($estadoUser == 'sp') {
      $fundoUser = '';
    } elseif ($estadoUser == 'to') {
      $fundoUser = '';
    }
// AQUI FICA AS INFORMAÇÕES DO USUÁRIO
    echo "
    <div class='container'>
      <div class='container__perfil'>
        <div class='container__perfil__capa'>
          <img src='../imagens/fundos/" . $fundoUser . "' alt='Fundo do perfil' class='container__perfil__capa__imagem'>
        </div>
        <div class='container__perfil__foto'>
          <img src='../imagens/" . $fotoUser . "' alt='Fundo do perfil' class='container__perfil__foto__imagem'>
        </div>
        <div class='container__perfil__dados'>
          <ul class='container__perfil__dados__lista'>
            <li class='container__perfil__dados__lista__item'>
              <p>Nome:</p>
              <p>" . $nomeUser . " " . $sobrenomeUser . "</p>
            </li>
            <li class='container__perfil__dados__lista__item'>
              <p>Cargo:</p>
              <p>" . $profissaoUser . "</p>
            </li>
            <li class='container__perfil__dados__lista__item'>
              <p>Descrição:</p>
              <p>" . $descricaoUser . "</p>
            </li>
            <li class='container__perfil__dados__lista__item'>
              <p>Seguidores:</p>
              <p>" . $amigos . "</p>
            </li>
            <li class='container__perfil__dados__lista__item'>
              <p>Seguindo:</p>
              <p>" . $amigos . "</p>
            </li>
          </ul>
        </div>
      </div>";
    ?>


      <?php
      $sql = "SELECT * FROM posts WHERE id = '$idUser' ORDER BY id_Post DESC";

      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {

          $idP = $row["id"];
          $id_Post = $row["id_Post"];
          $fotoP = $row["foto"];
          $nomeP = $row["nome"];
          $sobrenomeP = $row["sobrenome"];
          $profissaoP = $row["profissao"];
          $data_Post = $row["data_Post"];
          $texto_Post = $row["texto_Post"];
          $imagem_Post = $row["imagem_Post"];
          $likesP = $row["likes_Post"];


// AQUI FICA OS POSTS DO USUÁRIO
          echo "
          <section class='container__post--perfil'>
            <div class='container__post__perfil'>
              <div class='container__post__perfil__foto'>
                <img src='../imagens/perfil_default.svg' alt='Imagem do Perfil'>
              </div>
              <div class='container__post__perfil__dados'>
                <p class='container__post__perfil__dados__nome nome__perfil'>" . $nomeP . " " . $sobrenomeP . "</p>
                <p class='container__post__perfil__dados__cargo cargo__perfil'>" . $profissaoP . "</p>
              </div>
            </div>
            <div class='container__post__conteudo'>
              <p class='container__post__conteudo__texto'>" . $data_Post . "</p>
              <p class='container__post__conteudo__texto'>" . $texto_Post . "</p>
              <img src='../imagens/" . $imagem_Post . "' alt='imagem do conteúdo' class='container__post__conteudo__imagem'>
            </div>
            <div class='container__post__interacoes'>
              <ul class='container__post__interacoes__lista'>
                <li class='container__post__interacoes__lista__item'>
                  <span class='material-symbols-outlined container__menu__icone span--azul'>&#xe87d;</span>
                  <p>" . $likesP . "</p>
                </li>
                <li class='container__post__interacoes__lista__item'>
                  <span class='material-symbols-outlined container__menu__icone span--azul'>&#xe0b9;</span>
                  <p>32</p>
                </li>
                <li class='container__post__interacoes__lista__item'>
                  <span class='material-symbols-outlined container__menu__icone span--azul'>&#xe163;</span>
                  <p>32</p>
                </li>
              </ul>
            </div>
            </section>
          ";
        }
      } else {
        echo "Sem posts ainda...";
      }

      ?>
    </div>
  </main>
  <script src="../manipulacao/manuLateral.js"></script>
</body>

</html>