<?php

include "connect.php";

session_start();

$email = $_POST['email'];
$senha = $_POST['pass'];

$stmt = $connect-> prepare("SELECT * FROM aula WHERE email = :email AND senha = :pass");

$stmt->bindParam(":email",$email);
$stmt->bindParam(":pass", $senha);

$stmt->execute();

if($stmt->rowCount()==1){
	$_SESSION['logado'] = true;
	header("Location:logadoOK.php");
}else{
	header("Location:index.php");
}

?>