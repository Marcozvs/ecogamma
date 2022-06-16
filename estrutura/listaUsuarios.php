<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banir</title>
    <?php include './base/linksGlobais.php' ?>
</head>

<body>
    <?php
    include './administracao/sessao.php';
    if ($_SESSION['logado'] == 0) {
        include 'naoLogado.php';
        die();
    } elseif ($token == 0) {
        echo "
        <main>
            <div class='container'>
                <div class='container__logout'><h1>Sem permissão!</h1>
                    <a href='feed.php'>
                        <button class='botao__principal'>
                            Inicio
                        </button>
                    </a>
                </div>
            </div>
        </main>";
        die();
        exit();
    }
    include './administracao/conexao.php';

    $fazLista = "SELECT id, token, nome, sobrenome, email, dataN, genero, numero, estado, cidade, profissao, mdEscuro,
    foto, descricao, amigos FROM usuarios";
    $resultadoSelectLista = mysqli_query($conn, $fazLista);

    if (mysqli_num_rows($resultadoSelectLista) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($resultadoSelectLista)) {

            $idL = $row["id"];
            $tokenL = $row["token"];
            $nomeL = $row["nome"];
            $sobrenomeL = $row["sobrenome"];
            $emailL = $row["email"];
            $dataNL = $row["dataN"];
            $generoL = $row["genero"];
            $numeroL = $row["numero"];
            $estadoL = $row["estado"];
            $cidadeL = $row["cidade"];
            $fotoL = $row["foto"];
            $profissaoL = $row["profissao"];
            $mdEscuroL = $row["mdEscuro"];
            if (empty($foto)) {
                $foto = 'perfil_default.svg';
            }
            $descricao = $row["descricao"];
            if (empty($descricao)) {
                $descricao = 'Eco é agro, Eco é tec, Eco é tudo!';
            }
            $amigos = $row["amigos"];
            echo "<section class='container__post'>
             <div class='container__post__perfil'>
                 <div class='container__post__perfil__foto'>
                     <img src='../imagens/" . $fotoL . "' alt='Imagem do Perfil'>
                 </div>
                 <div class='container__post__perfil__dados'>
                     <p class='container__post__perfil__dados__nome nome__perfil'>" . $nomeL . " " . $sobrenomeL . " " . $idL . "</p>
                     <p class='container__post__perfil__dados__cargo cargo__perfil'>" . $profissaoL . "</p>
                     <p>Token: " . $tokenL . "</p>
                     <p>Modo Escuro: " . $mdEscuroL . "</p>
                     <p>Email: " . $emailL . "</p>
                     <p>Data de Nascimento: " . $dataNL . "</p>
                     <p>Gênero: " . $generoL . "</p>
                     <p>Cell: " . $numeroL . "</p>
                     <p>Estado: " . $estadoL . "</p>
                     <p>Cidade: " . $cidadeL . "</p>
                 </div>
             </div>
         </section>";
        }
    } else {
        echo "0 results";
    } 

    ?>
    </form>
</body>

</html>