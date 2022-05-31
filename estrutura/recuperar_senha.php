<html>
  <?php
  date_default_timezone_set("America/Sao_Paulo");
  ini_set('')
 mysql_connect('localhost','root','');
 mysql_select_db('test');
  ?>
  <head>
    <title> Recuperar Senha  </title>
</head>

<body>
<?php
 if(isset($_POST['acao']) && $_GET['acao'] == 'recuperar'){
 $email = strip_tags(filter_input(INPUT_POST,'emailRecupera',FILTER_SANITIZE_STRING));

 $verificar = mysql_query("SELECT  `email` FROM `cadastro` WHERE email = $email ")
  if (mysql_num_rows($verificar) == 1) {
    $codigo = base64_encode($email);
    $data_expirar = date('Y-m-d H:i:s',strtotime('+1 day'));
  


  $mensagem = '<p> Recebemos uma tentativa de recuperação de senha para
  este email,caso não for você desconsidere este e-mail,caso contrário clique no link abaixo<br>/>
  <a href= "https://mail.google.com/mail/u/0/#inbox"
  '

  

   $headers = "MIME-Version:1.1\n";
   $headers = "Content-type: text/plain;charset=iso-8859-1\n";
   $headers = "From:$email_remetente\n";
   $headers = "Return-Path:$email_remetente\n";
   $headers = "Reply-To:$email_usuario\n";

   if (mail("$email_usuario","Assunto","$mensagem",$headers,"-f$email_remetente")){
     echo 'Enviamos um e-mail com um link para recuperação de senha,para o endereço de '
   }
?>

<form action = "" method = "post" enctype = "multipart/form-data">
  <?php
  if(isset($_GET['recuperar']) && $_GET['recuperar'] == 'sim'){

  
  ?>
  <input type = "text" name = "emailRecupera" value = ""/>
  <input type = "hidden" name = "acao" value = "recuperar"/>
  <input type = "submit"  value = "Recuperar Senha"/>
  <a href = "index.php">Logar</a>

  



  }
</body>

</html>