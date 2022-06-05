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
        include_once './administracao/sessao.php';
        include './administracao/conexao.php';
        if ($_SESSION['logado'] == 1) {
            // header('Location: index.php');
            echo "logado";
            die();
        };
        
        if(empty($_POST['email']) || empty($_POST['senha'])) {
            // header('Location: login.php');
            exit();
        } 
        
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $senha = mysqli_real_escape_string($conn, $_POST['senha']);
    
        $query = "SELECT id, nome from usuarios where email = '$email' and senha = '$senha'";
        
        $resultado = mysqli_query($conn, $query);
        
        $row = mysqli_num_rows($resultado);
        
        if ($row == 1) {
            echo "Logado com sucesso!"; // LINHA PARA TESTAR EM CASO DE ACERTO NO LOGIN (DESATIVAR O HEADER ABAIXO)
        $_SESSION['logado'] = 1;
        $_SESSION['email'] = $email;
        // print_r($_SESSION);
        include_once './administracao/sessao.php';
        // header('Location: index.php');
        exit();
    } else {
        echo "comparei e deu ERRADO"; // LINHA PARA TESTAR EM CASO DE FALHA NO LOGIN (DESATIVAR O HEADER ABAIXO)
        header('Location: login.php');
        exit();
    }
    ?>
</body>

</html>