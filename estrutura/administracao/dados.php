<?php
include './conexao.php';
include './sessao.php';
include './estrutura/loginProcessa.php';

$id;
$token;
$nome;
$email;
$numero;
$foto;
$nascimento;
$profissao;

if ($_SESSION['logado'] = True) {
    $sql = "SELECT id, token, nome, email, numero, foto, nascimento, profissao FROM usuario where email = '$email' and senha = '$senha'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Token: " . $row["token"]. " Nome: " . $row["nome"]. " Email: "
        . $row["email"]. " - Número: " . $row["numero"]. " Foto: " . $row["foto"]. " Data de Nascimento: "
        . $row["nascimento"]. " Profissão: " . $row["profissao"]. "<br>";
      }
    } else {
      echo "0 results";
    }
} else {
    die();
}

?>