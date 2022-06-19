<?php
include '../estrutura/administracao/conexao.php';
include './administracao/sessao.php';

$id_Amizade = $_POST['id_Amizade'];
$soma = 1;

    if (isset($_POST['naoAceito'])) {
        $id_UserAcc = $_POST['idAcc'];
        $deletaAmizade = "DELETE FROM amigos WHERE id_Amizade = '$id_Amizade'";
        if (mysqli_query($conn, $deletaAmizade)) {
            echo ("Amizade recusada!");
            header('Location: ./notificacao.php');
        } else {
            echo ("<h1>Error ao deletar: </h1>" . mysqli_error($conn));
        }
    } else {
        $id_UserAcc = $_POST['idAcc'];
        $falso = 0;
        $aceitaAmizade = "UPDATE amigos SET pendente = '$falso' WHERE id_Amizade = '$id_Amizade'";
            if (mysqli_query($conn, $aceitaAmizade)) {
                echo ("<h1>Amizade aceita!</h1>");
                header('Location: ./notificacao.php');
            } else {
                echo ("<h1>Error ao aceitar: </h1>" . mysqli_error($conn));
            }
            $contaAmizade = "UPDATE usuarios SET amigos = amigos + '$soma' WHERE id = '$id_UserAcc'";
                if (mysqli_query($conn, $contaAmizade)) {
                    echo ("<h1>Amizade contada!</h1>");
                    header('Location: ./notificacao.php');
                } else {
                    echo ("<h1>Error ao contar: </h1>" . mysqli_error($conn));
                }
        }

?>