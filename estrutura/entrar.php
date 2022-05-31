<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar</title>
</head>

<body>
    <form action="">
        <label for="">Nome</label>
        <input type="text"></input><br>
        <label for="">Senha</label>
        <input type="text"></input><br><br>
        <input type="button" value="Entrar"></input>
    </form>
</body>
<?php
$conexao = @mysqli_connect ('localhost' , 'root' , 'usbw' , 'test');

if (!$conexao) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
</html>