<?php

if(isset($_POST['nome']) and !empty($_POST['nome'])) { #verificando se existe e se não ta vazio

$nome = $_POST['nome']; $email = $_POST['email']; $senha = $_POST['senha']; #pegando dado dos usuarios


$host = 'localhost';
$user = 'root';
$pass = '';
$bd = 'escola';

$conn = new mysqli($host, $user, $pass, $bd);

$sql = "insert into usuarios values (null, '$nome', '$email', '$senha')";

$exec = $conn -> query($sql);

header('location: index.php');

}


?>

<form action="" method="post">


    <label for="">Nome</label><br>
    <input type="text" name="nome" required><br>
    <label for="">E-mail</label><br>
    <input type="email" name="email" required><br>
    <label for="">Senha</label><br>
    <input type="password" name="senha" required><br>
    <input type="submit">


</form>