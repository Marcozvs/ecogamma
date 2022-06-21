<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../manipulacao/sweetalert.js"></script>
    <?php include './base/linksGlobais.php' ?>
</head>

<body>
    <div class="fundo--alternativo">
        <video autoplay="autoplay" loop="true" muted>
            <source src="../videos/fundo.mp4" type="video/mp4">
        </video>
    </div>
    <?php
    include_once './administracao/sessao.php';
    include './administracao/conexao.php';
    if ($_SESSION['logado'] == 1) {
            include 'jaLogado.php';
            die();
        };

    if (empty($_POST['email']) || empty($_POST['senha'])) {
        header('Location: login.php');
        exit();
    }

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $senha = mysqli_real_escape_string($conn, $_POST['senha']);

    $query = "SELECT id, nome from usuarios where email = '$email' and senha = '$senha'";

    $resultado = mysqli_query($conn, $query);

    $row = mysqli_num_rows($resultado);

    if ($row == 1) {
        echo "
        <main>
            <script>
                Swal.fire({
                icon: 'success',
                title: 'Logado!',
                showConfirmButton: false,
                timer: 1500
                })
            </script>
            <div class='container'>
                <div class='container__logout'><h2>A mudança acontece com pequenas atitudes</h2>
                    <a href='feed.php'>
                        <button class='botao__principal'>
                            Iniciar
                        </button>
                    </a>
                </div>
            </div>
        </main>";
        $_SESSION['logado'] = 1;
        $_SESSION['email'] = $email;
        // print_r($_SESSION);
        include_once './administracao/sessao.php';
        exit();
    } else {
        header('Location: login.php?msg=falha'); //Retorna um valor get para ser utilizado no alerta de senha e email errados
        exit();
    }
    ?>
</body>

</html>