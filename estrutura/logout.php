<?php
include_once './administracao/sessao.php';
$_SESSION['logado'] = false;
// echo "Você deslogou com sucesso!"
header('Location: login.php')
?>