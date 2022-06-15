<!DOCTYPE html>
<html lang="pt-br" id="html">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecogamma | Feed</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
        <div class="container" id="menuLateral__Interno__conteudo">
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
            // LIKEZINHO

            if (isset($_POST['enviaLike']) && isset($_POST['like'])) {
                $soma = 1;
                $teste = $_POST['like']; //esse é o checkbox
                $id_PostC = $_POST['enviaLike']; // Id do post
                echo "<h1>" . $teste . "</h1>"; // Aqui é para testar se o submit tá indo, ele pega o valor do submit que não é importante agora...
                $verSeCurtiuAlgumPost = "SELECT id_Elemento, id_User FROM curtidas WHERE id_Elemento = '$id_PostC' AND id_User = $id";
                // echo "<h1>" . $verSeCurtiuAlgumPost . "</h1>";
                $verifica = mysqli_query($conn, $verSeCurtiuAlgumPost);
                // echo "<h1>" . $verifica . "</h1>";
                $verifica = mysqli_num_rows($verifica);
                echo "<h1>" . $verifica . "</h1>";

                if (empty($verifica)) {
                    // se a curtida não existir:
                    $insereCurtidaLog = "INSERT INTO curtidas (id_Elemento, id_User) VALUES ('$id_PostC','$id')"; // Ele vai inserir na tabela curtidas um log dizendo que o usuário curtiu tal coisa
                    $insereCurtida = "UPDATE posts SET likes_Post = likes_Post + '$soma' WHERE id_Post = '$id_PostC'";
                    if (mysqli_query($conn, $insereCurtidaLog)) {
                        echo "<h1>Curtiu em logs</h1>";
                        if (mysqli_query($conn, $insereCurtida)) {
                            echo "<h1>inserido em posts</h1>";
                            echo "<h1>pnc do marcos</h1>";
                        } else {
                            echo "<h1>Error no curtir: </h1>" . mysqli_error($conn);
                        }
                    }
                } elseif ($verifica === 1) { //se a curtida existir vai cair aqui, provavelmente...
                    
                    $deletaCurtida = "DELETE FROM curtidas WHERE id_Elemento = '$id_PostC'";

                    $diminuiCurtida = "UPDATE posts SET likes_Post = likes_Post - '$soma' WHERE id_Post = '$id_PostC'";

                    if (mysqli_query($conn, $deletaCurtida)) {
                        echo "<h1>descoisado de curtidas</h1>";
                    } else {
                        echo "<h1>Erro no delete: </h1>" . mysqli_error($conn);
                    }

                    if (mysqli_query($conn, $diminuiCurtida)) {
                        echo "<h1>descoisado de posts</h1>";
                    } else {
                        echo "<h1>Erro no diminuir: </h1>" . mysqli_error($conn);
                    }
                }
            }

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
    <section class='container__post' id='post'>
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
                            <p id='valor__comentar'>0</p>
                        </li>
                        <li class='container__post__interacoes__lista__item' onclick='compartilhar()'>
                            <span class='material-symbols-outlined container__menu__icone'>&#xe163;</span>
                            <input type='text' id='btn-compartilhar'value='" . $_SERVER['PHP_SELF'] . "?" . $id_Post . "'>
                        </li>
                    </ul>
                    <div id='caixa__comentario'>
                        <input type='text' name='texto__comentario' id='texto__comentario' placeholder='Insira seu comentário aqui'>
                        <input type='submit' name='submit__comentario' id='submit__comentario' class='botao__principal'>
                    </div>

                </div>
            </section>";
                }
            } else {
                echo "0 Posts";
            }
            ?>

        </div>
    </main>

    <script src="../manipulacao/manuLateral.js"></script>
    <script src="../manipulacao/modoEscuroClaro.js"></script>
    <script src="../manipulacao/curtir.js"></script>
    <script src="../manipulacao/comentar.js"></script>
    <script type="text/javascript">
        function compartilhar() {
            document.getElementById("btn-compartilhar").select();
            document.execCommand("copy");
            swal("Link Copiado!", "Compartilhe com seus amigos!", "success");
        }
    </script>
</body>

</html>