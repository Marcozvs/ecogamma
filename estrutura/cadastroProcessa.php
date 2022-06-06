<<<<<<< Updated upstream
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

    $id;
    $token;
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

    $sql = "INSERT INTO usuarios (nome, sobrenome, email, senha, senhaC, dataN, genero, numero, pais, estado, cidade, profissao, foto, descricao) VALUES ('$nome', '$sobrenome', '$email', '$senha', '$senhaC', '$dataN', '$genero', '$numero', '$pais', '$estado', '$cidade', '$profissao', '', '')";

    if (mysqli_query($conn, $sql)) {
    echo "Registrado com sucesso!<br><a href='login.php'>Fazer Login</a>";
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

=======
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

    $id;
    $token;
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

    $sql = "INSERT INTO usuarios (nome, sobrenome, email, senha, senhaC, dataN, genero, numero, pais, estado, cidade, profissao, foto, descricao) VALUES ('$nome', '$sobrenome', '$email', '$senha', '$senhaC', '$dataN', '$genero', '$numero', '$pais', '$estado', '$cidade', '$profissao', '', '')";

    if (mysqli_query($conn, $sql)) {
    echo "Registrado com sucesso!<br><a href='login.php'>Fazer Login</a>";
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

>>>>>>> Stashed changes
?>