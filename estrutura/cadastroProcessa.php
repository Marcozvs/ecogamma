<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processando</title>
    <?php include './base/linksGlobais.php' ?>
</head>

<body>
    <?php
    include './administracao/conexao.php';
    include './administracao/sessao.php';
    if ($_SESSION['logado'] == 1) {
        // print_r($_SESSION);
        echo "Parece que você já tem uma conta e está logado nela...";
        echo "<br><a href='./comunidade.php'>Voltar à tela inicial</a>";
        die();
        exit();
    };
    //pega os dados do formulário e coloca em variáveis
    $id;
    $token; //por padrão é 0
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $senhaC = $_POST['senhaC'];
    $dataN = $_POST['dataN'];
    $genero = $_POST['genero'];
    $numero = $_POST['numero'];
    $pais = $_POST['pais'];
    $estado = $_POST['estado'];
    $cidade = $_POST['cidade'];
    $profissao = $_POST['profissao'];

    //verifica de já existe um email igual ao colocado no formulário
    $query = "SELECT id, nome from usuarios where email = '$email'";

    $resultado = mysqli_query($conn, $query);

    $row = mysqli_num_rows($resultado);

    //se não existir e os dados estiverem colocados corretamente, ele criará a conta
    if ($row == 0) {
        if ($senha == $senhaC) {
            # code...

            $sql = "INSERT INTO usuarios (nome, sobrenome, email, senha, senhaC, dataN, genero, numero, pais, estado, cidade, profissao, foto, descricao) VALUES ('$nome', '$sobrenome', '$email', '$senha', '$senhaC', '$dataN', '$genero', '$numero', '$pais', '$estado', '$cidade', '$profissao', '', '')";

                if (mysqli_query($conn, $sql)) {
                    echo "
                        <main>
                            <div class='container'>
                                <div class='container__logout'><h1>Cadastrado com sucesso!</h1>
                                    <a href='login.php'>
                                        <button class='botao__principal'>
                                            Login
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </main>";
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
        } else {
            header('Location: cadastro.php?msg=senha');
        }
    } else {
        header('Location: cadastro.php?msg=email');
    }
    ?>

</body>

</html>