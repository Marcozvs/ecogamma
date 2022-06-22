<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ecogamma | Chat</title>
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

    if ($estado == 'ac') {
      $fundo = 'ac.jpg';
    } elseif ($estado == 'al') {
      $fundo = 'al.jpg';
    } elseif ($estado == 'am') {
      $fundo = 'am.jpeg';
    } elseif ($estado == 'ap') {
      $fundo = 'ap.jpg';
    } elseif ($estado == 'ba') {
      $fundo = 'ba.jpg';
    } elseif ($estado == 'ce') {
      $fundo = 'ce.jpg';
    } elseif ($estado == 'df') {
      $fundo = 'df.jpg';
    } elseif ($estado == 'es') {
      $fundo = 'es.png';
    } elseif ($estado == 'go') {
      $fundo = 'go.jpg';
    } elseif ($estado == 'ma') {
      $fundo = 'ma.jpg';
    } elseif ($estado == 'mt') {
      $fundo = 'mt.jpg';
    } elseif ($estado == 'ms') {
      $fundo = 'ms.jpg';
    } elseif ($estado == 'mg') {
      $fundo = 'mg.jpg';
    } elseif ($estado == 'pa') {
      $fundo = 'pa.jpg';
    } elseif ($estado == 'pb') {
      $fundo = 'pb.jpg';
    } elseif ($estado == 'pr') {
      $fundo = 'pr.jpg';
    } elseif ($estado == 'pe') {
      $fundo = 'pe.jpg';
    } elseif ($estado == 'pi') {
      $fundo = 'pi.jpg';
    } elseif ($estado == 'rj') {
      $fundo = 'rj.jpg';
    } elseif ($estado == 'rn') {
      $fundo = 'rn.jpg';
    } elseif ($estado == 'ro') {
      $fundo = 'ro.jpg';
    } elseif ($estado == 'rs') {
      $fundo = 'rr.jpg';
    } elseif ($estado == 'rr') {
      $fundo = 'rr.jpg';
    } elseif ($estado == 'sc') {
      $fundo = 'sc.jpg';
    } elseif ($estado == 'se') {
      $fundo = 'se.jpg';
    } elseif ($estado == 'sp') {
      $fundo = 'sp.jpg';
    } elseif ($estado == 'to') {
      $fundo = 'to.jpg';
    }

    echo "
    <div class='container'>
      <div class='container__perfil'>
        <div class='container__perfil__capa'>
          <img src='../imagens/fundos/" . $fundo . "' alt='Fundo do perfil' class='container__perfil__capa__imagem'>
        </div>
        <div class='container__perfil__foto'>
          <img src='../imagens/" . $foto . "' alt='Fundo do perfil' class='container__perfil__foto__imagem'>
        </div>
        <div class='container__perfil__dados'>
          <ul class='container__perfil__dados__lista'>
            <li class='container__perfil__dados__lista__item'>
              <p>Nome:</p>
              <p>" . $nome . " " . $sobrenome . "</p>
            </li>
            <li class='container__perfil__dados__lista__item'>
              <p>Cargo:</p>
              <p>" . $profissao . "</p>
            </li>
            <li class='container__perfil__dados__lista__item'>
              <p>Descrição:</p>
              <p>" . $descricao . "</p>
            </li>
            <li class='container__perfil__dados__lista__item'>
              <p>Amigos:</p>
              <p>" . $amigos . "</p>
            </li>
          </ul>
        </div>
      </div>";
       ?>
      <section id="postsPerfil">
<?php
      $selecionaUserInfo = "SELECT * FROM posts WHERE id = '$id' ORDER BY id_Post DESC";

      $result = mysqli_query($conn, $selecionaUserInfo);

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
          $comentarios = $row["comentarios_Post"];


// AQUI FICA OS POSTS DO USUÁRIO
          echo "
          <section class='container__post--perfil' id='post' data-anime='left'>
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
                    
                    <form action='./feed.php' id='likeForm' method='POST'>
                        <input type='checkbox' name='like' value='True' id='checkbox__curtir'>
                        <input type='submit' value = '" . $id_Post . "' name='enviaLike' onclick='curtir()' id='btn__funcao__curtir'>
                        <span class='material-symbols-outlined container__menu__icone' id='btn__curtir'>&#xe87d;</span>
                    </form>
                        <p id='valor__curtir'>" . $likesP . "</p>
                    
                    <li class='container__post__interacoes__lista__item' onclick='comentar()'>
                        <input type='submit' value = 'comentar' name='comentar' onclick='comentar()' id='btn__funcao__comentar'>
                        <input type='checkbox' name='comentar' id='checkbox__comentar'>
                        <span class='material-symbols-outlined container__menu__icone' id='btn__comentar'>&#xe0b9;</span>
                        <p id='valor__comentar'>" . $comentarios . "</p>
                    </li>
                    <li class='container__post__interacoes__lista__item' onclick='compartilhar()'>
                        <span class='material-symbols-outlined container__menu__icone'>&#xe163;</span>
                        <input type='text' id='btn-compartilhar'value='" . $_SERVER['PHP_SELF'] . "?" . $id_Post . "'>
                    </li>
                    <li class='container__post__interacoes__lista__item' onclick='salvar()'>
                        <span class='material-symbols-outlined container__menu__icone'>&#xe866;</span>
                        <input type='text' id='btn-salvar'value='" . $_SERVER['PHP_SELF'] . "?" . $id_Post . "'>
                    </li>
                </ul>
                <div id='caixa__comentario'>
                <form action='./feed.php?id_Post_Comentario=" . $id_Post . "' method='POST' id='form__comentario'>
                    <textarea name='texto__comentario' id='texto__comentario' placeholder='Insira seu comentário aqui' wrap='hard'></textarea>
                    <input type='submit' name='submit__comentario' id='submit__comentario' class='botao__principal'>
                </form>
                </div>
              </div>
            </section>
          ";
        }
      } else {
        echo "Sem posts ainda...";
      }
      ?>
      </section>
  </main>
  <script src="../manipulacao/manuLateral.js"></script>
  <script src="../manipulacao/rolagem.js"></script>
</body>

</html>