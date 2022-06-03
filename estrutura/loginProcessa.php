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
    include './administracao/conexao.php';
    include_once './administracao/sessao.php';

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $query = "SELECT id, nome from usuario where email = '$email' and senha = '$senha'";
    
    $resultado = mysqli_query($conn, $query);
    
    $row = mysqli_num_rows($resultado);
    
    if ($row == 1) {
        echo "comparei e deu certo" . $row; // LINHA PARA TESTAR EM CASO DE ACERTO NO LOGIN
        $_SESSION['email'] = $email;
        $_SESSION['logado'] = true;
        header('Location: index.php');
        $logado = true; //   INICIA A SESSÃO DO USUÁRIO
        exit();
    } else {
        echo "comparei e deu ERRADO"; // LINHA PARA TESTAR EM CASO DE FALHA NO LOGIN
        $_SESSION['logado'] = false;
        header('Location: login.php');
        exit();
    }
    ?>
</body>

</html>