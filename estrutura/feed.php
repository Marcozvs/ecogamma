<!DOCTYPE html>
<html lang="pt-br" id="html">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecogamma | Feed</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="../manipulacao/sweetalert.js"></script>
    <?php include './base/linksGlobais.php' ?>
    <style>
        .botao__principal {
            margin: 0;
        }
    </style>
</head>

<body>
    <?php
    include_once './administracao/sessao.php';
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
                <form action="./feed.php" class="container__postagem__formulario" method="POST" enctype="multipart/form-data">
                    <textarea cols="15" rows="4" placeholder="Escreva seu post aqui..." maxlength="200" minlength="1" id="texto" name="texto"></textarea>
                    <div class="container__postagem__formulario__botoes">
                        <label for="imagem" class="container__postagem__formulario__botoes__label label-botao" id="upload">Enviar imagem</label>
                        <input type="file" id="imagem" name="imagem" class="container__postagem__formulario__botoes__input" accept="image/*">
                        <input type="hidden" name="MAX_FILE_SIZE" value="99999999" />
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
                // echo "<h1>" . $teste . "</h1>"; // Aqui é para testar se o submit tá indo, ele pega o valor do submit que não é importante agora...
                $verSeCurtiuAlgumPost = "SELECT id_Elemento, id_User FROM curtidas WHERE id_Elemento = '$id_PostC' AND id_User = $id";
                $verifica = mysqli_query($conn, $verSeCurtiuAlgumPost);
                // echo "<h1>" . $verifica . "</h1>";
                $verifica = mysqli_num_rows($verifica);
                // echo "<h1>" . $verifica . "</h1>";

                if (empty($verifica)) {
                    // se a curtida não existir:
                    $insereCurtidaLog = "INSERT INTO curtidas (id_Elemento, id_User) VALUES ('$id_PostC','$id')"; // Ele vai inserir na tabela curtidas um log dizendo que o usuário curtiu tal coisa
                    $insereCurtida = "UPDATE posts SET likes_Post = likes_Post + '$soma' WHERE id_Post = '$id_PostC'";
                    if (mysqli_query($conn, $insereCurtidaLog)) {
                        // echo "<h1>Curtiu em logs</h1>";
                        if (mysqli_query($conn, $insereCurtida)) {
                            // echo "<h1>inserido em posts</h1>";
                        } else {
                            // echo "<h1>Error no curtir: </h1>" . mysqli_error($conn);
                        }
                    }
                } elseif ($verifica === 1) { //se a curtida existir vai cair aqui, provavelmente...

                    $deletaCurtida = "DELETE FROM curtidas WHERE id_Elemento = '$id_PostC'";

                    $diminuiCurtida = "UPDATE posts SET likes_Post = likes_Post - '$soma' WHERE id_Post = '$id_PostC'";

                    if (mysqli_query($conn, $deletaCurtida)) {
                        // echo "<h1>descoisado de curtidas</h1>";
                    } else {
                        // echo "<h1>Erro no delete: </h1>" . mysqli_error($conn);
                    }

                    if (mysqli_query($conn, $diminuiCurtida)) {
                        // echo "<h1>descoisado de posts</h1>";
                    } else {
                        // echo "<h1>Erro no diminuir: </h1>" . mysqli_error($conn);
                    }
                }
            }

            //Aqui é pra comentar
            if (isset($_GET['id_Post_Comentario'])) {
                # code...
                $id_Post_Comentario = $_GET['id_Post_Comentario'];
                $id_User_Comentario = $id;
                $data_Comentario = date("Y-m-d");
                $nome_User_Comentario = $nome;
                $sobrenome_User_Comentario = $sobrenome;
                $profissao_User_Comentario = $profissao;
                $texto_Comentario = $_POST['texto__comentario'];
                $likes_Comentario = 0;
                $soma = 1;

                $insereComentarios = "INSERT INTO comentarios (id_Post, id_User, data_Comentario, nome_User, sobrenome_User, profissao_User, texto_Comentario, likes_Comentario) VALUES ('$id_Post_Comentario','$id_User_Comentario','$data_Comentario','$nome_User_Comentario','$sobrenome_User_Comentario','$profissao_User_Comentario','$texto_Comentario','$likes_Comentario')";

                $updateValor = "UPDATE posts SET comentarios_Post = comentarios_Post + '$soma' WHERE id_Post = '$id_Post_Comentario'";
                if (mysqli_query($conn, $insereComentarios)) {
                    // echo "<h1>Comentou irmão!</h1>";
                    if (mysqli_query($conn, $updateValor)) {
                        // echo "<h1>Comentou irmão!</h1>";
                    } else {
                        // echo "Erro né pae: " . $updateValor . "<br>" . mysqli_error($conn);
                    }
                } else {
                    // echo "Erro né pae: " . $insereComentarios . "<br>" . mysqli_error($conn);
                }
            } //fim if do post de comentarios


            //Aqui é pra postar
            if (isset($_POST['texto'])) {


                // $idP = $id;
                // $fotoP = $foto;
                // $nomeP = $nome;
                // $sobrenomeP = $sobrenome;
                // $profissaoP = $profissao;
                $imagem_Post = $novo_nome;
                $data_Post = date("Y-m-d");
                $texto_Post = $_POST['texto'];
                $likes = 0;

                //INSERINDO DADOS 

                $sql1 = "INSERT INTO posts (id, foto, nome, sobrenome, profissao, data_Post, texto_Post, imagem_Post, likes_Post)
                VALUES ('$id', '$foto', '$nome', '$sobrenome', '$profissao', '$data_Post', '$texto_Post', '$imagem_Post', '$likes')";

                if (mysqli_query($conn, $sql1)) {
                    // echo "New record created successfully";
                } else {
                    // echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
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
                    $comentarios = $row["comentarios_Post"];

                    echo "
                        <br>
                        <section class='container__post' id='post' data-anime='left'>
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
                                <img src='../upload/" . $imagem_Post . "' class='container__post__conteudo__imagem'>
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
                                        <input type='text' id='btn-compartilhar'value=''>
                                    </li>
                                    <li class='container__post__interacoes__lista__item' onclick='salvar()'>
                                        <span class='material-symbols-outlined container__menu__icone'>&#xe866;</span>
                                        <input type='text' id='btn-salvar'value=''>
                                    </li>
                                </ul>
                                <div id='caixa__comentario'>
                                <form action='./feed.php?id_Post_Comentario=" . $id_Post . "' method='POST' id='form__comentario'>
                                    <textarea name='texto__comentario' id='texto__comentario' placeholder='Insira seu comentário aqui' wrap='hard'></textarea>
                                    <input type='submit' name='submit__comentario' id='submit__comentario' class='botao__principal'>
                                </form>
                                </div>
                            </div>
                            <h3>Comentários</h3>";
                    //aqui é pra carregar os comentários
                    $comentarioSeleciona = "SELECT * FROM comentarios WHERE id_Post = '$id_Post' ORDER BY id_Comentario DESC";
                    $resultComentario = mysqli_query($conn, $comentarioSeleciona);

                    if (mysqli_num_rows($resultComentario) > 0) {

                        while ($row = mysqli_fetch_assoc($resultComentario)) {
                            $id_Post_Comentario = $row["id_Post"];
                            $id_User_Comentario = $row["id_User"];
                            $data_Comentario = $row["data_Comentario"];
                            $nome_User_Comentario = $row["nome_User"];
                            $sobrenome_User_Comentario = $row["sobrenome_User"];
                            $profissao_User_Comentario = $row["profissao_User"];
                            $texto_Comentario = $row["texto_Comentario"];
                            $likes_Comentario = $row["likes_Comentario"];

                            echo "<br>
                                <div class='container__comentario' data-anime='left'>
                                    <div class='container__post__perfil'>
                                        <div class='container__post__perfil__foto'>
                                            <img src='../imagens/perfil_default.svg' alt='Imagem do Perfil'>
                                        </div>
                                        <div class='container__post__perfil__dados'>
                                            <a href='./perfilUser.php?user=" . $idP . "'<p class='container__post__perfil__dados__nome nome__perfil'>" . $nome_User_Comentario . " " . $sobrenome_User_Comentario . "</p></a>
                                            <p class='container__post__perfil__dados__cargo cargo__perfil'>" . $profissao_User_Comentario . "</p>
                                        </div>
                                    </div>
                                    <div>
                                        <p class='data__post'><span class='material-symbols-outlined container__menu__icone span--azul'>&#xe425;</span>" . $data_Comentario . "</p>
                                    </div>
                                    <br>
                                    <div>
                                        <p>" . $texto_Comentario . "</p>
                                    </div>
                                </div>";
                            /*
                             echo "<section><br><p>Só estilizar essa bagaça, e não sei se tu viu mas, o botãozinho de comentário só tá funcionando no primeiro post e também tem que... tirar o efeito de like do comentário, ele tá aumentando o número quando a gente clica no botão pra aparecer o input</p>"
                             . $id_Post_Comentario . "<br>" . $id_User_Comentario . "<br>"
                             . $data_Comentario . "<br>" . $nome_User_Comentario . "<br>"
                             . $sobrenome_User_Comentario . "<br>" . $profissao_User_Comentario . "<br>"
                             . $texto_Comentario . "<br>" . $likes_Comentario . "</section>";
                            */
                        } //fim do while do if comentarios

                        //fim do if comentarios
                    } else { // else do if comentarios
                        echo "sem comentários";
                    }
                    echo
                    "</section>";
                } // fim do while posts

                // fim do if posts  
            } else { //else do if posts
                echo "0 Posts";
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
    <!-- umas script de js -->
    <script src="../manipulacao/manuLateral.js"></script>
    <script src="../manipulacao/modoEscuroClaro.js"></script>
    <script src="../manipulacao/curtirdoPHP.js"></script>
    <script src="../manipulacao/comentar.js"></script>
    <script type="text/javascript">
        function compartilhar() {
            document.getElementById("btn-compartilhar").select();
            document.execCommand("copy");
            Swal.fire({
                icon: 'success',
                title: 'Link copiado!',
                showConfirmButton: false,
                timer: 1500
            })
        }

        function salvar() {
            Swal.fire({
                icon: 'success',
                title: 'Post Salvo!',
                showConfirmButton: false,
                timer: 1500
            })
        }
    </script>
    <script src="../manipulacao/rolagem.js"></script>
</body>

</html>