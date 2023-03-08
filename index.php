<a href="novo.php">Novo Registro </br></a>

<?php

$host = 'localhost'; #onde esta o banco
$user = 'root'; #usuario
$pass = ''; #senha
$bd = 'escola'; #minha database

$conn = new mysqli($host, $user, $pass, $bd); #conectando com o banco

$sql = "select * from usuarios"; #comando sql como str

$exec = $conn->query($sql); #executando uma consulta sql

while ($linhas = $exec->fetch_object()) { #pedindo para extrair dados em formato de obejto armazenando em linhas
  echo"$linhas->nome $linhas->email <br>";
  

}
















?>