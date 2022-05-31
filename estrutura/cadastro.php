<html>
<head>
<title>Cadastro</title>
<meta charset="utf-8">
</head>
<body>
<h1> Coloque suas Informações</h1>
<form method="post" action="informacoes.php" name="formulario">
<label for="nome">Nome:</label>
<p><input type="text" name="nome" id="nome"></p>
<label for="sen">Senha:</label>
<p><input type = "password" name="sen" id="sen"></p>
<label for="Email">E-mail:</label>
<p><input type="text" name="Email" id="Email"></p>
<label for="telefone">Telefone:</label>
<p><input type="text" name="telefone" id="telefone"></p>
<label for="datadenascimento">Data de Nascimento:</label>
<p><input type="text" name="datadenascimento" id="datadenascimento"></p>
<label for="areadeatuacao">Área de Atuação:</label>
<p><input type="text" name="areadeatuacao" id="areadeatuacao"></p>
<p><input type="submit" name="enviar" value="Confirmar"></p>
</form>
<hr/>
<article>


<?php
// $conexao = @mysqli_connect ('localhost' , 'root' , 'usbw' , 'test') or die ("problemas com a conexão do Banco de Dados");


// $squery = mysqli_query($conexao,"SELECT * FROM `cadastro` order by name") or die(" erro de instrução"); 

?> -->


</body>
</html>