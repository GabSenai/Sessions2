<?php

include "connect.php";

session_start();

if($_SESSION['logado']!=true){
	header('Location:index.php');
	die();
}
if(isset($_GET['sair'])){
	session_destroy();
	
	header('Location:index.php');

	die();
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Logado</h1>
	<p><a href="?sair">Deslogar</a></p>
</body>
</html>