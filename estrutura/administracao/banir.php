<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banir</title>
    <?php include '../base/linksGlobais.php' ?>
    <style>
        body {
            text-align: center;
        }
    </style>
</head>

<body>
    <?php
    include './sessao.php';
    if ($_SESSION['logado'] == 0) {
        include './naoLogado.php';
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
    ?>
    <main>
        <section>
        <h1>Menu Administrativo Ecogamma</h1>
        <p>Tá, vamos supor que você é uma falha como administrador e não sabe nem o ID do usuário que gostaria de banir.<br><br><strong><a href="../listaUsuarios.php">Clicando aqui</a></strong> você será levado para um lugar muito legal onde serão listados todos os usuários detalhadamente.</p>
        </section>
        <h2>Banir Usuário</h2>
        <form action="./banirProcessa.php" class="container__formLogin__form" method="POST">
            <label for="text">ID do Usuário</label>
            <input type="text" placeholder="O id do usuário que deseja banir" maxlength="100" minlength="1" required id="id" name="id">
            <input type="submit" value="Banir" class="botao__principal">
        </form>
        <h2>Excluir comentários de um usuário</h2>
        <form action="./banirProcessa.php" class="container__formLogin__form" method="POST">
            <label for="text">ID do Usuário</label>
            <input type="text" placeholder="O id do usuário que deseja exlcuir os comentários" maxlength="100" minlength="1" required id="id2" name="id2">
            <input type="submit" value="Excluir" class="botao__principal">
        </form><br>
        <a href='../feed.php'>
            <div class='container'>
                <div class='container__logout'>
                    <button class='botao__principal'>
                        Feed
                    </button>
        </a>
        </div>
        </div>
        <main>
</body>

</html>