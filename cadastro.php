<?php
include("conecta.php");

if(!isset($_SESSION)) session_start();

if(isset($_SESSION["id_usuario"])){

	$aux = "disabled";

	$id = $_SESSION["id_usuario"];

	try {
	
		$sql = "SELECT * FROM `usuarios`WHERE `id` = '$id'";
		
		$res = $conn->query($sql)->fetchAll();

		if(count($res) > 0) {
	        foreach ($res as $row) {
	            $nome = $row['nome'];
	            $email = $row['email'];
	            $login = $row['login'];
	            $senha = $row['senha'];
	        }
	       
    	}	
	} catch(PDOException $e) {
		echo $sql . "<br>" . $e->getMessage();
	}
	$conn = null;

	echo ("<p><a href='excluir.php?id=$id'>Excluir a conta</a>");
}
else{
	$nome = "";
	$email = "";
	$login = "";
	$senha = "";
	$aux = "";
}
?>



<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href=".//bootstrap-4.6.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/css.css">

    <title>cadastro</title>
  </head>
  <body>
    <div class="card" id="telalogin">
        <!--<img src="..." class="card-img-top" alt="...">-->
        <div class="card-body">
            <form action="process_cadastrar.php" method="post">
            <div class="form-group">
                  <label for="exampleInputEmail1">Nome Completo</label>
                  <input type="text" name="nome" class="form-control" id="nome" aria-describedby="emailHelp" value="<?= $nome ?>">
            </div>
            <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" value="<?= $email ?>">
            </div>
            <div class="form-group">
                  <label for="exampleInputEmail1">Login</label>
                  <input type="text" name="login" class="form-control" id="login" aria-describedby="emailHelp" value="<?= $login ?>">
            </div>    
            <div class="form-group">
                  <label for="exampleInputEmail1">Senha</label>
                  <input type="password" name="senha" class="form-control" id="senha" aria-describedby="emailHelp" value="<?= $senha ?>">
            </div>
            <div class="form-group">
                  <label for="exampleInputEmail1">Confirme a senha</label>
                  <input type="password" name="senha2" class="form-control" id="senha2" aria-describedby="emailHelp" value="<?= $senha ?>">
            </div>            
            <input type = "submit" class="btn btn-success btn-lg btn-block" value="Cadastrar">
            <br>
            <a href="index.php"><button type="button" class="btn btn-danger btn-lg btn-block">cancelar</button></a>
                
              </form>
        </div>
      </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>