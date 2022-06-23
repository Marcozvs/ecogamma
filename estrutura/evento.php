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
  //Inserindo imagens no banco de dados

  $img = false;

  if (isset($_FILES['imagem'])) {

    $arquivo = $_FILES['imagem'];

    $extensao = strtolower(substr($_FILES['imagem']['name'], -4));
    $novo_nome = md5(time()) . $extensao;
    $diretorio = "../upload/";

    move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio . $novo_nome);

    /*
      $sql_code = "INSERT INTO posts (imagem_Post) VALUES('$novo_nome')";

      if(mysqli_query($conn, $sql_code))
          $msg = "Arquivo enviado com sucesso!";
      else
          $msg = "Falha ao enviar o arquivo.";
      */
  }
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
        echo "
        <section class='container__postagem' enctype='multipart/form-data'>
            <form action='./evento.php' class='container__postagem__formulario' method='POST'  style='display: flex; justify-content: space-around; height: 300px;'>
              <input type='text' placeholder='Insira o título...' maxlength='150' minlength='1' required id='titulo' name='titulo'>
              <input type='text' placeholder='Insira o link...' maxlength='150' minlength='1' id='link' name='link'>
                <textarea cols='15' rows='4' placeholder='Escreva seu post aqui...' maxlength='200' minlength='1' id='texto' name='texto' required></textarea>
                <div class='container__postagem__formulario__botoes'>
                    <label for='imagem' class='container__postagem__formulario__botoes__label label-botao' id='upload'>Enviar imagem</label>
                    <input type='file' id='imagem' name='imagem' class='container__postagem__formulario__botoes__input' accept='image/*'>
                    <input type='submit' value='Postar' class='botao__principal' name='submit' id='submit' style='position: relative; top: -9px'>
                </div>
            </form>
            <hr>
            <h1>Eventos</h1>
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
          </section>";
        }
      }
      ?>
      <section class="container__post">
        <h2>Comunidade Ecogamma Se Reune Para Plantar Árvores</h2>
        <div class="container__post__conteudo">
          <p class="container__post__conteudo__texto">As árvores são responsáveis por proteger os solos e nascentes da luz solar, realizar a manutenção do ar e da umidade, além de servirem como fonte de alimento e abrigo para diversas espécies de animais.</p>
          <video controls class="container__post__conteudo__imagem">
                        <source src="../videos/natureza.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
          <p class="container__post__conteudo__texto"><a href="https://forms.gle/RcBgXtz916hrzvDh6">Ir para o evento</a></p>
        </div>
      </section>


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