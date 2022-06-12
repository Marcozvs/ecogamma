<!DOCTYPE html>
<html lang="pt-br" id="html">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecogamma | Feed</title>
    <?php include './base/linksGlobais.php' ?>
</head>

<body>
    <?php
    include_once './administracao/sessao.php';
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
            </div class="botao__diaNoite">
            <button onclick="modoNoite()" id="botao__noite"><span class="material-symbols-outlined container__menu__icone span--azul">&#xf03d;</span></button>
            <button onclick="modoDia()" id="botao__dia"><span class="material-symbols-outlined container__menu__icone span--azul">&#xe518;</span></button>
            <div id="container__menu" onclick="menuLateralInternoOpen()">
                <span class="material-symbols-outlined container__menu__icone span--azul">&#xe5d2;</span>
            </div>
        </div>
    </header>
    <section id="menuLateral__interno">
        <div class="container" id="menuLateral__InternoNoturno">
            <div class="container__menu" onclick="menuLateralInternoClose()">
                <span class="material-symbols-outlined container__menu__icone span--verde">&#xe5d2;</span>
            </div>
            <ul class="container__lista">
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
    </section>
    <main>
        <div class="container">
            <h1>Postagem</h1>
            <section class="container__postagem">
                <form action="./feed.php" class="container__postagem__formulario" method="POST">
                    <textarea cols="15" rows="4" placeholder="Escreva seu post aqui..." maxlength="200" minlength="1" id="texto" name="texto"></textarea>
                    <div class="container__postagem__formulario__botoes">
                        <label for="imagem" class="container__postagem__formulario__botoes__label label-botao" id="upload">Enviar imagem</label>
                        <input type="file" accept="image/*" id="imagem" name="imagem" class="container__postagem__formulario__botoes__input">
                        <input type="submit" value="Postar" class="botao__principal" name="submit" id="submit">
                    </div>
                </form>
                <hr>
            </section>
            <?php
            if (isset($_POST['texto'])) {


                // $idP = $id;
                // $fotoP = $foto;
                // $nomeP = $nome;
                // $sobrenomeP = $sobrenome;
                // $profissaoP = $profissao;
                $data_Post = date("Y-m-d");
                $texto_Post = $_POST['texto'];
                $imagem_Post = $_POST['imagem'];
                $likes = 0;

                include './administracao/conexao.php';

                //INSERINDO DADOS 

                $sql1 = "INSERT INTO posts (id, foto, nome, sobrenome, profissao, data_Post, texto_Post, imagem_Post, likes_Post)
                VALUES ('$id', '$foto', '$nome', '$sobrenome', '$profissao', '$data_Post', '$texto_Post', '$imagem_Post', '$likes')";

                if (mysqli_query($conn, $sql1)) {
                    echo "New record created successfully";
                } else {
                    echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
                }

                //PUXANDO DADOS

            }
            $sql = "SELECT * FROM posts ORDER BY id_Post DESC";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
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

                    echo "
    <section class='container__post'>
                <div class='container__post__perfil'>
                    <div class='container__post__perfil__foto'>
                        <img src='../imagens/perfil_default.svg' alt='Imagem do Perfil'>
                    </div>
                    <div class='container__post__perfil__dados'>
                        <a href='./perfilUser.php?user=" . $idP . "'<p class='container__post__perfil__dados__nome nome__perfil'>" . $nomeP . " " . $sobrenomeP . "</p></a>
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
                        <li class='container__post__interacoes__lista__item' onclick='curtir()'>
                        <form action='./feedTeste.php' method='GET'> 
                            <input type='submit' value = '" . $id_Post . "' name='like' id='btn-curtir'>
                        </form>
                            <p>" . $likesP . "</p>
                        </li>
                        <li class='container__post__interacoes__lista__item' onclick='comentar()'>
                            <span class='material-symbols-outlined container__menu__icone' id='btn-comentar'>&#xe0b9;</span>
                            <p>32</p>
                        </li>
                        <li class='container__post__interacoes__lista__item' onclick='compartilhar()'>
                            <span class='material-symbols-outlined container__menu__icone' id='btn-compartilhar'>&#xe163;</span>
                            <p>32</p>
                        </li>
                    </ul>
                </div>
            </section>";
                }
            } else {
                echo "0 Posts";
            }

                if (isset($_GET['like'])) {
                    $soma = 1;
                    $idP = $_GET['like'];
                    $sql3 = "UPDATE posts SET likes_Post = likes_Post + $soma WHERE id_Post = $idP";
    
                    if (mysqli_query($conn, $sql3)) {
                        echo "<h1>Record updated successfully</h1>";
                    } else {
                        echo "<h1>Error updating record: </h1>" . mysqli_error($conn);
                    }
                }

            
            ?>

        </div>
    </main>

    <script src="../manipulacao/manuLateral.js"></script>
    <script src="../manipulacao/modoTela.js"></script>
    <script src="../manipulacao/curtir.js"></script>
    <script>
        function comentar() {
            var btnComentar = document.getElementById("btn-comentar");
            btnComentar.classList.toggle("btn-comentado-<?php echo $idP; ?>");
        }
    </script>
    <script src="../manipulacao/compartilhar.js"></script>
</body>

</html>