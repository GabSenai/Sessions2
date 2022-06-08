<?php

include_once('connect.php');

$nome = $_POST['username'];
$email = $_POST['email'];
$senha = $_POST['password'];


$stmt = $connect->prepare("INSERT INTO aula(nome,email,senha) VALUES(:NOME,:EMAIL,:SENHA)");

$stmt->bindParam(':NOME', $nome);
$stmt->bindParam(':EMAIL',$email);
$stmt->bindParam(':SENHA',$senha);
$stmt->execute();
	echo "<br> Cadastrado";

?>