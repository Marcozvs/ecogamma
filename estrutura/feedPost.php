<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php
    if (isset($_POST['texto'])) {
        include './administracao/sessao.php';
        $textoP = $_POST['texto'];
        $imagemP = $_POST['imagem'];
        echo "
    <section class='container__post'>
                <div class='container__post__perfil'>
                    <div class='container__post__perfil__foto'>
                        <img src='../imagens/leandro.jpg' alt='Imagem do Perfil'>
                    </div>
                    <div class='container__post__perfil__dados'>
                        <p class='container__post__perfil__dados__nome nome__perfil'>" . $nome . " " . $sobrenome . "</p>
                        <p class='container__post__perfil__dados__cargo cargo__perfil'>" . $profissao . "</p>
                    </div>
                </div>
                <div class='container__post__conteudo'>
                    <p class='container__post__conteudo__texto'>" . $textoP . "</p>
                    <img src='../imagens/feed_imagem.jpg' alt='imagem do conteúdo' class='container__post__conteudo__imagem'>
                </div>
                <div class='container__post__interacoes'>
                    <ul class='container__post__interacoes__lista'>
                        <li class='container__post__interacoes__lista__item'>
                            <span class='material-symbols-outlined container__menu__icone span--azul'>&#xe87d;</span>
                            <p>32</p>
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
                <div class='container__post__comentarios'>
                    <h2>Comentários</h2>
                    <div class='container__post__perfil'>
                        <div class='container__post__perfil__foto'>
                            <img src='../imagens/leandro.jpg' alt='Imagem do Perfil'>
                        </div>
                        <div class='container__post__perfil__dados'>
                            <p class='container__post__perfil__dados__nome nome__perfil'>Leandro</p>
                            <p class='container__post__perfil__dados__cargo cargo__perfil'>Engenheiro de Software</p>
                        </div>
                    </div>
                    <div class='container__post__conteudo'>
                        <p class='container__post__conteudo__texto'>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos dolor ab qui temporibus, cupiditate animi nesciunt praesentium dolorum soluta quas nihil vitae ullam facilis ut iusto pariatur perspiciatis at explicabo?</p>
                        <img src='../imagens/feed_imagem.jpg' alt='imagem do conteúdo' class='container__post__conteudo__imagem'>
                    </div>
                    <div class='container__post__interacoes'>
                        <ul class='container__post__interacoes__lista'>
                            <li class='container__post__interacoes__lista__item'>
                                <span class='material-symbols-outlined container__menu__icone span--azul'>&#xe87d;</span>
                                <p>32</p>
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
                </div>
            </section>";
    }
    ?>
</body>

</html>