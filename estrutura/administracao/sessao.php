<?php
include 'conexao.php';
session_start();

    
    if (!isset($_SESSION['logado'])) {
        $_SESSION['logado'] = 0;
        // print_r($_SESSION);
    } else {
        if ($_SESSION['logado'] == 1) {
            //dados que serão preenchidos pelo script
            $id;
            $token;
            $nome;
            $sobrenome;
            $email;
            $senha;
            $senhaC;
            $dataN;
            $genero;
            $numero;
            $estado;
            $cidade;
            $profissao;
            $foto;
            $descricao;
            $amigos;
            $mdEscuro;
    
            $email = $_SESSION['email'];
            $sql = "SELECT id, token, nome, sobrenome, email, dataN, genero, numero, estado, cidade, profissao, mdEscuro,
            foto, descricao, amigos, FROM usuarios WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
    
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while ($row = mysqli_fetch_assoc($result)) {
                    // echo "id: " . $row["id"] . " - Token: " . $row["token"];
                    // echo "Nome: " . $row["nome"] . " - numero: " . $row["numero"];
                    // echo "foto: " . $row["foto"] . " - nascimento: " . $row["nascimento"];
                    // echo "profissao: " . $row["profissao"];
                    $id = $row["id"];
                    $token = $row["token"];
                    $nome = $row["nome"];
                    $sobrenome = $row["sobrenome"];
                    $email = $row["email"];
                    // $senha = $row["senha"]; vai dar erro
                    // $senhaC = $row["senhaC"]; vai dar erro
                    $dataN = $row["dataN"];
                    $genero = $row["genero"];
                    $numero = $row["numero"];
                    $estado = $row["estado"];
                    $cidade = $row["cidade"];
                    $foto = $row["foto"];
                    $profissao = $row["profissao"];
                    $mdEscuro = $row["mdEscuro"];
                    if (empty($foto)) {
                        $foto = 'perfil_default.svg';
                    }
                    $descricao = $row["descricao"];
                    if (empty($descricao)) {
                        $descricao = 'Eco é agro, Eco é tec, Eco é tudo!';
                    }
                    $amigos = $row["amigos"];
                }
            } else {
                echo "0 results";
            }
        };
    }

?>
<!--

    Resumo geral do que esse arquivo faz:
    O arquivo sessao.php irá verificar se o usuário está com a variavel de sessão: $_SESSION['logado'] ,
    e em seguida essearquivo irá verificar
    se o valor dela é 1 ou 0, 1 significa logado e 0 significa deslogado.


    Variaveis da session [Anotações - Leandro]

    $_SESSION['logado'] = 0/1 (0 é falso, 1 é verdadeiro) (true e false não funcionam)
    Os valores variam entre 1 ou 0, quando o usuário está logado em uma conta,
    o valor é true, caso contrário ele precisará fazer o login em uma conta para acessar
    algumas funções do site...
    
    $_SESSION['email'] = EmailDaConta
    O email da conta é definido após o usuário realizar um login
    e quando ele vai para logout.php o email é excluido para ele
    se logar novamente com outra conta ou a mesma...
 -->