<?php
$nomeServidor = "localhost";
$nomeUsuario = "root";
$senha = "";
$ecogamma_db = "ecogamma";

// Create connection
$conn = mysqli_connect($nomeServidor, $nomeUsuario, $senha, $ecogamma_db);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>