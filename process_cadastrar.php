<?php
include("conecta.php");

$nome = $_POST["nome"];
$email = $_POST["email"];
$login = $_POST["login"];
$senha = $_POST["senha"];



if(!isset($_SESSION)) {
	session_start();
	
	if(isset($_SESSION["id_usuarios"])){
		$id = $_SESSION["id_usuarios"];
		$location = "Location:logado.php";
		$sql = "UPDATE `usuarios` SET `nome`='$nome', `email`='$email', `senha`='$senha' WHERE `id`=$id";
		header($location);
	}
	else{
		$login = $_POST["login"];
		$location = "Location:index.php";
		$sql = "INSERT INTO usuarios (`id`, `nome`, `email`, `login`, `senha`) VALUES (NULL, '$nome', '$email', '$login', '$senha')";
		header($location);
	}
}

try {	
	$conn->exec($sql);		
} catch(PDOException $e) {
	/*echo $sql . "<br>" . $e->getMessage();*/
	header("Location:cadastroerro.php");
}

$conn = null;
?>