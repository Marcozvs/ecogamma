<?php
session_start();
print_r($_SESSION); // exibe o conteúdo da sua sessão em todas as páginas com include sessao.php, comentar quando formos apresentar
?>

<!--
    Variaveis da session [Anotações - Leandro]

    $_SESSION['logado'] = True/False
    Os valores variam entre true ou false, quando o usuário está logado em uma conta,
    o valor é true, caso contrário ele precisará fazer o login em uma conta para acessar
    algumas funções do site...
    
    $_SESSION['email'] = EmailDaConta
    O email da conta é definido após o usuário realizar um login
    e quando ele vai para logout.php o email é excluido para ele
    se logar novamente com outra conta ou a mesma...
 -->