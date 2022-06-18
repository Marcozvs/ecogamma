<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ecogamma | Eventos</title>
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
          <li class="container__lista__item-ativo"><span class="material-symbols-outlined container__lista__item__icone-ativo  icone-alternativo">&#xe878;</span>Eventos</li>
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
  </section>
  <main>
    <div class="container">
      <?php
      //AQUI É PARA OS ADM POSTAREM
      if ($token == 1) {
                echo"
        <section class='container__postagem'>
            <form action='./evento.php' class='container__postagem__formulario' method='POST'>
              <input type='text' placeholder='Insira o título...' maxlength='150' minlength='1' required id='titulo' name='titulo'>
              <input type='text' placeholder='Insira o link...' maxlength='150' minlength='1' id='link' name='link'>
                <textarea cols='15' rows='4' placeholder='Escreva seu post aqui...' maxlength='200' minlength='1' id='texto' name='texto' required></textarea>
                <div class='container__postagem__formulario__botoes'>
                    <label for='imagem' class='container__postagem__formulario__botoes__label label-botao' id='upload'>Enviar imagem</label>
                    <input type='file' accept='image/*' id='imagem' name='imagem' class='container__postagem__formulario__botoes__input'>
                    <input type='submit' value='Postar' class='botao__principal' name='submit' id='submit'>
                </div>
            </form>
            <hr>
        </section>";
        if (isset($_POST['texto']) && isset($_POST['titulo'])) {

          $data_Evento = date("Y-m-d");
          $titulo_Evento = $_POST['titulo'];
          $link_Evento = $_POST['link'];
          $texto_Evento = $_POST['texto'];
          if (isset($_POST['imagem'])) {
            $imagem_Evento = $_POST['imagem'];
          } else {
            $imagem_Evento = "naoTem";
          }
          $likes = 0;

          include './administracao/conexao.php';

          //INSERINDO DADOS 

          $insereEvento = "INSERT INTO eventos (id, data_Evento, titulo_Evento, texto_Evento, imagem_Evento, link_Evento, likes_Evento)
            VALUES ('$id', '$data_Evento', '$titulo_Evento', '$texto_Evento', '$imagem_Evento', '$link_Evento', '$likes')";

          if (mysqli_query($conn, $insereEvento)) {
            // echo "Evento inserido";
          } else {
            // echo "Error: " . $insereEvento . "<br>" . mysqli_error($conn);
          }

        }
      }

      $selecionaEventos = "SELECT * FROM eventos ORDER BY id_Evento DESC";
      $result = mysqli_query($conn, $selecionaEventos);

      if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while ($row = mysqli_fetch_assoc($result)) {

              $id_Evento = $row["id_Evento"];
              $id_User = $row["id"];
              $data_Evento = $row["data_Evento"];
              $titulo_Evento = $row["titulo_Evento"];
              $texto_Evento = $row["texto_Evento"];
              $imagem_Evento = $row["imagem_Evento"];
              $link_Evento = $row["link_Evento"];
              $likes_Evento = $row["likes_Evento"];

            echo "<section class='container__post'>
            <h2>" . $titulo_Evento . "</h2>
            <div class='container__post__conteudo'>
              <p class='container__post__conteudo__texto'>" . $texto_Evento . "</p>
              <img src='../imagens/feed_imagem.jpg' alt='imagem do conteúdo' class='container__post__conteudo__imagem'>
              <p class='container__post__conteudo__texto'><a href='" . $link_Evento . "'>Ir para o evento</a></p>
            </div>
            <div class='container__post__interacoes'>
              <ul class='container__post__interacoes__lista'>
                <li class='container__post__interacoes__lista__item'>
                  <span class='material-symbols-outlined container__menu__icone span--azul'>&#xe87d;</span>
                  <p>" . $likes_Evento . "</p>
                </li>
                <li class='container__post__interacoes__lista__item'>
                  <span class='material-symbols-outlined container__menu__icone span--azul'>&#xe163;</span>
                  <p>32</p>
                </li>
              </ul>
            </div>
          </section>";
          }
        }
      ?>
      <h1>Evento</h1>
      
    </div>
  </main>
  <script src="../manipulacao/manuLateral.js"></script>
</body>

</html>