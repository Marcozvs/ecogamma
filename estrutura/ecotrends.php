<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ecogamma | Ecotrends</title>
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
            <a href="feed.php"><img src="../imagens/logos/logo-principal.png" alt="Logo Principal do Ecogamma" class="container__logo__imagem"></a>
        </div>
        <nav class="container__nav">
            <a href="perfil.php">
                <span class="material-symbols-outlined container__menu__icone span--azul">&#xe853;</span>
            </a>
            <a href="chat.php">
                <span class="material-symbols-outlined container__menu__icone span--azul">&#xe8af;</span>
            </a>
            <a href="logout.php">
                <span class="material-symbols-outlined container__menu__icone span--azul">&#xeffd;</span>
            </a>
        </nav>
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
                    <li class="container__lista__item-ativo"><span class="material-symbols-outlined container__lista__item__icone-ativo  icone-alternativo">&#xe80e;</span>Ecotrends</li>
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
    </section>
  <main>
    <div class="container">
      <h1>Ecotrends</h1>
      <?php 

$sql = "SELECT * FROM posts ORDER BY likes_Post DESC";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output de cada row de data
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
        $comentarios = $row['comentarios_Post'];


    echo "
    <section class='container__post'>
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
                    <p class='container__post__conteudo__data' id='container__post__conteudo__data'>" . $data_Post . "</p>
                    <p class='container__post__conteudo__texto' id='container__post__conteudo__texto'>" . $texto_Post . "</p>
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
                            <p>" . $comentarios . "</p>
                        </li>
                    </ul>
                </div>
            </section>";
          }
  } else {
    echo "<p>Sem posts...</p>";
  }
      ?>
    </div>
  </main>
  <script src="../manipulacao/manuLateral.js"></script>
  <script src="../manipulacao/modoEscuroClaro.js"></script>
</body>

</html>