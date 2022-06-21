<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecogamma | Chat</title>
    <?php include './base/linksGlobais.php' ?>
</head>

<body id="body">
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
                <span class="material-symbols-outlined container__menu__icone span--verde">&#xe5d2;</span>
            </div>
            <ul class="container__lista">
                <a href="./feed.php">
                    <li class="container__lista__item"><span class="material-symbols-outlined container__lista__item__icone icone-alternativo container__lista__item__icone">&#xe761;</span>Feed</li>
                </a>
                <a href="./notificacao.php">
                    <li class="container__lista__item-ativo"><span class="material-symbols-outlined container__lista__item__icone-ativo  icone-alternativo">&#xe7f4;</span>Notificação</li>
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
            <h1>Notificações</h1>
            <?php
            $verdadeiro = 1;
            $falso = 0;
            $selecionaPendentes = "SELECT * FROM amigos WHERE id_UserAcc = $id AND pendente = $verdadeiro ORDER BY id_Amizade DESC";
            $resultAmizades = mysqli_query($conn, $selecionaPendentes);

            if (mysqli_num_rows($resultAmizades) > 0) {

                while ($row = mysqli_fetch_assoc($resultAmizades)) {
                    $id_Amizade = $row['id_Amizade'];
                    $id_UserAcc = $row['id_UserAcc'];
                    $id_UserAsk = $row['id_UserAsk'];
                } //fim do while do if amizade

                $selecionaQuemPediu = "SELECT * FROM usuarios WHERE id = $id_UserAsk";
                $quemPediu = mysqli_query($conn, $selecionaQuemPediu);

                if (mysqli_num_rows($quemPediu) > 0) {

                    while ($row = mysqli_fetch_assoc($quemPediu)) {
                        $foto_Ask = $row['foto'];
                        $nome_Ask = $row["nome"];
                        $sobrenome_Ask = $row["sobrenome"];
                        $profissao_Ask = $row["profissao"];

                        echo "
                        <section class='container__post'>
                        <form action='./aceitaAmizade.php' method='POST'>
                        <input type='hidden' value='" . $id_Amizade . "' name='id_Amizade'>
                        <input type='hidden' value='naoAceito' name='naoAceito'>
                        <input type='hidden' value='" . $id_UserAcc . "' name='idAcc'>
                        <input type='submit' class='botao__principal' id='buttonDel' name='naoAceito' value='Recusar '>
                        </form>
                            <div class='container__post__perfil'>
                                <div class='container__post__perfil__foto'>
                                    <img src='../imagens/" . $foto_Ask . "' alt='Imagem do Perfil'>
                                </div>
                                <div class='container__post__perfil__dados'>
                                    <p class='container__post__perfil__dados__nome nome__perfil'>" . $nome_Ask . " " . $sobrenome_Ask . "</p>
                                    <p class='container__post__perfil__dados__cargo cargo__perfil'>" . $profissao_Ask . "</p>
                                </div>
                            </div>

                            <form action='./aceitaAmizade.php' method='POST'>
                            <input type='hidden' value='" . $id_Amizade . "' name='id_Amizade'>
                            <input type='hidden' value='" . $id_UserAcc . "' name='idAcc'>
                            <input type='submit' class='botao__principal' id='buttonAcc' name='Aceito' value='Aceitar'>
                            </form>

                        </section>";
                    }
                }
                //fim do if amizade
            } else { // else do if amizade
                echo "sem pedidos de amizade";
            }
            ?>

        </div>
    </main>
    <script src="../manipulacao/manuLateral.js"></script>
    <script src="../manipulacao/modoEscuroClaro.js"></script>
</body>

</html>