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
    if ($_GET['user'] != $id) {
      # code...
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
        $fundoUser = 'ac.jpg';
      } elseif ($estadoUser == 'al') {
        $fundoUser = 'al.jpg';
      } elseif ($estadoUser == 'am') {
        $fundoUser = 'am.jpeg';
      } elseif ($estadoUser == 'ap') {
        $fundoUser = 'ap.jpg';
      } elseif ($estadoUser == 'ba') {
        $fundoUser = 'ba.jpg';
      } elseif ($estadoUser == 'ce') {
        $fundoUser = 'ce.jpg';
      } elseif ($estadoUser == 'df') {
        $fundoUser = 'df.jpg';
      } elseif ($estadoUser == 'es') {
        $fundoUser = 'es.png';
      } elseif ($estadoUser == 'go') {
        $fundoUser = 'go.jpg';
      } elseif ($estadoUser == 'ma') {
        $fundoUser = 'ma.jpg';
      } elseif ($estadoUser == 'mt') {
        $fundoUser = 'mt.jpg';
      } elseif ($estadoUser == 'ms') {
        $fundoUser = 'ms.jpg';
      } elseif ($estadoUser == 'mg') {
        $fundoUser = 'mg.jpg';
      } elseif ($estadoUser == 'pa') {
        $fundoUser = 'pa.jpg';
      } elseif ($estadoUser == 'pb') {
        $fundoUser = 'pb.jpg';
      } elseif ($estadoUser == 'pr') {
        $fundoUser = 'pr.jpg';
      } elseif ($estadoUser == 'pe') {
        $fundoUser = 'pe.jpg';
      } elseif ($estadoUser == 'pi') {
        $fundoUser = 'pi.jpg';
      } elseif ($estadoUser == 'rj') {
        $fundoUser = 'rj.jpg';
      } elseif ($estadoUser == 'rn') {
        $fundoUser = 'rn.jpg';
      } elseif ($estadoUser == 'ro') {
        $fundoUser = 'ro.jpg';
      } elseif ($estadoUser == 'rs') {
        $fundoUser = 'rr.jpg';
      } elseif ($estadoUser == 'rr') {
        $fundoUser = 'rr.jpg';
      } elseif ($estadoUser == 'sc') {
        $fundoUser = 'sc.jpg';
      } elseif ($estadoUser == 'se') {
        $fundoUser = 'se.jpg';
      } elseif ($estadoUser == 'sp') {
        $fundoUser = 'sp.jpg';
      } elseif ($estadoUser == 'to') {
        $fundoUser = 'to.jpg';
      }


      //ESTE CÓDIGO É REFERENTE AO SISTEMA DE AMIGOS
      $selecionaLacos = "SELECT * FROM amigos WHERE id_UserAsk = $id AND id_UserAcc = $idUser AND pendente = 0";
      $resultLacos = mysqli_query($conn, $selecionaLacos);

      if (mysqli_num_rows($resultLacos) > 0) {
        $addText = "Amigos"; //Se já forem amigos
      } else {
        $selecionaLacos2 = "SELECT * FROM amigos WHERE id_UserAsk = $id AND id_UserAcc = $idUser";
        $resultLacos2 = mysqli_query($conn, $selecionaLacos2);
        if (mysqli_num_rows($resultLacos2) > 0) {
          $addText = "Pendente"; //se já tiver pedido amizade e ainda não foi aceita
        } else {
          $addText = "Adicionar"; // se o pedido para se tornarem amigos não existe ainda
        }
      }

      if (isset($_POST['id_UserAsk']) && isset($_POST['id_UserAcc']) && $addText != "Amigos" && $addText != "Pendente") {
        $pendente = 1;
        $UserAsk = $_POST['id_UserAsk'];
        $UserAcc = $_POST['id_UserAcc'];

        $inserePedido = "INSERT INTO amigos (id_UserAsk, id_UserAcc, pendente)
            VALUES ('$UserAsk', '$UserAcc', '$pendente')";

        if (mysqli_query($conn, $inserePedido)) {
          echo "pedido realizado";
        }
      }

      if ($addText == "Pendente" || $addText == "Amigos") {
        $type = "button"; // muda o tipo do botão do formulário de pedir amizade para não ficarem clicando sem motivo e atualizando a página se já forem amigos ou se o convite para se tornarem amigos já existir...
      } else {
        $type = "submit";
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
    <form action='./perfilUser.php?user=" . $idUser . "' method='POST'>
    <input type='" . $type . "' value='" . $addText . "' name='Adicionar'>
    <input type='hidden' value='" . $id . "' name='id_UserAsk'>
    <input type='hidden' value='" . $idUser . "' name='id_UserAcc'>
    </form>
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
              <p>Amigos:</p>
              <p>" . $amigosUser . "</p>
              </li>
          </ul>
        </div>
        </div>";

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
    } else {
      echo "<h1>Erro:</h1>
      <p>Parece que você tentou acessar o seu perfil pelo lugar errado!</p>
      <p>Clique <a href='perfil.php'>aqui</a> para acessá-lo corretamente!</p>";
    }
    ?>
    </div>
  </main>
  <script src="../manipulacao/manuLateral.js"></script>
</body>

</html>